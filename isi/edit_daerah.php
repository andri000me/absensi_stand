<div class="tab-content" >
       <div class="tab-pane active" id="1A">
	  
		  
           
			 <script src="js/jquery.form.js"></script>
		<script src="js/daerah.js"></script>
	    <?php
		$x=mysql_query("select * from daerah where id_daerah='$_GET[id]'");
		$r=mysql_fetch_array($x);
		?>
                       
                        <br> 
                        <form action="" method="post" id="form_daerah" class="form_daerah">
                        <label>Nama :</label>
                        <input name="nama" class="form_input" type="text" id="nama" value="<?php echo "$r[daerah]" ?>"/>
						<div id='nama_error' style='display:none; color : red;'><em>form ini belum di isi</em></div>
						<input type="hidden" id="aksi" name="aksi" value="edit"/>
						<input type="hidden" id="id" name="id" value="<?php echo "$r[id_daerah]" ?>" />
							<input type="hidden" id="posisi" name="posisi" value="<?php echo "$$_GET[hal]" ?>" />
                        	
						
                        <input type="submit" value="Tambah" class="butDef" />  <div class="loading"><img src="images/loading.gif"/></div>          
                        </form>
                   
				 <div class="warning_box">
            Data Gagal di input
         </div>
         <div class="valid_box">
          Data Berhasil di input
          </div>
			
			
		