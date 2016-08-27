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
   $query = mysql_query("insert into daerah (daerah) values ('$_POST[nama]')");
   if($query){
            echo 'berhasil';
       }else{
            echo 'Input gagal';
        }
   }
else{
  
     $query = mysql_query("update daerah set daerah='$_POST[nama]' where id_daerah='$_POST[id]'");
   if($query){
            echo 'berhasil';
       }else{
            echo 'Input gagal';
        }
       
}
?>