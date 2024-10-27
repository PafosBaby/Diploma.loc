@extends('layouts.admin')
@section('content')
<form action="{{route('tags.update', $tag)}}" method="POST">
    @csrf @method('PUT')
    <div class="form-group mb-3">
      <label for="name">{{'Редактирование категории ' . $tag->name}}</label>
      <input type="text" class="form-control" id="name" name="name" value="{{$tag->name}}">
      @error('name')
        <small class="text-danger">{{$message}}</small>
      @enderror
    </div>
    <button class="btn btn-success">Изменить</button>
  </form>

@endsection
