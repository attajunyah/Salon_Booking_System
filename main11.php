<!DOCTYPE html>

<?php

include('db.php');

if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from login where email='".$uname."'AND pass='".$password."' limit 1";
    
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1)
    {
        $_SESSION["username"] = $uname;
      
         $query1=mysqli_query($con,"select * from login where email='".$_SESSION["username"]."' ");
    {
        $row=mysqli_fetch_assoc($query1);
 
        $_SESSION["fname"] = $row["fname"];
        $_SESSION["lname"] = $row["lname"];
        $_SESSION["phcode"] = $row["phcode"];
        $_SESSION["mobile"] = $row["mobile"];
        $_SESSION["dob"] = $row["dob"];
        $_SESSION["email"] = $row["email"];
        $_SESSION["gender"] = $row["type"];
        $_SESSION["addr1"] = $row["addr1"];
        $_SESSION["addr2"] = $row["addr2"];
        $_SESSION["city"] = $row["city"];
        $_SESSION["state"] = $row["state"];
        $_SESSION["pincode"] = $row["pincode"];
    }

        echo "<script> window.location.assign('main.php'); </script>";
        exit();
        
    }
    else
    {
         echo "<script> window.location.assign('errorlogin.php'); </script>";
        exit();
    }
}

 if(isset($_POST['submit']))
{   
   $name=$_POST['name'];
   $email=$_POST['email'];
   $mobile=$_POST['mobile'];
   $comments=$_POST['comments'];

     $query="INSERT INTO comments VALUES('$name', '$email','$mobile', '$comments');";
    
    $data=mysqli_query($con,$query);
     
    if($data)
    {
        
     echo "<script> alert('Thankyou!!'); window.location.assign('main11.php'); </script>"; 
        exit();
    }
      
    
   else
    {
       echo "<script>
        alert('error');
        </script>";
    }
}

?>

<html>

<head>
   
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <!-- Animations -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">  
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <link rel="stylesheet" href="css/main.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
    crossorigin="anonymous"></script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Curlz</title>
</head>

<body id="home" class="scrollspy">
  <!-- Navbar -->
  <div class="navbar-fixed">
    <nav class="pink lighten-1">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#" class="navbar-brand" ><img src="img/logod.png" style="max-width:150px "></a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger">
            <i class="material-icons">menu</i>
          </a>
          <ul class="right hide-on-med-and-down">
            <li>
              <a href="#home">HOME</a>
            </li>
            <li>
              <a href="#search">SEARCH</a>
            </li>
            <li>
              <a href="#popular">POPULAR PACKAGES</a>
            </li>
            <li>
              <a href="#ourteam">OUR TEAM</a>
            </li>
            <li>
              <a href="#gallery">GALLERY</a>
            </li>
            <li>
              <a href="#contact">CONTACT</a>
            </li>
             <li>
  <!-- modal -->
  <button onclick="document.getElementById('id01').style.display='block'" class="btn pink darken-4 waves-effect waves-yellow z-depth-2 pulse">Login</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge pink w3-display-topright" title="Close Modal">&times;</span>
        <img src="img/logod.png" alt="Avatar" style="width:20%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="#" method="POST">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="username" requipink>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" requipink>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Login</button>
          <font text-size="10px"color="black">Not Registered?</font>
            <a href="loginmain.php"><button type="button" class="btn pink darken-2">REGISTER</button></a>
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="btn pink darken-4 z-depth-3">Cancel</button>
       
      </div>

    </div>
  </div>

<!-- end of modal -->  
            </li>  
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <ul class="sidenav" id="mobile-nav">
    <li>
      <a href="#home">HOME</a>
    </li>
    <li>
      <a href="#search">SEARCH</a>
    </li>
    <li>
      <a href="#popular">POPULAR PACKGES</a>
    </li>
    <li>
      <a href="#ourteam">OUR TEAM</a>
    </li>
    <li>
      <a href="#gallery">GALLERY</a>
    </li>
    <li>
      <a href="#contact">CONTACT</a>
    </li>
    <li>
     <a href="loginmain.php">LOGIN</a>
    </li>   
  </ul>

   <!-- Section: Slider -->
   
  <section class="slider"> <div class="col s12 m1">
    <ul class="slides">
      <li>
        <img src="gal/10.png">
        <!-- random image -->
        <div class="caption left-align">
          <h2>Once in a Lifetime Occasion</h2>
          <h5 class="light grey-text text-lighten-3 hide-on-small-only">GET YOUR GLAMOUR FROM OUR EXPERTS</h5>
        </div>
      </li>
      <li>
        <img src="gal/image10.jpeg">
        <!-- random image -->
        
      </li>
      <li>
        <img src="gal/image9.jpeg">
        <!-- random image -->
        <div class="caption right-align">
          <h2>HEAVENLY SPA</h2>
          <h5 class="light white-text text-lighten-1 hide-on-small-only">REST...WE WILL RESTORE YOUR ENERGY!!</h5>
        </div>
      </li>
      </ul></div>
  </section>

  <!-- Section: Search -->
  <section id="search" class="section section-search pink darken-1 white-text center scrollspy">
    <div class="container" >
      <div class="row">
        <div class="col s12" data-aos="fade-right" data-aos-duration="2000">
          <h3>Search Packages</h3>
          <div class="input-field">
            <input type="text" class="white grey-text autocomplete" id="autocomplete-input" placeholder="Search your dreamland">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Icon Boxes -->
  <section class="section section-icons grey lighten-4 center">
    <div class="container">
      <div class="row">
        <div class="col s12 m4" data-aos="zoom-in-right" data-aos-duration="2000">
          <a href="https://www.google.com/maps/search/beauty+parlour+near+me">
              <div class="card-panel" style="text-decoration:none; color:black;">
            <i class="material-icons large pink-text">room</i>
            <h4>OMNIPRESENT</h4>
            <p>Why travel far, <br>we have our experts<br> spread across..</p>
              </div></a>
        </div>
        <div class="col s12 m4" data-aos="zoom-in-up" data-aos-duration="2000">
          <div class="card-panel">
            <i class="material-icons large pink-text">store</i>
            <h4>HOME SERVICE</h4>
            <p>Why visit parlors,<br>Our experts<br>At your home.</p>
          </div>
        </div>
        <div class="col s12 m4" data-aos="zoom-in-left" data-aos-duration="2000">
          <div class="card-panel">
            <i class="material-icons large pink-text">brightness_high</i>
            <h4>BEAUTY ENHANCED</h4>
            <p>With over 10k<br>Happy Customers.<br>😊😊</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Popular Packages -->
  <section id="popular" class="section section-popular grey lighten-5 scrollspy">
    <div class="container">
      <div class="row">
        <h4 class="center">
          <span class="pink-text">Popular</span> Packages</h4>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/salon.jpg" alt="" height="310em">
                <span class="card-title"><h3>Salon</h3></span>
                 <a class="btn-floating halfway-fab waves-effect waves-light pink pulse" href="index.html"><i class="material-icons">add</i></a>
            </div>
            <div class="card-content">
            <span class="pink-text">Click here to start booking.</span><br>             
              You have to look in the mirror and do one of two things; love or hate who you see. So, be good to yourself - it's all the esteem you have. 
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/custspa.jpg" alt="" height="310em" >
                <span class="card-title"> <h3></h3></span>
            </div>
            <div class="card-content">
              Speacially customized packages for your requirement with a personalized massage, we believe that every special occasion is unique in it's own way.
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/amenity.png" alt="" height="310em" >
                <span class="card-title black-text"><h3></h3></span>
            </div>
            <div class="card-content">
              Ashburn's premier day spa, featuring a complete range of services for women and men. 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Our Team -->
  <section id="ourteam" class="section section-popular grey lighten-5 scrollspy">
    <div class="container">
      <div class="row">
        <h4 class="center">
          <span class="pink-text">Our Professional Team</span></h4>
        <div class="col s12 m3">
          <div class="card">
            <div class="card-image">
              <img src="img/stylist1.jpeg" alt="stylist" height="310em">
            </div>
            <div class="card-content">
            <center>Bernard Kwakye</center>
            </div>
          </div>
        </div>
        <div class="col s12 m3">
          <div class="card">
            <div class="card-image">
              <img src="img/stylist2.jpeg" alt="stylist" height="310em">
            </div>
            <div class="card-content">
              <center>Kwame Lesti</center> 
            </div>
          </div>
        </div>
        <div class="col s12 m3">
          <div class="card">
            <div class="card-image">
              <img src="img/stylist3.jpeg" alt="stylist" height="310em">
            </div>
            <div class="card-content">
              <center>Nana Ama</center> 
            </div>
          </div>
        </div>
        <div class="col s12 m3">
          <div class="card">
            <div class="card-image">
              <img src="img/stylist4.jpeg" alt="stylist" height="310em">
            </div>
            <div class="card-content">
              <center>Marvin Addai</center> 
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>

  <!-- Section: Gallery -->
  <section id="gallery" class="section section-gallery  scrollspy">
    <div class="container" style="overflow-x: hidden;" data-aos="fade-up" data-aos-duration="3000">
      <h4 class="center">
        <span class="pink-text">Photo</span> Gallery
      </h4>
         <div class="row">
        <div class="col s12 m3" >
          <img src="gal/1.jpg" alt="" class="materialboxed responsive-img" >
        </div>
        <div class="col s12 m3" class="col s12 m3" >
          <img src="gal/2.jpg" alt="" class="materialboxed responsive-img" >
        </div>
        <div class="col s12 m3" class="col s12 m3" >
          <img src="gal/3.jpg" alt="" class="materialboxed responsive-img" >
        </div>
        <div class="col s12 m3" class="col s12 m3" >
          <img src="gal/4.jpg" alt="" class="materialboxed responsive-img" >
        </div>
      </div>
        
      <div class="row">
        <div class="col s12 m3" >
          <img src="gal/5.jpg" alt="" class="materialboxed responsive-img" >
        </div>
        <div class="col s12 m3" >
          <img src="gal/6.jpg" alt="" class="materialboxed responsive-img" >
        </div>
        <div class="col s12 m3" >
          <img src="gal/7.jpeg" alt="" class="materialboxed responsive-img" >
        </div>
        <div class="col s12 m3" >
          <img src="gal/8.jpeg" alt="" class="materialboxed responsive-img" >
        </div>
      </div>

      <div class="row">
        <div class="col s12 m3">
          <img src="gal/9.jpg" alt="" class="materialboxed responsive-img" >
        </div>
        <div class="col s12 m3">
          <img src="gal/10.png" alt="" class="materialboxed responsive-img" >
        </div>
        <div class="col s12 m3">
          <img src="gal/11.jpg" alt="" class="materialboxed responsive-img" >
        </div>
        <div class="col s12 m3">
          <img src="gal/12.jpg" alt="" class="materialboxed responsive-img" >
        </div>
      </div>

      <div class="row">
        <div class="col s12 m3">
          <img src="https://source.unsplash.com/1600x900/?beaches" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m3">
          <img src="https://source.unsplash.com/1600x900/?traveling" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m3">
          <img src="https://source.unsplash.com/1600x900/?bridge" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m3">
          <img src="https://source.unsplash.com/1600x900/?beach, travel,boat" alt="" class="materialboxed responsive-img">
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Contact -->
  <section id="contact" class="section section-contact scrollspy">
    <div class="container" data-aos="fade-up"
     data-aos-anchor-placement="center-center" data-aos-duration="3000">
      <div class="row">
        <div class="col s12 m6">
          <div class="card-panel pink white-text center">
            <i class="material-icons">email</i>
            <h4>Contact Us For Booking</h4>
              <h6>Nuist Campus , Get yourself customized with the new look.</h6><br>
                &#9742; 15651701077 kwakayebernard364@yahoo.com
          </div>
          <ul class="collection with-header">
            <li class="collection-header">
              <h4>Location</h4>
            </li>
            <li class="collection-item">Curlz Unisex Spa and Salon</li>
            <li class="collection-item">Nuist Campus Road , Pukou</li>
            <li class="collection-item">No 219 Ningliu Road Pukou ,Nanjing Jiangsu</li>
            <li class="collection-item">Timings: 9:30a.m-12am</li>  
            <li class="collection-item">&#9742;          15651701077, 15618799121</li>
         </ul>
        </div>
          <form action="#" method="POST">
        <div class="col s12 m6" >
          <div class="card-panel grey lighten-3">
            <h5>Your Suggestions and Comments</h5>
            <div class="input-field">
              <input type="text" placeholder="Name" name="name">
            </div>
            <div class="input-field">
              <input type="text" placeholder="Email" name="email">
            </div>
            <div class="input-field">
              <input type="text" placeholder="Phone" name="mobile">
            </div>
            <div class="input-field">
              <textarea class="materialize-textarea" placeholder="Add Comments" name="comments"></textarea>
            </div>
            <input type="submit" name="submit" value="submit" class="btn" value="comments">
          </div>
        </div></form>
      </div>
    </div>
  </section>

<?php include('footer.php'); ?>

  <!--JavaScript at end of body for optimized loading-->
     <script src='https://code.jquery.com/jquery-3.3.1.min.js'> </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
 <!-- Javascript AOS-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>
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
        "china": null,
        "Cancun Mexico": null,
        "Hawaii": null,
        "Florida": null,
        "California": null,
        "Jamacia": null,
        "Europe": null,
        "indonesia": null,  
          "Mathura": null,
          "Africa": null,
          "Ghana": null,
      }
    });

    // Material Boxed
    const mb = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(mb, {});

    // ScrollSpy
    const ss = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(ss, {});

     
  </script>
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6086624d5eb20e09cf368d48/1f46f00t1';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
  </script>
  <!--End of Tawk.to Script-->

</body>

</html>