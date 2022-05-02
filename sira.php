<html>
<head>
<title>
</title>
</head>
<body>
<?php
echo 'Ekte olan sayfadan buraya yönlendirildiniz <br>'."Ekte=>".$_SERVER['HTTP_REFERER'];//server ile hangi sayfadan yönlendirildiğimizi gösterdim
?>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
    <div  id="frm">
        <form action="index.php" method="POST">
        <?php
        echo 'Blok NO: '.mt_rand(0,100).'<br>';// rastgele blok no
        print '<br>';
        echo 'Koltuk NO: '.mt_rand(0,62);'<br>';// rastgele koltuk no
        
        ?>

        <p>
            <input type="submit" id="btn" onClick="location.href='index.php'" value="Çıkış Yap" />
        </p>
        </form>
    </div>
   
</body>
</html>