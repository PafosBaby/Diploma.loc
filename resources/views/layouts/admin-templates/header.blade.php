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
              <li><a class="dropdown-item" href="{{route('categories.index')}}">{{__("All Categories")}}</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{route('categories.create')}}">{{__("Add category")}}</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{__("Products")}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="">{{__("All products")}}</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{route('products.create')}}">{{__("Add product")}}</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{__("News")}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('articles.index')}}">{{__("All news")}}</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{route('articles.create')}}">{{__("Add article")}}</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{__("Tags")}}
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('tags.index')}}">{{__("All tags")}}</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{route('tags.create')}}">{{__("Add tags")}}</a></li>
              </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{__("Permissions and roles")}}
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('admin.roles')}}">{{__("All Roles")}}</a></li>
                <li><a class="dropdown-item" href="{{route('admin.roles.create')}}">{{__("Add Role")}}</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{route('admin.permissions')}}">{{__("All permissions")}}</a></li>
                <li><a class="dropdown-item" href="{{route('admin.permissions.create')}}">{{__("Add permission")}}</a></li>
              </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{__("Users")}}
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('admin.users')}}">{{__("All users")}}</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{}">{{__("Add user")}}</a></li>
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
