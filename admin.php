<?php
 $sname="localhost";
    $uname="root";
    $pass="";
    $db="salonspa";
$conn=mysqli_connect($sname,$uname,$pass,$db);

if(isset($_POST['adminid'])){
    $admin=$_POST['adminid'];
    $password=$_POST['password'];
    
    $sql="select * from admin where adminid='".$admin."'AND password='".$password."' limit 1;";
    
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)==1)
    {
        echo "<script> window.location.assign('outt.php'); </script>";
        exit();
        
    }
    
    
        
    }?>
<html>
<head>
    <title>login culrz</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
    
    <script>
     function checkpassword()    
        {
           var p=f.pass.value;
           var cp=f.cpass.value;
        
              if(p==cp)
                  alert("Password matched")
              else
                 alert("Password mismatch!!")
        
              msg=(p==cp)?"matched":"mismatch";
              alert(msg)
        }
        
    
    
    </script>    
    
    
    <body>
    
        <div class="navbar-fixed">
    <nav class="pink">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#" class="navbar-brand" ><img src="img/logod.png" style="max-width:150px "></a>
    <div class="login-page">
        <div class="form">
        <img src="img/icored2.png" class="avatar">
      
        <form class="login-form" action ="#" method="POST">
            <h3><b>ADMIN LOGIN</b></h3>
            
            <input type="email" placeholder="admin id"  name="adminid"requipink/>
            <input type="password" placeholder="password" name ="password"requipink/>
            <button>login</button><br><br>
          <p class="message"><a href="loginmain.php">USER LOGIN</a></p>
            </form></div>
        </div>
        </div>
        <script src='https://code.jquery.com/jquery-3.3.1.min.js'> </script>
        <script>
        
        var dateControl = document.querySelector('input[type="date"]');
dateControl.value = '10-11-1997';
        </script>
        <script>
        
        $('.message a').click(function(){
         $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
        });                             
                              
                              
        </script>
            </div>
            </nav></div></body></html>
            
            
            
      