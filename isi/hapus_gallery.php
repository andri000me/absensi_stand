<?php
include "../../lib/koneksi.php";
$q=mysql_query("select * from gallery where id_gallery='$_GET[id]'");
$r=mysql_fetch_array($q);
unlink ("../../gambar_baju/$r[gambar]");
$query=mysql_query("delete from gallery where id_gallery='$_GET[id]'");

?>

<script>
window.location='../index.php?kanan=baju';
</script>
