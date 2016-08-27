 <div class="tab-content" >
       <div class="tab-pane active" id="1A">
 <script src="js/jquery.form.js"></script>
		<script src="js/kategori.js"></script>
                       <?php
					   $query=mysql_query("select * from kategori where id_kategori='$_GET[id]'");
					   $r=mysql_fetch_array($query);
					   ?>
                        <br> 
                        <form action="" method="post" id="form_baju" class="form_baju">
                        <label>Nama kategori :</label>
                        <input name="nama" class="form_input" type="text" id="nama" value="<?php echo "$r[nama_kategori]"; ?>"/>
						<div id='nama_error' style='display:none; color : red;'><em>form ini belum di isi</em></div>
						<input type="hidden" id="aksi" name="aksi" value="edit"/>
						<input type="hidden" id="id" name="id" value="<?php echo "$r[id_kategori]"; ?>" />
							<input type="hidden" id="posisi" name="posisi" value="<?php echo "$_GET[hal]"; ?>" />
                        <br />

                        <input type="submit" value="Tambah" class="butDef" />  <div class="loading"><img src="images/loading.gif"/></div>          
                        </form>
                
				 <div class="warning_box" >
            Data Gagal di input
         </div>
         <div class="valid_box">
          Data Berhasil di input
          </div>
