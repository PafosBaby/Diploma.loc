@extends('layouts.admin')
@section('content')
<form action="{{route('admin.users.update', $user)}}" method="POST">
    @csrf @method('PUT')
    <div class="form-group mb-3">
      <label for="name">Имя</label>
      <input type="text" class="form-control" id="name" name="name" value="{{old('name', $user->name)}}">
      @error('name')
        <small class="text-danger">{{$message}}</small>
      @enderror
    </div>

    <div class="form-group mb-3">
        <label for="name">email</label>
        <input type="text" class="form-control" id="email" name="email" value="{{old('email', $user->email)}}">
        @error('email')
          <small class="text-danger">{{$message}}</small>
        @enderror
      </div>
    <button class="btn btn-success">Submit</button>

    <div class="form-group mt-3 mb-3">
        @if($roles->count())
        <h4>Роли</h4>
        <div class="d-flex">
            @foreach($roles as $role)
            <div class="form-check mb-3 mx-2"@if ($user->id == auth()->user()->id && $user->hasRole('admin') && $role->name == 'admin') style="display: none" @endif>
              <input class="form-check-input " type="checkbox" name="roles[]" value="{{$role->name}}" id="{{'role-'.$role->id}}"  @if($user->hasRole($role->name)) checked @endif>
                  <label class="form-check-label mb-2" for="{{'role-'. $role->id}}">
                    {{$role->name}}
                  </label>
            </div>
            @endforeach
        </div>
        @endif
        @if($permissions->count())
        <h4>Права</h4>
        <div class="d-flex">
            @foreach($permissions as $permission)
            <div class="form-check mb-3 mx-2">
              <input class="form-check-input " type="checkbox" name="permissions[]" value="{{$permission->name}}" id="{{'permission-'.$permission->id}}"  @if($user->hasPermissionTo($permission->name)) checked @endif>
                  <label class="form-check-label mb-2" for="{{'permission-'. $permission->id}}">
                    {{$permission->name}}
                  </label>
            </div>
            @endforeach
        </div>
        @endif
    </div>

  </form>

@endsection
