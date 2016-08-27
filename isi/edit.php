<div style="position : relative; left : 150px; margin-bottom : 20px;">
	  <script src="js/jquery.form.js"></script>
		<script src="js/daftar.js"></script>
                       <?php
					    $q=mysql_query("select * from pengunjung where id='$_GET[id]'");
						$r=mysql_fetch_array($q);
					   ?>
                        <br> 
                        <form action="" method="post" id="form_daftar" class="form_daftar">
                        <label>Nama :</label>
                        <input name="nama" class="form_input" type="text" id="nama" style="width: 300px" <?php echo "value='$r[nama]'"; ?>/>
						<div id='nama_error' style='display:none; color : red;'><em>form ini belum di isi</em></div>
						<input type="hidden" id="aksi" name="aksi" value="edit"/>
						<input type="hidden" id="id" name="id" <?php echo "value='$r[id]'"; ?>/>
							<input type="hidden" id="posisi" name="posisi" <?php echo "value='$_GET[hal]'"; ?> />
                        <br />
						 <label>Jurusan :</label>
                        <input name="jurusan" class="form_input" type="text" id="jurusan" style="width: 300px" <?php echo "value='$r[jurusan]'"; ?>/>
						<div id='jurusan_error' style='display:none; color : red;'><em>form ini belum di isi</em></div>
						<br />
						 <label>Facebook :</label>
                        <input name="facebook" class="form_input" type="text" id="facebook" style="width: 300px" <?php echo "value='$r[facebook]'"; ?>/>
						<div id='facebook_error' style='display:none; color : red;'><em>form ini belum di isi</em></div>
						<br />
						 <label>Twitter :</label>
                        <input name="twitter" class="form_input" type="text" id="twitter" style="width: 300px" <?php echo "value='$r[twitter]'"; ?>/>
						<div id='twitter_error' style='display:none; color : red;'><em>form ini belum di isi</em></div>
						<br />
						 <label>No HP :</label>
                        <input name="hp" class="form_input" type="text" id="hp" style="width: 300px" <?php echo "value='$r[no_hp]'"; ?>/>
						<div id='hp_error' style='display:none; color : red;'><em>form ini belum di isi</em></div>
						<br />
						<div id="foto2">
						<a href="#" title="ambil foto" id="ambil_foto"> <img src="images/foto.png" width="300"/> </a>
                        </div>		
						<br />						
                        <br>						 
                        <input style="position:relative;top:-30px" type="submit" value="Edit" class="butDef" />  <div class="loading"><img src="images/loading.gif"/></div>          
                        </form>
                <script src="js/upload_baju.js"></script>  
				 <div class="warning_box">
            Data Gagal di input
         </div>
         <div class="valid_box">
          Data Berhasil di input
          </div>
		  <script type="text/javascript" src="isi/webcam.js"></script>
	<div id="kamera" style="display:none;position:relative; margin-left: 300px;margin-top:-350px;">
	<!-- Configure a few settings -->
	<div id="kamera2">
	<script language="JavaScript">
		webcam.set_api_url( 'foto_pengunjung/upload_foto_pengunjung.php' );
		webcam.set_quality( 90 ); // JPEG quality (1 - 100)
		webcam.set_shutter_sound( true ); // play shutter click sound
	</script>
	
	<!-- Next, write the movie to the page at 320x240 -->
	<script language="JavaScript">
		document.write( webcam.get_html(320, 240) );
	</script>
	
	<!-- Some buttons for controlling things -->
	<br/><form>
		<input type=button value="Configure..." onClick="webcam.configure()">
		&nbsp;&nbsp;
		<input type=button value="ambil foto" onClick="take_snapshot()">
	</form>
	</div>
	<div id="kamera3">
	<script language="JavaScript">
		webcam.set_hook( 'onComplete', 'my_completion_handler' );
		
		function take_snapshot() {
			// take snapshot and upload to server
			document.getElementById('upload_results').innerHTML = '<h1>Uploading...</h1>';
			webcam.snap();
		}
		
		function my_completion_handler(msg) {
			// extract URL out of PHP output
			if (msg.match(/(http\:\/\/\S+)/)) {
			    
				
				var image_url = RegExp.$1;
				// show JPEG image in page
				document.getElementById('upload_results').innerHTML = 
				'<h1>Hasil Foto</h1>' + 
					'<img src="' + image_url + '">';
				
				// reset camera for another shot
				webcam.reset();
			}
			else alert("PHP Error: " + msg);
		}
	</script>
	</div>
	</td><td width=50>&nbsp;</td><td valign=top>
		<div id="upload_results" ></div>
	</td></tr></table>
		  </div>