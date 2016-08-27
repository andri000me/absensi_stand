<?php

include "../../lib/koneksi.php";
$query=mysql_query("delete from kategori where id_kategori='$_GET[id]'");

?>

<script>
window.location='../index.php?kanan=kategori';
</script>

