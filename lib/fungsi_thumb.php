<?php
// Upload gambar untuk gallery
function UploadGallery($upload_name){
  //direktori gambar
  $vdir_upload = "../../gallery/";
  $vfile_upload = $vdir_upload . $upload_name;

  //Simpan gambar dalam ukuran sebenarnya
 move_uploaded_file($_FILES["upload"]["tmp_name"], $vfile_upload);

  //identitas file asli
  $im_src = imagecreatefromjpeg($vfile_upload);
  $src_width = imageSX($im_src);
  $src_height = imageSY($im_src);

  //Simpan dalam versi medium 500 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width2 = 700;
  $dst_height2 = ($dst_width2/$src_width)*$src_height;

  //proses perubahan ukuran
  $im2 = imagecreatetruecolor($dst_width2,$dst_height2);
  imagecopyresampled($im2, $im_src, 0, 0, 0, 0, $dst_width2, $dst_height2, $src_width, $src_height);

  //Simpan gambar
  imagejpeg($im2,$vdir_upload . $upload_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($im_src);
  imagedestroy($im2);

}
function UploadFotoUser($upload_name){
  //direktori gambar
  $vdir_upload = "../../../foto_user/";
  $vfile_upload = $vdir_upload . $upload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upload"]["tmp_name"], $vfile_upload);


  
 
}


function UploadImageArtikel($upload_name){
  //direktori gambar
  $vdir_upload = "../../../foto_artikel/";
  $vfile_upload = $vdir_upload . $upload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upload"]["tmp_name"], $vfile_upload);

  //identitas file asli
  $im_src = imagecreatefromjpeg($vfile_upload);
  $src_width = imageSX($im_src);
  $src_height = imageSY($im_src);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width = 110;
  $dst_height = ($dst_width/$src_width)*$src_height;

  //proses perubahan ukuran
  $im = imagecreatetruecolor($dst_width,$dst_height);
  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

  //Simpan gambar
  imagejpeg($im,$vdir_upload . "small_" . $upload_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width2 = 360;
  $dst_height2 = ($dst_width2/$src_width)*$src_height;

  //proses perubahan ukuran
  $im2 = imagecreatetruecolor($dst_width2,$dst_height2);
  imagecopyresampled($im2, $im_src, 0, 0, 0, 0, $dst_width2, $dst_height2, $src_width, $src_height);

  //Simpan gambar
  imagejpeg($im2,$vdir_upload . "medium_" . $upload_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($im_src);
  imagedestroy($im);
  imagedestroy($im2);
}


function UploadBanner($upload_name){
  //direktori banner
  $vdir_upload = "../../../foto_banner/";
  $vfile_upload = $vdir_upload . $upload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upload"]["tmp_name"], $vfile_upload);
}


// Upload file untuk download file
function UploadFile($upload_name){
  //direktori file
  $vdir_upload = "../../../files/";
  $vfile_upload = $vdir_upload . $upload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upload"]["tmp_name"], $vfile_upload);
}


// Upload gambar untuk album galeri foto
function UploadAlbum($upload_name){
  //direktori gambar
  $vdir_upload = "../../../foto/";
  $vfile_upload = $vdir_upload . $upload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upload"]["tmp_name"], $vfile_upload);

  //identitas file asli
  $im_src = imagecreatefromjpeg($vfile_upload);
  $src_width = imageSX($im_src);
  $src_height = imageSY($im_src);

  //Simpan dalam versi small 120 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width = 120;
  $dst_height = ($dst_width/$src_width)*$src_height;

  //proses perubahan ukuran
  $im = imagecreatetruecolor($dst_width,$dst_height);
  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

  //Simpan gambar
  imagejpeg($im,$vdir_upload . "kecil_" . $upload_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($im_src);
  imagedestroy($im);
}





// Upload gambar untuk sekilas info
function UploadInfo($upload_name){
  //direktori gambar
  $vdir_upload = "../../../foto_info/";
  $vfile_upload = $vdir_upload . $upload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upload"]["tmp_name"], $vfile_upload);

  //identitas file asli
  $im_src = imagecreatefromjpeg($vfile_upload);
  $src_width = imageSX($im_src);
  $src_height = imageSY($im_src);

  //Simpan dalam versi small 54 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width = 54;
  $dst_height = ($dst_width/$src_width)*$src_height;

  //proses perubahan ukuran
  $im = imagecreatetruecolor($dst_width,$dst_height);
  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

  //Simpan gambar
  imagejpeg($im,$vdir_upload . "kecil_" . $upload_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($im_src);
  imagedestroy($im);
}
?>
