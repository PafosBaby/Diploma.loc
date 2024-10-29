@extends('layouts.admin')
@section('content')
    <h1>Права</h1>
    @if ($permissions->count())

    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">Право</th>
            <th scope="col">Действие</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($permissions as $perm)
            <tr>
                <th scope="col">{{$perm->name}}</th>
                <th scope="col" class="d-flex">
                    ...
                    {{-- <a href=""><button type="button" class="btn btn-sm btn-warning">Изменить</button></a>
                    <form action="" method="POST" class="mx-2">
                        @csrf  @method('DELETE')
                        <button  class="btn btn-sm btn-danger btn-remove">Удалить</button>
                    </form> --}}
                </th>
              </tr>
            @endforeach
        </tbody>
      </table>
      @else
               <h4> пока нет ни одного правила</h4>
      @endif
@endsection

@section('scripts')
@include('layouts.admin-templates.remove-item-script')
@endsection
