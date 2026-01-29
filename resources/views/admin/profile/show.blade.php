@extends('admin.layout')

@section('title', 'My Profile')
@section('page-title', 'My Profile')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0"><i class="fas fa-user-circle"></i> Profile Information</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label text-muted">Name</label>
                        <p class="form-control-plaintext fs-5">{{ auth()->user()->name }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted">Email</label>
                        <p class="form-control-plaintext fs-5">{{ auth()->user()->email }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted">Member Since</label>
                        <p class="form-control-plaintext fs-5">{{ auth()->user()->created_at->format('F j, Y') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-warning text-dark">
                    <h5 class="mb-0"><i class="fas fa-lock"></i> Security</h5>
                </div>
                <div class="card-body">
                    <p class="text-muted">Keep your account secure by using a strong password.</p>
                    <a href="{{ route('admin.profile.change-password') }}" class="btn btn-warning w-100">
                        <i class="fas fa-key"></i> Change Password
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
