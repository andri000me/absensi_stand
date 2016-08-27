<div class="tab-content" >
       <div class="tab-pane active" id="1A">
         <h3 id="tambah">+ Edit Slider</h3>
			  <?php
			  $q=mysql_query("select * from slider where id_slider='$_GET[id]'");
			  $r=mysql_fetch_array($q);
			  ?>
           
			  <script src="js/jquery.form.js"></script>
		<script src="js/slider.js"></script>
                       
                        <br> 
                        <form action="" method="post" id="form_slider" class="form_slider">
                        <label>judul :</label>
                        <input name="judul" class="form_input" type="text" id="judul" value="<?php echo "$r[judul]"; ?>"/>
						<div id='judul_error' style='display:none; color : red;'><em>form ini belum di isi</em></div>
						<input type="hidden" id="aksi" name="aksi" value="edit"/>
						<input type="hidden" id="id" name="id" value="<?php echo "$r[id_slider]"; ?>"/>
							<input type="hidden" id="posisi" name="posisi" value="<?php echo "$_GET[hal]"; ?>"/>
                        <br />
                       
						<div id="response"></div>
		<ul id="image-list">

		</ul>
                        <label>Gambar :</label><br />
						
						<img id="gbr" src="../gambar_slider/<?php echo "$r[gambar]"; ?>" width="200">
                        <input type="file" name="images" id="images"/>
						<button type="submit" id="btn">Upload Files!</button><img src="images/loading2.gif" id="loading" style="display:none">
								<div id='gambar_error' style='display:none; color : red;'><em>anda belum menginput gambar</em></div>
   
						
						
						<br />
						<br>
                        <input type="submit" value="Tambah" class="butDef" />  <div class="loading"><img src="images/loading.gif"/></div>          
                        </form>
                <script src="js/upload_slider.js"></script>  
				 <div class="warning_box">
            Data Gagal di input
         </div>
         <div class="valid_box">
          Data Berhasil di input
          </div>
			</div>
			
