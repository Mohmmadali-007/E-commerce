<link href="https://cdn.tutorialjinni.com/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://cdn.tutorialjinni.com/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.tutorialjinni.com/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.tutorialjinni.com/jquery-validate/1.19.1/jquery.validate.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<link href="https://cdn.tutorialjinni.com/font-awesome/5.12.0/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<link rel="javascript" href="script.js">


<?php
$showAlert = false;
$showError = false;
$showError_exist = false;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "_db_conn.php";
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $emailid = $_POST['emailid'];
    $passwords = $_POST['passwords'];
    $cpassword = $_POST['cpassword'];
    $exist_sql = "SELECT * FROM users WHERE emailid = '$emailid'";
    $exist_result = mysqli_query($conn, $exist_sql);
    $number_exist_row = mysqli_num_rows($exist_result);
    
    if ($number_exist_row > 0) {
        $showError_exist = true;
    } else {
        if ($passwords == $cpassword) {
            $sql = "INSERT INTO users VALUES (NULL, '$emailid', '$passwords', current_timestamp(), '$firstname', '$lastname')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true;
            }
        } else {
            $showError = true;
        }
    }
    
    if ($showError) {
        
        echo "Different passwords";
    }
    if ($showAlert) {
        session_start();
        $_SESSION['signed'] = true;
        header("location: login1.php");
        echo "Success";
    }
    if ($showError_exist) {
        echo "Exist";
    }
}
