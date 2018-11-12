<?php
    session_start();




 ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="" />
    <!-- <script scr="../js/ajax.js"></script> -->


    <script>
    function getMeme(tag){

        $('#content').empty();
        var formData = new FormData();

        // var sql = "SELECT * FROM memes WHERE tags = '"+ tag + "' AND id BETWEEN"+x+"AND"+y;
        var sql = "SELECT * FROM memes WHERE tags = '"+ tag + "'";

        formData.append('sql', sql);


          $.ajax({
              type:'POST',
              url:'../tags/getMeme.php',
              processData: false,
              contentType: false,
              data:formData,
              success: function(data){

                  var parseIt = $.parseJSON(data);

                  for(x=0;x<100;x++){

                      document.getElementById('content').innerHTML += "<img width=\"300px\" src=\"" + parseIt[x].url + "\"alt=\"oops...\"> <br>";

                  }

              }
          });
    }
    </script>


    <title>Home - Memeus Supremus</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="../css/new-style.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet" />
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css"  />
    <link href="../css/lightbox.min.css" rel="stylesheet" />
    <link href="../css/lity.min.css" rel="stylesheet" />
    <link href="../css/template.css" rel="stylesheet"/>
    <link href="../css/motal.css" rel="stylesheet"/>
  </head>
  <body>
  <!-- Top small banner -->
  <header class="float-left w-100">
    <div class="small-top float-left w-100">
      <div class="container-fluid">
        <div class="row px-3">
          <div class="col-lg-4 date-sec">
          </div>
          <div class="col-lg-3 ml-auto">
            <div class="social-icon">
              <a href="#" class=" fa fa-facebook"></a>
              <a href="#" class=" fa fa-twitter"></a>
              <a href="#" class=" fa fa-google-plus"></a>
              <a href="#" class=" fa fa-linkedin"></a>
              <a href="#" class=" fa fa-youtube"></a>
              <a href="#" class=" fa fa-vimeo-square"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="top-head left">
      <div class="container-fluid">
        <div class="row px-3">
          <div class="col-md-6 col-lg-4 mt-2">
            <h1><a href="../index.html">Greatest MEME's<small>Get the best one below!!</small></a></h1>
          </div>
          <div class="col-md-6 col-lg-5 admin-bar ml-auto mt-2">
            <nav class="nav justify-content-end">
              <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Login</button>

              <!-- Modal -->
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content" id = "modalContent">
                    <div class="modal-header" id = "modalHeader">
                        <h4 id = "loginH4" class="modal-title">Login</h4>
                      <button id="closeBtn" type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body" id = "modalBody">
                      <p id = "userNameWord"> Username:</p>
                      <input type="text" class="form-control" id="usr"> <br>
                      <p id = "passWordP">Password:</p>
                      <input type="password" class="form-control" id="pwd">

                    </div>
                    <div class="modal-footer" id = "modalFooter">
                      <button type="button" class="btn btn-info" data-dismiss="modal">Login</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>

                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Top Navigation -->
  <section class="top-nav">
    <nav class="navbar navbar-expand-lg py-0">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item"> <a class="nav-link" href="../index.html">Home</a> </li>
            <li class="nav-item"> <a class="nav-link" href="../tags/tags.html">Tags</a> </li>
            <li class="nav-item"> <a class="nav-link" href="../about/index.html">About Us</a> </li>
            <li class="nav-item"> <a class="nav-link" href="../upload/index.php">Upload</a> </li>
          </ul>
          <form class="ml-auto">
          </form>
        </div>
      </div>
    </nav>
  </section>
<!-- tags page below    -->
  <section id="sectiontags">
    <center>
    <h2> Tags </h2>
      <div id="tags">
        <button type="button" onclick="getMeme('Sports');" id="Sports" class="btn button" name="button">#Sports</button>
        <button type="button" onclick="getMeme('Political');" id="Political" class="btn button" name="button">#Political</button>
        <button type="button" onclick="getMeme('');" id="Wildlife" class="btn button" name="button">#Wildlife</button>
        <button type="button" onclick="getMeme();" id="Spicy" class="btn button" name="button">#Spicy</button>
        <button type="button" onclick="getMeme();" id="Dank" class="btn button" name="button">#Dank</button>
        <button type="button" onclick="getMeme();" id="Superheros" class="btn button" name="button">#Superheros</button>
        <button type="button" onclick="getMeme();" id="Holidays" class="btn button" name="button">#Holidays</button>
        <button type="button" onclick="getMeme();" id="Seasonal" class="btn button" name="button">#Seasonal</button>
        <button type="button" onclick="getMeme();" id="Videogames" class="btn button" name="button">#Videogames</button>
      </div>
    </center>
  </section>

  <!-- david's content div section -->
  <div class="" id="content">

  </div>




  <!-- Footer Section -->
  <footer>
    <div class="container-fluid">
      <div class="row px-3">
        <div class="col-lg-4 col-md-12">
          <h6 class="heading-footer">ABOUT</h6>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
          <p><i class="fa fa-phone"></i> <span>Call Us :</span> +91 9999 878 398</p>
          <p><i class="fa fa-envelope"></i> <span>Send Email :</span> info@webenlance.com</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Copy footer start from here-->
  <div class="copyright">
    <div class="container-fluid">
      <div class="row px-3">
        <div class="col-lg-6 col-md-4">
          <p>© 2018 - <a href="http://grafreez.com">Grafreez.com</a></p>
        </div>
        <div class="col-lg-6 col-md-8">
          <ul class="bottom_ul">
            <li><a href="../index.html">Home</a></li>
            <li><a href="../tags/tags.html">Tags</a></li>
            <li><a href="../upload/index.php">Upload</a></li>
            <li><a href="../about/index.html">About Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../js/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
<script src="../js/popper.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/core.js"></script>
<script src="../js/lightbox-plus-jquery.min.js"></script>
<script src="../js/lity.min.js"></script>

</body>
</html>
