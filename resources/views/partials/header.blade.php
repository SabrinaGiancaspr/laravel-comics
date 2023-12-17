<div class="blue-side">
  <div class="font-container d-flex gap-5 justify-content-end">
    <p class="position">DCPOWER
      <span class="font-sm">SM</span>
      <span class="visa">VISA<i class="far fa-registered icon"></i></span>
    </p>
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <p class=" dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          ADDITIONAL DC SITES
        </p>
        <ul class="dropdown-menu ">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </li>
    </ul>
  </div>
  
</div>
<header class="header" style="background-image: url({{Vite::asset('resources/img/jumbotron.jpg')}})">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="logo" href="#"><img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav gap-4">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">CHARACTERS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('comics')}}">COMICS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">MOVIES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">TV</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">GAMES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">COLLECTIBLES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">VIDEOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">FANS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">NEWS</a>
              </li>
              <li class="nav-item dropdown gap-5">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 SHOP
                </a>
                <input class="input" type="text" name="" id="" placeholder="Search">
                <i class="fas fa-search lente"></i>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>