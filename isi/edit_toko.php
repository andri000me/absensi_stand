 <script src="js/jquery.form.js"></script>
		<script src="js/toko.js"></script>
	 <?php
	   $query=mysql_query("select * from toko where id_toko='$_GET[id]'");
	   $r=mysql_fetch_array($query);
	 ?>
                       
                        <br> 
                        <form action="isi/aksi_toko.php" method="post" id="form_toko" class="form_toko" enctype="multipart/form-data">
                        <label>Nama :</label>
                        <input name="nama" class="form_input" type="text" id="nama" <?php echo "value='$r[nama_toko]'" ?>/>
						<div id='nama_error' style='display:none; color : red;'><em>form ini belum di isi</em></div>
						<input type="hidden" id="aksi" name="aksi" value="edit"/>
						<input type="hidden" id="id" name="id" <?php echo "value='$r[id_toko]'" ?> />
							<input type="hidden" id="posisi" name="posisi" value="<?php echo "$_GET[hal]"; ?>" />
                        <br>
							<label>Daerah : </label><br>
						<select id="wilayah" name="wilayah" width="100" >
						  <option value="0">-Pilih Daerah-</option>
						  <?php
						  $q2=mysql_query("select * from daerah");
						  while($r2=mysql_fetch_array($q2)){
						    if($r2['id_daerah']==$r['id_daerah']){
							 echo "<option value='$r2[id_daerah]' selected>$r2[daerah]</option>";
							}
							else {
						    echo "<option value='$r2[id_daerah]'>$r2[daerah]</option>";
						    }
						  }
						  ?>
						 
						</select>
						<div id='wilayah_error' style='display:none; color : red;'><em>anda belum memilih daerah</em></div>
					
			      		<div id="gbr"><img src="../gambar_toko/<?php echo "$r[gambar]"; ?>" width="100" /></div>
       
	   <li id="image-list">

		</li>
                        <label>Gambar :</label><br />
						
                        <input type="file" id="images" name="images">
						<div id="response" style="display : none"><img src="images/loading2.gif"/></div>
						<button type="submit" id="btn">Upload Files!</button>
					
								<div id='gambar_error' style='display:none; color : red;'><em>anda belum menginput gambar</em></div>
                      		<br><label>Alamat :</label><br>
                         <textarea id="alamat"  class="alamat" rows="2" cols="10"><?php echo "$r[alamat]"; ?></textarea>
				         <div id='alamat_error' style='display:none; color : red;'><em>* alamat belum di isi</em></div></dd>
            
						
								
						<br>
	
		
							
						
                        <input type="submit" value="Tambah" class="butDef" />  <div class="loading"><img src="images/loading.gif"/></div>          
                        </form>
                <script src="js/upload_toko.js"></script> 
				 <div class="warning_box">
            Data Gagal di input
         </div>
         <div class="valid_box">
          Data Berhasil di input
          </div>
