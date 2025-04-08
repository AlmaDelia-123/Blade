<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Vistas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" 
    aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('pos')}}">Posiciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('reg')}}">Reglas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('his')}}">Historia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('mejores')}}">Los mejores jugadores</a>
        </li>
      </ul>
    </div>
  </div>
</nav>