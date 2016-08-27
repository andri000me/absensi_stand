<?php
/* 
 * Copyright 2012
 * by M.Deden Firdaus
 * web : http://dthan.com
 * email : dthan@dthan.com
 */
include "../../lib/koneksi.php";
session_start();
$r=mysql_fetch_array(mysql_query("select * from temp_slider"));
$gambar=$r['temp'];
if($_POST['aksi']=='input'){
   $query = mysql_query("insert into slider (judul,gambar) values ('$_POST[judul]','$gambar')");
   if($query){
            echo 'berhasil';
       }else{
            echo 'Input gagal';
        }
   }
else{
   if($gambar==''){
     $query = mysql_query("update slider set judul='$_POST[judul]' where id_slider='$_POST[id]'");
   }
   else {
     
     $query = mysql_query("update slider set judul='$_POST[judul]', gambar='$gambar' where id_slider='$_POST[id]'");
   }
   if($query){
            echo 'berhasil';
       }else{
            echo 'Input gagal';
        }
       
}
 while($r=mysql_fetch_array(mysql_query("select * from temp_slider"))){
       mysql_query("delete from temp_slider where temp='$r[temp]'");
   }
?>