<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Forgot Password - 10X Consultancy</title>

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

        .forgot-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            width: 100%;
            max-width: 450px;
            margin: 20px;
        }

        .forgot-header {
            background: linear-gradient(135deg, #0071c5 0%, #005a9e 100%);
            color: white;
            padding: 40px 30px;
            text-align: center;
        }

        .forgot-header i {
            font-size: 3rem;
            margin-bottom: 15px;
        }

        .forgot-header h3 {
            margin: 0;
            font-weight: 600;
        }

        .forgot-header p {
            margin: 10px 0 0;
            opacity: 0.9;
            font-size: 0.95rem;
        }

        .forgot-body {
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

        .btn-forgot {
            background: linear-gradient(135deg, #0071c5 0%, #005a9e 100%);
            border: none;
            border-radius: 10px;
            padding: 15px;
            font-weight: 600;
            width: 100%;
            transition: all 0.3s;
        }

        .btn-forgot:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(0, 113, 197, 0.4);
        }

        .forgot-footer {
            text-align: center;
            padding: 20px 30px;
            background: #f8f9fa;
            border-top: 1px solid #e9ecef;
        }

        .forgot-footer a {
            color: #0071c5;
            text-decoration: none;
        }

        .forgot-footer a:hover {
            text-decoration: underline;
        }

        .alert {
            border-radius: 10px;
            border: none;
        }

        .alert-success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }

        .invalid-feedback {
            font-size: 0.85rem;
        }

        .back-to-login {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #6c757d;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s;
        }

        .back-to-login:hover {
            color: #0071c5;
        }
    </style>
</head>

<body>
    <div class="forgot-container">
        <div class="forgot-header">
            <i class="fas fa-key"></i>
            <h3>Forgot Password?</h3>
            <p>Reset your admin password</p>
        </div>

        <div class="forgot-body">
            @if (session('status'))
                <div class="alert alert-success mb-4">
                    <i class="fas fa-check-circle me-2"></i>
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <i class="fas fa-exclamation-circle me-2"></i>
                    {{ $errors->first() }}
                </div>
            @endif

            <p class="info-text">
                Enter your email address and we'll send you a link to reset your password.
            </p>

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form-floating position-relative">
                    <i class="fas fa-envelope input-icon"></i>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                        name="email" placeholder="name@example.com" value="{{ old('email') }}" required autofocus>
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary btn-forgot">
                    <i class="fas fa-paper-plane me-2"></i> Send Reset Link
                </button>
            </form>
        </div>

        <div class="forgot-footer">
            <a href="{{ route('login') }}" class="back-to-login">
                <i class="fas fa-arrow-left"></i> Back to Login
            </a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
