


$(document).ready(function(){
    
   $("#nama").focus();
   
 $("#form_toko").ajaxForm({
    
      dataType: "data",
	  
      resetForm: true,
      beforeSubmit: function() {
	     
      },
      success: function(hasil) {
          
      }
   });
/*-----------------------------------------
SCRIPT UNTUK SIMPAN DATA
------------------------------------------- */
$('.form_toko').submit(function() {

var nama = $('#nama').val();
var alamat = $('textarea#alamat').val();
var daerah = $('#wilayah').val();
var aksi  = $("#aksi").val();
var id  = $("#id").val();
var posisi = $("#posisi").val();
var gambar = $("#images").val();
var error = false;
if (nama.length == ''){
   var error = true;
   $("#nama_error").fadeIn(500);
}
else {
   $("#nama_error").fadeOut(500);
}
if (alamat.length == ''){
   var error = true;
   $("#alamat_error").fadeIn(500);
}
else {
   $("#alamat_error").fadeOut(500);
}
if (wilayah == 0){
   var error = true;
   $("#wilayah_error").fadeIn(500);
}
else {
   $("#wilayah_error").fadeOut(500);
}

if(aksi=='input'){
if (gambar.length == ''){
   var error = true;
   $("#gambar_error").fadeIn(500);
}
else {
   $("#gambar_error").fadeOut(500);
}
}
// kalau sudah tidak ada yang error (false),


if (error == false ) {
  $(".loading").fadeIn(500);
  $.ajax({
     type: "POST",
     url : "process/input_toko.php",  
	 enctype: 'multipart/form-data',
     data: "nama="+nama+"&aksi="+aksi+"&id="+id+"&alamat="+alamat+
	             "&gambar="+gambar+"&daerah="+daerah,
	 
          
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
		window.location='index.php?kanan=toko';
		}
		
		else{
		  window.location='index.php?kanan=toko&hal'+posisi;
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

$("#kategori").change(function () {
   var kate = $("#kategori").val();
   if (kate == 1){
       $("#tampilSub").fadeIn(500);
   }
   else {
      $("#tampilSub").fadeOut(500);
   }
}); 
		
});







 
 