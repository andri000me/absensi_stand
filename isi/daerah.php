<div class="tab-content" >
       <div class="tab-pane active" id="1A">
	  
		  <div class='accordion' style="width : 360px">
		 
		     <h3 id="tambah">+ Tambah Daerah Authorized Dealers</h3>
			  
            <div id='isi_agenda'>
			 <script src="js/jquery.form.js"></script>
		<script src="js/daerah.js"></script>
	
                       
                        <br> 
                        <form action="" method="post" id="form_daerah" class="form_daerah">
                        <label>Nama :</label>
                        <input name="nama" class="form_input" type="text" id="nama"/>
						<div id='nama_error' style='display:none; color : red;'><em>form ini belum di isi</em></div>
						<input type="hidden" id="aksi" name="aksi" value="input"/>
						<input type="hidden" id="id" name="id" value="0" />
							<input type="hidden" id="posisi" name="posisi" value="1" />
                        	
						
                        <input type="submit" value="Tambah" class="butDef" />  <div class="loading"><img src="images/loading.gif"/></div>          
                        </form>
                   
				 <div class="warning_box">
            Data Gagal di input
         </div>
         <div class="valid_box">
          Data Berhasil di input
          </div>
			</div>
			
			
		       </div>
		 <div id="daftar_gallery">
	    <table id="tabel" style="width:360px;">
		<thead>
		<tr>
		<th>no</th>
		<th>Nama</th>
		
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
		$x=mysql_query("select * from daerah order by id_daerah desc limit $posisi,$batas");
		while($r=mysql_fetch_array($x)){
		 echo "<tr>
		      <td>$no</td>
			  <td>$r[daerah]</td>
			 
			  <td width=20><a href='?kanan=edit_daerah&id=$r[id_daerah]&hal=$_GET[hal]'><img src='images/edit.png'/></a></td>";
			  if (isset($_GET['hal'])){
			  echo " <td width=20><a class='ask' href='isi/hapus_daerah.php?id=$r[id_daerah]&hal=$_GET[hal]'><img src='images/trash.png'/></a></td>";
			  }
			  else{
			   echo "<td width=20><a class='ask' href='isi/hapus_daerah.php?id=$r[id_daerah]'><img src='images/trash.png'/></a></td>";
			  }
			  echo "</tr>";
			  $no++;
		}
		?>
		
		</table>
		  <div class="pagination">
		<?php
		 $jmldata     = mysql_num_rows(mysql_query("SELECT * FROM daerah"));
         $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
         $linkHalaman = $p->navHalaman($_GET['hal'], $jmlhalaman);

        echo " $linkHalaman <br /><br />";
       
        ?>
		</div>
		</div>		
