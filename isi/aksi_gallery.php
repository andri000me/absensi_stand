<?php
 $tmp_file = $_FILES['gambar']['tmp_name'];
 
   $filename = $_FILES['gambar']['name'];
   //$path = pathinfo($_SERVER['PHP_SELF']);
   $destination = '../../gambar_baju/' . $filename;
   move_uploaded_file($tmp_file, $destination);
?>