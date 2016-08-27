<?php
/* 
 * Copyright 2012
 * by M.Deden Firdaus
 * web : http://dthan.com
 * email : dthan@dthan.com
 */
include "../../lib/koneksi.php";
session_start();
 //$query = mysql_query("insert into temp values ('$_POST[gambar]')");

 
 
 
if($_POST['aksi']=='input'){
  
  
	  $query = mysql_query("insert into artis (nama_artis,profil,gambar) values ('$_POST[nama]',
                                            '$isi','$_POST[gambar]')");										
   
  
   if($query){
            echo 'berhasil';
       }else{
            echo 'Input gagal';
        }
   }
else{
  if ($_POST['gambar']!=''){
/*$query2=mysql_query("select * from artis where id_artis='$_POST[id]'");
	 $r2=mysql_fetch_array($query2);
	 unlink("../../gambar_artis/$r2[gambar]");*/
     $query = mysql_query("update artis set nama_artis='$_POST[nama]',gambar='$_POST[gambar]',
                        profil='$_POST[profil]' where id_artis='$_POST[id]'");
 
    
 
   if($query){
            echo 'berhasil';
       }else{
            echo 'Input gagal';
        }
   }
   else{
  
    $query = mysql_query("update artis set nama_artis='$_POST[nama]',
                        profil='$_POST[profil]' where id_artis='$_POST[id]'");
      
	   if($query){
            echo 'berhasil';
       }else{
            echo 'Input gagal';
        }
   }
} 
//echo 'berhasil';      

?>