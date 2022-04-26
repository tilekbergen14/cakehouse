@extends('layouts.admin')
@section('content')
    <div class="container-fluid my-4">
        <form method="post" enctype="multipart/form-data" action="{{ route('createproduct') }}">
            @csrf
            <input type="hidden" name="id" value="{{ $product ? $product->id : null }}">

            @error('name')
                <p class="text-start text-danger w-100 m-0" style="font-size: 14px">{{ $message }}</p>
            @enderror
            <div class="form-floating">
                <input type="text" class="form-control @error('name') border border-danger @enderror mb-2" placeholder="Аты"
                    name="name" value={{ old('name') }}>
            </div>
            @error('description')
                <p class="text-start text-danger w-100 m-0" style="font-size: 14px">{{ $message }}</p>
            @enderror
            <div class="form-floating">
                <input type="text" class="form-control @error('description') border border-danger @enderror mb-2"
                    placeholder="Сипаттама" name="description" value={{ old('description') }}>
            </div>
            @error('category')
                <p class="text-start text-danger w-100 m-0" style="font-size: 14px">{{ $message }}</p>
            @enderror
            <div class="input-group mb-2">
                <select class="custom-select" name="category" id="inputGroupSelect01">
                    <option value="Торттар">Торттар</option>
                    <option value="Бәліштер">Бәліштер</option>
                    <option value="Печенье">Печенье</option>
                    <option value="Тәттілер">Тәттілер</option>
                </select>
            </div>
            @error('price')
                <p class="text-start text-danger w-100 m-0" style="font-size: 14px">{{ $message }}</p>
            @enderror
            <div class="form-floating">
                <input type="text" class="form-control @error('price') border border-danger @enderror mb-2"
                    placeholder="Бағасы" name="price" value={{ old('price') }}>
            </div>
            @error('weight')
                <p class="text-start text-danger w-100 m-0" style="font-size: 14px">{{ $message }}</p>
            @enderror
            <div class="form-floating">
                <input type="text" class="form-control @error('weight') border border-danger @enderror mb-2"
                    placeholder="Салмағы" name="weight" value={{ old('weight') }}>
            </div>

            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="input-group mb-3">
                @if ($product && $product->image)
                    <input type="hidden" value="{{ $product->image }}" name="existedImage">
                    <img src="{{ $product->image }}" class="uploaded-img mb-4">
                @endif
                <div class="form-floating">
                    <input type="file" class="form-control @error('image') border border-danger @enderror mb-2"
                        placeholder="Сурет" name="image" value={{ old('image') }}>
                </div>
            </div>

            <button type="submit"
                class="btn btn-info w-100">{{ $product ? 'Өзгерісті сақтау' : 'Жаңадан қосу' }}</button>
        </form>
    </div>
@endsection
