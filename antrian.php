<?php include('koneksi.php'); ?>

		<center><font size="6">Input Antrian</font></center>
		<hr>
		<?php
		if(isset($_POST['submit'])){
			$nama			= $_POST['nama'];
			$alamat			= $_POST['alamat'];
			$telp			= $_POST['telp'];
			$tgl			= $_POST['tgl'];

			$cek = mysqli_query($koneksi, "SELECT * FROM data WHERE id='$id'") or die(mysqli_error($koneksi));

			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($koneksi, "INSERT INTO data (nama, alamat, telp, tgl) VALUES('$nama', '$alamat', '$telp', '$tgl')") or die(mysqli_error($koneksi));

				if($sql){
					echo '<script>alert("Berhasil menambahkan antrian."); document.location="index.php?page=tampil_antri";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah antrian.</div>';
				}
			}else{
				echo '<div class="alert alert-warning">Gagal, id sudah terdaftar.</div>';
			}
		}
		?>

		<form action="index.php?page=antrian" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="nama" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="alamat" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Telp</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="telp" class="form-control" required>
				</div>
			</div>
            <div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal</label>
				<div class="col-md-6 col-sm-6">
					<input type="date" name="tgl" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<div  class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
			</div>
		</form>
	</div>
