<?php
include "../../lib/koneksi.php";
session_start();
 
  // $filename = $_FILES['images']['name'];
   $r=mysql_fetch_array(mysql_query("select * from temp"));
   $isi=$_POST['FCKeditor1'];

if($_POST['aksi']=='input'){
  
  
	  $query = mysql_query("insert into artis (nama_artis,profil,gambar) values 
	                     ('$_POST[nama]','$isi','$r[temp]')");										
 
   }

  
else {
  if ($r['temp']==''){
  
   $query = mysql_query("update artis set nama_artis='$_POST[nama]',
                        profil='$isi' where id_artis='$_POST[id]'");
   
  
   }
   
   else{
     $query2=mysql_query("select * from artis where id_artis='$_POST[id]'");
	 $r2=mysql_fetch_array($query2);
	 unlink('../../gambar_artis/$r2[gambar]');
    $query = mysql_query("update artis set nama_artis='$_POST[nama]',gambar='$r[temp]',
                        profil='$isi' where id_artis='$_POST[id]'");
    
 
   }
   
   
}   
  if ($r['temp']!=''){ 
   unlink("../../gambar_temp/$r[temp]");
   while($r=mysql_fetch_array(mysql_query("select * from temp"))){
       mysql_query("delete from temp where temp='$r[temp]'");
   }
   }
  

?>
