<h2>Tambah Produk</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
	<label>Nama</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-group">
		<label>Harga (Rp)</label>
		<input type="number" class="form-control" name="harga">
	</div>
	<div class="form-group">
		<label>Berat (Gr)</label>
		<input type="number" class="form-control" name="berat">
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
		<textarea class="form-control" name="deskripsi" rows="10"></textarea>
	</div>
	<div class="form-group">
		 <label>Foto</label>
		 <input type="file" class="form-control" name="foto">
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php 
if (isset($_POST['save']))
 {
 	$nama= $_FILES['foto']['name'];
 	$lokasi=$_FILES['foto']['tmp_name'];
 	move_uploaded_file($lokasi, "../foto_produk/".$nama);
 	$koneksi->query("INSERT INTO produk
 		(Name,harga,berat,foto,Deskripsi)
 		VALUES('$_POST[nama]','$_POST[harga]','$_POST[berat]','$nama',' $_POST[deskripsi]')");

 		echo "<script>alert('Penambahan Produk Berhasil');</script>";
 		echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produkminuman'>"; 
 }
  ?>