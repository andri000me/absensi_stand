<div class="tab-content" >
       <div class="tab-pane active" id="1A">
	  
		  <div class='accordion'>
		 
		     <h3 id="tambah">+ Tambah Authorized Dealers</h3>
			  
            <div id='isi_agenda'>
			 <script src="js/jquery.form.js"></script>
		<script src="js/toko.js"></script>
	
                       
                        <br> 
                        <form action="" method="post" id="form_toko" class="form_toko">
                        <label>Nama :</label>
                        <input name="nama" class="form_input" type="text" id="nama"/>
						<div id='nama_error' style='display:none; color : red;'><em>form ini belum di isi</em></div>
						<input type="hidden" id="aksi" name="aksi" value="input"/>
						<input type="hidden" id="id" name="id" value="0" />
							<input type="hidden" id="posisi" name="posisi" value="1" />
                        <br>
						<label>Daerah : </label><br>
						<select id="wilayah" name="wilayah" width="100" >
						  <option value="0">-Pilih Daerah-</option>
						  <?php
						  $q=mysql_query("select * from daerah");
						  while($r=mysql_fetch_array($q)){
						    echo "<option value='$r[id_daerah]'>$r[daerah]</option>";
						  }
						  ?>
						 
						</select>
						<div id='wilayah_error' style='display:none; color : red;'><em>anda belum memilih daerah</em></div>
					
					   
                       	<li id="image-list">

		</li>
                        <label>Gambar :</label><br />
						
                        <input type="file" id="images" name="images">
						<div id="response" style="display : none"><img src="images/loading2.gif"/></div>
						<button type="submit" id="btn">Upload Files!</button>
								<div id='gambar_error' style='display:none; color : red;'><em>anda belum menginput gambar</em></div>
                      		<br><label>Alamat :</label>
                         <textarea id="alamat"  class="alamat" rows="2" cols="10"></textarea>
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
			</div>
			
			
		       </div>
		 <div id="daftar_gallery">
	    <table id="tabel" style="width:600px;">
		<thead>
		<tr>
		<th>no</th>
		<th>Nama</th>
		<th>Alamat</th>
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
		$x=mysql_query("select * from toko order by id_toko desc limit $posisi,$batas");
		while($r=mysql_fetch_array($x)){
		 echo "<tr>
		      <td>$no</td>
			  <td>$r[nama_toko]</td>
			  <td>$r[alamat]</td>
			  <td><img src='../gambar_toko/$r[gambar]' width='100' align='center'/></td>
			  <td width=20><a href='?kanan=edit_toko&id=$r[id_toko]'><img src='images/edit.png'/></a></td>";
			  if (isset($_GET['hal'])){
			  echo " <td width=20><a class='ask' href='isi/hapus_toko.php?id=$r[id_toko]&hal=$_GET[hal]'><img src='images/trash.png'/></a></td>";
			  }
			  else{
			   echo "<td width=20><a class='ask' href='isi/hapus_toko.php?id=$r[id_toko]'><img src='images/trash.png'/></a></td>";
			  }
			  echo "</tr>";
			  $no++;
		}
		?>
		
		</table>
		  <div class="pagination">
		<?php
		 $jmldata     = mysql_num_rows(mysql_query("SELECT * FROM toko"));
         $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
         $linkHalaman = $p->navHalaman($_GET['hal'], $jmlhalaman);

        echo " $linkHalaman <br /><br />";
       
        ?>
		</div>
		</div>		
