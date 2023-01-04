<?php
$login = false;
$showError = false;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "_db_conn.php";
    $emailid = $_POST['emailid'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE emailid = '$emailid' AND passwords = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $firstname = $row['firstname'];
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['firstname'] = $firstname;
        header("location: ../index.php");
        // header("location: welcome.php");
    } else {
        $showError = true;
    }
}
?>


<html>

<head>
    <title>Login & Registration</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.tutorialjinni.com/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://cdn.tutorialjinni.com/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.tutorialjinni.com/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.tutorialjinni.com/jquery-validate/1.19.1/jquery.validate.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://cdn.tutorialjinni.com/font-awesome/5.12.0/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="javascript" href="script.js">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div id="first">
                    <div class="myform form ">
                        <div class="logo mb-3">
                            <div class="col-md-12 text-center">
                                <h1>Login</h1>
                            </div>
                        </div>
                        <?php
                        if ($showError) {
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Faliure!</strong>Password does not match
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>';
                        }
                        session_start();
                        ?>
                        <form action="login1.php" method="post" name="login">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="emailid" class="form-control" id="emailid" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" name="password" id="password" class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                            </div>
                            <div class="form-group">
                                <p class="text-center">By signing up you accept our <a href="#">Terms Of Use</a></p>
                            </div>
                            <div class="col-md-12 text-center ">
                                <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button>
                            </div>
                            <div class="col-md-12 ">
                                <div class="login-or">
                                    <hr class="hr-or">
                                    <span class="span-or">or</span>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <p class="text-center">
                                    <a href="javascript:void();" class="google btn mybtn"><i class="fa fa-google-plus">
                                        </i> Signup using Google
                                    </a>
                                </p>
                            </div>
                            <div class="form-group">
                                <p class="text-center">Don't have account? <a href="#" id="signup">Sign up here</a></p>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="second">
                    <div class="myform form ">
                        <div class="logo mb-3">
                            <div class="col-md-12 text-center">
                                <h1>Signup</h1>
                            </div>
                        </div>
                        <form action="signup.php" method="post" name="registration">
                            <div class="form-group">
                                <label for="exampleInputEmail1">First Name</label>
                                <input type="text" name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter Firstname">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Last Name</label>
                                <input type="text" name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Enter Lastname">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="emailid" class="form-control" id="emailid" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" name="passwords" id="passwords" class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                            </div>

                            <div class="form-group">
                                <label for="cpassword">Confirm Password</label>
                                <input type="password" class="form-control" id="cpassword" name="cpassword" aria-describedby="emailHelp" placeholder="Enter Password">
                            </div>

                            <div class="col-md-12 text-center mb-3">
                                <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Get Started For Free</button>
                            </div>
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <p class="text-center"><a href="#" id="signin">Already have an account?</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>

</body>

</html>