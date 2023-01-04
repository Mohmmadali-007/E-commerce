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
                'item_name' => $_POST["hidden_name"],
                'item_image' => $_POST["hidden_image"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][$count] = $item_array;
            $_SESSION['id1'] = $_GET['id'];
            echo '<script>window.location="cart.php"</script>';
        } else {
            echo '<script>alert("Product is already Added to Cart")</script>';
            echo '<script>window.location="cart.php"</script>';
        }
    } else {
        $item_array = array(
            'product_id' => $_GET["id"],
            'item_name' => $_POST["hidden_name"],
            'item_image' => $_POST["hidden_image"],
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

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
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="aboutus.php">About us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
                <!-- <a href="login/login1.php"><button type="button" class="btn btn-outline-primary xyz">LOGIN</button></a> -->
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

    <section id="page-header">
        <h2>#Redefine Image</h2>
        <p>Customize or Choose from collection</p>
    </section>

    <section id="product1" class="section-p1">
        <div class="pro-container">
            <?php
                $query = "SELECT * FROM product ORDER BY id ASC ";
                $i = 0;
                $result = mysqli_query($con, $query);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result) and $i < 27) {
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

    <section id="pagination" class="section-p1">
        <a href="shop.php">1</a>
        <a href="shop1.php">2</a>
        <a href="#"><i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i></a>
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

    <?php
    include "partials/_footer.php";
    ?>

    <script src="script.js"></script>
</body>

</html>