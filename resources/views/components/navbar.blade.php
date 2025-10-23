@php
    // Cek apakah user sudah login (data dikirim via query parameter)
    $query = [];
    if(isset($username) && isset($email)) {
        $query = [
            'username' => $username,
            'email' => $email
        ];
    }
@endphp

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom shadow-sm sticky-top">
  <div class="container d-flex justify-content-between align-items-center">
    {{-- Logo dan Nama Brand --}}
    <a class="navbar-brand fw-bold d-flex align-items-center" href="{{ route('dashboard', $query) }}">
      <img src="{{ asset('assets/logo_jt.jpg') }}" alt="Logo" class="me-2 logo-brand">
      <span class="brand-text">Juragan Tas</span>
    </a>

    {{-- Menu toggle untuk mobile --}}
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMobile">
      <span class="navbar-toggler-icon"></span>
    </button>
    {{-- Menu versi mobile --}}
    <div class="collapse navbar-collapse mt-2" id="navbarMobile">
      <ul class="navbar-nav ms-auto text-center">
        <li class="nav-item"><a class="nav-link text-white fw-bold" href="{{ route('dashboard', $query) }}">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link text-white fw-bold" href="{{ route('pengelolaan', $query) }}">Pengelolaan</a></li>
        <li class="nav-item"><a class="nav-link text-white fw-bold" href="{{ route('profile', $query) }}">Profile</a></li>
        <li class="nav-item"><a class="nav-link text-white fw-bold" href="{{ route('logout') }}">Logout</a></li>
      </ul>
    </div>

  </div>
</nav>
