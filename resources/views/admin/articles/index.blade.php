@extends('layouts.admin')
@section('content')
    <h1>Статьи</h1>
    @if ($articles->count())

    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">Изображение</th>
            <th scope="col">Название</th>
            <th scope="col">Категория</th>
            <th scope="col">Теги</th>
            <th scope="col">Дата</th>
            <th scope="col">Показывать</th>
            <th scope="col">Действие</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($articles as $art)
            <tr>
                <th style="max-width: 140px;" scope="col"><img src="{{$art->getImage()}}" alt="" class="img-fluid"></th>
                <th scope="col">{{$art->title}}</th>
                <th scope="col">{{$art->category->name}}</th>
                <th scope="col">{{$art->getTags()}}</th>
                <th scope="col">{{$art->publish_at}}</th>
                <th scope="col">{{$art->isShowing()}}</th>
                <th scope="col" class="d-flex">
                    <a href="{{route('articles.edit',$art)}}" class="btn btn-sm btn-warning">Изменить</a>
                    <form action="{{route('articles.destroy',$art)}}" method="POST" class="mx-2">
                        @csrf  @method('DELETE')
                        <button  class="btn btn-sm btn-danger btn-remove">Удалить</button>
                    </form>
                </th>
              </tr>
            @endforeach
        </tbody>
      </table>
      @else
      <table class="table table-dark table-striped ">
        <tbody>
            <tr>
                <th scope="">пока нет ни одной статьи</th>
                <th scope="col">
                    <a href="" class="btn btn-sm btn-success">Добавить</a>
                </th>
              </tr>
        </tbody>
      </table>
      @endif
@endsection
@section('scripts')
      @include('layouts.admin-templates.remove-item-script')
@endsection
