<!DOCTYPE html>
<?php
//error_reporting(0);
//login part
session_start();
include('db.php');

if(isset($_POST['submit']))
{   
  $email=$_SESSION["email"];
  $package=$_POST['ac'];
  $service=$_POST['service'];
  
  $dotravel=$_POST['dotravel'];
  $mode=$_POST['sel'];
   
  $dateTime=  explode(" ", $dotravel );

  $query="INSERT INTO booking(email,package,service,dotravel,timer,mode) VALUES('$email', '$package','$service','$dateTime[0]','$dateTime[1]', '$mode');";
    
  $data=mysqli_query($con,$query);
     
  if($data)
  {
    echo "<script> alert('Registration Successful'); window.location.assign('salon.html'); </script>"; 
    exit();
  }
  else
  {
    echo "<script>
    alert(\"Booking failed-- ERROR: " . mysqli_error($con)."\");
    </script>";
  }
}
?>

<html>
  <head> 
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
    <!--Import Google Icon Font-->

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="css/booking2.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
      crossorigin="anonymous"></script>
    <!--Import for datepicker-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
    <script type="text/javascript" src="js/jQuery.js"></script> 
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script> 
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curlz</title>
  </head>

  <body id="home" class="scrollspy">
    <!-- Navbar -->
    <div class="navbar-fixed">
      <nav class="pink darken-1">
        <div class="container">
          <div class="nav-wrapper">
            <a href="#" class="navbar-brand" ><img src="img/logod.png" style="max-width:150px "></a>
            <a href="#" data-target="mobile-nav" class="sidenav-trigger">
              <i class="material-icons">menu</i>
            </a>
            <ul class="right hide-on-med-and-down">
              <li><a href="main.php">HOME</a></li>
              <li><a href="main.php">SEARCH</a></li>
              <li><a href="main.php">POPULAR PACKAGES</a></li>
              <li><a href="main.php">OUR TEAM</a></li>
              <li><a href="main.php">GALLERY</a></li>
              <li><a href="main.php">CONTACT</a></li>
              <li>
                <a class="btn pink darken-4 z-depth-3 " 
                href="logout.php">LOGOUT</a>
              </li> 
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <ul class="sidenav" id="mobile-nav">
      <li><a href="main.php">HOME</a></li>
      <li><a href="main.php">SEARCH</a></li>
      <li><a href="main.php">POPULAR PACKGES</a></li>
      <li><a href="main.php">OUR TEAM</a></li>
      <li><a href="mainphpl">GALLERY</a></li>
      <li><a href="main.php">CONTACT</a></li>
      <li><a href="logout.php">LOGOUT</a></li>   
    </ul>

    <!-- BOOKING FORM -->
    <section id="contact" class="section section-contact scrollspy">
      <div class="container">
        <div class="row">
          <div class="col s12 m4 l2">
            <img src="img/salon.jpg" height="700px" width="300px"/></div>
          <div class="col s12 m4 l8">
            <div class="card-panel pink lighten-5 ">
              <center><h5>SALON BOOKING</h5></center>
              
            <form action="#" method="POST">    
              <div class="input-field">
                <input type="text" id="autocomplete-input" class="autocomplete" name="ac" required>
                <label for="autocomplete-input">Package name:</label>
              </div>
              <div class="input-field">
                <label >Email</label> <input type="text" id="disabled" name="email"  value="<?php echo $_SESSION["email"]; ?> " disabled class="validate">
              </div>  
              <div>
                <label class="control-label">Date & Time</label><br><br>
              </div>
              <div class='input-group date' id='datetimepicker1'>
                <input type='text' class="form-control" name="dotravel" required/>
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
              <div class="input-field">       
                <label>Service </label><br><br> 
                <select name="service" id="service-select" class="form-control">
                      <option value="">--BASIC TOUCH--</option>
                      <option value="Ponytail">Ponytail</option>
                      <option value="Braids">Braids</option>
                      <option value="Length Hair">Length Hair</option>
                      <option value="Long Layers">Long Layers</option>
                      <option value="">--STYLE LOCKS--</option>
                      <option value="standard cut">standard cut</option>
                      <option value="Buzz cuts ">Buzz cuts</option>
                      <option value="shaved Heads">shaved Heads</option>
                      <option value="fades">fades</option>
                      <option value="undercuts">undercuts</option>
                      <option value="crew cuts">crew cuts</option>
                      <option value="">--COLOR FLAUNT--</option>
                      <option value="gold">gold</option>
                      <option value="blonde">blonde</option>
                      <option value="dark">dark</option>
                      <option value="black">black</option>
                      <option value="brown">brown</option>
                      <option value="pink">pink</option>
                      <option value="">--NIRVANA--</option>
                      <option value="dreadlocks">dreadlocks</option>
                      <option value="cornrows">cornrows</option>
                      <option value="twists">twists</option>
                      <option value="afro">afro</option>
                      <option value="twistedcurls">twistedcurls</option>
                  </select>
              </div>  

              <div>
              <p> <label>
                  <input class="with-gap text-red" type="radio"  name="sel" value="HOME SERVICE" >
                  <span>HOME SERVICE</span>
                  </label>
              </p>
              <p> <label>
                  <input class="with-gap" type="radio"  name="sel" value="NEARBY CENTRE" >
                  <span>NEARBY CENTRE</span>
                  </label>
              </p>  
            </div> 
              <center> <input type="submit" value="Submit" class="btn pink" name="submit"></center>
            </form>
          </div>
          </div>
            
        </div>
      </div>
    </section>
     
  <!-- Footer -->
  <?php include('footer.php');?>

  <!-- Fixed button -->
  <div class="fixed-action-btn">
       <a class="btn-floating btn-large pulse indigo" href="profile.php">
       <i class="large material-icons">person</i>
       </a>
    </div>

  <!--JavaScript at end of body for optimized loading-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

  <script>
    // datepicker config
    $( document ).ready(function() {
      $('#datetimepicker1').datetimepicker({
          format: 'YYYY-MM-DD HH:mm',
      });
    });
    // Sidenav
    const sideNav = document.querySelector('.sidenav');
    M.Sidenav.init(sideNav, {});

    // Slider
    const slider = document.querySelector('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 500,
      transition: 500,
      interval: 6000
    });

    // Autocomplete
    const ac = document.querySelector('.autocomplete');
    M.Autocomplete.init(ac, {
      data: {
        "COLOR FLAUNT": null,
        "BASIC TOUCH": null,
        "STYLE LOCKS": null,
        "NIRVANA": null,       
      }
    });
    const aac =instance.selectOption(ac);
    // Material Boxed
    const mb = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(mb, {});

    // ScrollSpy
    const ss = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(ss, {});
    
  </script>

    </body>
</html>