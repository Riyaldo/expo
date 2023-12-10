<?php
$id = $_GET['id'];
session_start();
include "koneksi.php";
date_default_timezone_set('Asia/Bangkok');
$target_dir = "images/image/";
$get_data = mysqli_query($conn,"SELECT gambar FROM blog where id_blog=$id");
$hasil = mysqli_fetch_array($get_data, MYSQLI_ASSOC);
if($hasil['gambar']<>"-")
{
    unlink("images/image/".$hasil['gambar']);
}


$query=mysqli_query($conn,"DELETE from blog where id_blog=$id");
echo "<script>
	alert ('Blog berhasil dihapus');
	</script>";
echo"<meta http-equiv=refresh content=0;url=lpmost_popular.php>";
?>
