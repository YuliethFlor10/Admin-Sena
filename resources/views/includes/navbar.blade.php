<nav class="navbar navbar-expand-lg bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><strong>Proyecto AdminSena</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="dropArea">
            <strong>Area</strong>
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropArea">
            <li><a class="dropdown-item" href="{{route('area.create')}}">Crear</a></li>
            <li><a class="dropdown-item" href="{{route('area.index')}}">Lista</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="dropComputer">
            <strong>Computer</strong>
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropComputer">
            <li><a class="dropdown-item" href="{{route('computer.create')}}">Crear</a></li>
            <li><a class="dropdown-item" href="{{route('computer.index')}}">Lista</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="dropTrainings">
            <strong>Training Center</strong>
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropTrainings">
            <li><a class="dropdown-item" href="{{route('training.create')}}">Crear</a></li>
            <li><a class="dropdown-item" href="{{route('training.index')}}">Lista</a></li>
          </ul>
        </li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="dropAprendice">
            <strong>Aprendices</strong>
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropAprendice">
            <li><a class="dropdown-item" href="{{route('aprendice.create')}}">Crear</a></li>
            <li><a class="dropdown-item" href="{{route('aprendice.index')}}">Lista</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="dropCourses">
            <strong>Course</strong>
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropCourses">
            <li><a class="dropdown-item" href="{{route('course.create')}}">Crear</a></li>
            <li><a class="dropdown-item" href="{{route('course.index')}}">Lista</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="dropteachers">
            <strong>Teacher</strong>
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropteachers">
            <li><a class="dropdown-item" href="{{route('teacher.create')}}">Crear</a></li>
            <li><a class="dropdown-item" href="{{route('teacher.index')}}">Lista</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
