<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proma Africa</title>
    <link rel="stylesheet" href="test.css">
</head>
<body>

    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="1.png" alt="Proma Africa Logo">
            </div>
            <div class="menu-toggle" onclick="toggleMenu()">☰</div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Our Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <h1>A Pan African Technology Company <br> Sparking the Tech Revolution for a Borderless Africa</h1>
        <video autoplay muted loop>
            <source src="vid1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </section>

    <script>
        function toggleMenu() {
            document.querySelector(".nav-links").classList.toggle("active");
        }
    </script>

</body>
</html>
