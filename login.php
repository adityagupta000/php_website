<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Custom CSS styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container-login {
            padding: 1.5rem;
            border: 3px solid black;
            border-color: red black red black;
            border-radius: 0.3rem;
            max-width: 600px;
            width: 100%;
        }
        .nav-pills {
            margin-bottom: 1.5rem;
            display: flex;
            justify-content: center;
        }
        .nav-item h3 {
            margin: 0;
        }
        .btn-social {
            border: 1px solid #17a2b8;
            color: #17a2b8;
            padding: 8px 12px;
            margin: 0 5px;
            cursor: pointer;
            border-radius: 4px;
            background-color: transparent;
        }
        .btn-social i {
            margin-right: 0.5rem;
        }
        .btn-social:hover {
            background-color: #17a2b8;
            color: white;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-check-label {
            margin-bottom: 0;
        }
        .forgot-password {
            margin-bottom: 1rem;
            display: block;
            text-align: center;
            text-decoration: none;
            color: #007bff;
        }
        .forgot-password:hover {
            text-decoration: underline;
        }
        .register-link {
            margin-top: 1rem;
            text-align: center;
        }
        .register-link a {
            color: #007bff;
            text-decoration: none;
        }
        .register-link a:hover {
            text-decoration: underline;
        }
        .d-flex {
            display: flex;
        }
        .justify-content-center {
            justify-content: center;
        }
        .align-items-center {
            align-items: center;
        }
        .mb-3 {
            margin-bottom: 1rem;
        }
        .text-center {
            text-align: center;
        }
        .btn-primary {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container-login">
        <center><h2>Login</h2></center>
        <div class="tab-content">
            <div class="tab-pane fade show active">
                <div class="text-center mb-3">
                    <p>Sign in with:</p>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-outline-primary btn-social mx-1">
                            <i class="fab fa-facebook-f"></i> Facebook
                        </button>
                        <button class="btn btn-outline-primary btn-social mx-1">
                            <i class="fab fa-instagram"></i> Instagram
                        </button>
                        <button class="btn btn-outline-primary btn-social mx-1">
                            <i class="fab fa-google"></i> Google
                        </button>
                        <button class="btn btn-outline-primary btn-social mx-1">
                            <i class="fab fa-github"></i> GitHub
                        </button>
                    </div>
                    <p class="text-center mt-3">or</p>
                </div>
                <form id="loginForm" action="controller/userlogin.php" method="POST"  onsubmit="return validateForm()">
                    <div class="form-group">
                        <input class="form-control mb-3" name="email" type="email" placeholder="Email address" id="email" required />
                    </div>
                    <div class="form-group">
                        <input class="form-control mb-3" name="password" type="password" placeholder="Password" id="password" required />
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <!-- <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="rememberMe" />
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div> -->
                        <!-- <a href="#!" class="forgot-password">Forgot password?</a> -->
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary mb-3">Sign in</button>
                    </div>
                </form>

                <p class="text-center">Not a member? <a href="register.php" class="register-link">Register</a></p>
            </div>
        </div>
    </div>

    <script>
        function validateForm() {
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;

            if (!email.trim()) {
                alert('Please enter your email address.');
                return false;
            }

            if (!password.trim()) {
                alert('Please enter your password.');
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
