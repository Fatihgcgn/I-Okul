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
  background-color:royalblue;
  /*background-image: url('arka3.jpg');*/
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>


<br><br><br>
<br><br><br>

<section class="site-section">
      <div class="container">
        <div class="row" style="margin-right:-90px">
          <div class="col-md-6 col-lg-4" style="margin-left:-100px">
              
              <h2 class="text-primary">Öğretmen Ekleme</h2>
          
              
              <form action="" method="POST">      <?php /*öğretmen ekleme islemi gerceklesicek*/ ?>
        
        <table align="center">
            <tbody align="center">
               
                <tr>
                    <td width="34" style="width: 30" colspan="2" >
                        <p style="font-size: 23px"><a name="siparis">Öğretmen Eklemek için girin: </a><br></p>
                    </td>
                </tr>
               <div align="center">
                <tr>
                <br>
              
                <td>
                    İsim:
                    <input id="Dataisim" size="30" name="Dataisim">
                </td>
          
                <tr>
                <td>
                    Tckimlik:
                    <input id="DataKimlik" size="30" name="DataKimlik">
                </td>
                </tr>
                <tr>
                <td>
                    Şifresi:
                    <input id="Datasifre" size="30" name="Datasifre">
                </td>
                </tr>
                
                 
          
                
                <td>
                    <input type="submit" value="Ekle" name="ogteklebtn">
                    </td>
                
                </form>
                
                <form action="adminPage.php">
                    
                    
                <?php
                
                if(isset($_POST["ogteklebtn"])){
                    
               
                
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

$sql ="INSERT INTO tb_ogretmen (isim,tckimlik,sifre) 
VALUES ('".$_POST["Dataisim"]."','".$_POST["DataKimlik"]."','".$_POST["Datasifre"]."')";

if ($conn->query($sql) === TRUE) {
  echo "New Record Created Successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  }
                
                
?>              
                
                </tr>
                </div>
                

            </tbody>
        </table>
</form>
            </div>

          <div class="col-md-6 col-lg-4" style="margin-left:80px">
              <h2 class="text-primary">Öğrenci Ekleme</h2>

              <form action="" method="POST">      <?php /*öğrenci ekleme islemi gerceklesicek*/ ?>
        
        <table align="center">
            <tbody align="center">
               
                <tr>
                    <td width="34" style="width: 30" colspan="2" >
                        <p style="font-size: 23px"><a name="siparis">Öğrenci Eklemek için girin: </a><br></p>
                    </td>
                </tr>
               <div align="center">
                <tr>
                <br>
              
                <td>
                    İsim:
                    <input id="Dataisim" size="30" name="Dataisim">
                </td>
          
                <tr>
                <td>
                    Tckimlik:
                    <input id="DataKimlik" size="30" name="DataKimlik">
                </td>
                </tr>
                <tr>
                <td>
                    Okul no:
                    <input id="DataOkulno" size="30" name="DataOkulno">
                </td>
                </tr>
                
                <tr>
                <td>
                    Devamsizlik:
                    <input id="DataDevamsiz" size="30" name="DataDevamsiz">
                </td>
                </tr>
                 
                <td>
                    <input type="submit" value="Ekle" name="ogreklebtn">
                    </td>
                
                </form>
                
                <form action="">
                                       
                <?php
                
                if(isset($_POST["ogreklebtn"])){
                                                 
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

$sql ="INSERT INTO tb_ogrenci (isim,tckimlik,okulno,devamsizlik) 
VALUES ('".$_POST["Dataisim"]."','".$_POST["DataKimlik"]."','".$_POST["DataOkulno"]."','".$_POST["DataDevamsiz"]."')";

if ($conn->query($sql) === TRUE) {
  echo "New Record Created Successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  }
                               
?>
                
                
                </tr>
                </div>
                

            </tbody>
        </table>
</form>

          </div>

          <div class="col-md-6 col-lg-4" style="margin-right:-60px">             
             <h2 class="text-primary">Öğretmen Güncelle</h2>
              
             
             <form action="" method="POST">      <?php /*güncelleme islemi gerceklesicek*/ ?>
        
        <table align="center">
            <tbody align="center">              
                <tr>
                    <td width="34" style="width: 30" colspan="2" >
                        <p style="font-size: 23px"><a name="siparis">Güncellemek istediginiz öğretmenin bilgilerini ve id bilgisini girin: </a><br></p>
                    </td>
                </tr>
               <div align="center">
                <tr>
                <br>
                
                <tr>
                <br>
              
                <td>
                    id:
                    <input id="Dataid" size="30" name="Dataid">
                </td>

                <tr>
                <br>
              
                <td>
                    İsim:
                    <input id="DataName" size="30" name="DataName">
                </td>
          
                <tr>
                <td>
                    Tckimlik:
                    <input id="DataKimlik" size="30" name="DataKimlik">
                </td>
                </tr>
                <tr>
                <td>
                    Sifre:
                    <input id="DataOkulno" size="30" name="DataOkulno">
                </td>
                </tr>
                

                <td>
                    <input type="submit" value="Güncelle" name="ogtupdbtn">
                    </td>
                
                </form>
                
                <form action="">
                    
                    
                <?php
                
                if(isset($_POST["ogtupdbtn"])){
                    
               
                
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

$sql ="UPDATE tb_ogretmen SET isim ='".$_POST["DataName"]."',tckimlik='".$_POST["DataKimlik"]."',sifre='".$_POST["DataOkulno"]."' WHERE id='".$_POST["Dataid"]."'";

if ($conn->query($sql) === TRUE) {
  echo "Update Successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  }                               
?>                              
                </tr>
                </div>
                

            </tbody>
        </table>
</form>




         
          </div>
        </div>
      </div>
    </section>

    <section class="site-section">
      <div class="container">
        <div class="row" style="margin-right:-90px">
          <div class="col-md-6 col-lg-4" style="margin-left:-100px">
              
              <h2 class="text-primary">Öğrenci güncelle</h2>

              <form action="" method="POST">      <?php /*güncelleme islemi gerceklesicek*/ ?>
        
        <table align="center">
            <tbody align="center">
               
                <tr>
                    <td width="34" style="width: 30" colspan="2" >
                        <p style="font-size: 23px"><a name="siparis">Güncellemek istediginiz öğrencinin bilgilerini ve id bilgisini girin: </a><br></p>
                    </td>
                </tr>
               <div align="center">
                <tr>
                <br>
                
                <tr>
                <br>
              
                <td>
                    id:
                    <input id="Dataid" size="30" name="Dataid">
                </td>

                <tr>
                <br>
              
                <td>
                    İsim:
                    <input id="DataName" size="30" name="DataName">
                </td>
          
                <tr>
                <td>
                    Tckimlik:
                    <input id="DataKimlik" size="30" name="DataKimlik">
                </td>
                </tr>
                <tr>
                <td>
                    Okul no:
                    <input id="DataOkulno" size="30" name="DataOkulno">
                </td>
                </tr>

                <tr>
                <td>
                    Devamsizlik:
                    <input id="DataDevamsiz" size="30" name="DataDevamsiz">
                </td>
                </tr>
                

                <td>
                    <input type="submit" value="Güncelle" name="ogrupdbtn">
                    </td>
                
                </form>
                
                <form action="">
                    
                    
                <?php
                
                if(isset($_POST["ogrupdbtn"])){
                    
               
                
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

$sql ="UPDATE tb_ogrenci SET isim='".$_POST["Dataisim"]."',tckimlik='".$_POST["DataKimlik"]."',okulno='".$_POST["DataOkulno"]."' WHERE id='".$_POST["Dataid"]."'";

if ($conn->query($sql) === TRUE) {
  echo "Update Successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  }
                
                
?>
                
                
                </tr>
                </div>
                

            </tbody>
        </table>
</form>

            </div>

          <div class="col-md-6 col-lg-4" style="margin-left:80px">
              <h2 class="text-primary">Öğretmen Sil</h2>

              <form action="" method="POST"> <?php /*silme islemi gerceklesicek*/ ?>
        
        <table align="center">
            <tbody align="center">
               
                <tr>
                    <td width="34" style="width: 30" colspan="2" >
                        <p style="font-size: 23px"><a name="siparis">Silmek istediginiz öğretmenin kimliğini girin: </a><br></p>
                    </td>
                </tr>
               <div align="center">
                <tr>
                <br>
              
                <td>
                    <input id="txtSearchSil" size="30" name="txtSearchSil">
                </td>
                <td>
                    <input type="submit" value="Sil" name="silbtn">
                    </td>
                <br>
                <?php
                if(isset($_POST["silbtn"])){
                    
               
                
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

$sql = "DELETE FROM tb_ogretmen WHERE tckimlik='".$_POST["txtSearchSil"]."'";

if ($conn->query($sql) === TRUE) {
echo "Delete Process Is Completed";
}
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  }
                
                
?>
                               
                
                </tr>
                </div>
                

            </tbody>
        </table>
</form>

          </div>

          <div class="col-md-6 col-lg-4" style="margin-right:-60px">             
             <h2 class="text-primary">Öğrenci Sil</h2>
              
             <form action=" " method="POST"> <?php /*silme islemi gerceklesicek*/ ?>
        
        <table align="center">
            <tbody align="center">
               
                <tr>
                    <td width="34" style="width: 30" colspan="2" >
                        <p style="font-size: 23px"><a name="siparis">Silmek istediginiz öğrencinin kimliğini girin: </a><br></p>
                    </td>
                </tr>
               <div align="center">
                <tr>
                <br>
              
                <td>
                    <input id="txtSearchSil" size="30" name="txtSearchSil">
                </td>
                <td>
                    <input type="submit" value="Sil" name="silbtn">
                    </td>
                <br>

                <?php
                if(isset($_POST["silbtn"])){
                    
               
                
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

$sql = "DELETE FROM tb_ogrenci WHERE tckimlik='".$_POST["txtSearchSil"]."'";

if ($conn->query($sql) === TRUE) {
echo "Delete Process Is Completed";
}
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  }
                
                
?>
                               
                
                </tr>
                </div>
                

            </tbody>
        </table>
</form>
             
          </div>
        </div>
      </div>
    </section>


    <br><br><br> 


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
<br><br><br>

    <section class="site-section">
      <div class="container">
        <div class="row" style="margin-right:-90px">
          <div class="col-md-6 col-lg-4" style="margin-left:-100px">
              
              <h2 class="text-primary">Öğrenci arama</h2>
          
              <form action=" " method="POST"> <?php /*arama islemi gerceklesicek*/ ?>

        <table align="center">
            <tbody align="center">
               
                <tr>
                    <td width="34" style="width: 30" colspan="2" >
                        <p style="font-size: 15px"><a name="siparis"></a><br></p>
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
                
                
            <?php
            
$servername="localhost";
$username="root";
$password="";
$dbname="yazilim_db";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

$sql="SELECT *FROM tb_ogrenci";
$result=mysqli_query($conn,$sql);
$i=1; 

echo "<center> <table align='center' border=1>
<tr>
<th></th>
<th>İsim</th>
<th>Tckimlik</th>
<th>OkulNo</th>
<th>Devamsizlik</th>

</tr>";
while($row=mysqli_fetch_array($result)) {
    
    echo "<tr>";
    echo "<td id='Id'>".$row['id']."</td>";
    echo "<td id='Ad'>".$row['isim']."</td>";
    echo "<td>".$row['tckimlik']."</td>";
    echo "<td>".$row['okulno']."</td>";
    echo "<td>".$row['devamsizlik']."</td>";

    echo "</tr>";
    $i++;
    }

echo "</table> </center>";
mysqli_close($conn);

 ?>    


            </tbody>
        </table>
</form>

           

            </div>

          <div class="col-md-6 col-lg-4" style="margin-left:80px">
              <h2 class="text-primary">Ödev Atama</h2>

              <form action="" method="POST">      <?php /* ÖDEV ATAMA ekleme islemi gerceklesicek*/ ?>
        
        <table align="center">
            <tbody align="center">
               
                <tr>
                    <td width="34" style="width: 30" colspan="2" >
                        <p style="font-size: 23px"><a name="siparis"></a><br></p>
                    </td>
                </tr>
               <div align="center">
                <tr>
                <br>
              
                <td>
                    Ödev veya Sinav İsim:
                    <input id="odevisim" size="30" name="odevisim">
                </td>
          
                <tr>
                <td>
                    Ödev Çeşidi:
                    <select name="odevcesid" id="odevcesid">
                <option value="">Ödev çesidini seçiniz:</option>
                    <option value="odev">Ödev</option>
                    <option value="sinav">Sınav</option>
                </select>
                <br>

                <tr>
                <td>
                    Ödev Tarihi:
                    <input id="odevtarih" size="30" name="odevtarih">
                </td>
                </tr>                            
          
                
                <td>
                    <input type="submit" value="Ata" name="ogrsınavbtn">
                    </td>
                
                </form>
                
                <form action="">
                    
                    
                <?php
                
                if(isset($_POST["ogrsınavbtn"])){
                    
               
                
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

$sql ="INSERT INTO tb_odevsinav (odevisim,odevcesid,odevtarih) 
VALUES ('".$_POST["odevisim"]."','".$_POST["odevcesid"]."','".$_POST["odevtarih"]."')";

if ($conn->query($sql) === TRUE) {
  echo "New Record Created Successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  }
                
                
?>
                
                
                </tr>
                </div>
                

            </tbody>
        </table>
</form>
          
          </div>

          <div class="col-md-6 col-lg-4" style="margin-right:-60px">             
             <h2 class="text-primary">Devamsızlık Girme</h2>
              
             <form action="" method="POST">      <?php /*devamsizlik islemi gerceklesicek*/ ?>
        
        <table align="center">
            <tbody align="center">
               
                <tr>
                    <td width="34" style="width: 30" colspan="2" >
                        <p style="font-size: 23px"><a name="siparis">ID kullanarak devamsizlik bilgisini giriniz: </a><br></p>
                    </td>
                </tr>
               <div align="center">
             
                <td>
                    id:
                    <input id="Dataid" size="30" name="Dataid">
                </td>

                <tr>
                <br>
              
                <td>
                    Devamsizlik:
                    <input id="DataDevamsizlik" size="30" name="DataDevamsizlik">
                </td>

                <tr>
                <br>
              
                <td>
                    <input type="submit" value="Güncelle" name="devamsizupdbtn">
                    </td>
                
                </form>
                
                <form action="">
                    
                    
                <?php
                
                if(isset($_POST["devamsizupdbtn"])){
                    
               
                
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

$sql ="UPDATE tb_ogrenci SET devamsizlik ='".$_POST["DataDevamsizlik"]."' WHERE id='".$_POST["Dataid"]."'";

if ($conn->query($sql) === TRUE) {
  echo "Update Successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  }
                
                
?>
              
                
                </tr>
                </div>
                

            </tbody>
        </table>
</form>
         
          </div>
        </div>
      </div>
    </section>

<br><br><br>




</td>
</tr>
</tr>
</div>


<br><br><br>

<section class="site-section">
      <div class="container">
        <div class="row" style="margin-right:-90px">
          <div class="col-md-6 col-lg-4" style="margin-left:-100px">
              
              <h2 class="text-primary">Sınav notu gir</h2>

              
              <form action="" method="POST">      <?php /*ekleme islemi gerceklesicek*/ ?>
        
        <table align="center">
            <tbody align="center">
               
                <tr>
                    <td width="34" style="width: 30" colspan="2" >
                        <p style="font-size: 23px"><a name="siparis"></a><br></p>
                    </td>
                </tr>
               <div align="center">
                <tr>
                <br>
              
                <td>
                    Öğrenci numarasi:
                    <input id="ogrnum" size="30" name="ogrnum">
                </td>
          
                <tr>
                <td>
                    Sınav isim:
                    <select name="sınavad" id="sınavad">
                <option value="">Sınav Adı:</option>
                    <option value="Türkçe">Türkçe</option>
                    <option value="Matematik">Matematik</option>
                </select>
                <br>

                <tr>
                <td>
                    Kaçıncı Sınav:
                    <select name="sınavsayi" id="sınavad">
                <option value="">Kaçıncı sınav:</option>
                    <option value="sınav1">Sınav 1</option>
                </select>
                <br>

                <tr>
                <td>
                    Öğrenci notunu giriniz:
                    <input id="ogrnot" size="30" name="ogrnot">
                </td>
                </tr>                            
          
                
                <td>
                    <input type="submit" value="Ata" name="ogrnotbtn">
                    </td>
                
                </form>
                
                <form action="">
                    
                    
                <?php
                
                if(isset($_POST["ogrnotbtn"])){
                    
               
                
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

$sql ="INSERT INTO tb_notlar (ogrokulno,ogrdersadi,ogrnot) 
VALUES ('".$_POST["ogrnum"]."','".$_POST["sınavad"]."','".$_POST["ogrnot"]."')";

if ($conn->query($sql) === TRUE) {
  echo "New Record Created Successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  }
                
                
?>
                
                
                </tr>
                </div>
                

            </tbody>
        </table>
</form>





            </div>

          <div class="col-md-6 col-lg-4" style="margin-left:80px">
              <h2 class="text-primary">Sınav Güncelle</h2>

              <form action="" method="POST">      <?php /* NOT GÜNCELLEME güncelleme islemi gerceklesicek*/ ?>
        
        <table align="center">
            <tbody align="center">
               
                <tr>
                    <td width="34" style="width: 30" colspan="2" >
                        <p style="font-size: 23px"><a name="siparis">Güncellemek istediginiz öğrencinin bilgilerini ve okul nosunu giriniz: </a><br></p>
                    </td>
                </tr>
               <div align="center">
                <tr>
                <br>
                
                <tr>
                <br>
              
                <td>
                    Okul No:
                    <input id="Dataokulno" size="30" name="Dataokulno">
                </td>

                <tr>
                <br>
              
                <tr>
                <td>
                    Ders adi:
                    <select name="sinavad" id="sinavad">
                <option value="">Sınav Adı:</option>
                    <option value="Türkçe">Türkçe</option>
                    <option value="Matematik">Matematik</option>
                </select>
                <br>
          
                <tr>
                <td>
                    Not:
                    <input id="updnot" size="30" name="updnot">
                </td>
                </tr>
                

                <td>
                    <input type="submit" value="Güncelle" name="ogrnotupdbtn">
                    </td>
                
                </form>
                
                <form action="">
                    
                    
                <?php
                
                if(isset($_POST["ogrnotupdbtn"])){
                    
               
                
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

$sql ="UPDATE tb_notlar SET ogrdersadi='".$_POST["sinavad"]."',ogrnot='".$_POST["updnot"]."' WHERE ogrokulno='".$_POST["Dataokulno"]."'";

if ($conn->query($sql) === TRUE) {
  echo "Update Successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  }
                
                
?>
                
                
                </tr>
                </div>
                

            </tbody>
        </table>
</form>

          </div>

          <div class="col-md-6 col-lg-4" style="margin-right:-60px">             
             <h2 class="text-primary">Program güncelle</h2>
              
             <form action=" " method="POST"> <?php /*ders programi güncelleme islemi gerceklesicek*/ ?>

<?php
/*$sql="SELECT ders_saati,pazartesi,sali,carsamba,persembe,cuma FROM tb_dersprogrami WHERE ders_saati='".$_POST["derssaat"]."' AND pazartesi='".$_POST["dersgunu"]."'OR sali='".$_POST["dersgunu"]."' OR carsamba='".$_POST["dersgunu"]."' OR persembe='".$_POST["dersgunu"]."' OR cuma='".$_POST["dersgunu"]."'";*/ 
?>

        <table align="center">
            <tbody align="center">
               
                <tr>
                    <td width="34" style="width: 30" colspan="2" >
                        <p style="font-size: 15px"><a name="siparis">Değiştirmek istediginiz dersin gün ve saatini girin: </a><br></p>
                    </td>
                </tr>
               <div align="center">
                <tr>
                <br>
              
                <td>güncel ders saati girin:
                    <input id="dsaat" size="30" name="dsaat">
                </td>

                <tr>
                <br>

                <td>Pazartesi:
                    <input id="1gunu" size="30" name="1gunu">
                </td>

                <tr>
                <br>
              
                <td>Sali:
                    <input id="2gunu" size="30" name="2gunu">
                </td>

                <tr>
                <br>
              
                <td>Çarşamba:
                    <input id="3gunu" size="30" name="3gunu">
                </td>

                <tr>
                <br>
              
                <td>Perşembe:
                    <input id="4gunu" size="30" name="4gunu">
                </td>

                <tr>
                <br>
              
                <td>Cuma:
                    <input id="5gunu" size="30" name="5gunu">
                </td>

               



                <td>
                    <input type="submit" value="Güncelle" name="gunceldersbtn">
                    </td>
          <tr align="center"> 
        <td>
                <?php
                if(isset($_POST["gunceldersbtn"])){
                
                
$servername="localhost";
$username="root";
$password="";
$dbname="yazilim_db";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

/*$sql ="UPDATE tb_ogrenci SET isim='".$_POST["Dataisim"]."',tckimlik='".$_POST["DataKimlik"]."',okulno='".$_POST["DataOkulno"]."' WHERE id='".$_POST["Dataid"]."'";*/
$sql="UPDATE tb_dersprogrami SET pazartesi='".$_POST["1gunu"]."',sali='".$_POST["2gunu"]."' ,carsamba='".$_POST["3gunu"]."',persembe='".$_POST["4gunu"]."',cuma='".$_POST["5gunu"]."' WHERE ders_saati='".$_POST["dsaat"]."'";
if ($conn->query($sql) === TRUE) {
  echo "Update Successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  }
                
                
?>
              
              
                
                </tr>
                </div>
                

            </tbody>
        </table>
</form>
             
          </div>
        </div>
      </div>
    </section>

</body>

</html>
