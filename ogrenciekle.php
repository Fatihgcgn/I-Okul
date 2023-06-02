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
  background-color:darkorange;
  /*background-image: url('backks.jpg');*/
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

<section class="site-section">
      <div class="container">
        <div class="row" style="margin-right:-90px">
          <div class="col-md-6 col-lg-4" style="margin-left:-100px">
              
              <h2 class="text-primary">Ders programı</h2>
          
              <?php
            
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="yazilim_db";
            
            $conn=new mysqli($servername,$username,$password,$dbname);
            
            if($conn->connect_error){
                die("Connection failed: ". $conn->connect_error);
            }
            
            $sql="SELECT *FROM tb_dersprogrami";
            $result=mysqli_query($conn,$sql);
            $i=1; 
            
            echo "<center> <table align='center' border=1>
            <tr>
            <th>saat</th>
            <th>Pazartesi</th>
            <th>Sali</th>
            <th>Çarşamba</th>
            <th>Perşembe</th>
            <th>Cuma</th>
            
            </tr>";
            while($row=mysqli_fetch_array($result)) {
                
                echo "<tr>";
                echo "<td id='dsaat'>".$row['ders_saati']."</td>";
                echo "<td>".$row['pazartesi']."</td>";
                echo "<td>".$row['sali']."</td>";
                echo "<td>".$row['carsamba']."</td>";
                echo "<td>".$row['persembe']."</td>";
                echo "<td>".$row['cuma']."</td>";
            
                echo "</tr>";
                $i++;
                }
            
            echo "</table> </center>";
            mysqli_close($conn);
            
             ?>
           

            </div>

          <div class="col-md-6 col-lg-4" style="margin-left:80px">
              <h2 class="text-primary">Ödev Takvimi</h2>

              <?php
            
$servername="localhost";
$username="root";
$password="";
$dbname="yazilim_db";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

$sql="SELECT *FROM tb_odevsinav";
$result=mysqli_query($conn,$sql);
$i=1; 

echo "<center> <table align='center' border=1>
<tr>
<th>Ödev id</th>
<th>Ödev İsmi</th>
<th>Ödev Çesidi</th>
<th>Ödev Tarihi</th>

</tr>";
while($row=mysqli_fetch_array($result)) {
    
    echo "<tr>";
    echo "<td id='odevid'>".$row['odevid']."</td>";
    echo "<td id='odevisim'>".$row['odevisim']."</td>";
    echo "<td>".$row['odevcesid']."</td>";
    echo "<td>".$row['odevtarih']."</td>";

    echo "</tr>";
    $i++;
    }

echo "</table> </center>";
mysqli_close($conn);

?>


          </div>

          <div class="col-md-6 col-lg-4" style="margin-right:-60px">             
             <h2 class="text-primary">Sınav Sonuçları</h2>
              
             <?php
            
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="yazilim_db";
            
            $conn=new mysqli($servername,$username,$password,$dbname);
            
            if($conn->connect_error){
                die("Connection failed: ". $conn->connect_error);
            }
            
            $sql="SELECT *FROM tb_notlar";
            $result=mysqli_query($conn,$sql);
            $i=1; 
            
            echo "<center> <table align='center' border=1>
            <tr>
            <th>Okul No</th>
            <th>Sınav adı</th>
            <th>1.Sınav</th>
            
            </tr>";
            while($row=mysqli_fetch_array($result)) {
                
                echo "<tr>";
                echo "<td id='ogrnum'>".$row['ogrokulno']."</td>";
                echo "<td id='sinavad'>".$row['ogrdersadi']."</td>";
                echo "<td>".$row['ogrnot']."</td>";
            
                echo "</tr>";
                $i++;
                }
            
            echo "</table> </center>";
            mysqli_close($conn);
            
             ?>
         
          </div>
        </div>
      </div>
    </section>



    <form action=" " method="POST"> <?php /*arama islemi gerceklesicek*/ ?>

        <table align="center">
            <tbody align="center">
               
                <tr>
                    <td width="34" style="width: 30" colspan="2" >
                        <p style="font-size: 15px"><a name="siparis">DEVAMSIZLIK BİLGİLERİNİ GÖRMEK İÇİN LÜTFEN OKUL NUMARANIZI GİRİNİZ: </a><br></p>
                    </td>
                </tr>
               <div align="center">
                <tr>
                <br>
              
                <td>
                    <input id="txtSearchAra" size="30" name="txtSearchAra">
                </td>
                <td>
                    <input type="submit" value="Ara" name="ograrabtn">
                    </td>
          <tr align="center"> 
        <td>
                <?php
                if(isset($_POST["ograrabtn"])){
                
                
$servername="localhost";
$username="root";
$password="";
$dbname="yazilim_db";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

$sql="SELECT id,isim,tckimlik,okulno,devamsizlik FROM tb_ogrenci WHERE id='".$_POST["txtSearchAra"]."' OR isim='".$_POST["txtSearchAra"]."'OR tckimlik='".$_POST["txtSearchAra"]."' OR okulno='".$_POST["txtSearchAra"]."'";
$result=$conn->query($sql);
$row=$result->fetch_assoc(); 

echo "Id: ".$row["id"]."<br>"."İsim: ".$row["isim"]."<br>"." Tckimlik: ".$row["tckimlik"]."<br>"." OkulNo: ".$row["okulno"]."<br>"." Devamsizlik: ".$row["devamsizlik"]."<br>"."<br>";



$conn->close();

} 

?>

</td>
</tr>
                         
 </tr>
 </div>



 

<br>
<br>




</body>

</html>