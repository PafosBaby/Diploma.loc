@extends('layouts.admin')
@section('content')
    <h1>теги</h1>
    @if ($tags->count())

    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">тег</th>
            <th scope="col">Действие</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($tags as $tag)
            <tr>
                <th scope="col">{{$tag->id}}</th>
                <th scope="col">{{$tag->name}}</th>
                <th scope="col" class="d-flex">
                    <a href="{{route('tags.edit', $tag)}}"><button type="button" class="btn btn-sm btn-warning">Изменить</button></a>
                    <form action="{{route('tags.destroy', $tag)}}" method="POST" class="mx-2">
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
              <th scope="col">тег</th>
              <th scope="col">Действие</th>
            </tr>
          </thead>
        <tbody>
            <tr>
                <th scope="col">пока нет ни одного тега</th>
                <th></th>
                <th scope="col">
                    <a href="{{route('tags.create')}}"><button type="button" class="btn btn-sm btn-success">Добавить</button></a>
                </th>
              </tr>
        </tbody>
      </table>
      @endif
@endsection

@section('scripts')
@include('layouts.admin-templates.remove-item-script')
@endsection
