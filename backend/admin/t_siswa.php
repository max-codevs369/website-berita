<div class="row mb-4">
	<div class="col-12">
		<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Tambah Data Siswa</h3>
		</div>
		<form method="POST" action="?page=admin/p_tambahSiswa">
			<div class="card-body">
				<div class="form-group mb-3">
					<label for="nisn">NISN</label>
					<input type="text" name="nisn" class="form-control" id="nisn" placeholder="Inputkan NISN" required>
				</div>

				<div class="form-group mb-3">
					<label for="namaSiswa">Nama Siswa</label>
					<input type="text" name="namaSiswa" class="form-control" id="namaSiswa" placeholder="Masukkan Nama Siswa" required>
				</div>

				<div class="form-group mb-3">
					<label for="kelas">Kelas</label>
					<select name="kelas" id="kelas" class="form-control" required>
						<option value="">Pilih Kelas</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
					</select>
				</div>

				<div class="form-group mb-3">
					<label for="jurusan">Jurusan</label>
					<select name="jurusan" id="jurusan" class="form-control" required>
						<option value="">Pilih Jurusan</option>
						<option value="Teknik Konstruksi Dan Perumahan">Teknik Konstruksi Dan Perumahan</option>
						<option value="Desain Pemodelan Informasi Bangunan">Desain Pemodelan Informasi Bangunan</option>
						<option value="Teknik Audio Vidio">Teknik Audio Vidio</option>
						<option value="Teknik Elektronika Industri">Teknik Elektronika Industri</option>
						<option value="Teknik Instalasi Tenaga Listrik">Teknik Instalasi Tenaga Listrik</option>
						<option value="Teknik Pemesinan">Teknik Pemesinan</option>
						<option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
						<option value="Teknik Alat Berat">Teknik Alat Berat</option>
						<option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
						<option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
						<option value="Kriya Kreatif Batik Dan Tekstil">Kriya Kreatif Batik Dan Tekstil</option>
					</select>
				</div>

				<div class="form-group mb-3">
					<label>Jenis Kelamin</label>
					<div class="d-flex gap-4 mt-2">
						<div class="form-check d-inline-block me-3">
						<input class="form-check-input" type="radio" name="jk" id="laki" value="Laki-Laki" required>
						<label class="form-check-label" for="laki">Laki-Laki</label>
					</div>

					<div class="form-check d-inline-block">
						<input class="form-check-input" type="radio" name="jk" id="erempuan" value="Perempuan">
						<label class="form-check-label" for="perempuan">Perempuan</label>
					</div>
					</div>
				</div>
		    </div>

			<div class="card-footer">
			<button type="submit" class="btn btn-primary">Tambah Data</button>
			</div>
		</form>
		</div>
	</div>
</div>
