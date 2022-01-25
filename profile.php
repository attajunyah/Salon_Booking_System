
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
  <!--jQuery-->   
  <link rel="stylesheet" type="text/css" href="datetimepicker/jquery.datetimepicker.css" >
  <link rel="stylesheet" href="css/btnstyle.css">
  <!--Import W3 Schools-->  
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">   
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <link rel="stylesheet" href="css/main1.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">    
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
    crossorigin="anonymous"></script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Curlz</title>
    
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
    <nav class="pink lighten-2">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#" class="navbar-brand" ><img src="img/logod.png" style="max-width:150px "></a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger">
            <i class="material-icons">menu</i>
          </a>
          <ul class="right hide-on-med-and-down">
            <li>
              <a href="main.php#home">HOME</a>
            </li>
            <li>
              <a href="main.php#search">SEARCH</a>
            </li>
            <li>
              <a href="main.php#popular">POPULAR PACKAGES</a>
            </li>
            <li>
              <a href="main.php#ourteam">OUR TEAM</a>
            </li>
            <li>
              <a href="main.php#gallery">GALLERY</a>
            </li>
            <li>
              <a href="main.php#contact">CONTACT</a>
            </li>
             <li>
                <a class="btn pink darken-4 z-depth-3 " href="logout.php">logout</a>
            </li> 
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <ul class="sidenav" id="mobile-nav">
    <li>
      <a href="main.php#home">HOME</a>
    </li>
    <li>
      <a href="main.php#search">SEARCH</a>
    </li>
    <li>
      <a href="main.php#popular">POPULAR PACKGES</a>
    </li>
    <li>
      <a href="main.php#ourteam">OUR TEAM</a>
    </li>
    <li>
      <a href="main.php#gallery">GALLERY</a>
    </li>
    <li>
      <a href="main.php#contact">CONTACT</a>
    </li>
    <li>
     <a href="logout.php">LOGOUT</a>
    </li>   
  </ul>

    <!-- TABS -->
   <section class="section container scrollspy" id="MENU">
    <div class="row">
      <div class="col s12 l16">
        <h2 class="indigo-text text-darken-4"> <?php
           
            
      echo "Welcome ", $_SESSION["fname"] ,"!! ^_^";?> </h2>
     
      </div>
       </div>  
   </section>  
   <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'MyProfile')">My Profile</button>
  <button class="tablinks" onclick="openCity(event, 'Bookings')">Bookings</button>
  
</div>

<div id="MyProfile" class="tabcontent">
  <h3>My Profile</h3>
   <table class="striped">

     <tr>
       <td>
       <i class="medium material-icons pink-text">account_circle</i><strong> NAME</strong>  
       </td>  
       <td>
       <?php
          echo  $_SESSION["fname"]; echo  " ",$_SESSION["lname"];  
       ?>       
       </td>      
     </tr>
     <tr>
       <td>
       <i class="medium material-icons green-text">phone_iphone</i><strong> CONTACT</strong>  
       </td>  
       <td>
       <?php
          echo  "+",$_SESSION["phcode"]; echo  " ",$_SESSION["mobile"]; 
       ?>       
       </td>      
     </tr>       
     <tr>
       <td>
       <i class="medium material-icons yellow-text">cake</i><strong> DATE OF BIRTH</strong>  
       </td>  
       <td>
       <?php
          echo  $_SESSION["dob"];  
       ?>       
       </td>      
     </tr>     
     <tr>
       <td>
       <i class="medium material-icons grey-text">email</i><strong> EMAIL</strong>  
       </td>  
       <td>
       <?php
          echo  $_SESSION["email"]; 
       ?>       
       </td>      
     </tr>
     <tr>
       <td>
       <i class="medium material-icons blue-text">home</i><strong> ADDRESS</strong>  
       </td>  
       <td>
       <?php
          echo  $_SESSION["addr1"]; 
       ?>,<br>
           <?php
          echo  $_SESSION["addr2"]; 
       ?>,<br>
           <?php
          echo  $_SESSION["city"]; 
       ?>,
           <?php
          echo  $_SESSION["state"]; 
       ?>&nbsp;-&nbsp;
           <?php
          echo  $_SESSION["pincode"]; 
       ?><br>
       </td>      
     </tr>  
     <tr>
       <td>
       <i class="medium material-icons violet-text">group</i><strong> GENDER</strong>  
       </td>  
       <td>
       <?php
          echo  $_SESSION["gender"];  
       ?>       
       </td>      
     </tr>
   </table>
 <br><br>
   
</div>
  

    <!-- BOOKINGS -->
    
<div id="Bookings" class="tabcontent">
  <h3>Bookings</h3>
  <div align="center">
    <table border="2" width="1300" class="highlight">
      <tr>
        <th>PACKAGE NAME<br>  </th> 
        <th>SERVICE<br>  </th>
        <th>DATE<br>  </th>  
        <th>ESTIMATED COST<br><h6>[Basic Price + GST]</h6></th> 
        <th>EDIT<br>  </th> 
        <th>DELETE<br>  </th>
         
        </tr>
<?php
$host="localhost";
$user="root";
$password="";
$db="salonspa";

$con=mysqli_connect($host,$user,$password,$db);

if(isset($_GET['del']))
{
    $id=$_GET['del'];
   
    if(mysqli_query($con,"delete from booking where id= '$id' "))
    {
        echo  "<script> alert('Booking Info Deleted!!');window.location.assign('profile.php'); </script>"; 
        
    }
}

       
$run=mysqli_query($con,"select * from booking where email= '".$_SESSION["username"]."' ");
while($row=mysqli_fetch_array($run))
{   $r0=$row[0];
    $r1=$row[2];
    $r2=$row[3];
    $r3=$row[4];
    $_SESSION["ed"] = $row[0];
  $run1=mysqli_query($con,"select fares.cost from booking,fares where '$r1'=fares.package");
 while($row1=mysqli_fetch_array($run1))
 {
     $_SESSION["fare"]=$row1['cost'];
 }
    $_SESSION["est"]=$_SESSION["fare"]+((18/100)*$_SESSION["fare"]);
    echo "<tr align='center'>
        <td>$r1</td>
        <td>$r2</td>
        <td>$r3</td>
        <td>{$_SESSION['fare']} &#20803;</td>
          
        <td><a href=\"#\"><i onclick=\"document.getElementById('id01').style.display='block'\" class=\"material-icons green-text\">mode_edit</i></a></td>
        <td><a href='profile.php?del=$row[0]'><i class=\"material-icons pink-text\">delete_forever</i></a></td>
       
    </tr>";}
?>
      </table>
    </div> <a href="payment/index.php">
    <button class="btn waves-effect waves-light red" type="submit" name="action">CHECKOUT
    <i class="material-icons right">shopping_cart</i>
  </button></a>
 </div>

  <!-- EDIT MODAL -->  
    
  <div id="id01" class="w3-modal w3-animate-opacity">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-blue"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-large w3-display-topright">&times;</span>
        <h2>UPDATE INFO</h2>
      </header>
      <div class="w3-container">
        <!-- MODAL CONT START-->
          <?php
$host="localhost";
$user="root";
$password="";
$db="salonspa";
$con=mysqli_connect($host,$user,$password,$db);

    $id=$_SESSION["ed"];
    $res=mysqli_query($con,"select * from booking where id='$id' AND email= '".$_SESSION["username"]."' ");
    while($row=mysqli_fetch_array($res))
    {
        $_SESSION["u0"]=$row[0];
        $_SESSION["u1"]=$row[1];
        $_SESSION["u2"]=$row[2];
        $_SESSION["u3"]=$row[3];
        $_SESSION["u4"]=$row[4];' '.$row[6];

    }


?>
          <form action="#" method="GET">    
            <div class="input-field">
          
          <input type="text" id="autocomplete-input" class="autocomplete" name="ac" required value="<?php echo $_SESSION["u2"];?>">
          <label for="autocomplete-input">Package name:</label>
        </div>
                
         <div class="input-field">       
               <label>Appointment Date </label><br><br> <input type="date" name="dotravel" required value="<?php echo $_SESSION["u3"];?>">
             </div>   
             
        <div class="input-field">       
               <label>Service </label><br><br> 
               <select name="service" id="servic-select2" class="form-control" style="display: inline-block;" required>
               <option value="">--BASIC TOUCH--</option>
                    <option value="Ponytail" >Ponytail</option>
                    <option value="Braids" >Braids</option>
                    <option value="Length Hair" >Length Hair</option>
                    <option value="Long Layers" >Long Layers</option>
                    <option value="">--STYLE LOCKS--</option>
                    <option value="standard cut" selected="<?php echo $_SESSION["u3"]=='standard cut';?>">standard cut</option>
                    <option value="Buzz cuts " >Buzz cuts</option>
                    <option value="shaved Heads" >shaved Heads</option>
                    <option value="fades" >fades</option>
                    <option value="undercuts" >undercuts</option>
                    <option value="">--COLORS FLAUNT--</option>
                    <option value="gold" >gold</option>
                    <option value="blonde" >blonde</option>
                    <option value="dark" >dark</option>
                    <option value="black" >black</option>
                    <option value="brown" >brown</option>
                    <option value="pink" >pink</option>
                    <option value="">--NIRVANA--</option>
                    <option value="dreadlocks" >dreadlocks</option>
                    <option value="cornrows" >cornrows</option>
                    <option value="twists" >twists</option>
                    <option value="afro" >afro</option>
                    <option value="twistedcurls" >twistedcurls</option>
                </select>
        </div>  
             <div>
               <label>Transport mode(To the starting place):</label><br>          
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

               
          <center> <input type="submit" value="UPDATE" class="btn" name="update"></center>
              </form>
          
           <?php  
 
      
               if(isset($_GET['update']))
              {
                  
                  $v0=$_SESSION["u0"];
                  $v1=$_GET['ac'];
                  $v5=$_GET['dotravel'];
                  $v6=$_GET['sel'];
                   if( mysqli_query($con,"update booking set package='$v1',dotravel='$v5',mode='$v6' where id=$v0"))
                 {
                       $_SESSION["est"]=$_SESSION["fare"]+((18/100)*$_SESSION["fare"]);
                      echo "<script> alert('updation successful'); window.location.assign('profile.php'); </script>"; 
                exit();
                 }   
              }
            ?>
          <!-- MODAL CONT END -->
      </div>
     </div>
  </div>

<script>
// datepicker config
$( document ).ready(function() {
    $('#datetimepicker1').datetimepicker({
        format: 'YYYY-MM-DD HH:mm',
    });
});

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
     <script>
    $(document).ready(function(){
      $('.sidenav').sidenav();
      $('.materialboxed').materialbox();
      $('.parallax').parallax();
      $('.tabs').tabs();
      $('#datetimepicker').datetimepicker({
        disableWeekends: true,
        yearRange: 1
      });
      $('.tooltipped').tooltip();
      $('.scrollspy').scrollSpy();
    });
  </script>
    
    <!-- Fixed button -->
    <div class="fixed-action-btn">
       <a class="btn-floating btn-large pulse waves-blue pink" href="main.php">
       <i class="large material-icons" >home</i>
       </a>
    </div>
    
  
        
    </body>
    
    <script src="datetimepicker/jquery.js"></script>
    <script src="datetimepicker/build/jquery.datetimepicker.full.min.js"></script>
</html>






