@extends('layouts.admin')
@section('content')
    <h1>Все пользователи</h1>
    @if ($users->count())

    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">имя</th>
            <th scope="col">email</th>
            <th scope="col">роль</th>
            <th scope="col">права</th>
            <th scope="col">Действие</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="col">{{$user->name}}</th>
                <th scope="col">{{$user->email}}</th>
                <th scope="col">
                        {{$user->getRoles()}}
                </th>
                <th scope="col">...</th>
                <th scope="col" class="d-flex">
                    <a href="{{route('admin.users.edit', $user)}}"><button type="button" class="btn btn-sm btn-warning">Изменить</button></a>
                    {{-- <form action="" method="POST" class="mx-2">
                        @csrf  @method('DELETE')
                        <button  class="btn btn-sm btn-danger btn-remove">Удалить</button>
                    </form> --}}
                </th>
              </tr>
            @endforeach
        </tbody>
      </table>
      @else
               <h4> пока нет ни одного пользователя</h4>
      @endif
@endsection

@section('scripts')
@include('layouts.admin-templates.remove-item-script')
@endsection
