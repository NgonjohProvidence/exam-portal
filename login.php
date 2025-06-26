<?php
session_start();
require_once 'includes/connection.php'; // Database configuration




// Process login form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validate inputs
    if (empty($email) || empty($password)) {
        $error = "Please enter both email and password.";
    } else {
        // Prepare SQL statement to prevent SQL injection
        $stmt = $conn->prepare("SELECT admin_id, username, password, full_name FROM admin_users WHERE username = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows == 1) {
            $admin = $result->fetch_assoc();
            
            // Verify password (using password_verify for hashed passwords)
            if (password_verify($password, $admin['password'])) {
                // Password is correct, start a new session
                $_SESSION['admin_loggedin'] = true;
                $_SESSION['admin_id'] = $admin['admin_id'];
                $_SESSION['admin_name'] = $admin['full_name'];
                
                // Update last login time
                $update_stmt = $conn->prepare("UPDATE admin_users SET last_login = NOW() WHERE admin_id = ?");
                $update_stmt->bind_param("i", $admin['admin_id']);
                $update_stmt->execute();
                
                // Redirect to admin dashboard
                header("Location:dashboard\index.php");
                exit;
            } else {
                $error = "Invalid username or password.";
            }
        } else {
            $error = "Invalid admin name or password.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Exam Portal</title>
     <link rel="stylesheet" href="assets/css/reglog.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-form {
            background: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .login-form h2 {
            margin-bottom: 1.5rem;
            color: #333;
            text-align: center;
        }
       
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #555;
        }
        .form-group input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }
        
        .btn:hover {
            background-color: #45a049;
        }
        .error {
            color: #f44336;
            margin-bottom: 1rem;
            text-align: center;
        }
        .anchor {
            text-align: center;
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    
    <div class="login-form">
        <h2>Admin Login</h2>
        
        <?php if (isset($error)): ?>
            <div class="error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
        
        <form method="POST" action="">
            <div class="form-group">
                <label for="login-email">Username</label>
                <input type="text" name="email" id="login-email" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="login-password">Password</label>
                <input type="password" name="password" id="login-password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="anchor">
                <p>For student login, <a href="take-exam.php">click here</a></p>
            </div>
        </form>
    </div>
</body>
</html>