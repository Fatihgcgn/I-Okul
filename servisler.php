<!DOCTYPE html>

<html>

<head>
    <title>I-OKUL Otomasyon Sistemi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <div class="border-bottom top-bar py-2 bg-dark" id="home-section">
      <div class="container">
        <div class="row">
          
        </div>
      </div> 
    </div>

    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2" >
            <h1 class="mb-0 site-logo">
              <div align="center" >
              <a href="index.html" class="text-black h2 mb-0">I-OKUL</a>
            </div>
            </h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.html" class="nav-link">Anasayfa</a></li>              
                <li>
                  <a href="servisler.php" class="nav-link">Servisler</a>
                </li>
                <li class="has-children">
                  <a href="#about-section" class="nav-link">Hakkımızda</a>
                  <ul class="dropdown">
                    <li><a href="#about-section">Amaç</a></li>
                    <li><a href="#team-section">Takımımız</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

<div align="center">
<style>
body {
  /*background-color:darkslategray;*/
 background-image: url('arka3.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

<section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="p-3 box-with-humber">
              <h2 class="text-primary">Ögrenciler</h2>

              <form action="ogrenciekle.php" method="post">
       
       <h2 style="font-size:36px; color:white" ></h2>
       
        <?php if (isset($_GET['loginbtn'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label  style="font-size:16px; color:white">TC numaranızı girin:</label>

        <input type="text" name="tckimlik" placeholder="TCK numarası" style='width: 140px; height:18px' id="tckimlik"><br>

        <label  style="font-size:16px; color:white">Okul no giriniz:</label>

        <input type="password" name="okulno" placeholder="Okul numarası" style='width: 140px; height:18px' id="okulno"><br> 

        <input type="submit" value="Giris" name="ogrloginbtn">

     </form>

     <?php
                
                if(isset($_POST["ogrloginbtn"])){
                    
               
                
$servername="localhost";
$username="root";
$password="";
$dbname="yazilim_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$myusername = mysqli_real_escape_string($db,$_POST['tckimlik']);
      $mypassword = mysqli_real_escape_string($db,$_POST['okulno']); 
      
      $sql = "SELECT id FROM tb_ogrenci WHERE tckimlik = '$myusername' and okulno = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
              
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="p-3 box-with-humber">
              <h2 class="text-primary">Öğretmen</h2>

              <form action="ogretmenekle.php" method="post">
       
       <h2 style="font-size:82px; color:white" ></h2>
       
        <?php if (isset($_GET['loginbtn'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label  style="font-size:16px; color:white">TC numaranızı girin:</label>

        <input type="text" name="tckimlik" placeholder="TCK numarası" style='width: 140px; height:18px' id="tckimlik"><br>

        <label  style="font-size:16px; color:white">Şifrenizi giriniz:</label>

        <input type="password" name="sifre" placeholder="Parolanız" style='width: 140px; height:18px' id="sifre"><br> 

        <input type="submit" value="Giris" name="loginbtn">

     </form>

     <?php
                
                if(isset($_POST["loginbtn"])){
                    
               
                
$servername="localhost";
$username="root";
$password="";
$dbname="yazilim_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$myusername = mysqli_real_escape_string($db,$_POST['tckimlik']);
      $mypassword = mysqli_real_escape_string($db,$_POST['sifre']); 
      
      $sql = "SELECT id FROM tb_ogretmen WHERE tckimlik = '$myusername' and sifre = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
              
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="p-3 box-with-humber">
              <h2 class="text-primary">Admin</h2>
              
              <form action="admin_page.php" method="post">
       
       <h2 style="font-size:82px; color:white" ></h2>
       
        <?php if (isset($_GET['loginbtn'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label  style="font-size:16px; color:white">Kullanıcı adı giriniz:</label>

        <input type="text" name="username" placeholder="Kullanıcı adı" style='width: 140px; height:18px' id="username"><br>

        <label  style="font-size:16px; color:white">Parola giriniz:</label>

        <input type="password" name="password" placeholder="Parolanız" style='width: 140px; height:18px' id="password"><br> 

        <input type="submit" value="Giris" name="adminbtn">

     </form>

     <?php
                
                if(isset($_POST["adminbtn"])){
                    
               
                
$servername="localhost";
$username="root";
$password="";
$dbname="yazilim_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM tb_admin WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>



            </div>
          </div>
        </div>
      </div>
    </section>

<br>

     







</body>
</div>
</html>