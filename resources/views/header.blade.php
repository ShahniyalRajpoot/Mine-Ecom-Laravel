<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        @if (Route::current()->getName()=='home')
        @php $route_path=url('/'); @endphp
        @else
        @php $route_path=Route::current()->uri(); @endphp
        @endif

        <a class="navbar-brand" href="{{$route_path}}">E-Comm</a>
        <a class="navbar-brand" href="{{route('home')}}">Home</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('arrival')}}">New Arrival</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Brands
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>

          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
  </nav>
