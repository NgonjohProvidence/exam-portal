<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="assets/css/reglog.css">
</head>
<style>
    
</style>
<body>
    <div class="form-container">
    <!-- Registration Form -->
            <div class="register-form hidden">
                <h2>Register</h2>
                <form>
                    <div class="form-group">
                        <label for="register-name">Full Name</label>
                        <input type="text" id="register-name" placeholder="Enter your full name" required>
                    </div>
                    <div class="form-group">
                        <label for="register-email">Email</label>
                        <input type="email" id="register-email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="register-password">Password</label>
                        <input type="password" id="register-password" placeholder="Enter your password" required>
                    </div>
                    <div class="form-group">
                        <label for="register-confirm">Confirm Password</label>
                        <input type="password" id="register-confirm" placeholder="Confirm your password" required>
                    </div>
                    <button type="submit" class="btn">Register</button>
                    <div class="anchor"><p>Already have an account? <a href="#" id="login">Login</a></p></div>
                </form>
            </div>
    </div>

    
</body>
</html>