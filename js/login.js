$(document).ready(function(){

$("#username").focus();

$('#loginForm').submit(function() {

var username  = $("#username").val();
var password  = $("#password").val();
var error = false;

if (username.length == ''){
   var error = true;
   $("#username_error").fadeIn(500);
   $("#username").focus();
}
else {
   $("#username_error").fadeOut(500);
}

if (password.length == ''){
   var error = true;
   $("#password_error").fadeIn(500);
   $("#password").focus();
}
else {
   $("#password_error").fadeOut(500);
}


if (error == false ) {
  $(".loading").fadeIn(500);
  $.ajax({
     
     type: "POST",
     url : "process/process.user.php",    
	 data: "username="+username+"&password="+password, 
          
     success: function(data){  
	    
     $(".loading").fadeOut(500);
	 // setelah ajax request sukses, 
     // cek data/teks yang dikirimkan dari file kirim_kontak.php
    if(data == 'berhasil'){
	    $(".loading").fadeOut();
        $(".warning_box").remove();
		$(".valid_box").fadeIn(50);
		$(".valid_box").fadeOut(1000);
		//$(".form").hide();
		window.location='./';
        
		
    }else{
        $(".warning_box2").fadeIn(1000);
		$(".warning_box2").fadeOut(10000);
       }     
     }  
   }); 
 
 }
return false;                      

});



});
