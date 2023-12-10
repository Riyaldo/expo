<?php
session_start();
if (!isset($_POST['judul']) ) {
  header('Location:index.php');
  exit;
}
include "koneksi.php";

date_default_timezone_set('Asia/Bangkok');

$judul= $_POST['judul'];
$lokasi= $_POST['lokasi'];
$cerita= $_POST['cerita'];
// Validasi data
if (empty($judul) || empty($lokasi) || empty($cerita)) {
  echo "<script>
        alert ('Silakan isi semua kolom Message');
        </script>";
  echo "<meta http-equiv='refresh' content='0;url=index.php'>";
} else {
  // Lanjutkan dengan penyimpanan data ke database
  $insert_query2 = mysqli_query($conn, "INSERT INTO `cerita_pengunjung` (`judul`, `lokasi`, `cerita`) VALUES ('$judul', '$lokasi', '$cerita')");

  // Handling hasil query
  if ($insert_query2) {
      echo "<script>
            alert ('Cerita Anda berhasil ditambahkan');
            </script>";
      echo "<meta http-equiv='refresh' content='0;url=index.php'>";
  } else {
      echo "<script>
            alert ('Maaf, terjadi error saat penambahan cerita: " . mysqli_error($conn) . "');
            </script>";
      echo "<meta http-equiv='refresh' content='0;url=index.php'>";
  }
}

//  if ($_FILES['fileToUpload']['size'] == 0 && $_FILES['fileToUpload']['error'] == 0 || $_FILES["fileToUpload"]["name"]=="")
// {
//     $newfilename = "-";
//     $insert_query2 = mysqli_query($conn, "INSERT INTO `blog` (`id_blog`, `judul`, `isi`, `gambar`) VALUES (NULL, '$judul', '$isi', '$newfilename'); ");
//     if ($insert_query2){
//     echo "<script>
//     alert ('Blog berhasil ditambahkan');
//     </script>";
//     echo "<meta http-equiv='refresh' content='0;url=lpblog.php'>";
//     }

//     else{
//     echo "<script>
//     alert ('Terjadi galat, Blog gagal ditambahkan');
//     </script>";
//     echo "<meta http-equiv='refresh' content='0;url=add_blog.php'>";
//     }
// }

// else{
// $target_dir = "assets/images/blog/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//   if($check !== false) {
//     $uploadOk = 1;
//   } else {
//     $uploadOk = 0;
//   }
// }

// // Check if file already exists
// if (file_exists($target_file)) {
//   $uploadOk = 0;
// }

// // Check file size
// if ($_FILES["fileToUpload"]["size"] > 10044070) {
//   $uploadOk = 0;
// }

// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" ) {
//   $uploadOk = 0;
// }

// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//  echo "<script>
//             alert ('Cek Ukuran File, Tipe File');
//             </script>";
//             echo "<meta http-equiv='refresh' content='0;url=add_blog.php'>";

// }

// else {
// $temp = explode(".", $_FILES["fileToUpload"]["name"]);
// $newfilename = round(microtime(true)) . '.' . end($temp);
// if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "$target_dir" . $newfilename)){

//   $insert_query2 = mysqli_query($conn, "INSERT INTO `blog` (`id_blog`, `judul`, `isi`, `gambar`) VALUES (NULL, '$judul', '$isi', '$newfilename'); ");
//   if ($insert_query2){
//   echo "<script>
//   alert ('Blog berhasil ditambahkan');
//   </script>";
//   echo "<meta http-equiv='refresh' content='0;url=lpblog.php'>";
//   }

//   else{
//   echo "<script>
//   alert ('Terjadi galat, Blog gagal ditambahkan');
//   </script>";
//   echo "<meta http-equiv='refresh' content='0;url=add_blog.php'>";
//   }
//   } else {
//       echo "<script>
//             alert ('Sorry, there was an error uploading your file');
//             </script>";
//             echo "<meta http-equiv='refresh' content='0;url=add_blog.php'>";
//   }
// }
// }



//--------------------------------------------------------------------------------------------------------------------------









?>
