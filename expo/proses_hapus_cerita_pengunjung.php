<?php
$id = $_GET['id'];
session_start();
include "koneksi.php";
date_default_timezone_set('Asia/Bangkok');
// $target_dir = "assets/images/blog/";
// $get_data = mysqli_query($conn,"SELECT gambar FROM most_popular where id_place=$id");
// $hasil = mysqli_fetch_array($get_data, MYSQLI_ASSOC);
// if($hasil['gambar']<>"-")
// {
//     unlink("assets/images/blog/".$hasil['gambar']);
// }


$query=mysqli_query($conn,"DELETE from cerita_pengunjung where id_cerita=$id");
echo "<script>
	alert ('Cerita berhasil dihapus');
	</script>";
echo"<meta http-equiv=refresh content=0;url=lpcerita_pengunjung.php>";
?>
