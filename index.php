<?php
session_start();
$database_name = "Product_details";
$con = mysqli_connect("localhost", "root", "", $database_name);

if (isset($_POST["add"])) {
    if (isset($_SESSION["cart"])) {
        $item_array_id = array_column($_SESSION["cart"], "product_id");
        if (!in_array($_GET["id"], $item_array_id)) {
            $count = count($_SESSION["cart"]);
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_image' => $_POST["hidden_image"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][$count] = $item_array;
            echo '<script>window.location="cart.php"</script>';
        } else {
            echo '<script>alert("Product is already Added to Cart")</script>';
            echo '<script>window.location="cart.php"</script>';
        }
    } else {
        $item_array = array(
            'product_id' => $_GET["id"],
            'item_image' => $_POST["hidden_image"],
            'item_name' => $_POST["hidden_name"],
            'product_price' => $_POST["hidden_price"],
            'item_quantity' => $_POST["quantity"],
        );
        $_SESSION["cart"][0] = $item_array;
    }
}

if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        foreach ($_SESSION["cart"] as $keys => $value) {
            if ($value["product_id"] == $_GET["id"]) {
                unset($_SESSION["cart"][$keys]);
                echo '<script>alert("Product has been Removed...!")</script>';
                echo '<script>window.location="cart.php"</script>';
            }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>

<body>

    <section id="header" class="flex ">
        <a href="#"><img src="img/logo.png" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="aboutus.php">About us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
                <?php
                // session_start();
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
    <section id="hero">
        <h4>Redefine your image</h4>
        <h2>Get the outfit of your own choice</h2>
        <h1>Customized designs</h1>
        <p>Also try our designer outfits</p>
        <button><a href="shop.php">Shop now</a></button>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f5.png" alt="">
            <h6>Happy sell</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f6.png" alt="">
            <h6>F24/7 Support</h6>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>All Time Trendy Collection</p>
        <div class="pro-container">

            <?php
            $query = "SELECT * FROM product ORDER BY id ASC ";
            $i = 0;
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result) and $i < 4) {
                    $i = $i + 1;
                }
                while ($row = mysqli_fetch_array($result) and $i < 12) {
                    $i = $i + 1;
            ?>
                    <div class="pro">
                        <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
                            <a href="sproduct.php?id1=<?php echo $row["id"]; ?>"><img src="<?php echo $row["image"]; ?>" alt=""></a>
                            <div class="des">
                                <span>adidas</span>
                                <h5><?php echo $row["pname"]; ?></h5>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>$<?php echo $row["price"]; ?></h4>
                                <!-- <input type="text" name="quantity" class="form-control" value="1"> -->
                                <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="hidden" name="hidden_image" value="<?php echo $row["image"]; ?>">

                                <!-- <i class="fa fa-shopping-cart cart" aria-hidden="true"></i> -->
                                <input type="number" name="quantity" class="tag" value="1">
                                <input type="submit" name="add" class="cart" value="Add to cart">
                            </div>
                        </form>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </section>



    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up tp <span>70% Off</span> - All t-shirts and accessories</h2>
        <a href="shop.php"><button class="normal">Explore More</button></a>
    </section>



    <section id="product1" class="section-p1">
        <h2>Latest Collection</h2>
        <p>Summer Collection New Morden Design</p>
        <div class="pro-container">
            <?php
            $query = "SELECT * FROM product ORDER BY id ASC ";
            $j = 0;
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result) and  $j < 4) {
                    $j = $j + 1;
            ?>
                    <div class="pro">
                        <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
                            <a href="sproduct.php?id1=<?php echo $row["id"]; ?>"><img src="<?php echo $row["image"]; ?>" alt=""></a>
                            <div class="des">
                                <span>adidas</span>
                                <h5><?php echo $row["pname"]; ?></h5>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>$<?php echo $row["price"]; ?></h4>
                                <!-- <input type="text" name="quantity" class="form-control" value="1"> -->
                                <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="hidden" name="hidden_image" value="<?php echo $row["image"]; ?>">

                                <!-- <i class="fa fa-shopping-cart cart" aria-hidden="true"></i> -->
                                <input type="number" name="quantity" class="tag" value="1">
                                <input type="submit" name="add" class="cart" value="Add to cart">
                            </div>
                        </form>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>Become own stylist</h4>
            <!-- <h2>buy 1 get 1 free</h2> -->
            <span>Read latest trends in fashion on our blogs</span>
            <a href="blog.php"><button class="white">Read more</button></a>
        </div>
        <div class="banner-box banner-box2">
            <h4>Trendy dress</h4>
            <!-- <h2>upcomming season</h2> -->
            <span>the best clasic dress is on sale at cara</span>
            <a href="shop.php"><button class="white">Collection</button></a>
        </div>
    </section>

    <!-- <section id="banner3">
        <div class="banner-box ">
            <h2>SEASON SALE</h2>
            <span>Winter collection-50% OFF</span>
        </div>
        <div class="banner-box banner-box2">
            <h2>NEW FOOTWARE COLLECTION</h2>
            <span>Spring/Summer 2022</span>
        </div>
        <div class="banner-box banner-box3">
            <h2>T-SHIRTS</h2>
            <span>New trendy prints</span>
        </div>
    </section> -->
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