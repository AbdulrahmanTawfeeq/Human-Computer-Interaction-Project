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
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          <span class="navbar-brand mb-0 h1"><a href="index.php" class="text-white d-none d-lg-block d-xl-block">BM</a>
            <a href="index.php" class="text-white d-block d-lg-none"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
        </svg></a></span>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact-Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About-Us</a>
              </li>
            </ul>

              <div class="navbar-collapse collapse order-3 dual-collapse2">
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                          <a class="nav-link" href="index.php">Login</a>
                      </li>
                  </ul>
              </div>
          </div>
        </nav>
    </header>
    <div class="container login-container bg-light">
      <div class="row d-none d-xl-none p-3">
        <a href="index.php" class="text-white"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
        </svg></a>
        
      </div>
       <form class="col-lg-8 mx-auto bg-secondary pl-5 pt-3" style=""> 
        <h1 class="text-center text-white mr-5 mt-5">Join Borrow me</h1>
        <br>
         <div class="form-group mx-auto">
             <div class="d-inline" style="">
                  <input autofocus type="text" class="form-control col-lg-5 d-inline" id=""  placeholder="First Name">
            </div>
            <!-- Seperate the input fields when the screeen is less than large -->
            <div class="d-xl-none d-lg-none"><br></div>
             <div class="d-inline">
                 <input type="text" class="form-control col-lg-5  d-inline" id=""  placeholder="Last Name">
            </div>
          </div>
         <div class="form-group row mx-auto">
           <input type="email" class="form-control col-lg-10 " id="" placeholder="Email Address">
         </div>
         <div class="form-group row mx-auto">
           <select class="form-control col-lg-10" id="">
            <option value="">Select City</option>
            <option value="1">Sulaymaniyah</option>
            <option value="2">Erbil</option>
            <option value="3">Baghdad</option>
          </select>
         </div>
         <div class="form-group row mx-auto">
           <input type="email" class="form-control col-lg-10 " id="" placeholder="User Name">
           <p class="d-lg-none text-white">User name should be only letters and numbers</p>

           <div class="d-none d-lg-inline ml-2" onclick="alert('User name should be only letters and numbers')">
                   <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-info-circle d-inline text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                  <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
                  <circle cx="8" cy="4.5" r="1"/>
                </svg>
                 </div>
          
         </div>
        
          <div class="form-group mx-auto">
             <div class="d-inline" style="">
                  <input type="password" class="form-control col-lg-5 d-inline" id=""  placeholder="Password">
            </div>

            <!-- Seperate the input fields when the screeen is less than large -->
            <div class="d-xl-none d-lg-none"><br></div>
             <div class="d-inline">
                 <input type="password" class="form-control col-lg-5 d-inline "  placeholder="Confirm Password">
                 <p class="d-lg-none text-white">Password should be written</p>
            </div>

            <div class=" d-none d-lg-inline" onclick="alert('password should be at least 8 characters')">
                   <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-info-circle d-inline text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                  <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
                  <circle cx="8" cy="4.5" r="1"/>
                </svg>
            </div>
            
          </div>
          <div class="mr-5">
          <div class="form-group row align-baseline">
            <div class="col text-center">
              <button class="btn btn-primary col-5 ">Sign up</button>
            </div>
          </div>
         <div class="form-group row">
            <div class="col text-center">
              <span class="col-5 text-white">Already Have an account?</span>
            </div>
          </div>
        
          <div class="form-group row">
            <div class="col text-center pb-3">
              <a href="index.php" class="col-5 btn btn-secondary">Login</a>
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

