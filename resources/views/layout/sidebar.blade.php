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
