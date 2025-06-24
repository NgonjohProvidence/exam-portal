<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/reglog.css">
</head>
<body>
    <div class="form-container">
    <!-- Login Form -->
            <div class="login-form">
                <h2>Login</h2>
                <form>
                    <div class="form-group">
                        <label for="login-email">Email</label>
                        <input type="email" id="login-email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="login-password">Password</label>
                        <input type="password" id="login-password" placeholder="Enter your password" required>
                    </div>
                    <button type="submit" class="btn">Login</button>
                    <div class="anchor"><p>Don't have an account? <a href="registration.php" id="register">Register</a></p></div>
                </form>
            </div>
    </div>


</body>
</html>