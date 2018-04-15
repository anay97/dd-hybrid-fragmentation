<!DOCTYPE html>
<html>
   <head>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Home Page</title>
	  <script type="text/javascript" src="getdata.js"></script>
    </head>
    <body>
     <nav class="grey darken-4">
      <div class="nav-wrapper">
        <!--<a href="#!" class="brand-logo">Logo</a>-->
        <!--Menu icon for mobile-->
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <!--Normal navbar for laptops-->
        <ul class="right hide-on-med-and-down">
          <li><a href="#">Home</a></li>
          <li><a href="adduser.php">Add New User</a></li>
        </ul>
        <!--Side nav for mobiles and tablets-->
        <ul class="side-nav" id="mobile-demo">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li>
        </ul>
      </div>
    </nav>

    <!--Slider-->
    <div class="slider">
    <ul class="slides">
      <li>
        <img src="img1.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Parking Lot Management System</h3>
          <!--<h5 class="light black-text text-lighten-3"></h5>-->
        </div>
      </li>
      <li>
        <img src="img2.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>Smart Parking System Model</h3>
          <!--<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>-->
        </div>
      </li>
      <li>
        <img src="img3.jpg"> <!-- random image -->
        <div class="caption right-align">
          <!--<h3>Right Aligned Caption</h3>-->
          <!--<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>-->
        </div>
      </li>
    </ul>
  </div>

  <!--Card Panel-->
<div class="row">
     <div class="col l10 push-l1 card-panel grey darken-3 white-text flow-text">HYBRID FRAGMENTATION</div>
     
</div>
      



      <!--Dropdown-->
      <div class="row">
          <div class="col l6 push-l5">
      
        <!-- Dropdown Trigger -->
  <!--<a class='dropdown-button btn grey darken-3' href='#' data-activates='dropdown1'>Choose Site</a>-->

  <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content grey darken-3'>
    
    <li><a href="#!"><i class="material-icons">directions_car</i>Site 1</a></li>
    <li class="divider"></li>
    <li><a href="#!"><i class="material-icons">local_parking</i>Site 2</a></li>
  </ul>
      </div>
      </div>

      <!--Tables-->
      <div class="row">
        <div class="col l10 push-l1">
      <table>
        <thead>
          <tr>
              <th>Sr No</th>
              <th>Name</th>
              <th>Contact Number</th>
              <th>Address</th>
              <th>Delete</th>
          </tr>
        </thead>

        <tbody id="table-data">
        </tbody>
      </table>
        </div>
      </div>

      <!--Footer-->
       <footer class="page-footer grey darken-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">HYBRID FRAGMENTATION</h5>
                <!--<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>-->
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2018 Copyright DD Project
            <!--<a class="grey-text text-lighten-4 right" href="#!">More Links</a>-->
            </div>
          </div>
        </footer>

     <!--Import jQuery before materialize.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script>
      //To initialise side-nav
          $(".button-collapse").sideNav();
      //To initialise slider
           $('.slider').slider();
    </script>
    </body>
</html>