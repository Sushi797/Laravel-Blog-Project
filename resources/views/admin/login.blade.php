<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #1f2937, #4b5563);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', sans-serif;
        }

        .login-card {
            width: 400px;
            background: #ffffff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            animation: fadeIn 0.4s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-card h3 {
            font-weight: 700;
            color: #1f2937;
        }

        .form-control {
            border-radius: 8px;
        }

        .btn-custom {
            background: #1f2937;
            color: #fff;
            border-radius: 8px;
            padding: 10px;
            font-size: 16px;
        }

        .btn-custom:hover {
            background: #111827;
        }
    </style>
</head>

<body>
    @if(session('error'))
        <p style="color:red">{{ session('error') }}</p>
    @endif

    <div class="login-card">
        <h3 class="text-center mb-3">Admin Login</h3>
        <p class="text-center text-muted mb-4">Access your dashboard</p>

        <form action="{{ route('admin.login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">User Name</label>
                <input type="name" class="form-control" name="name" placeholder="Enter user name" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password"
                    placeholder="Enter your password" required>
            </div>

            <div class="d-flex justify-content-between mb-3">
                <div>
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember Me</label>
                </div>
                <a href="#" class="text-decoration-none">Forgot Password?</a>
            </div>

            <button type="submit" class="btn btn-custom w-100">Login</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>