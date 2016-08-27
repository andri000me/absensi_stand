<div class="tab-content" >
       <div class="tab-pane active" id="1A">
	  
		  <div class='accordion' style="width : 300px">
		 
		     <h3 id="tambah">+ Tambah Kategori</h3>
			  
            <div id='isi_agenda'>
			  <script src="js/jquery.form.js"></script>
		<script src="js/kategori.js"></script>
                       
                        <br> 
                        <form action="" method="post" id="form_baju" class="form_baju">
                        <label>Nama kategori :</label>
                        <input name="nama" class="form_input" type="text" id="nama"/>
						<div id='nama_error' style='display:none; color : red;'><em>form ini belum di isi</em></div>
						<input type="hidden" id="aksi" name="aksi" value="input"/>
						<input type="hidden" id="id" name="id" value="0" />
							<input type="hidden" id="posisi" name="posisi" value="1" />
                        <br />

                        <input type="submit" value="Tambah" class="butDef" />  <div class="loading"><img src="images/loading.gif"/></div>          
                        </form>
                
				 <div class="warning_box" >
            Data Gagal di input
         </div>
         <div class="valid_box">
          Data Berhasil di input
          </div>
			</div>
			
			
		       </div>
		 <div id="daftar_gallery">
	    <table id="tabel" style="width:300px;">
		<thead>
		<tr>
		<th>no</th>
		<th>nama kategori</th>
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
		$x=mysql_query("select *from kategori order by id_kategori desc LIMIT $posisi,$batas");
		while($r=mysql_fetch_array($x)){
		 echo "<tr>
		      <td>$no</td>
			  <td>$r[nama_kategori]</td>
			  <td><a href='?kanan=edit_kategori&id=$r[id_kategori]&hal=$_GET[hal]'><img src='images/edit.png'/></a></td>
			  <td><a class='ask' href='isi/hapus_kategori.php?id=$r[id_kategori]&hal=$_GET[hal]'><img src='images/trash.png'/></a></td>
			  </tr>";
			  $no++;
		}
		?>
		
		</table>
		  <div class="pagination">
		<?php
		 $jmldata     = mysql_num_rows(mysql_query("select * from kategori"));
         $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
         $linkHalaman = $p->navHalaman($_GET['hal'], $jmlhalaman);

        echo " $linkHalaman <br /><br />";
       
        ?>
		</div>
		</div>		
