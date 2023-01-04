
    <section id="header" class="flex ">
        <a href="#"><img src="img/logo.png" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a  href="aboutus.php">About us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.html"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
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
            <a href="cart.html"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>