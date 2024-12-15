@extends('layouts.admin')
@section('content')
    <h1>Покупатели</h1>
    @if ($orders->count())

    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Имя</th>
            <th scope="col">Фамилия</th>
            <th scope="col">Телефон</th>
            <th scope="col">Товар</th>
            <th scope="col">Сумма заказа</th>
            <th scope="col">Дата</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($categories as $cat)
            <tr>
                <th scope="col">{{$cat->id}}</th>
                <th scope="col">{{$cat->name}}</th>
                <th scope="col" class="d-flex">
                    {{-- @can('edit categories')
                        <a href="{{route('categories.edit', $cat)}}"><button type="button" class="btn btn-sm btn-warning">Изменить</button></a>
                    @endcan
                    @can('delete categories')
                    <form action="{{route('categories.destroy', $cat)}}" method="POST" class="mx-2">
                        @csrf  @method('DELETE')
                        <button  class="btn btn-sm btn-danger btn-remove">Удалить</button>
                    </form>
                    @endcan --}}
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
                <th scope="col">пока нет продаж</th>
              </tr>
        </tbody>
      </table>
      @endif
@endsection
