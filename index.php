<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="image/logo1.jpg">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style/bootstrap/bootstrap.min.css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="style/fontawesome-free-5.13.0-web/css/all.min.css">
    <title>Admin</title>
    
    <style>
      .main_content{
        background-color: #4a940a;
        margin:0;
        padding:0;
        height: 100vh;
        overflow: hidden;
      }
      .main_content_row{
        padding: 0;
        margin:0;
        position: relative;
        overflow: hidden;
      }
      .left-menu-bar{
        /*#e1fcca,#c6ebbc,#222d32*/
        background-color: #caf2bf;
        padding: 0;
        height: 100vh;
        position: relative;
        border-right: 1px solid #ccc;
      }
      .content{
        /*#edf5eb#f8fff2*/
        background-color: #edf5eb;
        padding: 0;
        position: relative;
        height: 100vh;
        /*overflow: auto;*/
      }
      .content .topbar{
        /*#59a345,#77bf39*/
        top: 0;
        background-color: #67b352;
        width: 100%;
        padding: 10px 10px;
        position: absolute;
        color: #fff;
      }
      .content .content_data{
        width: 100%;
        height: 100%;
        padding-top: 45px;
        overflow: auto;
        /*margin-bottom: 0px;*/
        padding-bottom: 40px; /*if you use status bar u need to add margin-bottom*/
      }
      .content .status_bar{
       /* display: none; Enable this line if you want to use status bar at bottom of page*/
        bottom: 0;
        width: 100%;
        background-color: #fff;
        position: absolute;
        padding: 5px 10px;
        font-size: 13px;
      }
    </style>

  </head>
  <body>
    <div class="container-fluid main_content">
      <div class="row main_content_row">
        <!-- Start left side of menu -->
        <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12 left-menu-bar">
          TEST
        </div>
        <!-- End Left side menu bar -->

        <!-- Start Content section -->
        <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12 content">
          <!-- Start top bar menu -->
          <div class="topbar">
              <span style="float: left;"><i class="fas fa-bars"></i> &nbsp;</span><span>HOME</span>
              <span style="float: right;">SING OUT <i class="fas fa-sign-out-alt"></i></span>
          </div>
          <!-- End Top bar menu -->

          <!-- Start Content Data -->
          <div class="content_data">
            Start here..!
          </div>
          <!-- End Content data -->

          <!-- If you want to use status bar at bottom of page -->
          <div class="status_bar">
            <span>Copyright © 2020 Tin Kirivuth. All rights reserved.</span>
            <span style="float: right;">Version 1.0</span>
          </div>
          <!-- End Status bar -->
        </div>
        <!-- End Content section -->

      </div>
    </div>









    <!-- Optional Jquery -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
  </body>
</html>