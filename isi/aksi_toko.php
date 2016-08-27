<?php
include "../../lib/koneksi.php";

   $tmp_file = $_FILES['images_toko']['tmp_name'];

   $filename = $_FILES['images_toko']['name'];
   //$path = pathinfo($_SERVER['PHP_SELF']);
   $destination = "../../gambar_toko/" . $filename;
   
   
   copy($tmp_file, $destination);
 
   
 ?>