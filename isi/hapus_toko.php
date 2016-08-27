<?php
include "../../lib/koneksi.php";
$q=mysql_query("select * from toko where id_toko='$_GET[id]'");
$r=mysql_fetch_array($q);
unlink ("../../gambar_toko/$r[gambar]");
$query=mysql_query("delete from toko where id_toko='$_GET[id]'");
if (isset($_GET['hal'])){
echo "

<script>
window.location='../index.php?kanan=toko&hal=$_GET[hal]';
</script>";
}
else {

echo "

<script>
window.location='../index.php?kanan=toko';
</script>";
}
