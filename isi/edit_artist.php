<div class="tab-content" >
       <div class="tab-pane active" id="1A">
  <script src="js/jquery.form.js"></script>
		<script src="js/artis.js"></script>
                       <?php
					   $query=mysql_query("select * from artis where id_artis='$_GET[id]'");
					   $r=mysql_fetch_array($query);
					   ?>
                        <br> 
                        <form action="isi/aksi_artis.php" method="POST" id="form_artis" class="form_artis">
                        <label>Nama :</label>
                        <input name="nama" class="form_input" type="text" id="nama" <?php echo "value='$r[nama_artis]'" ?>/>
						<div id='nama_error' style='display:none; color : red;'><em>form ini belum di isi</em></div>
						<input type="hidden" id="aksi" name="aksi" value="edit"/>
						<input type="hidden" id="id" name="id"  value="<?php echo "$r[id_artis]"; ?>" />
					    <input type="hidden" id="posisi" name="posisi" value="1" />
                        <br>
						
						<img src="../gambar_artis/<?php echo "$r[gambar]"; ?>" width="100" id="gbr"/>
						
		<li id="image-list">

		</li>
                        <label>Gambar :</label><br />
						
                        <input type="file" id="images" name="images">
						<div id="response" style="display : none"><img src="images/loading2.gif"/></div>
						<button type="submit" id="btn">Upload Files!</button>
						
						<div id='gambar_error' style='display:none; color : red;'><em>anda belum menginput gambar</em></div>
                        
						<br><br>
						
						<label>Profil :</label><br>
						<?php
						include("fckeditor/fckeditor.php") ;
						
			
// Automatically calculates the editor base path based on the _samples directory.
// This is usefull only for these samples. A real application should use something like this:
// $oFCKeditor->BasePath = '/fckeditor/' ;	// '/fckeditor/' is the default value.
$sBasePath = $_SERVER['PHP_SELF'] ;
$sBasePath = substr( $sBasePath, 0, strpos( $sBasePath, "_samples" ) ) ;

$oFCKeditor = new FCKeditor('FCKeditor1','600','500') ;
$oFCKeditor->BasePath	= '/makalula/adm/fckeditor/' ;

$oFCKeditor->Value		= $r['profil'] ;
$oFCKeditor->Create() ;

					echo "<div id='isi_error' style='display:none; color : red;'><em>* isi berita belum di isi</em></div></dd>";
            
						?>
						
                    
						<br>
                        <input type="submit" value="Tambah" class="butDef" />  <div class="loading"><img src="images/loading.gif"/></div>          
                        </form>
                  <script src="js/upload.js"></script> 
				 <div class="warning_box">
            Data Gagal di input
         </div>
         <div class="valid_box">
          Data Berhasil di input
          </div>
			
			