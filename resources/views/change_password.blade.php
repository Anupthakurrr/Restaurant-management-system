@extends('Layout')

@section('content')
    <!-- Content for Reset Password Page -->
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="reset-password-container bg-white p-5 rounded shadow-sm" style="max-width: 500px; width: 100%;">
            <h3 class="text-center mb-4">Reset Password</h3>
            <form action="{{ url('reset_password') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="old_password" class="form-label">Old Password</label>
                    <input type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password" placeholder="Enter Old Password" required>
                    @error('old_password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="new_password" class="form-label">New Password</label>
                    <input type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" placeholder="Enter New Password" required>
                    @error('new_password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirm New Password</label>
                    <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" name="confirm_password" placeholder="Confirm New Password" required>
                    @error('confirm_password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary w-100">Reset Password</button>
            </form>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        /* Custom styling for form container */
        .reset-password-container {
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
    </style>
@endpush
