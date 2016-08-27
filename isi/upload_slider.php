<?php
include "../../lib/koneksi.php";
include "../../lib/fungsi_seo.php";
foreach ($_FILES["images"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
	    $nama = $_FILES["images"]["name"][$key];
        $name = judul_slider($nama);
        //move_uploaded_file( $_FILES["images"]["tmp_name"][$key], "../../gambar_baju/" . $_FILES['images']['name'][$key]);
     $vdir_upload = "../../gambar_slider/";
	 
  $vfile_upload = $vdir_upload . "asli_".$name;

  //Simpan gambar dalam ukuran sebenarnya
 move_uploaded_file( $_FILES["images"]["tmp_name"][$key], "../../gambar_slider/asli_" . $name);
 mysql_query("insert into temp_slider values('$name')");
  //identitas file asli
  $im_src = imagecreatefromjpeg($vfile_upload);
  $src_width = imageSX($im_src);
  $src_height = imageSY($im_src);

  //Simpan dalam versi medium 500 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width2 = 1000;
  $dst_height2 = 505;

  //proses perubahan ukuran
  $im2 = imagecreatetruecolor($dst_width2,$dst_height2);
  imagecopyresampled($im2, $im_src, 0, 0, 0, 0, $dst_width2, $dst_height2, $src_width, $src_height);

  //Simpan gambar
  imagejpeg($im2,$vdir_upload . $name);
  
  //Hapus gambar di memori komputer
  imagedestroy($im_src);
  imagedestroy($im2);
  unlink ("../../gambar_slider/asli_".$name);
	
	}
}
echo "<h2></h2>";
?>

