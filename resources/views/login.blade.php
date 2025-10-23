@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100" style="background-color: #ffd7d7ff;">
    <div class="card shadow-lg p-4" style="width: 420px; border-top: 6px solid #b30000;">
        <div class="text-center mb-3">
            <img src="{{ asset('assets/logo_jt.jpg') }}" alt="Logo Juragan Tas" width="40%" height="40%" class="mb-2 rounded-circle">
            <h3 class="fw-bold text-merah">Login</h3>
        </div>

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('doLogin') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label fw-semibold">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Masukkan email" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Password</label>
                <div class="input-group">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password" required>
                        <span class="input-group-text bg-white border-start-0" style="cursor:pointer;" id="togglePassword">
                            <i class="bi bi-eye"></i>
                        </span>
                    </div>
            </div>

            <button type="submit" class="btn btn-merah w-100 py-2 fw-semibold">Login</button>
        </form>
    </div>
</div>

{{-- Script untuk Toggle Password --}}
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const togglePassword = document.querySelector('#togglePassword');
    const passwordInput = document.querySelector('#password');
    const icon = togglePassword.querySelector('i');

    togglePassword.addEventListener('click', function () {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        icon.classList.toggle('bi-eye');
        icon.classList.toggle('bi-eye-slash');
    });
});
</script>
@endpush


@endsection
