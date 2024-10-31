@extends('layouts.admin')
@section('content')
<form action="{{route('admin.roles.update', $role)}}" method="POST">
    @csrf @method('PUT')
    <div class="form-group mb-3">
      <label for="name">Изменить роль</label>
      <input type="text" class="form-control" id="name" name="name" value="{{old('name', $role->name)}}">
      @error('name')
        <small class="text-danger">{{$message}}</small>
      @enderror
    </div>

    @if($permissions->count())
    <div class="form-group mt-3 mb-3">
        <p>Теги</p>
        <div class="d-flex">
            @foreach($permissions as $permission)
            <div class="form-check mb-3 mx-2">
              <input class="form-check-input " type="checkbox" name="permissions[]" value="{{$permission->name}}" id="{{'permission-'.$permission->id}}"  @if($role->hasPermissionTo($permission->name)) checked @endif>
                  <label class="form-check-label mb-2" for="{{'permission-'. $permission->id}}">
                    {{$permission->name}}
                  </label>
            </div>
            @endforeach
        </div>
    </div>
    @endif

    <button class="btn btn-success">Submit</button>
  </form>

@endsection
