<?php
session_start();
if (!isset($_POST['nama_lokasi']) ) {
  header('Location:update_wisata.php');
  exit;
}
include "koneksi.php";

date_default_timezone_set('Asia/Bangkok');

$nama_lokasi= $_POST['nama_lokasi'];
$ids = $_POST['ids'];
$deskripsi= $_POST['deskripsi'];
$lokasi= $_POST['lokasi'];
$harga_tiket= $_POST['harga_tiket'];
$kategori= $_POST['kategori'];
                        
$result = mysqli_query($conn, "SELECT * FROM wisata WHERE id_wisata = $ids");
$rows = mysqli_fetch_array($result, MYSQLI_ASSOC);

$gambar = $rows['foto_gambar'];



 if ($_FILES['fileToUpload']['size'] == 0 && $_FILES['fileToUpload']['error'] == 0 || $_FILES["fileToUpload"]["name"]=="")
{
    $newfilename = $_POST['fileToUpload'];

    $update_query2 = mysqli_query($conn, "UPDATE `wisata` SET `nama_lokasi` = '$nama_lokasi', `deskripsi` = '$deskripsi', `lokasi` = '$lokasi', `id_kategori` = '$kategori', `foto_gambar` = '$gambar' WHERE `wisata`.`id_wisata` = $ids; ");
    if ($update_query2){
    echo "<script>
    alert ('Wisata berhasil diubah');
    </script>";
    echo "<meta http-equiv='refresh' content='0;url=lpwisata.php'>";
    }

    else{
    echo "<script>
    alert ('Terjadi galat, wisata gagal diubah');
    </script>";
    echo "<meta http-equiv='refresh' content='0;url=update_wisata.php?id=$ids'>";
    }
}

else{
$target_dir = "images/image/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 10044070) {
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
 echo "<script>
            alert ('Cek Ukuran File, Tipe File');
            </script>";
            echo "<meta http-equiv='refresh' content='0;url=update_wisata.php?id=$ids'>";

}

else {
  $get_data = mysqli_query($conn, "SELECT foto_gambar FROM wisata where id_wisata='$ids'");
  $hasil = mysqli_fetch_array($get_data, MYSQLI_ASSOC);
  if($hasil['foto_gambar']<>"-")
  {
      unlink("images/image/".$hasil['foto_gambar']);
  }

$temp = explode(".", $_FILES["fileToUpload"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "$target_dir" . $newfilename)){

  $update_query = mysqli_query($conn, "UPDATE `wisata` SET `nama_lokasi` = '$nama_lokasi', `deskripsi` = '$deskripsi', `lokasi` = '$lokasi', `id_kategori` = '$kategori', `foto_gambar` = '$newfilename' WHERE `wisata`.`id_wisata` = $ids; ");
  if ($update_query){
  echo "<script>
  alert ('wisata berhasil diubah');
  </script>";
  echo "<meta http-equiv='refresh' content='0;url=lpwisata.php'>";
  }

  else{
  echo "<script>
  alert ('Terjadi galat, Wisata gagal diubah');
  </script>";
  echo "<meta http-equiv='refresh' content='0;url=update_wisata.php?id=$ids'>";
  }
  } else {
      echo "<script>
            alert ('Sorry, there was an error uploading your file');
            </script>";
            echo "<meta http-equiv='refresh' content='0;url=update_wisata.php?id=$ids'>";
  }
}
}



//--------------------------------------------------------------------------------------------------------------------------









?>
