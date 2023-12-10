<?php
$id = $_GET['id'];
session_start();
include "koneksi.php";
date_default_timezone_set('Asia/Bangkok');
$target_dir = "images/image/";
$get_data = mysqli_query($conn,"SELECT gambar FROM most_popular where id_place=$id");
$hasil = mysqli_fetch_array($get_data, MYSQLI_ASSOC);
if($hasil['gambar']<>"-")
{
    unlink("images/image/".$hasil['gambar']);
}


$query=mysqli_query($conn,"DELETE from most_popular where id_place=$id");
echo "<script>
	alert ('Most Popular berhasil dihapus');
	</script>";
echo"<meta http-equiv=refresh content=0;url=lpmost_popular.php>";
?>
