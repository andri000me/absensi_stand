<?php 
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
	$link_halaman .= "<a href=berita-1.jsp><< First</a>  
                    <a href=berita-$prev.jsp>< Prev</a>  ";
}
else{ 
	$link_halaman .= "<span class='disabled'><< First</span> <span class='disabled'><< prev</span>  ";
	
}

// Link halaman 1,2,3, ...
$angka = ($halaman_aktif > 3 ? " ... " : " "); 
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
  if ($i < 1)
  	continue;
	  $angka .= "<a href=berita-$i.jsp>$i</a>  ";
  }
	  $angka .= " <span class='current'>$halaman_aktif</span>  ";
	  
    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
    if($i > $jmlhalaman)
      break;
	  $angka .= "<a href=berita-$i.jsp>$i</a>  ";
    }
	  $angka .= ($halaman_aktif+2<$jmlhalaman ? " ...  <a href=berita-$jmlhalaman.jsp>$jmlhalaman</a>  " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last) 
if($halaman_aktif < $jmlhalaman){
	$next = $halaman_aktif+1;
	$link_halaman .= " <a href=berita-$next.jsp>Next ></a>  
                     <a href=berita-$jmlhalaman.jsp>Last >></a> ";
}
else{
	$link_halaman .= " <span class='disabled'>Next >></span><span class='disabled'>Last >></span>";
}
return $link_halaman;
}
}

?>