<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background: rgb(187,231,255);
    background: linear-gradient(260deg, rgba(187,231,255,1) 37%, rgba(216,176,235,1) 70%);
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}


.login-container {
    width: 350px;
    padding: 30px;
    background: linear-gradient(145deg, #ffffff, #e6eaf1);
    border-radius: 12px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h1 {
    font-size: 1.8rem;
    color: #333;
    margin-bottom: 20px;
}

.login-options {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.btn {
    padding: 10px 20px;
    font-size: 1rem;
    color: white;
    background-color: #007bff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.btn:hover {
    background-color: #0056b3;
}

.back-btn {
    background-color: #ff6347;
}

.back-btn:hover {
    background-color: #e5533d;
}

.form-group {
    margin-bottom: 15px;
    text-align: left;
}

label {
    display: block;
    font-size: 1rem;
    color: #555;
    margin-bottom: 5px;
}

input {
    width: 100%;
    padding: 10px;
    font-size: 1rem;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #f9f9f9;
}

input:focus {
    outline: none;
    border-color: #007bff;
}

.form-actions {
    display: flex;
    justify-content: center;
    gap: 10px; /* Add small gap between buttons */
}

p {
    font-size: 0.9rem;
    margin-top: 15px;
}

p a {
    color: #007bff;
    text-decoration: none;
}

p a:hover {
    text-decoration: underline;
}
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login to Apna Galli</h1>
        <div id="loginOptions" class="login-options">
            <button class="btn" id="userLoginBtn"><a href="admin.php" style="color:white;text-decoration:none;">Admin Login</a></button>
            <button class="btn" id="adminLoginBtn" onclick="showAdminLogin()">User Login</button>
        </div>

        <!-- User Login Success Message -->
        <div id="userLoginSuccess" style="display: none; text-align: center;">
            <h2>Welcome, User!</h2>
            <p>You have successfully logged in.</p>
            <div class="form-actions">
                <button type="button" class="btn back-btn" onclick="goBack()">Back</button>
            </div>
        </div>

        <!-- Admin Login Form -->
        <form id="adminLoginForm" style="display: none;" action="login_check.php" method="post">
            <div class="form-group">
                <label for="adminUsername">Username:</label>
                <input type="text" id="adminUsername" name="user" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="adminPassword">Password:</label>
                <input type="password" id="adminPassword" name="pass1" placeholder="Enter your password" required>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn"  name="btn1">Login</button>
                <button type="button" class="btn back-btn" onclick="goBack()">Back</button>
            </div>
        </form>

        <!-- Sign-Up Option -->
        <p id="signUpOption" style="display: none; text-align: center;">
            Don't have an account? <a href="signup.php">Sign Up</a>
        </p>
    </div>

    <script src="login.js"></script>
</body>
</html>