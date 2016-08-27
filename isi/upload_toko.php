<?php
include "../../lib/koneksi.php";
foreach ($_FILES["images"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $name = $_FILES["images"]["name"][$key];
		mysql_query("insert into temp_toko values ('$name')");
        move_uploaded_file( $_FILES["images"]["tmp_name"][$key], "../../gambar_toko/" . $_FILES['images']['name'][$key]);
    }
}
echo "<h2></h2>";
?>

