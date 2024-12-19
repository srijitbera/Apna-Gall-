<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apna Galli</title>
    <style>
        body, html {
    background-color: #a9eee9;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    box-sizing: border-box;
}

/* Navbar */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #326664;
    color: #fff;
    padding: 10px 20px;
    position: sticky;
    top: 0;
    z-index: 1000;
}

.logo {
    font-size: 24px;
    font-weight: bold;
}

.nav-links {
    display: flex;
    list-style: none;
    gap: 20px;
}

.nav-links li a {
    color: #fff;
    text-decoration: none;
    font-size: 18px;
}

.hamburger {
    display: none;
    flex-direction: column;
    cursor: pointer;
}

.hamburger .line {
    width: 25px;
    height: 3px;
    background-color: #fff;
    margin: 3px 0;
}

/* Carousel */
.carousel-container {
    overflow: hidden;
    width: 100%;
    height: 400px;
    position: relative;
}

.carousel-slide {
    display: flex;
    width: 300%;
    animation: slide 10s infinite;
}

.carousel-slide img {
    width: 100%;
    height: 400px;
}

@keyframes slide {
    0% { transform: translateX(0); }
    33% { transform: translateX(-100%); }
    66% { transform: translateX(-200%); }
    100% { transform: translateX(0); }
}

/* Sections */
.section {
    padding: 50px;
    text-align: center;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .nav-links {
        display: none;
        flex-direction: column;
        background-color: #333;
        position: absolute;
        top: 50px;
        right: 0;
        width: 200px;
        border-radius: 5px;
    }

    .nav-links.show {
        display: flex;
    }

    .hamburger {
        display: flex;
    }
}

.img{
    width: 50px;
    height: 100px;
}
    </style>
    <script defer src="homepage.js"></script>
</head>
<body>
    <!-- Navbar -->
    <header>
        <nav class="navbar">
            <div class="logo">Apna Gall!</div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="contact_us.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </nav>
    </header>

    <!-- Carousel -->
    <section id="carousel">
        <div class="carousel-container">
            <div class="carousel-slide">
                <img src="image/slide1.jpg" alt="Slide 1">
                <img src="image/slide2.jpg" alt="Slide 2">
                <img src="image/slide3.jpg" alt="Slide 3">
                <img src="image/slide4.jpg" alt="Slide 4">
                <img src="image/slide5.jpg" alt="Slide 5">
                <img src="image/slide6.jpg" alt="Slide 6">
                <img src="image/slide7.jpg" alt="Slide 7">
                <img src="image/slide8.jpg" alt="Slide 8">
                <img src="image/slide9.jpg" alt="Slide 9">
                <img src="image/slide10.jpeg" alt="Slide 10">
                <img src="image/slide11.jpg" alt="Slide 11">
                <img src="image/slide12.jpg" alt="Slide 12">
                <img src="image/slide13.jpg" alt="Slide 13">
                <img src="image/slide14.jpg" alt="Slide 14">
                <img src="image/slide15.jpg" alt="Slide 15">
                <img src="image/slide16.jpg" alt="Slide 16">
                <img src="image/slide17.jpg" alt="Slide 17">
                <img src="image/slide18.jpeg" alt="Slide 18">
                <img src="image/slide19.jpg" alt="Slide 19">
                <img src="image/slide20.jpg" alt="Slide 20">
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section id="home" class="section">
        <h1 syle="font-size:100px;">Welcome to Apna Galli!</h1>
        <p>Your one-stop solution for everything!</p>
    </section>


    <section id="services" class="section">
        <h2>Our Services</h2>
        <p>Explore our wide range of services tailored to your needs.</p>
    </section>

    <footer>
        <p>&copy; 2024 Apna Galli. All Rights Reserved.</p>
    </footer>
</body>
</html>
