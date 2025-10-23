@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h3 class="text-center fw-bold mb-4">Profil Pengguna</h3>

    @if(isset($error))
        <div class="alert alert-danger text-center">{{ $error }}</div>
    @else
        <div class="card shadow-sm mx-auto" style="width: 100%; max-width: 520px;">
            <div class="card-body">
                    <div class="text-center mb-3">
                        <!-- icon profile -->
                        <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center" style="width:90px;height:90px;">
                            <i class="bi bi-person-circle" style="font-size:48px;color:black"></i>
                        </div>
                    </div>
                <h5 class="card-title mb-3 text-center text-danger">Informasi Akun</h5>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Username</label>
                    <input type="text" class="form-control" value="{{ $username }}" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Email</label>
                    <input type="text" class="form-control" value="{{ $email }}" readonly>
                </div>

                
            </div>
        </div>
    @endif
</div>
@endsection
