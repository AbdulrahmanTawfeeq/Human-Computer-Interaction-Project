<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Upload image style -->
    <link rel="stylesheet" type="text/css" href="upload.css">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css.css">
    <!-- Link to font awesome font -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <!-- Messaging  -->
    <style type="text/css">
      body {
        background-color: #74EBD5;
        background-image: linear-gradient(90deg, #74EBD5 0%, #9FACE6 100%);

        min-height: 100vh;
      }

      ::-webkit-scrollbar {
        width: 5px;
      }

      ::-webkit-scrollbar-track {
        width: 5px;
        background: #f5f5f5;
      }

      ::-webkit-scrollbar-thumb {
        width: 1em;
        background-color: #ddd;
        outline: 1px solid slategrey;
        border-radius: 1rem;
      }

      .text-small {
        font-size: 0.9rem;
      }

      .messages-box,
      .chat-box {
        height: 510px;
        overflow-y: scroll;
      }

      .rounded-lg {
        border-radius: 0.5rem;
      }

      input::placeholder {
        font-size: 0.9rem;
        color: #999;
      }

    </style>





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

            <div class="row pl-3"><a href="index.php"><i class="fas fa-arrow-left"></i>Home</a><h3></br> Messages</i></h3></div>
            <hr class="bg-light">
            <div class=" " name="content" id="control2">
              <div class="container py-5 px-4">
            
  <div class="row rounded-lg overflow-hidden shadow  border border border rounded">
    <!-- Users box-->
    <div class="col-5 px-0">
      <div class="bg-light">
        <div class="messages-box">
          <div class="list-group rounded-0">
            <div class="row">
                <div class=" form-inline col-12">
                     <input class="form-control py-2 col-lg-9 d-inline" type="search" value="" id="" placeholder="Search">
                    <span class="input-group-append">
                      <button class="btn btn-outline-info p-2 px-4 col-md-12" type="button">
                         <i class="fas fa-search"></i>
                      </button>
                    </span>
                  </div>
              </div>
            <a class="list-group-item list-group-item-action active text-dark rounded-0">
              <div class="media"><img src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt="user" width="50" class="rounded-circle">

                <div class="media-body ml-4">

                  <div class="d-flex align-items-center justify-content-between mb-1">
                    <h6 class="mb-0">Salam</h6><small class="small font-weight-bold">25 Dec</small>
                  </div>
                  <p class="font-italic mb-0 text-small d-none d-lg-block">I will contact you later.</p>
                </div>
              </div>
            </a>

            <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0 bg-light text-dark">
              <div class="media"><img src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt="user" width="50" class="rounded-circle">
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-1">
                    <h6 class="mb-0">Kareem</h6><small class="small font-weight-bold">14 Dec</small>
                  </div>
                  <p class="font-italic text-muted mb-0 text-small text-dark d-none d-lg-block">here you go.</p>
                </div>
              </div>
            </a>

            <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0 bg-light text-dark">
              <div class="media"><img src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt="user" width="50" class="rounded-circle">
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-1">
                    <h6 class="mb-0">Mohammed Hazim</h6><small class="small font-weight-bold">9 Nov</small>
                  </div>
                  <p class="font-italic text-muted mb-0 text-small text-dark d-none d-lg-block">always available.</p>
                </div>
              </div>
            </a>

            <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0 bg-light text-dark">
              <div class="media"><img src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt="user" width="50" class="rounded-circle">
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-1">
                    <h6 class="mb-0">Ibrahim</h6><small class="small font-weight-bold">18 Oct</small>
                  </div>
                  <p class="font-italic text-muted mb-0 text-small text-dark d-none d-lg-block">Make sure you bring all the items that I mentiond, I'm waiting you at 8 PM today beside the main bazar.</p>
                </div>
              </div>
            </a>

            <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0 bg-light text-dark">
              <div class="media"><img src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt="user" width="50" class="rounded-circle">
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-1">
                    <h6 class="mb-0">Hama</h6><small class="small font-weight-bold">17 Oct</small>
                  </div>
                  <p class="font-italic text-muted mb-0 text-small text-dark d-none d-lg-block">كاكه والله به كه نایە.</p>
                </div>
              </div>
            </a>

            <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0 bg-light text-dark">
              <div class="media"><img src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt="user" width="50" class="rounded-circle">
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-1">
                    <h6 class="mb-0">Azia</h6><small class="small font-weight-bold">2 Sep</small>
                  </div>
                  <p class="font-italic text-muted mb-0 text-small text-dark d-none d-lg-block">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>
            </a>

            <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0 bg-light text-dark">
              <div class="media"><img src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt="user" width="50" class="rounded-circle">
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-1">
                    <h6 class="mb-0">Sarwar</h6><small class="small font-weight-bold">30 Aug</small>
                  </div>
                  <p class="font-italic text-muted mb-0 text-small text-dark d-none d-lg-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                </div>
              </div>
            </a>

            <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0 bg-light text-dark">
              <div class="media"><img src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt="user" width="50" class="rounded-circle">
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-3">
                    <h6 class="mb-0">Rosa</h6><small class="small font-weight-bold">21 Aug</small>
                  </div>
                  <p class="font-italic text-muted mb-0 text-small text-dark d-none d-lg-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                </div>
              </div>
            </a>

          </div>
        </div>
      </div>
    </div>
    <!-- Chat Box-->
    <div class="col-7 px-0">
      <div class="px-4 py-5 chat-box bg-light">
        <!-- Sender Message-->
        <div class="media col-10 mb-3"><img src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt="user" width="50" class="rounded-circle">
          <div class="media-body ml-3">
            <div class="bg-light rounded py-2 px-3 mb-2">
              <p class="text-small mb-0 text-muted">Test which is a new approach all solutions</p>
            </div>
            <p class="small text-muted">12:00 PM | Aug 13</p>
          </div>
        </div>

        <!-- Reciever Message-->
        <div class="media col-10 ml-auto mb-3">
          <div class="media-body">
            <div class="bg-primary rounded py-2 px-3 mb-2">
              <p class="text-small mb-0 text-dark">Test which is a new approach to have all solutions</p>
            </div>
            <p class="small text-muted">12:00 PM | Aug 13</p>
          </div>
        </div>

        <!-- Sender Message-->
        <div class="media col-10 mb-3"><img src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt="user" width="50" class="rounded-circle">
          <div class="media-body ml-3">
            <div class="bg-light rounded py-2 px-3 mb-2">
              <p class="text-small mb-0 text-muted">Test, which is a new approach to have</p>
            </div>
            <p class="small text-muted">12:00 PM | Aug 13</p>
          </div>
        </div>

        <!-- Reciever Message-->
        <div class="media col-10 ml-auto mb-3">
          <div class="media-body">
            <div class="bg-primary rounded py-2 px-3 mb-2">
              <p class="text-small mb-0 text-dark">Apollo University, Delhi, India Test</p>
            </div>
            <p class="small text-muted">12:00 PM | Aug 13</p>
          </div>
        </div>

        <!-- Sender Message-->
        <div class="media col-10 mb-3"><img src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt="user" width="50" class="rounded-circle">
          <div class="media-body ml-3">
            <div class="bg-light rounded py-2 px-3 mb-2">
              <p class="text-small mb-0 text-muted">Test, which is a new approach</p>
            </div>
            <p class="small text-muted">12:00 PM | Aug 13</p>
          </div>
        </div>

        <!-- Reciever Message-->
        <div class="media col-10 ml-auto mb-3">
          <div class="media-body">
            <div class="bg-primary rounded py-2 px-3 mb-2">
              <p class="text-small mb-0 text-dark">Apollo University, Delhi, India Test</p>
            </div>
            <p class="small text-muted">12:00 PM | Aug 13</p>
          </div>
        </div>

      </div>

      <!-- Typing area -->
      <form action="#" class="bg-light">
        <div class="input-group">
          <input type="text" placeholder="Type a message" aria-describedby="button-addon2" class="form-control rounded-0 border-0 py-4 bg-light">
          <div class="input-group-append">
            <button id="button-addon2" type="submit" class="btn btn-link"> <i class="fa fa-paper-plane"></i></button>
          </div>
        </div>
      </form>

    </div>
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

