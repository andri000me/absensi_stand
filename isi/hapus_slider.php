<?php

include "../../lib/koneksi.php";
$q=mysql_query("select * from slider where id_slider='$_GET[id]'");
$r=mysql_fetch_array($q);
unlink ("../../gambar_slider/$r[gambar]");
$query=mysql_query("delete from slider where id_slider='$_GET[id]'");

?>

<script>
window.location='../index.php?kanan=slider';
</script>

