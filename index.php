<?php
session_start();
error_reporting(0);
include "lib/koneksi.php";
include "lib/class_paging.php";


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css/screen.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/stylke.css" media="screen" />
		<link rel="shortcut icon" type="image/x-icon" href="images/himatif.png" />
        <script src="js/jquery.js"></script>
		<script src="js/jconfirmaction.jquery.js"></script>
    	<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();


	$("#isi").focus();
	$("#isi_agenda").hide();
	$(".accordion #isi_agenda:not(:first)").hide();
	$("#isi_agenda2").hide();
	$(".accordion #isi_agenda2:not(:first)").hide();
	$("#daerah").show();
	$(".accordion #daerah:not(:first)").show();
    var n=1;

	$(".accordion h3").click(function(){
	    if(n==1){		
		$("#daftar_gallery").fadeOut(500);
		n=2;
		}
		else{
		$("#daftar_gallery").fadeIn(500);
		n=1;
		}
	    $(this).next("#isi_agenda").slideToggle("slow")
		.siblings("#isi_agenda").slideUp("slow");
		$(this).toggleClass("active");
		$(this).siblings("h3").removeClass("active");
	});
    
	

	

});
</script>

</script>
		<title>Daftar Hadir Stand Expo Informatika</title>
	</head>
	<body>
    

			<div id="header">
               <div id="wrapper">
				<div id="logo">
					<h1><a href="#">Daftar Hadir Stand Expo Informatika</a></h1>
				</div>
               </div>
			</div>
            <div class="clr"></div>

	<div id="wrapper">
        <div class="content">
           <div class="span4">
        	<div class="tabbable tabs-left">
                
			
			  <div class="tab-content">
                  <div class="tab-pane active" id="home">
				  <img src="images/himatif.png" width="200" style="position : relative; left : 100px;"/>
				<?php 
				include "kanan.php";
				?>
			  </div>
			
           
                </div>
              </div>
          </div>
    
			</div>

			<div id="main">
			  <div class="clr"></div>
			</div>
			<div id="footer">
			
				<p>Copyright &copy; <?= date("Y") ?> &minus; HIMATIF &not; <a href="#"  target="blank">Website</a></p>
			</div>
	</body>
</html>
