
<?php 

session_start();

$ID = $_GET['id'];


if (isset($_SESSION['keranjang'][$ID])) 
{
	$_SESSION['keranjang'][$ID]+=1;

}
else{

	$_SESSION['keranjang'][$ID] = 1;
}

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

echo "<script>alert('Produk telah masuk ke keranjang belanja');</script>";
echo "<script>location='keranjang.php';</script>";


 ?>