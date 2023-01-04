<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

    <link rel="stylesheet" href="Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <style>
        #blog {
            padding: 50px 50px;
            display: flex;
            flex-direction: unset;
            height: 100%;
        }

        #blog .card img {
            width: 100%;
            height: 100%;
        }

        #blog .card-body {
            width: 1000px;
        }

        #blog .card-body h5 {
            font-size: 50px;
            line-height: 64px;
            font-weight: 700;
            color: #222;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #blog .card-body p {
            font-size: 15px;
            font-weight: 700;
            color: #222;
        }

        .line {
            border-top: 2px solid #E3E6F3;
            width: 100%
        }
    </style>
</head>

<body>

    <section id="header" class="flex ">
        <a href="#"><img src="img/logo.png" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a class="active" href="blog.php">Blog</a></li>
                <li><a href="aboutus.php">About us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
                <!-- <a href="login/login1.php"><button type="button" class="btn btn-outline-primary xyz" >LOGIN</button></a> -->
                <?php
                session_start();
                if (isset($_SESSION['loggedin'])) {
                    echo "   <div class='btn-group' role='group'>
                    <button id='btnGroupDrop1' type='button' class='btn btn-outline-primary xyz dropdown-toggle' data-bs-toggle='dropdown' aria-expanded='false'>
                    " . $_SESSION['firstname'] .
                        "
                    </button>
                    <ul class='dropdown-menu' aria-labelledby='btnGroupDrop1'>
                        <li><a class='dropdown-item' href='logout.php'>LOGOUT</a></li>
                    </ul>
                    </div>";
                } else {
                    echo "  <a href='login/login1.php'><button type='button' class='btn btn-outline-primary xyz' >LOGIN</button></a>";
                }
                ?>
                <a href="#" id="close"><i class="fa fa-times" aria-hidden="true"></i></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <div class="container">

        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (isset($_POST["1"])) {

        ?>

                <section id="blog">
                    <div class="card mb-3">
                        <img src="img/blog/b1.jpg" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="blog-title">3 Ways You Can Ace Dopamine Dressing</h5>
                        <p class="card-details lead text-muted">Dopamine dressing has been of interest, dating back to the ancient Egyptians. The desire to dress and choose colours based
                            on mood isn't new. Colour is closely associated with our emotions, it is the first thing we register, making it a language we
                            are all fluent in.</p>
                        <p class="blog-text lead text-muted"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </section>
                <div class="line"></div>

                <section id="blog">
                    <div class="card-body">
                        <p class="blog-text lead text-muted">Dopamine dressing has been of interest, dating back to the ancient Egyptians. The desire to dress and choose colours based
                            on mood isn't new. Colour is closely associated with our emotions, it is the first thing we register, making it a language we
                            are all fluent in.
                            Catching on with the Dopamine Dressing trend, Label RSVP from The House Of Nykaa Fashion has aced it with their
                            latest collection of Dopamine Brights featuring unique silhouettes that elevate confidence and escalate style!
                        </p>

                        <p class="blog-text lead text-muted">
                            Here are 3 Ways You Can Ace Dopamine Dressing:
                        </p>

                        <p class="blog-text lead text-muted">
                            Jumpsuits
                        </p>

                        <p class="blog-text lead text-muted">
                            In search of modern glamour, bright colours and unique silhouettes for your wardrobe? You've come to the right place!
                            Our stunning range of Dopamine Bright jumpsuits are sure to make you look sophisticated, trendy and spectacular, all at
                            once. Shoulder straps with pearl detail and a self-fabric belt with a pearl-embellished buckle shall make you outstanding on
                            every occasion!
                        </p>

                        <p class="blog-text lead text-muted">
                            Co-ord Sets
                        </p>

                        <p class="blog-text lead text-muted">
                            Create the casual ease of a co-ord set with our dopamine brights! A pink, sleeveless vest top with a v-neckline put together
                            with pink, flared, high-waist pants will elevate your style.</p>
                    </div>
                </section>
        <?php
            }
        }
        ?>

        <?php

        if (isset($_POST["2"])) {

        ?>

            <section id="blog">
                <div class="card mb-3">
                    <img src="img/blog/b2.jpg" alt="Card image cap">
                </div>
                <div class="card-body">
                    <h5 class="blog-title">WORKLEISURE</h5>
                    <p class="card-details lead text-muted">Ever since the pandemic,
                        the office culture has not been the same anymore including the kinds of clothes
                        we're wearing to the office. Hybrid, working from home or working in the office,
                        the new working culture has manifested a new kind of workwear, 'Workleisure',
                        which in layman's terms is athleisure that is stylish enough to wear to work!
                    </p>
                    <p class="blog-text lead text-muted"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </section>
            <div class="line"></div>

            <section id="blog">
                <div class="card-body">
                    <p class="blog-text lead text-muted">Ever since the pandemic,
                        the office culture has not been the same anymore including the kinds of clothes
                        we're wearing to the office. Hybrid, working from home or working in the office,
                        the new working culture has manifested a new kind of workwear, 'Workleisure',
                        which in layman's terms is athleisure that is stylish enough to wear to work!
                    </p>

                    <p class="blog-text lead text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, sequi?
                    </p>

                    <p class="blog-text lead text-muted">
                        Lorem.
                    </p>

                    <p class="blog-text lead text-muted">
                        In search of modern glamour, bright colours and unique silhouettes for your wardrobe? You've come to the right place!
                        Our stunning range of Dopamine Bright jumpsuits are sure to make you look sophisticated, trendy and spectacular, all at
                        once. Shoulder straps with pearl detail and a self-fabric belt with a pearl-embellished buckle shall make you outstanding on
                        every occasion!
                    </p>

                    <p class="blog-text lead text-muted">
                        Co-ord Sets
                    </p>

                    <p class="blog-text lead text-muted">
                        Create the casual ease of a co-ord set with our dopamine brights! A pink, sleeveless vest top with a v-neckline put together
                        with pink, flared, high-waist pants will elevate your style.</p>
                </div>
            </section>
        <?php
        }

        ?>
    </div>
    <div class="line"></div>

    <section id="newsletters" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up for Blogs</h4>
            <p>Post your knowledge about fashion and become <span>blogger</span> </p>
        </div>
        <!-- <div class="form"> -->
        <form action="newsletter.php" method="post" class="form">
            <input type="text" placeholder="Your Email address" name="uemailid">
            <button type="submit" class="normal">Sign up</button>
            <!-- <button class="normal">Sign Up</button> -->
            <!-- <input type="text" placeholder="Your Email address"> -->
        </form>
        <!-- </div> -->
    </section>

    <?php
    include "partials/_footer.php";
    ?>


    <script src="script.js"></script>
</body>

</html>