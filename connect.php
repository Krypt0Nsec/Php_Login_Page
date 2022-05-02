<?php
   function dbConnect(){ //pdo bağlamak için fonksiyon yazdım 
     try { //denemeyi başlattım 
       $conn = new PDO ("mysql:dbname=proje;host=localhost", "root", "");//pdo nesnesini tanımladım   
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//özelliklerini belirttim 
      return $conn;// bağlantı için döndürdüm 
     } catch (PDOException $e) { //pdoyu yakalayacak 
       echo 'ERROR', $e->getMessage();// bağlanmazsa error yazıcak 
     }

   }
?>
