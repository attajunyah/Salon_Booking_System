<!DOCTYPE html>
<?php
session_start();

 $host="localhost";
    $user="root";
    $password="";
    $db="salonspa";


    $con=mysqli_connect($host,$user,$password,$db);

    if(isset($_GET['btn_delete'])){
       
        $sql1 = mysqli_query($con,"DELETE FROM login WHERE email='".$_SESSION["email"]."' ");
    
        if($sql1){
            echo "<script> alert('User deleted');window.location.assign('loginmain.php');</script>";
    }
}
?>

<html>

<head>
   
  <link rel="stylesheet" href="css/btnstyle.css">
 <!--Import W3 Schools-->  
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">  
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <link rel="stylesheet" href="css/main1.css">
    
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
    crossorigin="anonymous"></script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ADMIN</title>
    
      <style>
        
       
        /* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    -webkit-animation: fadeEffect 1s;
    animation: fadeEffect 1s;
}

/* Fade in tabs */
@-webkit-keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}
</style>
  
</head>

<body id="home" class="scrollspy">
  <!-- Navbar -->
  <div class="navbar-fixed">
    <nav class="teal">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#" class="navbar-brand" ><img src="img/logod.png" style="max-width:150px "></a>
         
         
          </div></div>
    </nav>
  </div>
  
    
     <!-- TABS -->
   <section class="section container scrollspy" id="MENU">
    <div class="row">
      <div class="col s12 l16">
        <h2 class="indigo-text text-darken-4"> <?php
      echo "ADMIN PANEL";
?> </h2>
     
      </div>
       </div> 
       <div><a class="tablinks" href="https://dashboard.tawk.to/login" target = _blank>
            Click here to log in to the LIVE CHAT.</a>
       </div> 
   </section>
    <div class="tab">
      <button class="tablinks" onclick="openCity(event, 'MyProfile')">BOOKINGS</button>
      <button class="tablinks" onclick="openCity(event, 'Bookings')">COMMENTS</button>
      <button class="tablinks" onclick="openCity(event, 'log')">USER LOG</button>
  
    </div>
    
    
    <div id="MyProfile" class="tabcontent">
        <h3>BOOKINGS</h3>
    
    <table class="striped" >
      <tr>
      
        <th>Email</th>
        <th>package</th> 
        <th>Date</th> 
        <th>Time</th>
        <th>Mode</th> 
          
          
      </tr>
       
<?php
 $sname="localhost";
    $uname="root";
    $pass="";
    $db="salonspa";
$conn=mysqli_connect($sname,$uname,$pass,$db);
        
$run=mysqli_query($conn,"SELECT * FROM `booking`;");

while($row=mysqli_fetch_array($run))
{ 

    $r2=$row["email"];
    $r3=$row["package"];
    $r6=$row["dotravel"];
    $r8=$row['timer'];
    $r7=$row["mode"];
    
    
    echo "<srtong><tr align='center'>
       
        <td>$r2</td>
        <td>$r3</td>
        <td>$r6</td>
        <td>$r8</td>
        <td>$r7</td>
       </tr></strong>";}

?>
        </table> </div>
    
   <!-- Page Comments -->
    
    <div id="Bookings" class="tabcontent">
  <h3>Comment Section</h3>
  <div align="center">
      <table  class="striped" >
      <tr>
        <th>NAME  </th> 
        <th>EMAIL  </th> 
        <th>COMMENTS  </th>  
        </tr>
      <?php
      
      $ress=mysqli_query($con,"select * from comments");
      while($ros=mysqli_fetch_array($ress))
      {
          $a1=$ros['name'];
          $a2=$ros['email'];
          $a3=$ros['comments'];
          
           echo "<tr>
        <td>$a1</td>
        <td>$a2</td>
        <td>$a3</td>
        </tr>";
          
      }
      
      
      ?>
      </table>          
 </div>   
 </div>

     <!-- user log -->
    
    <div id="log" class="tabcontent">
  <h3>LEDGER</h3>
  <div align="center">
      <table border="2" width="1200" >
      <tr>
        <th>EMAIL<br>  </th> 
        <th>NAME<br>  </th> 
        <th>ACTION<br>  </th>  
        <th>TIME<br>  </th>   
        </tr>
      <?php
      
      $ress=mysqli_query($con,"select * from loginlog");
      while($ros=mysqli_fetch_array($ress))
      {
          $a1=$ros['Email'];
          $a2=$ros['fname'];
          $a3=$ros['action'];
          $a4=$ros['time'];
           echo "<tr>
        <td>$a1</td>
        <td>$a2</td>
        <td>$a3</td>
        <td>$a4</td>
        </tr>";
          
      }
      
      
      ?>
      </table>          
 </div>   
 </div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script> 
 

  <!--JavaScript at end of body for optimized loading-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script>var instance = M.Tabs.init(el, options);</script>
  <script>
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
        "Golden Triangle": null,
        "FUN TRIP TO SHIMLA MANALI": null,
        "MINI NORTH INDIA": null,
        "KASHMIR SPECIAL": null,
        "California": null,
        "Jamacia": null,
        "Europe": null,
        "Agra": null,  
          "Mathura": null,
          "Brindavan": null,
          "Bengaluru": null,
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
     <script>
    $(document).ready(function(){
      $('.sidenav').sidenav();
      $('.materialboxed').materialbox();
      $('.parallax').parallax();
      $('.tabs').tabs();
      $('.datepicker').datepicker({
        disableWeekends: true,
        yearRange: 1
      });
      $('.tooltipped').tooltip();
      $('.scrollspy').scrollSpy();
    });
  </script>
    
    <!-- Fixed button -->
    <div class="fixed-action-btn">
       <a class="btn-floating btn-large pulse waves-blue pink" href="admin.php">
       <i class="large material-icons" >home</i>
       </a>
    </div>
    </body>
</html>