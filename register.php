<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 800px;
            padding: 20px;
            box-sizing: border-box;
        }
        h3 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-check-label {
            display: block;
            margin-bottom: 10px;
        }
        .form-check-input {
            margin-right: 10px;
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
        button{
            left:100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Registration</h3>
        <form id="registrationForm"  action="controller/register.php" method="POST" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text"  name="name" id="name" placeholder="Name" required />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Email" required />
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" required />
            </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary mb-3">Sign in</button>
                    </div>
        </form>
    </div>
    <script>
        function validateForm() {
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            var termsAgreement = document.getElementById('termsAgreement').checked;
            if (!name.trim()) {
                alert('Please enter your name.');
                return false;
            }
            if (!email.trim()) {
                alert('Please enter your email address.');
                return false;
            }
            if (!password.trim()) {
                alert('Please enter your password.');
                return false;
            }
            if (!termsAgreement) {
                alert('Please agree to the terms.');
                return false;
            }
            return true;
        }
    </script>
</body>
</html>