
$(document).ready(function(){
    
   $("#nama").focus();


/*-----------------------------------------
SCRIPT UNTUK SIMPAN DATA
------------------------------------------- */

$('.form_artis').submit(function() {
var oEditor = FCKeditorAPI.GetInstance('FCKeditor1');
var isi = oEditor.GetData(); 
//var isi = isix.replace(/&/g,'');  

var nama = $('#nama').val();
var aksi  = $("#aksi").val();
var id  = $("#id").val();
var posisi = $("#posisi").val();
var gambar = $("#images").val();
var error = false;
var post_data = $(this).serialize();  
var form_action = $(this).attr("action");  
var form_method = $(this).attr("method");
if (nama.length == ''){
   var error = true;
   $("#nama_error").fadeIn(500);
}
else {
   $("#nama_error").fadeOut(500);
}


if (isi.length == ''){
   var error = true;
   $("#isi_error").fadeIn(500);
}
else {
   $("#isi_error").fadeOut(500);
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
     type :form_method,  
     url :"isi/aksi_artis.php",  
     cache :false,  
     data :post_data, 
     //type: "POST",
	 //url : "process/input_artis.php",  
	 enctype: 'multipart/form-data',
     //data: "nama="+nama+"&aksi="+aksi+"&id="+id+"&profil="+isi+
	            // "&gambar="+gambar,
   success : function() {  
             $(".loading").fadeOut(500);
        $(".warning_box").remove();
		$(".valid_box").fadeIn(50);
		$(".valid_box").fadeOut(1000);
		
		//$(".form").hide();
		if(posisi=='1'){
		window.location='index.php?kanan=artist';
		}
		
		else{
		  window.location='index.php?kanan=artist&hal'+posisi;
		}
        
     },  
     error : function() {  
             $(".warning_box").fadeIn(1000);
		$(".warning_box").fadeOut(8000);
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







 
 