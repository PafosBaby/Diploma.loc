@extends('layouts.admin')
@section('content')
    <h1 class="mb4">{{$article->title . ' ред.'}}</h1>
<form action="{{route('articles.update', $article)}}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="form-group mb-3">
      <label for="category_id">Категория</label>
      <select name="category_id" id="category_id" class="form-select">
        <option value="">Выберете категорию</option>
        @foreach($categories as $cat)
            <option value="{{$cat->id}}" @if($cat->id == old('category_id',$article->category_id)) selected @endif>
                {{$cat->name}}
            </option>
        @endforeach
      </select>
      @error('category_id')
        <small class="text-danger">{{$message}}</small>
      @enderror
    </div>
    <div class="form-group mb3">
        <label for="title">Название</label>
        <input name="title" id="title" class="form-control" value="{{old('title',$article->title)}}">
            @error('title')
            <small class="text-danger">{{$message}}</small>
            @enderror
    </div>

    <div class="form-group mb3">
    <label for="short_description">Краткое описание</label>
    <textarea name="short_description" id="short_description" class="form-control">{{old('short_description',$article->short_description)}}</textarea>
    </div>

    <div class="form-group mb3">
        <label for="description">Описание</label>
        <textarea name="description" id="description" class="form-control">{{old('description',$article->description)}}</textarea>
    </div>

    <div class="form-group mb3">
        <label for="image_path">Изображение</label>
        <input type="file" name="image_path" id="image_path" class="form-control">
        @if($article->image_path)
        <div class="my-3" style="max-width: 200px">
            <img src="{{$article->getImage()}}" alt="" class="img-fluid">
            <a href="{{route('admin.articles.remove-image', $article)}}">Удалить изображение</a>
        </div>
        @endif
    </div>

    <div class="form-group mt-3 mb-3">
        <p>Теги</p>
        <div class="d-flex">
            @foreach($tags as $tag)
            <div class="form-check mb-3 mx-2">
                <input class="form-check-input" type="checkbox" name="tags[]" value="{{$tag->id}}" id="{{'tag-'. $tag->id}}"  @if(old('tag-'. $tag->id, $article->tags->contains($tag->id)) == $tag->id) checked @endif>
                    <label class="form-check-label mb-2" for="{{'tag-'. $tag->id}}">
                      {{$tag->name}}
                    </label>
            </div>
            @endforeach
        </div>
    </div>


    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" name ="is_active" id="is_active" @if(old('is_active',$article->is_active) == 1) checked @endif>
        <label class="form-check-label mb-2" for="is_active">
            Показать
        </label>
    </div>

    <button class="btn btn-success">Submit</button>
</form>

@endsection
