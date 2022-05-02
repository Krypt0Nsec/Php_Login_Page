<html>
<head>
<title>
</title>
</head>
<body>
<?php
echo 'Ekte olan sayfadan buraya yönlendirildiniz <br>'."Ekte=>".$_SERVER['HTTP_REFERER'];//server ile hangi sayfadan yönlendirildiğimizi gösterdim

echo "<br> <h2><center><br><b><font color='#660000' >Satın alımı için lütfen aşağıdaki bilgileri doldurunuz</h2></center></b></font>";
?>
<form action="sira.php" method="POST">
<table align="center">
<tr>
<td>Kredi Kartı Numarası</td>
<td>:</td>
<td><input type="text" pattern="cc"></td>
</tr>
<tr>
<td>Son Kullanma Tarihi</td>
<td>:</td>
<td><input type="month" name="bdaymonth"></td>
</tr>
<td>CVC</td>
<td>:</td>
<td><input type="text" pattern="\d{3}"></td>
</tr>
<tr>
<td></td>
<td></td>
<td><input type="submit" onClick="location.href='sira.php'" value="Onayla"></td>
</tr>
</table>
</form>
<?php



?>


</body>
</html>