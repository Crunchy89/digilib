<li class="nav-item">
    <a href="{{ route("admin.dashboard") }}" class="nav-link {{ $active == "dashboard" ? "active" : null }}">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
        Dashboard
      </p>
    </a>
  </li>
  <li class="nav-item">
    <a href="{{ route("admin.role") }}" class="nav-link {{$active == "role" ? "active" : null }}">
      <i class="nav-icon fas fa-th"></i>
      <p>
        Role
      </p>
    </a>
  </li>
  <li class="nav-item">
    <a href="{{ route("admin.user") }}" class="nav-link {{$active == "user" ? "active" : null }}">
      <i class="nav-icon fas fa-th"></i>
      <p>
        User
      </p>
    </a>
  </li>
  <li class="nav-item">
    <a href="{{ route("admin.pengarang") }}" class="nav-link {{$active == "pengarang" ? "active" : null }}">
      <i class="nav-icon fas fa-th"></i>
      <p>
        Pengarang
      </p>
    </a>
  </li>
  <li class="nav-item">
    <a href="{{ route("admin.penerbit") }}" class="nav-link {{$active == "penerbit" ? "active" : null }}">
      <i class="nav-icon fas fa-th"></i>
      <p>
        Penerbit
      </p>
    </a>
  </li>
  <li class="nav-item">
    <a href="{{ route("admin.rak") }}" class="nav-link {{$active == "rak" ? "active" : null }}">
      <i class="nav-icon fas fa-th"></i>
      <p>
        Rak
      </p>
    </a>
  </li>
