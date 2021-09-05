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
                  
          <form style="padding:4% !important" action="#" method="post" class="form-control bg-light" >
            <div class="p-2 bg-light">
                <div class="container-fluid" id="control2">
                    <div class="" id="">
                        <h4 class="text-dark">Listig a new offer</h4>
                        <hr class="bg-white">
                    </div>
                </div>
            </div>
            <div class="col bg-light p-2">
             
              <!-- first row -->
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <input class="form-control is-valid" type="text" autofocus name="" id="item_name" placeholder="Item Name">
                  <div class="valid-feedback">
                    Looks good
                  </div>

                  <br>
                  <div class="form-group">

                    <textarea class="form-control is-invalid" id="" rows="3" placeholder="Item Description"></textarea>
                    <div class="invalid-feedback">
                      Please fill this field!
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="border p-2 form-group" id="images">
                    
                    <div class=" dropzone">
                      <img src="http://100dayscss.com/codepen/upload.svg" class="upload-icon" />
                      <!-- <img  src="../images/addimg.png" id="output" class="border p-1" style="width: 80px;height: 80px;"> -->
                      <input type="file" class="upload-input" accept="image/*" onchange="loadFile(event)">
                    </div>
                    <hr class="bg-white">


                  </div>
                      <script>
                        var loadFile = function(event) {
                          //getting a random number between 0 and 100 and assign it to a variable
                          var rand = parseInt(Math.random() * (100 - 0) + 0, 10)
                          //set it as an id for the div which will be appended next step
                          var div = "<div class='p-1 d-inline'><img id='"+rand+"' src='#' style='width: 80px;height: 80px;'></div>"
                          //append the div element with it's content to div images
                          $("#images").append(div);
                          var output = document.getElementById(rand);
                          output.src = URL.createObjectURL(event.target.files[0]);

                          output.onload = function() {

                            URL.revokeObjectURL(output.src) // free memory
                          }
                        };
                      </script>
                </div>
              </div>
              <!-- end first row -->
              <!-- second row -->
              <div class="rows p-3 mx-auto">
                <center>
                <span for="btngroup" class="pr-4 pb-2 text-dark">Offer type:</span>
                  <div id="btngroup" class="btn-group  btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-outline-dark active">
                      <input class="" type="radio" name="options" id="option1" autocomplete="off" checked> Gift <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gift-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3z"/>
                  <path d="M15 7v7.5a1.5 1.5 0 0 1-1.5 1.5H9V7h6zM2.5 16A1.5 1.5 0 0 1 1 14.5V7h6v9H2.5z"/>
                </svg>
                    </label>
                    <label class="btn btn btn-outline-dark" >
                      <input type="radio" name="options" id="option2" autocomplete="off"> Lending
                     <i class="fas fa-hand-holding-usd"></i>
                    </label>
                    <label class="btn btn btn-outline-dark">
                      <input type="radio" name="options" id="option3" autocomplete="off"> Sell
                      <i class="fas fa-dollar-sign"></i>
                    </label>
                  </div>
                  </center>

                
                
              </div>
              <div class="float-right pt-2">
                <button onclick="return confirm('Are you sure?')" type="cancel" class="btn btn-danger form-group ">Cancel</button>
                <button id="myBtn" type="button" style="width: 82px" class="btn btn-success form-group" onclick="">Post</button>
              </div>

            </div>
                  <!-- The Modal -->
          <div id="myModal" class="modal pt-2" style="position: relative;width: 100%">
            <!-- Modal content -->
            <div class="modal-content">
              <span style="color:green;font-size:30px;position:absolute">&check;  </span> 
              <p align="center">Your item have been posted succesfully! <a href="myitems.php" style="color: blue;">View it</a></p>
            </div>
          </div>
        </div>
      </form>
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



              <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>

