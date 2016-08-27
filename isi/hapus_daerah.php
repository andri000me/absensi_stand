<?php
include "../../lib/koneksi.php";

$query=mysql_query("delete from daerah where id_daerah='$_GET[id]'");
if (isset($_GET['hal'])){
echo "

<script>
window.location='../index.php?kanan=daerah&hal=$_GET[hal]';
</script>";
}
else {

echo "

<script>
window.location='../index.php?kanan=daerah';
</script>";
}
