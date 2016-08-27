<div class="tab-content" >
       <div class="tab-pane active" id="1A">
	  
		  <div class='accordion'>
		 
		     <h3 id="tambah" style="width:700px">+ Input Daftar Hadir</h3>
			  
            <div id='isi_agenda'>
			  <script src="js/jquery.form.js"></script>
		<script src="js/daftar.js"></script>
                       
                        <br> 
                        <form action="" method="post" id="form_daftar" class="form_daftar">
                        <label>Nama :</label>
                        <input name="nama" class="form_input" type="text" id="nama"/>
						<div id='nama_error' style='display:none; color : red;'><em>form ini belum di isi</em></div>
						<input type="hidden" id="aksi" name="aksi" value="input"/>
						<input type="hidden" id="id" name="id" value="0" />
							<input type="hidden" id="posisi" name="posisi" value="1" />
                        <br />
						 <label>Jurusan :</label>
                        <input name="jurusan" class="form_input" type="text" id="jurusan"/>
						<div id='jurusan_error' style='display:none; color : red;'><em>form ini belum di isi</em></div>
						<br />
						 <label>Facebook :</label>
                        <input name="facebook" class="form_input" type="text" id="facebook"/>
						<div id='facebook_error' style='display:none; color : red;'><em>form ini belum di isi</em></div>
						<br />
						 <label>Twitter :</label>
                        <input name="twitter" class="form_input" type="text" id="twitter"/>
						<div id='twitter_error' style='display:none; color : red;'><em>form ini belum di isi</em></div>
						<br />
						 <label>No HP :</label>
                        <input name="hp" class="form_input" type="text" id="hp"/>
						<div id='hp_error' style='display:none; color : red;'><em>form ini belum di isi</em></div>
						<br />
						 <label><a href="#" id="ambil_foto"> Ambil Foto </a></label>
                        
						
						<br />
						
                        <br>
                        <input type="submit" value="Tambah" class="butDef" />  <div class="loading"><img src="images/loading.gif"/></div>          
                        </form>
                <script src="js/upload_baju.js"></script>  
				 <div class="warning_box">
            Data Gagal di input
         </div>
         <div class="valid_box">
          Data Berhasil di input
          </div>
		  		   <script type="text/javascript" src="isi/webcam.js"></script>
	<div id="kamera" style="display:none;position:relative; margin-left: 300px;margin-top:-270px;">
	<!-- Configure a few settings -->
	<div id="kamera2">
	<script language="JavaScript">
		webcam.set_api_url( 'isi/test.php' );
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
					'<h1>Upload Berhasil!</h1>' + 
					'JPEG URL: ' + image_url  + 
					'<img src="' + image_url + '">';
				
				// reset camera for another shot
				webcam.reset();
			}
			else alert("PHP Error: " + msg);
		}
	</script>
	</div>
	</td><td width=50>&nbsp;</td><td valign=top>
		<div id="upload_results" style="background-color:#eee;"></div>
	</td></tr></table>
	</div>
	
			</div>
			
			
		       </div>
	
		 <div id="daftar_gallery">
	    <table id="tabel" style="width:600px;">
		<thead>
		<tr>
		<th>no</th>
		<th>nama</th>
		<th>Jurusan</th>
		<th>facebook</th>
		<th>Twitter</th>
		<th>No Hp</th>
		<th>Foto</th>
		<th>Edit</th>
		</tr>
		</thead>
		
        <?php
		$p      = new PagingAdmin;
        $batas  = 10;
        $posisi = $p->cariPosisi($batas);
		$no=1;
		 $bts=1;
		  if ($_GET['hal']=='1'){
		  $no=1;
		  }
		  else{
		   $no=$posisi+1;
		  }
		$x=mysql_query("select * from pengunjung order by id desc LIMIT $posisi,$batas");
		while($r=mysql_fetch_array($x)){
		 echo "<tr>
		      <td>$no</td>
			  <td>$r[nama]</td>
			  <td>$r[jurusan]</td>
			  <td>$r[facebook]</td>
			  <td>$r[twitter]</td>
			  <td>$r[no_hp]</td>
			  <td><img src='isi/$r[foto]' width='100'></td>
			   <td><a href='?kanan=edit&id=$r[id]&hal=$_GET[hal]'><img src='images/edit.png'/></a></td>
			  
			  </tr>";
			  $no++;
		}
		?>
		
		</table>
		  <div class="pagination">
		<?php
		 $jmldata     = mysql_num_rows(mysql_query("SELECT * FROM pengunjung"));
         $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
         $linkHalaman = $p->navHalaman($_GET['hal'], $jmlhalaman);

        echo " $linkHalaman <br /><br />";
       
        ?>
		</div>
		</div>		
