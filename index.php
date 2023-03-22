<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">

    <title>Responsive Website</title>
</head>
<body>
    <section class="header">
        <nav>
            <a href="index.html"><img src="images/logo.png"></a>

            <div class="nav-links" id="navLinks">
                <i class="fa-solid fa-times-circle" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="index.html">ABOUT</a></li>
                    <li><a href="index.html">COURSE</a></li>
                    <li><a href="index.html">BLOG</a></li>
                    <li><a href="index.html">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa-solid fa-bars" onclick="showMenu()"></i>
        </nav>

        <div class="text-box">
            <h1>Code Master's Courses</h1>
            <p>Interested in Web Development. Hit me up and I can teach you HTML5, CSS3,<br>JavaScript, JQuery, SQL, GIT, VUE3 - VUE5, SYMFONY3</p>
            <a href="" class="hero-button">Click Here to know More</a>
        </div>

    </section>

    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>

    <script src="https://kit.fontawesome.com/590e8175ae.js" crossorigin="anonymous"></script>
</body>
</html>