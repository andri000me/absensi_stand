


$(document).ready(function(){
    
   $("#nama").focus();

/*-----------------------------------------
SCRIPT UNTUK SIMPAN DATA
------------------------------------------- */
$('.form_daerah').submit(function() {

var nama = $('#nama').val();

var aksi  = $("#aksi").val();
var id  = $("#id").val();
var posisi = $("#posisi").val();

var error = false;
if (nama.length == ''){
   var error = true;
   $("#nama_error").fadeIn(500);
}
else {
   $("#nama_error").fadeOut(500);
}
// kalau sudah tidak ada yang error (false),


if (error == false ) {
  $(".loading").fadeIn(500);
  $.ajax({
     type: "POST",
     url : "process/input_daerah.php",  
	 
     data: "nama="+nama+"&aksi="+aksi+"&id="+id,
	 
          
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
		window.location='index.php?kanan=daerah';
		}
		
		else{
		  window.location='index.php?kanan=daerah&hal'+posisi;
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


		
});







 
 