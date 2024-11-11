<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">{{__("Сonsole")}}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{__("Categories")}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('categories.index')}}">Все категории</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{route('categories.create')}}">Добавить категорию</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{__("Товары")}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="">Все товары</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{route('products.create')}}">Добавить товар</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{__("News")}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('articles.index')}}">Все новости</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{route('articles.create')}}">Добавить статью</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{__("Tags")}}
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('tags.index')}}">Все теги</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{route('tags.create')}}">Добавить тег</a></li>
              </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Права и роли
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('admin.roles')}}">Все роли</a></li>
                <li><a class="dropdown-item" href="{{route('admin.roles.create')}}">Добавить роль</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{route('admin.permissions')}}">Все Права</a></li>
                <li><a class="dropdown-item" href="{{route('admin.permissions.create')}}">Добавить право</a></li>
              </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Пользоваатели
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('admin.users')}}">Все пользователи</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{}">Добавить пользователя</a></li>
              </ul>
          </li>
        </ul>

        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
