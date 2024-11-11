@extends('layouts.admin')
@section('content')
<form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-3">
        <label for="name">Категория</label>
        <select name="category_id" id="category_id" class="form-select">
            @foreach ($categories as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
        </select>
        @error('category_id')
        <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="name">Новый товар</label>
        <input type="text" class="form-control" id="name" name="name"  value="{{old('name')}}">
        @error('name')
        <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="description">Описание</label>
        <textarea class="form-control" id="description" name="description" >{{old('description')}}</textarea>
        @error('description')
        <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="price">Цена</label>
        <input type="text" class="form-control" id="price" name="price"  value="{{old('price')}}">
        @error('price')
        <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="image">Фото</label>
        <input type="file" class="form-control" id="image" name="image">
    </div>

    <button class="btn btn-success">Submit</button>
  </form>
@endsection

