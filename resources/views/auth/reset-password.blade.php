<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Reset Password - 10X Consultancy</title>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #0071c5 0%, #00a8e8 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .reset-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            width: 100%;
            max-width: 450px;
            margin: 20px;
        }

        .reset-header {
            background: linear-gradient(135deg, #0071c5 0%, #005a9e 100%);
            color: white;
            padding: 40px 30px;
            text-align: center;
        }

        .reset-header i {
            font-size: 3rem;
            margin-bottom: 15px;
        }

        .reset-header h3 {
            margin: 0;
            font-weight: 600;
        }

        .reset-header p {
            margin: 10px 0 0;
            opacity: 0.9;
            font-size: 0.95rem;
        }

        .reset-body {
            padding: 40px 30px;
        }

        .info-text {
            color: #6c757d;
            font-size: 0.9rem;
            margin-bottom: 25px;
            text-align: center;
        }

        .form-floating {
            margin-bottom: 20px;
        }

        .form-floating>.form-control {
            border-radius: 10px;
            border: 2px solid #e9ecef;
            padding-left: 45px;
        }

        .form-floating>.form-control:focus {
            border-color: #0071c5;
            box-shadow: 0 0 0 0.2rem rgba(0, 113, 197, 0.25);
        }

        .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
            z-index: 2;
        }

        .form-floating>label {
            padding-left: 45px;
        }

        .password-requirements {
            font-size: 0.8rem;
            color: #6c757d;
            margin-top: 5px;
            padding-left: 5px;
        }

        .password-requirements ul {
            margin: 5px 0 0 15px;
            padding: 0;
        }

        .password-requirements li {
            margin-bottom: 2px;
        }

        .btn-reset {
            background: linear-gradient(135deg, #0071c5 0%, #005a9e 100%);
            border: none;
            border-radius: 10px;
            padding: 15px;
            font-weight: 600;
            width: 100%;
            transition: all 0.3s;
        }

        .btn-reset:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(0, 113, 197, 0.4);
        }

        .reset-footer {
            text-align: center;
            padding: 20px 30px;
            background: #f8f9fa;
            border-top: 1px solid #e9ecef;
        }

        .reset-footer a {
            color: #0071c5;
            text-decoration: none;
        }

        .reset-footer a:hover {
            text-decoration: underline;
        }

        .alert {
            border-radius: 10px;
            border: none;
        }

        .invalid-feedback {
            font-size: 0.85rem;
        }
    </style>
</head>

<body>
    <div class="reset-container">
        <div class="reset-header">
            <i class="fas fa-lock"></i>
            <h3>Reset Password</h3>
            <p>Create a new secure password</p>
        </div>

        <div class="reset-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <i class="fas fa-exclamation-circle me-2"></i>
                    {{ $errors->first() }}
                </div>
            @endif

            <p class="info-text">
                Please enter your new password below. Make sure it's secure and memorable.
            </p>

            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-floating position-relative">
                    <i class="fas fa-envelope input-icon"></i>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                        name="email" placeholder="name@example.com" value="{{ old('email', $email) }}" required
                        autofocus>
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-floating position-relative">
                    <i class="fas fa-lock input-icon"></i>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                        name="password" placeholder="New Password" required>
                    <label for="password">New Password</label>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="password-requirements">
                    <strong>Password must have:</strong>
                    <ul>
                        <li>At least 8 characters</li>
                        <li>Uppercase and lowercase letters</li>
                        <li>At least one number</li>
                        <li>At least one special character</li>
                    </ul>
                </div>

                <div class="form-floating position-relative mt-3">
                    <i class="fas fa-lock input-icon"></i>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                        placeholder="Confirm New Password" required>
                    <label for="password_confirmation">Confirm New Password</label>
                </div>

                <button type="submit" class="btn btn-primary btn-reset">
                    <i class="fas fa-save me-2"></i> Reset Password
                </button>
            </form>
        </div>

        <div class="reset-footer">
            <a href="{{ route('login') }}"><i class="fas fa-arrow-left me-1"></i> Back to Login</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
