@extends('layouts.admin')
@section('content')
<form action="{{route('categories.update', $category)}}" method="POST">
    @csrf @method('PUT')
    <div class="form-group mb-3">
      <label for="name">{{'Редактирование категории ' . $category->name}}</label>
      <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}">
      @error('name')
        <small class="text-danger">{{$message}}</small>
      @enderror
    </div>
    <button class="btn btn-success">Изменить</button>
  </form>

@endsection
