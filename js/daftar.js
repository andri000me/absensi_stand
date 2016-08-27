


$(document).ready(function(){
    
   $("#tipe").focus();
	
$("#ambil_foto").click(function(){
   $("#kamera").fadeIn(100);
});
/*-----------------------------------------
SCRIPT UNTUK SIMPAN DATA
------------------------------------------- */
$('.form_daftar').submit(function() {
var nama  = $("#nama").val();
var aksi  = $("#aksi").val();
var id  = $("#id").val();
var posisi = $("#posisi").val();
var jurusan  = $("#jurusan").val();
var twitter  = $("#twitter").val();
var facebook = $("#facebook").val();
var hp = $("#hp").val();
var error = false;
//alert(gambar);
if (nama.length == ''){
   var error = true;
   $("#nama_error").fadeIn(500);
}
else {
   $("#nama_error").fadeOut(500);
}

if (jurusan.length == ''){
   var error = true;
   $("#jurusan_error").fadeIn(500);
}
else {
   $("#jurusan_error").fadeOut(500);
}




if (hp.length == ''){
   var error = true;
   $("#hp_error").fadeIn(500);
}
else {
   $("#hp_error").fadeOut(500);
}

// kalau sudah tidak ada yang error (false),


if (error == false ) {
  $(".loading").fadeIn(500);
  $.ajax({
     type: "POST",
     url : "process/input_pengunjung.php",  
	 enctype: 'multipart/form-data',
     data: "nama="+nama+"&aksi="+aksi+"&id="+id+"&jurusan="+jurusan+"&facebook="+facebook+
	             "&twitter="+twitter+"&hp="+hp,
	 
          
     success: function(data){  
	    
     $(".loading").fadeOut(500);
	 // setelah ajax request sukses, 
     // cek data/teks yang dikirimkan dari file kirim_kontak.php
    if(data == 'berhasil'){
	    $(".loading").fadeOut(500);
        $(".warning_box").remove();
		$(".valid_box").fadeIn(50);
		$(".valid_box").fadeOut(1000);
		
		//$(".form").hide();
		if(posisi=='1'){
		window.location='index.php';
		}
		
		else{
		  window.location='index.php?hal='+posisi;
		}
        
		
    }else{
        $(".warning_box").fadeIn(1000);
		$(".warning_box").fadeOut(8000);
       }     
     }  
   }); 
 
 }
return false;                      

});
/*
$("#kategori").change(function () {
   var kate = $("#kategori").val();
   if (kate == 1){
       $("#tampilSub").fadeIn(500);
   }
   else {
      $("#tampilSub").fadeOut(500);
   }
}); */

$('#ambil_foto').click(function() {
  $("#foto").fadeOut(100);
  $("#foto2").fadeOut(100);
});
		
});







 
 