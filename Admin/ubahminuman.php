<h2>Ubah Minuman</h2>

<?php 

$ambil= $koneksi->query("SELECT * FROM produkminuman WHERE ID = '$_GET[id]'");
 $pecah=$ambil->fetch_assoc();

 ?>

 <form method="post" enctype="multipart/form-data" >
<div class="form-group">
	<label>Nama Produk</label>
	<input type="text" name="nama" class="form-control" value="<?php echo $pecah['Name'];?>">
</div> 	
<div class="form-group">
<label>Harga Produk</label>
<input type="number" class="form-control" name="harga" value="<?php echo $pecah['harga'];?>">
	
</div>
<div class="form-group">
<label>Berat Gr</label>
<input type="number" class="form-control" name="berat" value="<?php echo $pecah['berat'];?>">
	
</div>

<div class="form-group">
	<img src="../foto_produk/<?php echo $pecah['foto'] ?>" width="200px;">
</div>

<div class="form-group">
	<label>Ganti Foto</label>
	<input type="file" name="foto" class="form-control">
</div>
<div class="form-group">
<label>Deskripsi </label>
<textarea name="deskripsi" class="form-control" rows="10"><?php echo $pecah['Deskripsi']; ?>
</textarea>	
</div>
<button class="btn btn-primary" name="ubah">Ubah</button>
 </form>

 <?php 
 if (isset($_POST['ubah'])) 
 {
  $namafoto=$_FILES['foto']['name'];
  $lokasifoto=$_FILES['foto']['tmp_name'];
  //jika foto dirubah\
  if (!empty($lokasifoto))
   {
  		move_uploaded_file($lokasifoto,"../foto_produk/$namafoto" );

  		$koneksi->query("UPDATE produkminuman SET Name='$_POST[nama]',harga='$_POST[harga]',berat='$_POST[berat]',foto='$namafoto',Deskripsi='$_POST[deskripsi]' WHERE ID = '$_GET[id]'");
    }else{
      $koneksi->query("UPDATE produkminuman SET Name='$_POST[nama]',harga='$_POST[harga]',berat='$_POST[berat]',Deskripsi='$_POST[deskripsi]' WHERE ID = '$_GET[id]'");
  	}
  	echo "<script>alert('data produk telah diubah');</script>";
  	echo "<script>location='index.php?halaman=produkminuman';</script>";	
  } 
  ?>