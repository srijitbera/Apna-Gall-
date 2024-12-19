// Function to show User Login and hide Admin Login
function showUserLogin() {
    document.getElementById("userLoginSuccess").style.display = "block"; // Show success message
    document.getElementById("adminLoginForm").style.display = "none"; // Hide admin login form
    document.getElementById("signUpOption").style.display = "none"; // Hide sign-up option
    document.getElementById("loginOptions").style.display = "none"; // Hide login options
}

// Function to show Admin Login form and hide User Login
function showAdminLogin() {
    document.getElementById("adminLoginForm").style.display = "block"; // Show admin login form
    document.getElementById("userLoginSuccess").style.display = "none"; // Hide success message
    document.getElementById("signUpOption").style.display = "block"; // Show sign-up option
    document.getElementById("loginOptions").style.display = "none"; // Hide login options
}

// Function to validate Admin Login
function validateAdminLogin() {
    const username = document.getElementById("adminUsername").value.trim();
    const password = document.getElementById("adminPassword").value.trim();

    if (username === "admin" && password === "password123") {
        alert("Admin login successful!");
        window.location.href = "admin.html"; // Redirect to admin page
    } else {
        alert("Invalid username or password. Please try again.");
    }
}

// Function to go back to the main login screen
function goBack() {
    document.getElementById("userLoginSuccess").style.display = "none"; // Hide user success message
    document.getElementById("adminLoginForm").style.display = "none"; // Hide admin login form
    document.getElementById("signUpOption").style.display = "none"; // Hide sign-up option
    document.getElementById("loginOptions").style.display = "flex"; // Show login options
}


