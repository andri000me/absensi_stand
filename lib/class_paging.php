<?php


// class paging untuk hal administrator
class PagingAdmin{
// Fungsi untuk mencek hal dan posisi data
function cariPosisi($batas){
if(empty($_GET['hal'])){
	$posisi=0;
	$_GET['hal']=1;
}
else{
	$posisi = ($_GET['hal']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total hal
function jumlahHalaman($jmldata, $batas){
$jmlhal = ceil($jmldata/$batas);
return $jmlhal;
}

// Fungsi untuk link hal 1,2,3 (untuk admin)
function navHalaman($hal_aktif, $jmlhal){
$link_hal = "";

// Link ke hal pertama (first) dan sebelumnya (prev)
if($hal_aktif > 1){
	$prev = $hal_aktif-1;
	$link_hal .= "<a href=$_SERVER[PHP_SELF]?hal=1><< First</a> 
                    <a href=$_SERVER[PHP_SELF]?hal=$prev>< Prev</a>";
}
else{ 
	$link_hal .= "<span class='disabled'><< First | < Prev |</span> ";
}

// Link hal 1,2,3, ...
$angka = ($hal_aktif > 3 ? " ... " : " "); 
for ($i=$hal_aktif-2; $i<$hal_aktif; $i++){
  if ($i < 1)
  	continue;
	  $angka .= "<a href=$_SERVER[PHP_SELF]?hal=$i>$i</a>";
  }
	  $angka .= " <span class='current'>$hal_aktif</span>";
	  
    for($i=$hal_aktif+1; $i<($hal_aktif+3); $i++){
    if($i > $jmlhal)
      break;
	  $angka .= "<a href=$_SERVER[PHP_SELF]?hal=$i>$i</a> ";
    }
	  $angka .= ($hal_aktif+2<$jmlhal ? " ... <a href=$_SERVER[PHP_SELF]?hal=$jmlhal>$jmlhal</a> " : " ");

$link_hal .= "$angka";

// Link ke hal berikutnya (Next) dan terakhir (Last) 
if($hal_aktif < $jmlhal){
	$next = $hal_aktif+1;
	$link_hal .= " <a href=$_SERVER[PHP_SELF]?hal=$next>Next ></a>
                     <a href=$_SERVER[PHP_SELF]?hal=$jmlhal>Last >></a> ";
}
else{
	$link_hal .= " <span class='disabled'>Next > Last >></span>";
}
return $link_hal;
}
}






// class paging untuk halaman berita (menampilkan semua berita) 
class PagingBerita{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET['hal'])){
	$posisi=0;
	$_GET['hal']=1;
}
else{
	$posisi = ($_GET['hal']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
	$prev = $halaman_aktif-1;
	$link_halaman .= "<a href=berita-1><< First</a>  
                    <a href=berita-$prev>< Prev</a>  ";
}
else{ 
	$link_halaman .= "<span class='disabled'><< First</span> <span class='disabled'><< prev</span>  ";
	
}

// Link halaman 1,2,3, ...
$angka = ($halaman_aktif > 3 ? " ... " : " "); 
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
  if ($i < 1)
  	continue;
	  $angka .= "<a href=berita-$i>$i</a>  ";
  }
	  $angka .= " <span class='current'>$halaman_aktif</span>  ";
	  
    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
    if($i > $jmlhalaman)
      break;
	  $angka .= "<a href=berita-$i>$i</a>  ";
    }
	  $angka .= ($halaman_aktif+2<$jmlhalaman ? " ...  <a href=berita-$jmlhalaman.>$jmlhalaman</a>  " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last) 
if($halaman_aktif < $jmlhalaman){
	$next = $halaman_aktif+1;
	$link_halaman .= " <a href=berita-$next.>Next ></a>  
                     <a href=berita-$jmlhalaman.>Last >></a> ";
}
else{
	$link_halaman .= " <span class='disabled'>Next >></span><span class='disabled'>Last >></span>";
}
return $link_halaman;
}
}



class PagingPelajaran{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET['hal'])){
	$posisi=0;
	$_GET['hal']=1;
}
else{
	$posisi = ($_GET['hal']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
	$prev = $halaman_aktif-1;
	$link_halaman .= "<a href=pelajaran-1><< First</a>  
                    <a href=pelajaran-$prev>< Prev</a>  ";
}
else{ 
	$link_halaman .= "<span class='disabled'><< First</span> <span class='disabled'><< prev</span>  ";
	
}

// Link halaman 1,2,3, ...
$angka = ($halaman_aktif > 3 ? " ... " : " "); 
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
  if ($i < 1)
  	continue;
	  $angka .= "<a href=pelajaran-$i>$i</a>  ";
  }
	  $angka .= " <span class='current'>$halaman_aktif</span>  ";
	  
    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
    if($i > $jmlhalaman)
      break;
	  $angka .= "<a href=pelajaran-$i>$i</a>  ";
    }
	  $angka .= ($halaman_aktif+2<$jmlhalaman ? " ...  <a href=pelajaran-$jmlhalaman.>$jmlhalaman</a>  " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last) 
if($halaman_aktif < $jmlhalaman){
	$next = $halaman_aktif+1;
	$link_halaman .= " <a href=pelajaran-$next.>Next ></a>  
                     <a href=pelajaran-$jmlhalaman.>Last >></a> ";
}
else{
	$link_halaman .= " <span class='disabled'>Next >></span><span class='disabled'>Last >></span>";
}
return $link_halaman;
}
}





class PagingPengajar{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET['hal'])){
	$posisi=0;
	$_GET['hal']=1;
}
else{
	$posisi = ($_GET['hal']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
	$prev = $halaman_aktif-1;
	$link_halaman .= "<a href=pengajar-1><< First</a>  
                    <a href=pengajar-$prev>< Prev</a>  ";
}
else{ 
	$link_halaman .= "<span class='disabled'><< First</span> <span class='disabled'><< prev</span>  ";
	
}

// Link halaman 1,2,3, ...
$angka = ($halaman_aktif > 3 ? " ... " : " "); 
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
  if ($i < 1)
  	continue;
	  $angka .= "<a href=pengajar-$i>$i</a>  ";
  }
	  $angka .= " <span class='current'>$halaman_aktif</span>  ";
	  
    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
    if($i > $jmlhalaman)
      break;
	  $angka .= "<a href=pengajar-$i>$i</a>  ";
    }
	  $angka .= ($halaman_aktif+2<$jmlhalaman ? " ...  <a href=pengajar-$jmlhalaman.>$jmlhalaman</a>  " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last) 
if($halaman_aktif < $jmlhalaman){
	$next = $halaman_aktif+1;
	$link_halaman .= " <a href=pengajar-$next.>Next ></a>  
                     <a href=pengajar-$jmlhalaman.>Last >></a> ";
}
else{
	$link_halaman .= " <span class='disabled'>Next >></span><span class='disabled'>Last >></span>";
}
return $link_halaman;
}
}




class PagingUser{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET['hal'])){
	$posisi=0;
	$_GET['hal']=1;
}
else{
	$posisi = ($_GET['hal']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
	$prev = $halaman_aktif-1;
	$link_halaman .= "<a href=user-1><< First</a>  
                    <a href=user-$prev>< Prev</a>  ";
}
else{ 
	$link_halaman .= "<span class='disabled'><< First</span> <span class='disabled'><< prev</span>  ";
	
}

// Link halaman 1,2,3, ...
$angka = ($halaman_aktif > 3 ? " ... " : " "); 
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
  if ($i < 1)
  	continue;
	  $angka .= "<a href=user-$i>$i</a>  ";
  }
	  $angka .= " <span class='current'>$halaman_aktif</span>  ";
	  
    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
    if($i > $jmlhalaman)
      break;
	  $angka .= "<a href=user-$i>$i</a>  ";
    }
	  $angka .= ($halaman_aktif+2<$jmlhalaman ? " ...  <a href=user-$jmlhalaman.>$jmlhalaman</a>  " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last) 
if($halaman_aktif < $jmlhalaman){
	$next = $halaman_aktif+1;
	$link_halaman .= " <a href=user-$next.>Next ></a>  
                     <a href=user-$jmlhalaman.>Last >></a> ";
}
else{
	$link_halaman .= " <span class='disabled'>Next >></span><span class='disabled'>Last >></span>";
}
return $link_halaman;
}
}


class PagingSiswa{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET['hal'])){
	$posisi=0;
	$_GET['hal']=1;
}
else{
	$posisi = ($_GET['hal']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
	$prev = $halaman_aktif-1;
	$link_halaman .= "<a href=siswa-1><< First</a>  
                    <a href=siswa-$prev>< Prev</a>  ";
}
else{ 
	$link_halaman .= "<span class='disabled'><< First</span> <span class='disabled'><< prev</span>  ";
	
}

// Link halaman 1,2,3, ...
$angka = ($halaman_aktif > 3 ? " ... " : " "); 
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
  if ($i < 1)
  	continue;
	  $angka .= "<a href=siswa-$i>$i</a>  ";
  }
	  $angka .= " <span class='current'>$halaman_aktif</span>  ";
	  
    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
    if($i > $jmlhalaman)
      break;
	  $angka .= "<a href=siswa-$i>$i</a>  ";
    }
	  $angka .= ($halaman_aktif+2<$jmlhalaman ? " ...  <a href=siswa-$jmlhalaman.>$jmlhalaman</a>  " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last) 
if($halaman_aktif < $jmlhalaman){
	$next = $halaman_aktif+1;
	$link_halaman .= " <a href=siswa-$next.>Next ></a>  
                     <a href=siswa-$jmlhalaman.>Last >></a> ";
}
else{
	$link_halaman .= " <span class='disabled'>Next >></span><span class='disabled'>Last >></span>";
}
return $link_halaman;
}
}


class PagingAgenda{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET['hal'])){
	$posisi=0;
	$_GET['hal']=1;
}
else{
	$posisi = ($_GET['hal']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
	$prev = $halaman_aktif-1;
	$link_halaman .= "<a href=agenda-1><< First</a>  
                    <a href=agenda-$prev>< Prev</a>  ";
}
else{ 
	$link_halaman .= "<span class='disabled'><< First</span> <span class='disabled'><< prev</span>  ";
	
}

// Link halaman 1,2,3, ...
$angka = ($halaman_aktif > 3 ? " ... " : " "); 
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
  if ($i < 1)
  	continue;
	  $angka .= "<a href=agenda-$i>$i</a>  ";
  }
	  $angka .= " <span class='current'>$halaman_aktif</span>  ";
	  
    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
    if($i > $jmlhalaman)
      break;
	  $angka .= "<a href=agenda-$i>$i</a>  ";
    }
	  $angka .= ($halaman_aktif+2<$jmlhalaman ? " ...  <a href=agenda-$jmlhalaman.>$jmlhalaman</a>  " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last) 
if($halaman_aktif < $jmlhalaman){
	$next = $halaman_aktif+1;
	$link_halaman .= " <a href=agenda-$next.>Next ></a>  
                     <a href=agenda-$jmlhalaman.>Last >></a> ";
}
else{
	$link_halaman .= " <span class='disabled'>Next >></span><span class='disabled'>Last >></span>";
}
return $link_halaman;
}
}



class PagingAlbum{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET['hal'])){
	$posisi=0;
	$_GET['hal']=1;
}
else{
	$posisi = ($_GET['hal']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
	$prev = $halaman_aktif-1;
	$link_halaman .= "<a href=album-1><< First</a>  
                    <a href=album-$prev>< Prev</a>  ";
}
else{ 
	$link_halaman .= "<span class='disabled'><< First</span> <span class='disabled'><< prev</span>  ";
	
}

// Link halaman 1,2,3, ...
$angka = ($halaman_aktif > 3 ? " ... " : " "); 
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
  if ($i < 1)
  	continue;
	  $angka .= "<a href=album-$i>$i</a>  ";
  }
	  $angka .= " <span class='current'>$halaman_aktif</span>  ";
	  
    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
    if($i > $jmlhalaman)
      break;
	  $angka .= "<a href=album-$i>$i</a>  ";
    }
	  $angka .= ($halaman_aktif+2<$jmlhalaman ? " ...  <a href=album-$jmlhalaman.>$jmlhalaman</a>  " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last) 
if($halaman_aktif < $jmlhalaman){
	$next = $halaman_aktif+1;
	$link_halaman .= " <a href=album-$next.>Next ></a>  
                     <a href=album-$jmlhalaman.>Last >></a> ";
}
else{
	$link_halaman .= " <span class='disabled'>Next >></span><span class='disabled'>Last >></span>";
}
return $link_halaman;
}
}


class PagingGallery{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET['hal'])){
	$posisi=0;
	$_GET['hal']=1;
}
else{
	$posisi = ($_GET['hal']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
	$prev = $halaman_aktif-1;
	$link_halaman .= "<a href=gallery-1><< First</a>  
                    <a href=gallery-$prev>< Prev</a>  ";
}
else{ 
	$link_halaman .= "<span class='disabled'><< First</span> <span class='disabled'><< prev</span>  ";
	
}

// Link halaman 1,2,3, ...
$angka = ($halaman_aktif > 3 ? " ... " : " "); 
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
  if ($i < 1)
  	continue;
	  $angka .= "<a href=gallery-$i>$i</a>  ";
  }
	  $angka .= " <span class='current'>$halaman_aktif</span>  ";
	  
    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
    if($i > $jmlhalaman)
      break;
	  $angka .= "<a href=gallery-$i>$i</a>  ";
    }
	  $angka .= ($halaman_aktif+2<$jmlhalaman ? " ...  <a href=gallery-$jmlhalaman.>$jmlhalaman</a>  " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last) 
if($halaman_aktif < $jmlhalaman){
	$next = $halaman_aktif+1;
	$link_halaman .= " <a href=gallery-$next.>Next ></a>  
                     <a href=gallery-$jmlhalaman.>Last >></a> ";
}
else{
	$link_halaman .= " <span class='disabled'>Next >></span><span class='disabled'>Last >></span>";
}
return $link_halaman;
}
}




class PagingMale{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET['hal'])){
	$posisi=0;
	$_GET['hal']=1;
}
else{
	$posisi = ($_GET['hal']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
	$prev = $halaman_aktif-1;
	$link_halaman .= "<a href=male-$_GET[sub]-1><< First</a>  
                    <a href=male-$_GET[sub]-$prev>< Prev</a>  ";
}
else{ 
	$link_halaman .= "<span class='disabled'><< First</span> <span class='disabled'><< prev</span>  ";
	
}

// Link halaman 1,2,3, ...
$angka = ($halaman_aktif > 3 ? " ... " : " "); 
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
  if ($i < 1)
  	continue;
	  $angka .= "<a href=male-$_GET[sub]-$i>$i</a>  ";
  }
	  $angka .= " <span class='current'>$halaman_aktif</span>  ";
	  
    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
    if($i > $jmlhalaman)
      break;
	  $angka .= "<a href=male-$_GET[sub]-$i>$i</a>  ";
    }
	  $angka .= ($halaman_aktif+2<$jmlhalaman ? " ...  <a href=male-$_GET[sub]-$jmlhalaman.>$jmlhalaman</a>  " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last) 
if($halaman_aktif < $jmlhalaman){
	$next = $halaman_aktif+1;
	$link_halaman .= " <a href=male-$_GET[sub]-$next.>Next ></a>  
                     <a href=male-$_GET[sub]-$jmlhalaman.>Last >></a> ";
}
else{
	$link_halaman .= " <span class='disabled'>Next >></span><span class='disabled'>Last >></span>";
}
return $link_halaman;
}
}



class PagingFemale{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET['hal'])){
	$posisi=0;
	$_GET['hal']=1;
}
else{
	$posisi = ($_GET['hal']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
	$prev = $halaman_aktif-1;
	$link_halaman .= "<a href=female-$_GET[sub]-1><< First</a>  
                    <a href=female-$_GET[sub]-$prev>< Prev</a>  ";
}
else{ 
	$link_halaman .= "<span class='disabled'><< First</span> <span class='disabled'><< prev</span>  ";
	
}

// Link halaman 1,2,3, ...
$angka = ($halaman_aktif > 3 ? " ... " : " "); 
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
  if ($i < 1)
  	continue;
	  $angka .= "<a href=female-$_GET[sub]-$i>$i</a>  ";
  }
	  $angka .= " <span class='current'>$halaman_aktif</span>  ";
	  
    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
    if($i > $jmlhalaman)
      break;
	  $angka .= "<a href=female-$_GET[sub]-$i>$i</a>  ";
    }
	  $angka .= ($halaman_aktif+2<$jmlhalaman ? " ...  <a href=female-$_GET[sub]-$jmlhalaman.>$jmlhalaman</a>  " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last) 
if($halaman_aktif < $jmlhalaman){
	$next = $halaman_aktif+1;
	$link_halaman .= " <a href=female-$_GET[sub]-$next.>Next ></a>  
                     <a href=female-$_GET[sub]-$jmlhalaman.>Last >></a> ";
}
else{
	$link_halaman .= " <span class='disabled'>Next >></span><span class='disabled'>Last >></span>";
}
return $link_halaman;
}
}


class PagingToko{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET['hal'])){
	$posisi=0;
	$_GET['hal']=1;
}
else{
	$posisi = ($_GET['hal']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
	$prev = $halaman_aktif-1;
	$link_halaman .= "<a href=authorized_dealer-1><< First</a>  
                    <a href=authorized_dealer-$prev>< Prev</a>  ";
}
else{ 
	$link_halaman .= "<span class='disabled'><< First</span> <span class='disabled'><< prev</span>  ";
	
}

// Link halaman 1,2,3, ...
$angka = ($halaman_aktif > 3 ? " ... " : " "); 
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
  if ($i < 1)
  	continue;
	  $angka .= "<a href=authorized_dealer-$i>$i</a>  ";
  }
	  $angka .= " <span class='current'>$halaman_aktif</span>  ";
	  
    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
    if($i > $jmlhalaman)
      break;
	  $angka .= "<a href=authorized_dealer-$i>$i</a>  ";
    }
	  $angka .= ($halaman_aktif+2<$jmlhalaman ? " ...  <a href=authorized_dealer-$jmlhalaman.>$jmlhalaman</a>  " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last) 
if($halaman_aktif < $jmlhalaman){
	$next = $halaman_aktif+1;
	$link_halaman .= " <a href=authorized_dealer-$next.>Next ></a>  
                     <a href=authorized_dealer-$jmlhalaman.>Last >></a> ";
}
else{
	$link_halaman .= " <span class='disabled'>Next >></span><span class='disabled'>Last >></span>";
}
return $link_halaman;
}
}



?>