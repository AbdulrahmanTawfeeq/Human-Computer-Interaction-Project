<!DOCTYPE html>
<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css.css">
    <!------ Include the above in your HEAD tag ---------->
</head>
<body>
   <!-- Header -->
   <?php include "sections/header.html" ?>
   <!-- End Header -->
    <div class="container-fluid login-container">
        <div class="row">
            <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 login-form-1 text-center d-none d-lg-block">
                <h2 class="text-center appDetails">Welcome to Borrow me</h2>
                  <p class="appDetails" style="margin-left: 5px;font-size: 12pt;">Here is the website that you and your neighbors can now get benefit from each other!</p>
                  <p style="margin-left: 5px;font-size: 12pt;">Sign up now to see what are the things that your nieghbors share.</p>
                  <img src="images/home.png" class="col-12" >
            </div>
            <div class="col-lg-5 login-form-1">
                <h3 class="p-3">Login</h3>
                <form>
                    <div class="form-group">
                        <input autofocus type="text" class="form-control col-12" placeholder="User Name" value="" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" value="" />
                    </div>
                    <div class="form-group text-center">
                        <input onclick="window.location.href='profile'" type="button" class="btnSubmit" value="Login" />
                    </div>
                    <div class="form-group text-center">
                        <a href="forgetpassword.php" class="ForgetPwd" value="Login">Forget Password?</a>
                    </div>
                    <hr>
                    <div class="form-group text-center">
                        <input onclick="window.location.href='signup.php'" type="button" class="btnSignup" value="Create New Account" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="page-footer font-small" style="background-color: black">

      <!-- Copyright -->
      <div class=" text-center py-3" style="color: white">
        <p>© Copyright 2019-2020 www.borrwme.ml All rights Reserved</p>

      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!-- Including Jquery for activing resposive design -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <?php include "profile/text.php"?>
</body>
</html>

