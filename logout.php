<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Logout</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
        session_start();//session başlattım 
        $_SESSION = array();//session ı diziye atadım
        session_destroy();// sessionı kapadım 
        echo "<a href='index.php'>Girişe Dön</a> ya da <a href='reg.php'>Kayıt Ol</a>";//kayıt olmak ya da anasayfaya dönmek için link 
    ?>
  </body>
</html>
