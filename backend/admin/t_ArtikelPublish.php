<!-- <div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Artikel Publish</h3>
	</div>
	<form method="POST" action="?page=admin/p_tambahArtikelPublish" enctype="multipart/form-data">
			<div class="card-body">
				<div class="form-group">
					<label for="judulArtikelPublish">Judul Artikel</label>
					<input type="text" name="judulArtikelPublish" class="form-control" id="judulArtikelPublish" placeholder="Inputkan Judul Artikel">
				</div>
				<div class="form-group cols-sm-6">
        			<label >Nama Penulis</label>
				        <select name="kodePenulis" class="form-control">
				          <?php
				            include "../koneksi.php";
				            $sql=mysqli_query($koneksi, "SELECT * FROM penulis");
				            while ($data=mysqli_fetch_array($sql)){
				          ?>
				          <option class="form-control" value="<?php echo $data['kodePenulis']; ?>"><?php echo $data['namaPenulis']; ?></option>
				        <?php } ?>
				        </select>
         		</div>
				<div>
                <label for="kategori">Kategori</label>
                <select class="form-control" id="kategori" name="kategori"value="{{old('kategori')}}" id="kategori">
                    <option selected value="">Pilih Kategori</option>
                    <option value="berita">Berita</option>
                    <option value="olahraga">Olahraga</option>
                    <option value="sastra & budaya">Sastra & Budaya</option>
                    <option value="keagamaan">Keagamaan</option>
              </select>
            </div>
				<div class="form-group">
					<label for="tglTerbit">Tanggal Terbit</label>
					<input type="date" name="tglTerbit" class="form-control" id="tglTerbit" placeholder="Inputkan Tanggal Terbit">
				</div>
				<div class="form-group">
					<label for="isiArtikelPublish">Isi Artikel Publish</label>
					<textarea class="form-control" id="isiArtikelPublish" name="isiArtikelPublish" rows="5"></textarea>
				</div>
			    <div class="form-group cols-sm-6">
				    <label >Gambar</label>
				    <select name="idArtikel" class="form-control">
				      <?php
				        include "../koneksi.php";
				        $sql=mysqli_query($koneksi, "SELECT * FROM artikelpengajuan");
				        while ($data=mysqli_fetch_array($sql)){
				      ?>
				      <option class="form-control" value="<?php echo $data['idArtikel']; ?>"><?php echo $data['gambarjurnal']; ?></option>
				    <?php } ?>
				    </select>
				</div>
				<div class="form-group"></div>
            <div><label for="status">Status</label>
                <div>
                    <select class="form-control" id="status" name="status"
                        value="{{old('status')}}" id="status">
                        <option selected></option>
                        <option value="baru">Baru</option>
                        <option value="lama">Lama</option>
                    </select>
                </div>
            </div>
			</div>
			<div class="card-footer">
			<button type="submit" class="btn btn-primary">Terbitkan</button>
		</div>
		</div>
	</form>
</div>

 -->
