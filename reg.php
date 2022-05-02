<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form action="" method="post">
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
            <input type='submit' value='Register' name="btn1"/>
          </td>
        </tr>
      </table>
      <?php
        session_start();//session başlattım 
        if(isset($_POST['username'], $_POST['password'])){//kullanıcı adı şifre almak için kutu
            require 'connect.php';//pdo ya bağlantı

            $usr = $_POST['username'];//kullanıcı adı için pdo ya atadığımız $usr 
            $pass = hash('sha256', $_POST['password']);// şifrenin hashli gitmesi için sha25

          

            $check = dbConnect()->prepare("SELECT * FROM users");//users tablosuna bağlant

            $check->bindParam(':username', $usr);//kullanıcı adı ekleme
            $check->bindParam(':password', $pass);// şifre ekleme

            $check->execute();//çalıştırma

            $row = $check->fetch();//pdoda kontrol ediyor
            if ($row['username'] == $usr) {//bu kullanıcı var mı diye
              echo "Kayıtlı Kullanıcı";// varsa ekrana yazdırıyor
            }
            else {//yoksa
  
              $query = dbConnect()->prepare("INSERT INTO `users`(`username`, `password`) VALUES ('$usr', '$pass')");// girilen kullanıcı adı ve şifreyi
              $query->execute();// pdoya ekliyor

              $_SESSION['username'] = $usr;
              header("Location: index.php");// giriş sayfasına yönlendiriyor
            }
        }
      ?>
    </form>
  </body>
</html>
