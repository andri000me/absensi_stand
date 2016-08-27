<div class="tab-content" >
       <div class="tab-pane active" id="1A">
	  
		  <div class='accordion' style="width : 350px;">
		 
		     <h3 id="tambah">+ Tambah Slider</h3>
			  
            <div id='isi_agenda'>
			  <script src="js/jquery.form.js"></script>
		<script src="js/slider.js"></script>
                       
                        <br> 
                        <form action="" method="post" id="form_slider" class="form_slider">
                        <label>judul :</label>
                        <input name="judul" class="form_input" type="text" id="judul"/>
						<div id='judul_error' style='display:none; color : red;'><em>form ini belum di isi</em></div>
						<input type="hidden" id="aksi" name="aksi" value="input"/>
						<input type="hidden" id="id" name="id" value="0" />
							<input type="hidden" id="posisi" name="posisi" value="1" />
                        <br />
                       
						<div id="response"></div>
		<ul id="image-list">

		</ul>
                        <label>Gambar :</label><br />
						
						
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
			
			
		       </div>
		 <div id="daftar_gallery">
	    <table id="tabel" style="width:350px;">
		<thead>
		<tr>
		<th>no</th>
		<th>judul</th>
		<th>Gambar</th>
		
		<th colspan="2">aksi</th>
		</tr>
		</thead>
		
        <?php
		$p      = new PagingAdmin;
        $batas  = 5;
        $posisi = $p->cariPosisi($batas);
		$no=1;
		 $bts=1;
		  if ($_GET['hal']=='1'){
		  $no=1;
		  }
		  else{
		   $no=$posisi+1;
		  }
		$x=mysql_query("select * from slider order by id_slider desc LIMIT $posisi,$batas");
		while($r=mysql_fetch_array($x)){
		 echo "<tr>
		      <td>$no</td>
			  <td>$r[judul]</td>
			 
			  <td><img src='../gambar_slider/$r[gambar]' width='150' align='center'/></td>
			  <td><a href='?kanan=edit_slider&id=$r[id_slider]&hal=$_GET[hal]'><img src='images/edit.png'/></a></td>
			  <td><a class='ask' href='isi/hapus_slider.php?id=$r[id_slider]'><img src='images/trash.png'/></a></td>
			  </tr>";
			  $no++;
		}
		?>
		
		</table>
		  <div class="pagination">
		<?php
		 $jmldata     = mysql_num_rows(mysql_query("SELECT * FROM slider"));
         $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
         $linkHalaman = $p->navHalaman($_GET['hal'], $jmlhalaman);

        echo " $linkHalaman <br /><br />";
       
        ?>
		</div>
		</div>		
