@extends('layouts.admin')
@section('content')
    <h1>Категории</h1>
    @if ($categories->count())

    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">категория</th>
            <th scope="col">Действие</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($categories as $cat)
            <tr>
                <th scope="col">{{$cat->id}}</th>
                <th scope="col">{{$cat->name}}</th>
                <th scope="col" class="d-flex">
                    <a href="{{route('categories.edit', $cat)}}"><button type="button" class="btn btn-sm btn-warning">Изменить</button></a>
                    <form action="{{route('categories.destroy', $cat)}}" method="POST" class="mx-2">
                        @csrf  @method('DELETE')
                        <button  class="btn btn-sm btn-danger btn-remove">Удалить</button>
                    </form>
                </th>
              </tr>
            @endforeach
        </tbody>
      </table>
      @else
      <table class="table table-dark table-striped">
        <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">категория</th>
              <th scope="col">Действие</th>
            </tr>
          </thead>
        <tbody>
            <tr>
                <th scope="col">пока нет ни одной категории</th>
                <th></th>
                <th scope="col">
                    <a href="{{route('categories.create')}}"><button type="button" class="btn btn-sm btn-success">Добавить</button></a>
                </th>
              </tr>
        </tbody>
      </table>
      @endif
@endsection

@section('scripts')
@include('layouts.admin-templates.remove-item-script')
@endsection
