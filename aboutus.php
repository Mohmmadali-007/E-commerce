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
    .img-fluid{
      width:100%;
      align-items:center;
      height: 400px;
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
        <li><a href="blog.php">Blog</a></li>
        <li><a class="active" href="aboutus.php">About us</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
        <!-- <a href="login/login.php"><button type="button" class="btn btn-outline-primary xyz" >LOGIN</button></a> -->
        <?php
        session_start();
        if (isset($_SESSION['loggedin'])) {
          echo "   <div class='btn-group' role='group'>
                    <button id='btnGroupDrop1' type='button' class='btn btn-outline-primary xyz dropdown-toggle' data-bs-toggle='dropdown' aria-expanded='false'>
                    " . $_SESSION['firstname'] . "
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

  <div class="bg-light">
    <div class="container py-5">
      <div class="row h-100 align-items-center py-5">
        <div class="col-lg-6">
          <h1 class="display-4">Our Vision</h1>
          <!-- <p class="lead text-muted mb-0">Redefine your image</p> -->
          <h4 class="text-muted">Redefine your image</h4>
          <p class="lead text-muted">
            "Your dress is your first image"
          </p>
          <p class="lead text-muted">
            We work at <strong>Cara</strong> to redefine your image by providing makeover just fit for you.
            Customized products are available. Contact us to change your idea of outfit into reality.
          </p>
        </div>
        <div class="col-lg-6 d-none d-lg-block"><img src="https://bootstrapious.com/i/snippets/sn-about/illus.png" alt="" class="img-fluid"></div>
      </div>
    </div>
  </div>
  <div class="bg-white py-5">
    <div class="container py-5">
      <div class="row align-items-center">
        <div class="col-lg-5 px-5 mx-auto"><img src="https://bootstrapious.com/i/snippets/sn-about/img-2.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
        <div class="col-lg-6">
          <h2 class="font-weight-light">Our Team</h2>
          <p class="font-italic text-muted mb-4">We are here to provide you with great design and functionalities to make your company a brand, your vision into real website to adevertise and reach out the crowd</p>
        </div>
      </div>
    </div>
  </div>

  <div class="py-5 team3 bg-light">
    <div class="container">
      <div class="row justify-content-center mb-4">
        <div class="col-md-7 text-center">
          <h3 class="mb-3">OUR PROJECT TEAM</h3>
          <h6 class="subtitle font-weight-normal">You can relay on our amazing features list and also our customer services will be great experience for you without doubt and in no-time</h6>
        </div>
      </div>
      <div class="row">
        <!-- column  -->
        <div class="col-lg-4 mb-4 ">
          <!-- Row -->
          <div class="row">
            <div class="col-md-12 ">
              <img src="img/about/me2.jpg" alt="wrapkit" class="img-fluid" />
            </div>
            <div class="col-md-12">
              <div class="pt-2">
                <h5 class="mt-4 font-weight-medium mb-0">Mohmmadali Aglodiya</h5>
                <p>You can relay on our amazing features list and also our customer services will be great experience.</p>
              </div>
            </div>
          </div>
          <!-- Row -->
        </div>
        <!-- column  -->
        <!-- column  -->
        <div class="col-lg-4 mb-4">
          <!-- Row -->
          <div class="row">
            <div class="col-md-12 pro-pic">
              <img src="img/about/urmi.jpg" alt="wrapkit" class="img-fluid" />
            </div>
            <div class="col-md-12">
              <div class="pt-2">
                <h5 class="mt-4 font-weight-medium mb-0">Urmi patel</h5>
                <p>You can relay on our amazing features list and also our customer services will be great experience.</p>
                <ul class="list-inline">
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-behance"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Row -->
        </div>
        <!-- column  -->
        <!-- column  -->
        <div class="col-lg-4 mb-4">
          <!-- Row -->
          <div class="row">
            <div class="col-md-12 pro-pic">
              <img src="img/about/yash.jpg" alt="wrapkit" class="img-fluid" />
            </div>
            <div class="col-md-12">
              <div class="pt-2">
                <h5 class="mt-4 font-weight-medium mb-0">Yash Mori</h5>
                <p>You can relay on our amazing features list and also our customer services will be great experience.</p>
                <ul class="list-inline">
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-behance"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Row -->
        </div>
        <!-- column  -->
      </div>
    </div>
  </div>

  <?php
  include "partials/_footer.php";
  ?>
  <script src="script.js"></script>
</body>

</html>