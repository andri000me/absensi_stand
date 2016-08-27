<?php
/* 
 * Copyright 2012
 * by M.Deden Firdaus
 * web : http://dthan.com
 * email : dthan@dthan.com
 */
session_start();
//include file(s)

include '../../lib/koneksi.php';
        $username=$_POST['username'];
		$password=md5($_POST['password']);
        $r =mysql_query("select * from user where username='$username'	and password ='$password'");
        $jml=mysql_num_rows($r);

        if ($jml>0){
            $data = mysql_fetch_object($r);
            $_SESSION['namauser'] = $data->username;
           echo 'berhasil';
        }else{
            echo 'gagal';
        }
    

?>