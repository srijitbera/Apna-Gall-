<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background: rgb(205,182,150);
    background: linear-gradient(90deg, rgba(205,182,150,1) 5%, rgba(178,182,236,1) 95%);
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.signup-container {
    width: 400px;
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
    background-color: #ffffff;
}

.form-actions {
    text-align: center;
    margin-top: 20px;
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
    background-color: #0056b3;
}
    </style>
</head>
<body>
    <div class="signup-container">
        <h1>Create an Account</h1>
        <form id="signupForm" onsubmit="return validateSignupForm()" action="registercode.php" method="post">
            <!-- Username -->
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>

            <!-- Email ID -->
            <div class="form-group">
                <label for="email">Email ID:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="pass1" placeholder="Enter your password" required>
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" id="confirmPassword" placeholder="Confirm your password" required>
            </div>

            <!-- Submit Button -->
            <div class="form-actions">
                <button type="submit" class="btn" name="btn1">Sign Up</button>
            </div>
        </form>
    </div>

    <script src="signup.js"></script>
</body>
</html>