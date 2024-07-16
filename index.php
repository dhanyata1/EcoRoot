<?php require ('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - Login and Register</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <style>
        .heart-icon {
            margin-top: 10px;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            text-align: center;
            padding: 50px;
        }

        h1 {
            color: #333;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-top: 20px;
            border-radius: 10px;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .scroll-container {
            width: 100%;
            overflow-x: auto;
            white-space: nowrap;
            padding-left: 200px;
        }

        .scroll-content {
            width: 2000px;
            padding-left: 200px;
        }

        .scroll-item {
            display: inline-block;
            width: 200px;
            height: 200px;
            margin: 10px;
            background-color: #f0f0f0;
            border-radius: 50%;
            /* Making it circular */
            position: relative;
            /* Needed for absolute positioning of text */
            overflow: hidden;
            /* Ensure content doesn't overflow the circle */
        }

        .scroll-item img {
            width: 100%;
            height: auto;
            border-radius: 50%;
            /* Making sure the image is circular */
        }

        .item-info {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            /* Semi-transparent background */
            padding: 10px;
            box-sizing: border-box;
            color: white;
            text-align: center;
            transition: opacity 0.3s;
            opacity: 0;
            /* Initially hidden */
        }

        .scroll-item:hover .item-info {
            opacity: 1;
            /* Show info on hover */
        }

        .item-info h3 {
            margin: 5px 0;
        }
    </style>
    <script>(function (w, d) { w.CollectId = "65f48d0fb09860251c222e42"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async = true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
</head>

<body>
    <!-- navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <div class="logo-container"> <!-- Container for logo -->
                    <img src="./images/Logo.jpeg" alt="EcoRoot Logo" class="logo-img">
                </div>
                EcoRoot
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Decor
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="./components/candle.html">Candles</a></li>
                            <li><a class="dropdown-item" href="./components/hanger.html">Hanger</a></li>
                            <li><a class="dropdown-item" href="./components/planters.html">Planters</a></li>
                            <li><a class="dropdown-item" href="./components/deskOrganizer.html">Desk Organizer</a></li>
                            <li><a class="dropdown-item" href="./components/vase.html">Vase</a></li>
                            <li>
                                <hr class="dropdown-divider">

                            </li>
                            <li><a class="dropdown-item" href="./components/moreProducts.html">More items...</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Furniture
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="./components/bench.html">Bench</a></li>
                            <li><a class="dropdown-item" href="./components/chairs.html">Chairs</a></li>
                            <li><a class="dropdown-item" href="./components/potStand.html">Pot Stand</a></li>
                            <li><a class="dropdown-item" href="./components/table.html">Tables</a></li>

                            <li><a class="dropdown-item" href="./components/tools.html">Tools</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="./components/moreProducts.html">More items...</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Contact/Contact.php">Contact</a>
                    </li>
                </ul>
                <form class="d-flex">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">
        <i class="fas fa-search"></i>
    </button>

    <button class="btn btn-outline-primary mx-2" type='button' onclick="popup('login-popup')">LOGIN</button>
    <button class="btn btn-outline-primary" type='button' onclick="popup('register-popup')">REGISTER</button>
    <div class="popup-container" id="login-popup">
        <div class="popup">
            <form method="POST" action="login_register.php">
                <h2>
                    <span>USER LOGIN</span>
                    <button type="reset" onclick="popup('login-popup')">X</button>
                </h2>
                <input type="text" placeholder="E-mail or Username" name="email_username">
                <input type="password" placeholder="Password" name="password">
                <button type="submit" class="login-btn" name="login">Login</button>
            </form>
        </div>
    </div>

    <div class="popup-container" id="register-popup">
        <div class="register popup">
            <form method="POST" action="login_register.php">
                <h2>
                    <!-- Register Form -->
                    <span>USER REGISTER</span>
                    <button type="reset" onclick="popup('register-popup')">X</button>
                </h2>
                <input type="text" placeholder="Full Name" name="full_name">
                <input type="text" placeholder="Username" name="username">
                <input type="email" placeholder="E-mail" name="email">
                <input type="password" placeholder="Password" name="password">
                <button type="submit" class="btn btn-outline-primary" name="register">Register</button>
            </form>
        </div>
    </div>
</form>

                        </div>
                    </div>
                    <i class="far fa-heart heart-icon" style="font-size: 1.5em; color: hsl(211, 100%, 50%);"></i>
                </form>
            </div>
        </div>
    </nav>

    <div style="text-align: center;">
        <p style="font-size: 36px; font-weight: bold; color: #1f7722; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">
            Let's Join Hands To Make Plastic Free Earth</p>
    </div>

    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://image.slidesdocs.com/responsive-images/background/tatami-japanese-style-living-room-decoration-renderings-powerpoint-background_32df57c3a3__960_540.jpg"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <video class="d-block w-100" autoplay loop muted>
                    <source src="./images/anime.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <div class="carousel-item">
                <img src="https://i.pinimg.com/736x/f3/58/e1/f358e127769cec8d5cfb265e8554039c.jpg" class="d-block w-100"
                    alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div
        style="background-image: url('./images/treelogo.png'); background-size: cover; background-color: rgba(0, 0, 0, 0);">
        <!-- Your existing content goes here -->
        <div style="font-family: Arial, sans-serif; line-height: 1.6; background-color: rgba(249, 249, 249, 0.5); padding: 0;">

            <div class="container"
                style="max-width: 800px; margin: 20px auto; background-color: #fff; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); padding: 20px;">
                <div class="navbar"
                    style="background-color: #4CAF50; color: #fff; text-align: center; padding: 10px 10px; border-radius: 5px 5px 0 0;">
                    <p class="navbar-brand" style="font-size: 36px; margin: 20px;"><b>Think Exclusive Future, Think
                            ECOROOT</b></p>
                </div>

                <header class="header-text" style="text-align:center; font-size:28px;  margin:10px 10px;">Welcome To- ECOROOT Sustainable Bamboo Products</header>


                <div class="content" style="font-size: 18px; color: #666; text-align: justify;">
                    <p>Bamboo products can store carbon for a long time and maintain a low or even zero carbon impact
                        throughout the product life cycle. The same area of bamboo forest can release 35% more oxygen
                        than a regular forest, making the bamboo industry not only low-carbon but also carbon-negative.
                    </p>

                    <p>Bamboo grows incredibly quickly, requires no fertilizer, and regenerates from its own roots.
                        Unlike plastics, which take hundreds of years to decompose, bamboo packaging is also
                        biodegradable. Bamboo is a renewable and versatile crop. Although it's as tough as wood, it's
                        actually a type of grass, and some species can grow over a meter a day. The crop requires very
                        little water and doesn't need pesticides or fertilizers to grow.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h1>Building a Better Planet</h1>
        <h5>Connect with us to make a positive impact!</h5>
        <img src="./images/sliceimg.jpeg" alt="Slice of nature">
        <img src="./images/sliceimg2.jpeg" alt="Slice of nature">
    </div>
    <!-- Add more items here -->
    </div>
    </div>

    </div>
    <!-- Container -->
    <div style="text-align: center;">
        <p style="font-size: 30px;  font-weight: bold; color: #216d84; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">Our
            Products</p>
    </div>
    <div class="container mt-4 images">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="./images/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Transform Your Space</h5>
                        <p class="card-text">From stylish vases to trendy candle holders, our decorators are sure to
                            elevate the ambiance of any room</p>
                        <a href="#" class="btn btn-primary">Interest</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="./images/2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Home Accents Galore</h5>
                        <p class="card-text"> Each piece is meticulously chosen to add a touch of elegance and
                            personality to your living space.</p>
                        <a href="#" class="btn btn-primary">Interest</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="./images/4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Enhance Your Environment</h5>
                        <p class="card-text"> With our carefully chosen pieces, you can effortlessly transform any room
                            into a sanctuary of style and comfort</p>
                        <a href="#" class="btn btn-primary">Interest</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4 images">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="./images/5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Chic & Unique</h5>
                        <p class="card-text"> From charming wall art to elegant table decor, each piece is thoughtfully
                            selected to bring warmth to your home.</p>
                        <a href="#" class="btn btn-primary">Interest</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="./images/6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Personalize Your Home</h5>
                        <p class="card-text">From stylish vases to trendy candle holders, our decorators are sure to
                            elevate the ambiance of any room.</p>
                        <a href="#" class="btn btn-primary">Interest</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="./images/7.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Curated Elegance</h5>
                        <p class="card-text">Let our decorators inspire you to design a space that feels uniquely yours.
                        </p>
                        <a href="#" class="btn btn-primary">Interest</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4 images">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="./images/8.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Elevate Every Corner</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                        <a href="#" class="btn btn-primary">Interest</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="./images/9.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Decor Delights</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                        <a href="#" class="btn btn-primary">Interest</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="./images/10.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Finishing Touches</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                        <a href="#" class="btn btn-primary">Interest</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46436.11160636768!2d75.29096657107452!3d17.67926783373069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc4181b8db52943%3A0x1ab147f5432da578!2sPandharpur%2C%20Maharashtra%20413304!5e0!3m2!1sen!2sin!4v1710552988711!5m2!1sen!2sin" width="1300" height="300" style="border:0; margin-left:110px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <!--Footer -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Company</h5>
                    <ul class="list-unstyled">
                        <li><a href="./components/FAQ.html" class="custom-link">FAQ</a></li>
                        <li>Our Team</li>
                        <li>Contact <i class="fa-solid fa-phone"></i> 705-981-9696</li>
                        <li>Email: abc@gmail.com <i class="fa-solid fa-envelope"></i></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Things to Know</h5>
                    <ul class="list-unstyled">
                        <li>Orders, Payments, Shipping</li>
                        <li>Returns and Refunds</li>
                        <li><a href="./components/terms.html" class="custom-link">Terms of Service</a></li>
                        <li><a href="./components/privacy.html" class="custom-link">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <ul class="list-unstyled">
                        <li><i class="fab fa-facebook"></i> Facebook</li>
                        <li><i class="fab fa-twitter"></i> Twitter</li>
                        <li>Follow us on Instagram: <a href="https://www.instagram.com/ecoroot_2024">Instagram</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>&copy; 2024 ECOROOT. Sustainable Bamboo Products.</p>
                </div>
            </div>
        </div>
    </footer>


    <div class="popup-container" id="login-popup">
        <div class="popup-container" id="login-popup">
            <div class="popup">
                <form method="POST" action="login_register.php">
                    <h2>
                        <span>USER LOGIN</span>
                        <button type="reset" onclick="popup('login-popup')">X</button>
                    </h2>
                    <input type="text" placeholder="E-mail or Username" name="email_username">
                    <input type="password" placeholder="Password" name="password">
                    <button type="submit" class="login-btn" name="login">LOGIN</button>
                </form>
            </div>
        </div>
    </div>

    <div class="popup-container" id="register-popup">
        <div class="popup-container" id="register-popup">
            <div class="register popup">
                <form method="POST" action="login_register.php">
                    <h2>
                        <span>USER REGISTER</span>
                        <button type="reset" onclick="popup('register-popup')">X</button>
                    </h2>
                    <input type="text" placeholder="Full Name" name="fullname">
                    <input type="text" placeholder="Username" name="username">
                    <input type="email" placeholder="E-mail" name="email">
                    <input type="password" placeholder="Password" name="password">
                    <button type="submit" class="register-btn" name="register">REGISTER</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function popup(popup_name) {
            get_popup = document.getElementById(popup_name);
            if (get_popup.style.display == "flex") {
                get_popup.style.display = "none";
            }
            else {
                get_popup.style.display = "flex";
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="./script.js"></script>
</body>

</html>