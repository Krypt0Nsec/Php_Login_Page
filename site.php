<html>
<head>
<title>
</title>
<head>
</head>

<body>

<center><a href="#"><img src="bilet.jpeg" width="500" height="300" alt="Örnek Resim" /></a><?php // html kodları ile resim koydum ?>     
</center>



<!DOCTYPE html>
<html>
  <head>
  <title></title>  
  <meta charset="utf-8">
    <title>ANA SAYFA</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <center> <h2>
    <?php
     session_start();//session başlattım 
      if (isset($_SESSION['username'])) {//kullanıcı adını 
        $usr = $_SESSION['username'];//pdodan alıyor
         echo "Hoş Geldin ".ucwords($usr);// hangi kullanıcıysa selam veriyor
      }
      else {
        echo "";
      }
    ?>
    </h2>
    </center>
  </body>
</html>



<center>    
<table border="1"><?php//satın alma işlemleri için bilet ve bilet fiyatlarını gösterdiğim tablo ve istediğin bileti tıkladıktan sonra yönlendirileceğimiz site?> 
        
        <tr>
            <td>Platinium B</td>
            <td>1000₺</td>
            <td><input type="submit" onClick="location.href='satinal.php'" value="Satın Al"> 
        </td>    
        </tr>
        <tr>
            <td>Platinium A-C</td>
            <td>900₺</td>
            <td><input type="submit" onClick="location.href='satinal.php'" value="Satın Al"></td>
            
        </tr>
        <tr>
            <td>Gold</td>
            <td>700₺</td>
            <td><input type="submit"onClick="location.href='satinal.php'" value="Satın Al"></td>
            
        </tr>
        <tr>
            <td>Silver</td>
            <td>500₺</td>
            <td><input type="submit"  onClick="location.href='satinal.php'"  value="Satın Al"></td>
        </tr>
        <tr>
            <td>Kategori 1 (Batı)</td>
            <td>350₺</td>
            <td><input type="submit"  onClick="location.href='satinal.php'" value="Satın Al"></td>
        </tr>
        <tr>
            <td>Kategori 2 (Doğu 1 )</td>
            <td>250₺</td>
            <td><input type="submit" onClick="location.href='satinal.php'"  value="Satın Al"></td>
        </tr>
        <tr>
            <td>Kategori 3 (Doğu 2)</td>
            <td>200₺</td>
            <td><input type="submit" onClick="location.href='satinal.php'"  value="Satın Al"></td>
        </tr>
        <tr>
            <td>Kategori 4 (Doğu 3)</td>
            <td>175₺</td>
            <td><input type="submit"  onClick="location.href='satinal.php'"  value="Satın Al"></td>
        </tr>
        <tr>
            <td>Kategori 5 (Kale Arkası)</td>
            <td>125₺</td>
            <td><input type="submit"  onClick="location.href='satinal.php'"  value="Satın Al"></td>
        </tr>
        

</table>
        
</center>

<h4> <center><input type="submit"  onClick="location.href='logout.php'"  value="Çıkış Yap"></center> </h4><?php // çıkış yapmak için buton ?>
<h4>
<?php 
echo 'Ekte olan sayfadan buraya yönlendirildiniz <br>'."".$_SERVER['HTTP_REFERER'];//server ile hangi sayfadan yönlendirildiğimizi gösterdim
?>
</h4>
</body>
</html>
