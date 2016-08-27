<?php
/* 
 * Copyright 2012
 * by M.Deden Firdaus
 * web : http://dthan.com
 * email : dthan@dthan.com
 */
include "../../lib/koneksi.php";
session_start();
if($_POST['aksi']=='input'){
   $query = mysql_query("insert into kategori (nama_kategori) values ('$_POST[nama]')");
   if($query){
            echo 'berhasil';
       }else{
            echo 'Input gagal';
        }
   }
else{
  
     $query = mysql_query("update kategori set nama_kategori='$_POST[nama]' where id_kategori='$_POST[id]'");
   if($query){
            echo 'berhasil';
       }else{
            echo 'Input gagal';
        }
       
}
?>