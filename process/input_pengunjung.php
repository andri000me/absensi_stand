<?php
/* 
 * Copyright 2012
 * by M.Deden Firdaus
 * web : http://dthan.com
 * email : dthan@dthan.com
 */
include "../lib/koneksi.php";
session_start();
$r=mysql_fetch_array(mysql_query("select * from temp"));
$foto=$r['temp'];
if($_POST['aksi']=='input'){
   
  
	  $query = mysql_query("insert into pengunjung (nama,jurusan,facebook,twitter,no_hp,foto) values ('$_POST[nama]',
                                            '$_POST[jurusan]','$_POST[facebook]','$_POST[twitter]','$_POST[hp]','$foto')");										
   
   
   if($query){
            echo 'berhasil';
       }else{
            echo 'Input gagal';
        }
   }
else{

    if($foto!=''){
	$query = mysql_query("update pengunjung set nama='$_POST[nama]', jurusan='$_POST[jurusan]',facebook='$_POST[facebook]',
	                     twitter='$_POST[twitter]',no_hp='$_POST[hp]',foto='$foto' where id='$_POST[id]'");
	}
	else {
	$query = mysql_query("update pengunjung set nama='$_POST[nama]', jurusan='$_POST[jurusan]',facebook='$_POST[facebook]',
	                     twitter='$_POST[twitter]',no_hp='$_POST[hp]' where id='$_POST[id]'");
	}
     
     
   if($query){
            echo 'berhasil';
       }else{
            echo 'Input gagal';
        }
   
}   

   while($r=mysql_fetch_array(mysql_query("select * from temp"))){
       mysql_query("delete from temp where temp='$r[temp]'");
   } 
?>