<?php
/* 
 * Copyright 2012
 * by M.Deden Firdaus
 * web : http://dthan.com
 * email : dthan@dthan.com
 */
include "../../lib/koneksi.php";
session_start();
$r=mysql_fetch_array(mysql_query("select * from temp_toko"));
$gambar=$r['temp'];
if($_POST['aksi']=='input'){
  
  
	  $query = mysql_query("insert into toko (nama_toko,alamat,gambar,id_daerah) values ('$_POST[nama]',
                                            '$_POST[alamat]','$gambar','$_POST[daerah]')");										
   
  
   if($query){
            echo 'berhasil';
       }else{
            echo 'Input gagal';
        }
   }
else{
  if ($gambar!=''){

   $query = mysql_query("update toko set nama_toko='$_POST[nama]',gambar='$gambar',
                        alamat='$_POST[alamat]',id_daerah='$_POST[daerah]' where id_toko='$_POST[id]'");
 
    
 
   if($query){
            echo 'berhasil';
       }else{
            echo 'Input gagal';
        }
   }
   else{
    $query = mysql_query("update toko set nama_toko='$_POST[nama]',
                        alamat='$_POST[alamat]',id_daerah='$_POST[daerah]' where id_toko='$_POST[id]'");
      
	   if($query){
            echo 'berhasil';
       }else{
            echo 'Input gagal';
        }
   }
} 

 while($r=mysql_fetch_array(mysql_query("select * from temp_toko"))){
       mysql_query("delete from temp_toko where temp='$r[temp]'");
   } 
?>