<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Upload image style -->
    <link rel="stylesheet" type="text/css" href="upload.css">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css.css">
    <!-- Link to font awesome font -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>





    <!-- Sidebar style -->
     <link rel="stylesheet" href="sidebar/style.css">
    <!------ Include the above in your HEAD tag ---------->
</head>
    <!-- Main Header -->
    <?php include "sections/header.html" ?>
    <!-- End main header -->

<body class="bg-secondary" id="control1">
  <!-- Hole page container -->
    <div class="container-fluid login-container pt-3">
      
      <!-- Second header start -->
      <?php include "sections/second-header.html" ?>
      <!-- Second header End -->

      <!-- Start pages content-->
      <!-- using wroapper to gather both left and right columns -->
      <div class="wrapper">
        <!-- Sidebar  -->
       <?php Include "sidebar/sidebar.html"  ?>
        <!-- Side bar end -->

        <!-- Page Content  -->
        <div id="content">
          <button type="button" id="sidebarCollapse" class="btn btn-info d-lg-none d-md-none">
              <i class="fas fa-align-left"></i>
              <span>Show options</span>
          </button>
                  
          <form style="padding:4% !important" action="#" method="post" class="form-control bg-light text-dark" >
            <div class="row pl-3"><h3>My Favorites <i class="fas fa-heart float-right ml-3 text-warning"></i></h3></div>
            <hr class="bg-light">
            <div class=" " name="content" id="control2">
              <div class="row p-2 mt-2 border rounded bg-light text-dark">
                <div class="col-sm "><img class="rounded img-thumbnail" src="../images/i1.jpg"></div>
                <div class="col-lg-6">
                  <div class="p-1">DE-Walt Drell</div>
                  <div class="p-1"><small>A good drell quality can work effecintly for 4 hours with the charge</small></div>
                  <div class="p-1"><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Sulaymaniyah </div>
                    <div class="p-1"><i class="fas fa-user"></i>  &nbsp;By <a href="#" class="text-success"> Mohammed S. Hazim</a> </div>
                </div>
                <div class="col-sm">
                  <center>
                    <div class="text-success p-1">Available <i class="fas fa-calendar-check"></i></div>
                    <div class="p-1">Gift <i class="fas fa-gift ml-2"></i></div>
                  </center>
                </div>
                <div class="col-sm justify-content-md-center">
                  <center>
                     <div class="col p-1 ">
                        <button class="btn btn-outline-primary">Request<i class="fas fa-cart-plus ml-1"></i></button>
                      </div>
                      <div class="col p-1">
                        <button onclick="return confirm('Are you sure?');" class="btn btn-outline-danger">Remove<i class="fas fa-trash ml-1"></i></button>
                      </div>
                  </center>
                </div>
              </div>
              <div class="row p-2 mt-2 border rounded bg-light text-dark">
                <div class="col-sm "><img class="rounded img-thumbnail" src="../images/i2.jpg"></div>
                <div class="col-lg-6">
                  <div class="p-1">DE-Walt Drell</div>
                  <div class="p-1"><small>A good drell quality can work effecintly for 4 hours with the charge</small></div>
                 <div class="p-1"><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Sulaymaniyah </div>
                    <div class="p-1"><i class="fas fa-user"></i>  &nbsp;By <a href="#" class="text-success"> Mohammed S. Hazim</a> </div>
                </div>
                <div class="col-sm">
                  <center>
                    <div class="text-success p-1">Available <i class="fas fa-calendar-check"></i></div>
                    <div class="p-1">Lending <i class="fas fa-hand-holding-usd"></i></div>
                  </center>
                </div>
                <div class="col-sm justify-content-md-center">
                  <center>
                     <div class="col p-1 ">
                        <button class="btn btn-outline-primary">Request<i class="fas fa-cart-plus ml-1"></i></button>
                      </div>
                      <div class="col p-1">
                        <button onclick="return confirm('Are you sure?');" class="btn btn-outline-danger">Remove<i class="fas fa-trash ml-1"></i></button>
                      </div>
                  </center>
                </div>
              </div>
              <div class="row p-2 mt-2 border rounded bg-light text-dark">
                <div class="col-sm "><img class="rounded img-thumbnail" src="../images/i3.jpg"></div>
                <div class="col-lg-6">
                  <div class="p-1">DE-Walt Drell</div>
                  <div class="p-1"><small>A good drell quality can work effecintly for 4 hours with the charge</small></div>
                  <div class="p-1"><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Sulaymaniyah </div>
                    <div class="p-1"><i class="fas fa-user"></i>  &nbsp;By <a href="#" class="text-success"> Mohammed S. Hazim</a> </div>
                </div>
                <div class="col-sm">
                  <center>
                    <div class="text-success p-1">Available <i class="fas fa-calendar-check"></i></div>
                    <div class="p-1">Gift <i class="fas fa-gift ml-2"></i></div>
                  </center>
                </div>
                <div class="col-sm justify-content-md-center">
                  <center>
                     <div class="col p-1 ">
                        <button class="btn btn-outline-primary">Request<i class="fas fa-cart-plus ml-1"></i></button>
                      </div>
                      <div class="col p-1">
                        <button onclick="return confirm('Are you sure?');" class="btn btn-outline-danger">Remove<i class="fas fa-trash ml-1"></i></button>
                      </div>
                  </center>
                </div>
              </div>
            </div>
          </form>
        </div>
     
    </div>
      <!-- End page content -->
      
    </div>

    <!-- Footer -->
    <?php include "sections/footer.html" ?>
    <!-- Footer -->

    <!-- Including Jquery for activing resposive design -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>

    <!-- When user keep the item field empty -->
    <script type="text/javascript">
                $("#item_name").change(
                    function() {
                      alert( "Handler for .change() called." );
                    }
                  );
              </script>
              <!-- Switching mode to light and dark -->
              <script type="text/javascript" src="mode.js"></script>
</body>
</html>

