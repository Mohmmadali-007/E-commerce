<?php
    session_start();

    $id1 ="";
    if (isset($_GET["id1"])) {
        $id1 = $_GET["id1"];
    }

$database_name = "Product_details";
$con = mysqli_connect("localhost", "root", "", $database_name);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

    <link rel="stylesheet" href="Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>

<body>

    <section id="header" class="flex ">
        <a href="#"><img src="img/logo.png" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a  href="index.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a  href="aboutus.php">About us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
                <a href="login/login1.php"><button type="button" class="btn btn-outline-primary xyz" >LOGIN</button></a>
                <a href="#" id="close"><i class="fa fa-times" aria-hidden="true"></i></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="prodetails" class="section-p1">
        <?php
        $query = "SELECT * FROM product WHERE id = $id1";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_array($result);            
        ?>
        <div class="single-pro-img">
            <img src=<?php echo $row["image"]; ?> width="100%" id="Mainimg" alt="">
        </div>
        <div class="single-pro-details">
        <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
            <h6> Home/ T-Shirt</h6>
            <h4><?php echo $row["pname"]; ?></h4>
            <h2>$<?php echo $row["price"]; ?></h2>
            <select >
                <option>Select Size</option>
                <option>XL</option>
                <option>XXL</option>
                <option>Small</option>
                <option>Large</option>
            </select>               
            <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
            <input type="hidden" name="hidden_image" value="<?php echo $row["image"]; ?>">
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">                 
            <input type="number" name="quantity" class="tag" value="1"><br><br>
            <input type="submit" name="add" class="cart" value="Add to cart">
            <h4>Product Details</h4>
            <Span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni tenetur, cum id aspernatur enim ipsam possimus! Veritatis, laudantium. Quas dicta veritatis laborum at. Voluptates ut blanditiis odio nostrum. Voluptatem dolor tempore rerum. Nihil cumque, harum est sed accusamus, ratione, quae nemo laborum quisquam ullam modi eligendi dolorem quas in non!</Span>
        </form>

        </div>
    </section>

    <section id="product1" class="section-p1">
        <div class="pro-container">
            <?php
            $query = "SELECT * FROM product ORDER BY id ASC ";
            $result = mysqli_query($con, $query);
            $i = 0;
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)  AND $i < 4) {
                    $i = $i + 1;
            ?>
                    <div class="pro">
                        <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
                           <!-- <form action="sproduct.php?action=open&id=<?php echo $row["id"]; ?>"><img src="<?php echo $row["image"]; ?>" alt=""></form> -->
                           <a href="sproduct.php?id1=<?php echo $row["id"]; ?>"><img src="<?php echo $row["image"]; ?>" alt=""></a>
                           <!-- <img src="<?php echo $row["image"]; ?>" alt=""> -->
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
    <section id="newsletters" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up for Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers</span> </p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your Email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.png" alt="">
            <h4>contact</h4>
            <p><strong>Adress:</strong> 26,Kulbaitekra,SG Road,Ahemdabad</p>
            <p><strong>Phone:</strong> 02772281351 +91 9456321587 </p>
            <p><strong>Hours:</strong> 9:00 - 18:00 , Mon-Sat</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                    <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                    <i class="fab fa-youtube" aria-hidden="true"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="img/pay/app.jpg" alt="">
                <img src="img/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="img/pay/pay.png" alt="">
        </div>

        <div class="copyright">
            <p>Copyright © 2022 E-commerce Cara</p>
        </div>
    </footer>

    <script>
        var Mainimg = document.getElementById("Mainimg");
        var smallimg = document.getElementsByClassName("small-img");

        for (let i = 0; i < 4.; i++) {
            smallimg[i].onclick = function(){
            Mainimg.src = smallimg[i].src;
        }
        }
    </script>


    <script src="script.js"></script>
</body>

</html>