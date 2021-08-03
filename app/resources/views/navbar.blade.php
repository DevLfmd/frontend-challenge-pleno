<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="box-shadow: 1px 0px 3px #000;">
  <a class="navbar-brand" href="#">
    <img class="img-fluid" style="height:64px" src="{{ asset('logo.png') }}" />
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto fixed font-weight-bold">
      <li class="nav-item active">
        <a class="nav-link" href="#">Sobre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('prices') }}">Preços</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Desenvolvedores</a>
      </li>
      <li class="nav-item d-md-none d-lg-none d-xl-none">
        <a class="nav-link" href="#">Ajuda</a>
      </li>  
      <li class="nav-item d-md-none d-lg-none d-xl-none">
        <a class="nav-link" href="#">Contato</a>
      </li>
    </ul>
    <div class="my-2 my-lg-0 d-md-none">
      <input class="form-control mr-sm-2" type="search" placeholder="Digite aqui para pesquisar" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
    </div>
    <div class="my-2 my-lg-0 d-none d-md-block">
      <ul class="navbar-nav mr-auto fixed font-weight-bold align-items-center">
        <li class="nav-item active">
          <i class="fas fa-search"></i>
        </li>
        <li class="nav-item active">
          <a class="nav-link font-weight-bold" href="#">Ajuda</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link font-weight-bold" href="#">Contato</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link font-weight-bold btn btn-outline-dark" style="border-radius: 50px; height: 40px; width: 100%" href="#">Começar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>