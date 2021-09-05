<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css.css">
    <!------ Include the above in your HEAD tag ---------->
</head>
<body class="bg-light">
    <!-- Header -->
   <?php include "sections/header.html" ?>
   <!-- End Header -->
    <div class="container login-container bg-light pb-3 pt-3">
      <div class="row d-none d-xl-none p-3">
        <a href="index.php" class="text-white"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
        </svg></a>
        
      </div>
       <form class="col-lg-8 mx-auto bg-secondary pl-5 pt-3" style=""> 
        <h1 class="text-center text-white mr-5 mt-5">Reset Your password</h1>
        <br>

         <div class="form-group row mx-auto">
           <input type="email" class="form-control col-lg-10 " id="" placeholder="User Name, Email or phone number">
         </div>

        
            <!-- Seperate the input fields when the screeen is less than large -->
            <div class="d-xl-none d-lg-none"><br></div>
             

            <div class=" d-none d-lg-inline" onmousemove="//alert('Keep going')">
                  
            </div>
            <div class="mr-5 p-2">
              <div class="form-group row align-baseline">
                <div class="col text-center">
                  <button onclick="window.location.href='profile'" class="btn btn-primary ">Reset my password</button>
                </div>
              </div>
              </div> 
          </div>
          
       </form>

    </div>

    <!-- Footer -->
    <footer class="page-footer font-small bg-dark" style="">

      <!-- Copyright -->
      <div class=" text-center py-3" style="color: white">
        <p>© Copyright 2019-2020 www.borrwme.ml All rights Reserved</p>

      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!-- Including Jquery for activing resposive design -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <?php include "profile/text.php"?>
</body>
</html>

