<!DOCTYPE html>
<html>
  <head>
  <h1><center>Trabzonspor Bilet Sitesine Hoş Geldiniz</center></h1> 
   <meta charset="utf-8">
    <title>GİRİŞ SAYFASI</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <center>
      <h1><center><a href="#"><img src="ts.png" width="400" height="400" alt="Örnek Resim" /></a><?php // html kodları ile resim koydum ?>     
</center></h1>
      <br>
      <br>
      <form id="frm" action="" method="post">
        <table>
          <tr>
            <td>
              <b>Username:</b>
            </td>
            <td>
              <input type='text' name='username'/>
            </td>
          </tr>
          <tr>
            <td>
              <b>Password:</b>
            </td>
            <td>
              <input type='password' name='password'/>
            </td>
          </tr>
          <tr>
            <td>
              <input type='submit' value='Log in!' id="btn" name="btn"/>
            </td>
          </tr>
        </table>
      </form>
      <div>
    <form action="reg.php" method="POST">
    <p>
    <input type="submit"  onClick="location.href='reg.php'" id="btn" value="Kayit Ol" />
    </p>
    </form>
    </div>
      <?php
        session_start();//session başlattım 
        if(isset($_POST['username'], $_POST['password'])){//post başlatıp kullanıcı adı ve şifre için kutu hazırladım
            require 'connect.php'; //pdo yu bağladığım sayfayı ekledim 

            $pass = hash('sha256', $_POST['password']);//pdo da şifrelenmesi için hash atadım 
            $usr = $_POST['username'];// kutunun içindeki kullanıcı adını $usr a atadım 

            $query = dbConnect()->prepare("SELECT username, password FROM users WHERE username=:username AND password=:password");//giriş olması için pdoya atadığım fonksiyonu kullandım
            $query->bindParam(':username', $usr);//kullanıcı adı doğruluğunu kontrol ediyor
            $query->bindParam(':password', $pass);//şifrenin doğruluğunu kontrol ediyor
            $query->execute();//çalıştırıyor

            $row = $query->fetch();

            if($row['password'] == $pass){// şifre doğruysa
              $_SESSION['username'] = $row['username'];// kullanıcı adı doğruysa
              header("Location: site.php");// siteye yönlendiriliuor
            }
            else {
              echo "Yanlış Kullanıcı Adı ya da Şifre !";
            }
        }
      ?>
    </center>
  </body>
</html>