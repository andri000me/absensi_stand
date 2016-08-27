<div class="tab-content">
       <div class="tab-pane active" id="1A">
        <script src="js/jquery.form.js"></script>
		<script src="js/gallery.js"></script>
                         <?php
						 $query=mysql_query("select * from gallery where id_gallery='$_GET[id]'");
						 $r=mysql_fetch_array($query);
                         ?>						 
                        <form action="" method="post" id="form_baju" class="form_baju">
                        <label>Tipe :</label>
                        <input name="tipe" class="form_input" type="text" id="tipe" value="<?php echo "$r[tipe]"; ?>"/>
						<input type="hidden" id="aksi" name="aksi" value="edit"/>
						<input type="hidden" id="posisi" name="posisi" value="<?php echo "$_GET[hal]"; ?>"/>
						<input type="hidden" id="id" name="id" value="<?php echo "$r[id_gallery]"; ?>" />
						
						<div id='tipe_error' style='display:none; color : red;'><em>form ini belum di isi</em></div>
						
                        <br />
                        <label>Kategori :</label>
						<select name="kategori" id="kategori" class="form_input" type="text" style="width:120px" />
						<option value="0">-pilih kategori</option>
						<?php
						$x=mysql_query("select * from kategori order by id_kategori desc");
						while($r2=mysql_fetch_array($x)){
						if($r['id_kategori']==$r2['id_kategori']){
						  echo "<option value='$r2[id_kategori]' selected>$r2[nama_kategori]</option>";	
						}
						else{
						echo "<option value='$r2[id_kategori]'>$r2[nama_kategori]</option>";						
						}
						}
						?>
                        </select>
						<div id='kategori_error' style='display:none; color : red;'><em>anda belum memilih kategori</em></div>
                        <br />
						
						<div id="tampilSub">
						 <label>Sub Kategori :</label>
						<select name="subkategori" id="subkategori" class="form_input" type="text" style="width:150px" />
						<option value="0">-pilih subkategori-</option>
						<?php
						$x3=mysql_query("select * from sub_kategori order by id_subkategori desc");
						while($r3=mysql_fetch_array($x3)){
						if($r['id_subkategori']==$r3['id_subkategori']){
						  echo "<option value='$r3[id_subkategori]' selected>$r3[nama_subkategori]</option>";
						}
						echo "<option value='$r3[id_subkategori]'>$r3[nama_subkategori]</option>";						
						}
						?>
                        </select>
						<div id='subkategori_error' style='display:none; color : red;'><em>anda belum memilih subkategori</em></div>
                        <br />
                        </div>
						
						<label>Harga :</label><br>
						<input type="text" class="form_input" id="harga" name="harga"  value="<?php echo "$r[harga]"; ?>">
						<div id='harga_error' style='display:none; color : red;'><em>form ini belum di isi</em></div>
						<br>
						<img src="../gambar_baju/
						<?php echo "$r[gambar]"; ?>" width="100" id="gbr"/>
									<div id="response"></div>
		<ul id="image-list">

		</ul>
                        <label>Gambar :</label><br />
						
                        <input type="file" id="images" name="images">
						<input type="hidden" id="images2" name="images2">
						<div id="response" style="display : none"><img src="images/loading2.gif"/></div>
						<button type="submit" id="btn">Upload Files!</button>
						
						<div id='gambar_error' style='display:none; color : red;'><em>anda belum menginput gambar</em></div>
                        <br />
						<br>
                        <input type="submit" value="Tambah" class="butDef" />  <div class="loading"><img src="images/loading.gif"/></div>          
                        </form>
						<script src="js/upload_baju.js"></script> 
                </div>
				 <div class="warning_box">
            Data Gagal di input
         </div>
         <div class="valid_box">
          Data Berhasil di input
          </div>
				
