<?php
include "../../lib/koneksi.php";
$q=mysql_query("select * from artis where id_artis='$_GET[id]'");
$r=mysql_fetch_array($q);
unlink ("../../gambar_artis/$r[gambar]");
$query=mysql_query("delete from artis where id_artis='$_GET[id]'");
if (isset($_GET['hal'])){
echo "

<script>
window.location='../index.php?kanan=artist&hal=$_GET[hal]';
</script>";
}
else {

echo "

<script>
window.location='../index.php?kanan=artist';
</script>";
}
