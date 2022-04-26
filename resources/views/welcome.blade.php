@extends("layouts.app")

@section('content')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="aspect-ratio: 16 / 6; width: 100%; object-fit: cover" class="d-block w-100"
                        src="images/konditerskaya/slider1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img style="aspect-ratio: 16 / 6; width: 100%; object-fit: cover" class="d-block w-100"
                        src="images/konditerskaya/slider2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img style="aspect-ratio: 16 / 6; width: 100%; object-fit: cover" class="d-block w-100"
                        src="images/konditerskaya/slider3.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading" style="border-bottom: 0">
                        <h2>Жаңа тауарлар</h2>
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="row">
                        @foreach ($latestProducts as $product)
                            <div class="col-md-4 mb-2">
                                <div class="card" style="width: 100%;">
                                    <img class="card-img-top" src="{{ $product->image }}"
                                        style="width: 100%; aspect-ratio: 9 / 6; object-fit:cover" alt="Card image cap">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">{{ $product->name }}</h5>
                                        <p class="card-title">{{ $product->price }} &#8376; / Дана</p>
                                        @if (auth()->user() && $product->favourited(auth()->user()->id, $product->id))
                                            <form action="{{ route('addtocard', $product) }}" method="POST">
                                                @csrf
                                                <button class="btn btn-success w-100">
                                                    Сатып алу
                                                </button>
                                            </form>
                                        @else
                                            <form action="{{ route('addtocard', $product) }}" method="POST">
                                                @csrf
                                                <button class="btn btn-custom-outline w-100">
                                                    Сатып алу
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="section-heading my-4" style="border-bottom: 0">
                        <h2>Торттар</h2>
                    </div>
                    <div class="row">
                        @foreach ($cakes as $product)
                            <div class="col-md-4 mb-2">
                                <div class="card" style="width: 100%;">
                                    <img class="card-img-top" src="{{ $product->image }}"
                                        style="width: 100%; aspect-ratio: 9 / 6; object-fit:cover" alt="Card image cap">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">{{ $product->name }}</h5>
                                        <p class="card-title">{{ $product->price }} &#8376; / Дана</p>
                                        @if (auth()->user() && $product->favourited(auth()->user()->id, $product->id))
                                            <form action="{{ route('addtocard', $product) }}" method="POST">
                                                @csrf
                                                <button class="btn btn-success w-100">
                                                    Сатып алу
                                                </button>
                                            </form>
                                        @else
                                            <form action="{{ route('addtocard', $product) }}" method="POST">
                                                @csrf
                                                <button class="btn btn-custom-outline w-100">
                                                    Сатып алу
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="section-heading my-4" style="border-bottom: 0">
                        <h2>Бәліштер</h2>
                        <div class="row">
                            @foreach ($pies as $product)
                                <div class="col-md-4 mb-2">
                                    <div class="card" style="width: 100%;">
                                        <img class="card-img-top" src="{{ $product->image }}"
                                            style="width: 100%; aspect-ratio: 9 / 6; object-fit:cover" alt="Card image cap">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">{{ $product->name }}</h5>
                                            <p class="card-title">{{ $product->price }} &#8376; / Дана</p>
                                            @if (auth()->user() && $product->favourited(auth()->user()->id, $product->id))
                                                <form action="{{ route('addtocard', $product) }}" method="POST">
                                                    @csrf
                                                    <button class="btn btn-success w-100">
                                                        Сатып алу
                                                    </button>
                                                </form>
                                            @else
                                                <form action="{{ route('addtocard', $product) }}" method="POST">
                                                    @csrf
                                                    <button class="btn btn-custom-outline w-100">
                                                        Сатып алу
                                                    </button>
                                                </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="section-heading my-4" style="border-bottom: 0">
                        <h2>Печенье</h2>
                        <div class="row">
                            @foreach ($cookies as $product)
                                <div class="col-md-4 mb-2">
                                    <div class="card" style="width: 100%;">
                                        <img class="card-img-top" src="{{ $product->image }}"
                                            style="width: 100%; aspect-ratio: 9 / 6; object-fit:cover" alt="Card image cap">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">{{ $product->name }}</h5>
                                            <p class="card-title">{{ $product->price }} &#8376; / Дана</p>
                                            @if (auth()->user() && $product->favourited(auth()->user()->id, $product->id))
                                                <form action="{{ route('addtocard', $product) }}" method="POST">
                                                    @csrf
                                                    <button class="btn btn-success w-100">
                                                        Сатып алу
                                                    </button>
                                                </form>
                                            @else
                                                <form action="{{ route('addtocard', $product) }}" method="POST">
                                                    @csrf
                                                    <button class="btn btn-custom-outline w-100">
                                                        Сатып алу
                                                    </button>
                                                </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="card" style="width: 100%;">
                        <div class="card-header">
                            <h3>Себет <span
                                    class="badge badge-light">{{ auth()->user() ? count(auth()->user()->favourites) : 0 }}</span>
                            </h3>
                        </div>
                        <?php $price = 0; ?>
                        @if (auth()->user())
                            @foreach (auth()->user()->favourites as $favourite)
                                <div class="card-body text-center">
                                    <div class="d-flex align-items-center">
                                        <img class="mr-2 rounded" src="{{ $favourite->product->image }}"
                                            style="height: 48px; aspect-ratio: 9 / 6; object-fit:cover"
                                            alt="Card image cap">
                                        <h5 class="card-title m-0 mr-2 text-left" style="flex: 1">
                                            {{ $favourite->product->name }}</h5>
                                        <form action="{{ route('addtocard', $favourite->product) }}" method="POST">
                                            @csrf
                                            <input name="id" type="hidden" value="{{ $favourite->id }}">
                                            <button class="btn btn-transparent"><i
                                                    class="card-title m-0 fa fa-trash"></i></button>
                                        </form>
                                    </div>
                                    <div class="d-flex justify-content-end mt-2">
                                        <p class="card-title">{{ $favourite->product->price }} &#8376; </p>
                                    </div>
                                    <?php $price += $favourite->product->price; ?>
                                </div>
                            @endforeach
                        @endif
                        <div class="card-body text-center border-top">
                            <p class="card-title d-flex justify-content-between m-0">Бағасы: <span>{{ $price }}
                                    &#8376;</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
