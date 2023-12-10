<?php
$id = $_GET['id'];
session_start();
include "koneksi.php";
date_default_timezone_set('Asia/Bangkok');
$target_dir = "images/image/";
$get_data = mysqli_query($conn,"SELECT foto FROM galeri where id_foto=$id");
$hasil = mysqli_fetch_array($get_data, MYSQLI_ASSOC);
if($hasil['foto']<>"-")
{
    unlink("images/image/".$hasil['foto']);
}


$query=mysqli_query($conn,"DELETE from galeri where id_foto=$id");
echo "<script>
	alert ('Foto berhasil dihapus');
	</script>";
echo"<meta http-equiv=refresh content=0;url=lpgaleri.php>";
?>
