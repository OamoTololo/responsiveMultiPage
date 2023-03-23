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

    <!---- Course Section----->
    <section class="course">
        <h1>Courses I Offer</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at eos error est fugiat laboriosam perspiciatis quam tenetur veniam
            voluptatibus! Beatae corporis dolores ducimus exercitationem iste modi quam?</p>

        <div class="row">

          <div class="course-col">
              <h3>Beginner</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aut corporis delectus dolor facere itaque iusto nobis pariatur
                  praesentium voluptas.</p>
          </div>

          <div class="course-col">
              <h3>Degree</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aut corporis delectus dolor facere itaque iusto nobis pariatur
                    praesentium voluptas.</p>
          </div>

          <div class="course-col">
              <h3>Post-Graduate</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aut corporis delectus dolor facere itaque iusto nobis pariatur
                    praesentium voluptas.</p>
          </div>


        </div>
    </section>

    <!---- Campus Section----->
    <section class="campus">
        <h1>Global Campus</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid facilis inventore molestias nihil porro quaerat quos rem vero voluptatibus!</p>

        <div class="row">

            <div class="campus-col">
                <img src="images/building.jpg">
                <div class="layer">
                    <h3>Soshanguve</h3>
                </div>
            </div>

            <div class="campus-col">
                <img src="images/building2.jpg">
                <div class="layer">
                    <h3>Mabopane</h3>
                </div>
            </div>

            <div class="campus-col">
                <img src="images/building3.jpg">
                <div class="layer">
                    <h3>Ga-Rankuwa</h3>
                </div>
            </div>
        </div>
    </section>

    <!---- Facilities Section----->
    <section class="facilities">
        <h1>Facilities</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum et expedita ipsa itaque modi nulla quibusdam quo sapiente sed ullam?</p>

        <div class="row">
            <div class="facilities-col">
                <img src="images/library.jpg">
                <h3>World Class Library</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium asperiores deleniti doloribus incidunt iure maxime nesciunt
                    quaerat sequi sint vitae?</p>
            </div>

            <div class="facilities-col">
                <img src="images/soccer.jpg">
                <h3>World Class Sports-ground</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium asperiores deleniti doloribus incidunt iure maxime nesciunt
                    quaerat sequi sint vitae?</p>
            </div>

            <div class="facilities-col">
                <img src="images/cafeteria.jpg">
                <h3>World Class Cafeteria's</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium asperiores deleniti doloribus incidunt iure maxime nesciunt
                    quaerat sequi sint vitae?</p>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <h1>Feedback</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum et expedita ipsa itaque modi nulla quibusdam quo sapiente sed ullam?</p>

        <div class="row">
            <div class="testimonials-col">
                <img src="images/user1.jpg">
                <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci beatae cum esse, harum ipsum iusto labore nemo neque obcaecati
                        omnis quasi reiciendis repellat veritatis. Deleniti ex iusto magni quia quibusdam. Ab culpa, dignissimos magni molestias quo quod
                        unde.</p>
                    <h3>Oamogetswe Mgidi</h3>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
            </div>

            <div class="testimonials-col">
                <img src="images/user2.jpg">
                <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci beatae cum esse, harum ipsum iusto labore nemo neque obcaecati
                        omnis quasi reiciendis repellat veritatis. Deleniti ex iusto magni quia quibusdam. Ab culpa, dignissimos magni molestias quo quod
                        unde.</p>
                    <h3>Tiisetso Kutumela</h3>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star-half-stroke"></i>
                </div>
            </div>
        </div>

    </section>

    <section class="footer">
        <h4>About Me</h4>

        <div class="icons">
            <a href=""><i class="fa-brands fa-facebook fa-spin"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
            <a href=""><i class="fa-brands fa-linkedin"></i></a>
            <a href=""><i class="fa-brands fa-github fa-spin fa-spin"></i></a>
        </div>
        <p>Coded and Designed by &copy; Oamogetswe Mgidi</p>
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