@extends("layouts.app")

@section('content')
    <div class="container" style="padding-top: 100px">
        <div class="card m-auto" style="width: 100%; max-width: 600px">
            <div class="card-header">
                <h3>Себет <span class="badge badge-light">{{ count(auth()->user()->favourites) }}</span></h3>
            </div>
            <?php $price = 0; ?>
            @foreach (auth()->user()->favourites as $favourite)
                <div class="card-body text-center">
                    <div class="d-flex align-items-center">
                        <img class="mr-2 rounded" src="{{ $favourite->product->image }}"
                            style="height: 48px; aspect-ratio: 9 / 6; object-fit:cover" alt="Card image cap">
                        <h5 class="card-title m-0 mr-2 text-left" style="flex: 1">
                            {{ $favourite->product->name }}</h5>
                        <form action="{{ route('addtocard', $favourite->product) }}" method="POST">
                            @csrf
                            <input name="id" type="hidden" value="{{ $favourite->id }}">
                            <button class="btn btn-transparent"><i class="card-title m-0 fa fa-trash"></i></button>
                        </form>
                    </div>
                    <div class="d-flex justify-content-end mt-2">
                        <p class="card-title">{{ $favourite->product->price }} &#8376; </p>
                    </div>
                    <?php $price += $favourite->product->price; ?>
                </div>
            @endforeach
            <div class="card-body text-center border-top">
                <p class="card-title d-flex justify-content-between m-0">Бағасы: <span>{{ $price }}
                        &#8376;</span>
                </p>
            </div>
            <div class="card-body text-center border-top">
                <button class="btn btn-success w-100">Сатып алу</button>
            </div>
        </div>
    </div>
@endsection
