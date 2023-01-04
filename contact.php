<?php
$ack = false;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "login/_db_conn.php";
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $emailid = $_POST['emailid'];
    $agegrp = $_POST['agegrp'];
    $cmessage = $_POST['cmessage'];
    $sql = "INSERT INTO contact VALUES (NULL, '$firstname', '$lastname', '$emailid', '$agegrp', '$cmessage')";
    $sql1 = "INSERT INTO `contact` (`srno`, `firstname`, `lastname`, `emailid`, `agegrp`, `cmessage`) VALUES (NULL, 'Urmi', 'Patel', 'urmi@gmail.com', '18 to 30', 'This is the first insert message');";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $ack = true;
        // header("location: emailsent.php");
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
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="aboutus.php">About us</a></li>
                <li><a class="active" href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
                <!-- <a href="login/login1.php"><button type="button" class="btn btn-outline-primary xyz">LOGIN</button></a> -->
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

    <section id="contact_form">
        <?php
        if ($ack) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong>Email has been sent. We will contact you.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
        ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div class="card mt-2 mx-auto p-4 bg-light">
                        <div class="card-body bg-light">
                            <div class="container">
                                <form id="contact-form" role="form" action="contact.php" method="POST">
                                    <div class="controls">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group"> <label for="form_name">Firstname *</label> <input id="form_name" type="text" name="firstname" class="form-control" placeholder="John" required="required" data-error="Firstname is required."> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"> <label for="form_lastname">Lastname *</label> <input id="form_lastname" type="text" name="lastname" class="form-control" placeholder="Smith" required="required" data-error="Lastname is required."> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group"> <label for="form_email">Email *</label> <input id="form_email" type="email" name="emailid" class="form-control" placeholder="johnsmith@abc.com" required="required" data-error="Valid email is required."> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"> <label for="form_need">Please specify your age group*</label> <select id="form_need" name="agegrp" class="form-control" required="required" data-error="Please specify your age group.">
                                                        <option value="" selected disabled>--Select Your Age Group--</option>
                                                        <option>Less than 18</option>
                                                        <option>Between 18 and 30</option>
                                                        <option>Between 30 and 45</option>
                                                        <option>Between 45 and 60</option>
                                                        <option>Older than 60</option>
                                                    </select> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group"> <label for="form_message">Write your message here*</label> <textarea id="form_message" name="cmessage" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea> </div>
                                            </div>
                                            <div class="col-md-12"> <input type="submit" class="btn btn-warning btn-send-message pt-2 btn-block " value="Send Message"> </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include "partials/_footer.php";
    ?>
    <script src="script.js"></script>
    <script src="JS/script.js"></script>
    <script src="shopping-cart.js"></script>
</body>

</html>