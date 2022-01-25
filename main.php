<!DOCTYPE html>
<?php
include('header.php');
include('db.php');

if(isset($_POST['submit']))
{   
   $name=$_POST['name'];
   $email=$_POST['email'];
   $mobile=$_POST['mobile'];
   $comments=$_POST['comments'];

    $query="INSERT INTO comments(name,email,mobile,comments) VALUES('$name', '$email','$mobile', '$comments');";
    
    $data=mysqli_query($con,$query);
     
    if($data)
    {
        
     echo "<script> alert('Thankyou $name !!'); window.location.assign('main.php'); </script>"; 
        exit();
    }
      
    
   else
    {
      echo "<script> alert(\"ERROR: " . mysqli_error($con)."\");
      window.location.assign('loginmain.php'); 
   </script>";
    }
  }

?>
  <!-- Section: Slider -->
   
  <section class="slider"> <div class="col s12 m1">
    <ul class="slides">
      <li>
        <img src="img1/blacksalon.jpeg">
        <!-- random image -->
        <div class="caption left-align">
          <h2>Once in a Lifetime Occasion</h2>
          <h5 class="light grey-text text-lighten-3 hide-on-small-only">GET YOUR GLAMOUR FROM OUR EXPERTS</h5>
        </div>
      </li>
      <li>
        <img src="img1/slider2.jpg">
        <!-- random image -->
        
      </li>
      <li>
        <img src="img1/slider1.jpg">
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
            <input type="text" class="white grey-text autocomplete" id="autocomplete-input" placeholder="Search your dream package">
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
                <span class="card-title"><h3></h3></span>
                 <a class="btn-floating halfway-fab waves-effect waves-light pink pulse" href="salon.html"><i class="material-icons">add</i></a>
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
    
    
  <!-- Section: Follow -->
  <section class="section section-follow pink darken-2 white-text center">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h4>Follow Curlz</h4>
          <p>Follow us on social media for special offers</p>
          <a href="#" class="white-text">
            <i class="fab fa-facebook fa-4x"></i>
          </a>
          <a href="#" class="white-text">
            <i class="fab fa-twitter fa-4x"></i>
          </a>
          <a href="#" class="white-text">
            <i class="fab fa-linkedin fa-4x"></i>
          </a>
          <a href="#" class="white-text">
            <i class="fab fa-google-plus fa-4x"></i>
          </a>
        
          </a>
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
          <img src="gal/image1.jpeg" alt="" class="materialboxed responsive-img" >
        </div>
        <div class="col s12 m3" class="col s12 m3" >
          <img src="gal/image2.jpeg" alt="" class="materialboxed responsive-img" >
        </div>
        <div class="col s12 m3" class="col s12 m3" >
          <img src="gal/image3.jpeg" alt="" class="materialboxed responsive-img" >
        </div>
        <div class="col s12 m3" class="col s12 m3" >
          <img src="gal/image4.jpeg" alt="" class="materialboxed responsive-img" >
        </div>
      </div>
        
      <div class="row">
        <div class="col s12 m3" >
          <img src="gal/image5.jpeg" alt="" class="materialboxed responsive-img" >
        </div>
        <div class="col s12 m3" >
          <img src="gal/image6.jpeg" alt="" class="materialboxed responsive-img" >
        </div>
        <div class="col s12 m3" >
          <img src="gal/image7.jpg" alt="" class="materialboxed responsive-img" >
        </div>
        <div class="col s12 m3" >
          <img src="gal/image8.jpeg" alt="" class="materialboxed responsive-img" >
        </div>
      </div>

      <div class="row">
        <div class="col s12 m3">
          <img src="gal/image9.jpeg" alt="" class="materialboxed responsive-img" >
        </div>
        <div class="col s12 m3">
          <img src="gal/image10.jpeg" alt="" class="materialboxed responsive-img" >
        </div>
        <div class="col s12 m3">
          <img src="gal/10.png" alt="" class="materialboxed responsive-img" >
        </div>
        <div class="col s12 m3">
          <img src="gal/9.jpg" alt="" class="materialboxed responsive-img" >
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
              <h6> Get yourself customized with the new look.</h6><br>
                &#9742;:17612572138 ; Kwakyebernard364@yahoo.mail.com
          </div>
          <ul class="collection with-header">
            <li class="collection-header">
              <h4>Location</h4>
            </li>
            <li class="collection-item">Curlz Unisex Spa and Salon</li>
            <li class="collection-item">Nuist Campus Road,Pukou</li>
            <li class="collection-item">No 219 Ningliu Road Pukou, Nanjing Jiangsu</li>
            <li class="collection-item">Office Hours : 9:30 - 22:00 </li>  
            <li class="collection-item">&#9742;          17612572138,15651701077</li>
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

  <!-- Footer -->
  <footer class="section pink darken-2 white-text center">
      <p class="flow-text"><H4>CURLZ &copy; 2021 </H4></p>
  </footer>
<!-- Fixed button -->
    <div class="fixed-action-btn">
       <a class="btn-floating btn-large pink" href="profile.php">
       <i class="large material-icons">person</i>
       </a>
        
    </div>
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
        "LONG HAIRSTYLES": null,
        "CLIPPED HAIRCUTS``": null,
        "CURLY AND TEXTURED HAIR": null,
        "OTHERS LOOKS/STYLES": null,
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