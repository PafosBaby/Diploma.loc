@extends('layouts.admin')
@section('content')
<form action="{{route('admin.permissions.store')}}" method="POST">
    @csrf
    <div class="form-group mb-3">
      <label for="name">новое правило</label>
      <input type="text" class="form-control" id="name" name="name">
      @error('name')
        <small class="text-danger">{{$message}}</small>
      @enderror
    </div>
    <button class="btn btn-success">Submit</button>
  </form>

@endsection