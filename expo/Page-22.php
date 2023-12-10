<?php
    include "koneksi.php";
?>

<!DOCTYPE html>
<html style="font-size: 16px">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta name="keywords" content="NatureWander" />
    <meta name="description" content="" />
    <meta name="page_type" content="np-template-header-footer-from-plugin" />
    <title>Page 2</title>
    <link rel="stylesheet" href="nicepage.css" media="screen" />
    <link rel="stylesheet" href="Page-2.css" media="screen" />
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.5.4, nicepage.com" />
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" />
    <link rel="stylesheet" href="gallery.css" />

    <script type="application/ld+json"> 
      {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": ""
      }
    </script>
    <meta name="theme-color" content="#478ac9" />
    <meta property="og:title" content="Page 2" />
    <meta property="og:type" content="website" />
  </head>
  <body class="u-body u-xl-mode">
        <?php
              $results = mysqli_query($conn, "SELECT w.*, k.nama FROM wisata w join kategori_wisata k on (w.id_kategori=k.id_kategori) WHERE id_wisata=$_GET[id]");
              $rows = mysqli_fetch_array($results, MYSQLI_ASSOC);
              $ids = $rows['id_wisata'];
              $jumlah_pengunjung=$rows['jumlah_pengunjung'] + 1 ;
              mysqli_query($conn, "UPDATE `wisata` SET `jumlah_pengunjung` = '$jumlah_pengunjung' WHERE id_wisata=$ids; ");
        ?>


    <section class="u-clearfix u-section-1" id="sec-12f3">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-title u-text-1"><?php echo $rows['nama_lokasi']?></h2>
        <h5 class="u-subtitle u-text u-text-default u-text-2"><?php echo $rows['nama']?></h5>
        <p class="u-text u-text-3"><?php echo $rows['deskripsi']?></p>
        <a
          href="<?php echo $rows['lokasi']?>"
          class="u-active-none u-border-2 u-border-palette-1-base u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-btn-rectangle u-button-style u-hover-none u-none u-radius-0 u-top-left-radius-0 u-top-right-radius-0 u-btn-1"
          >Lokasi <?php echo $rows['nama_lokasi']?></a
        >
      </div>
    </section>

    <div class="container">
      <h1>OUR PHOTO GALLERY</h1>

      <div class="photo-gallery">
<?php
    $result = mysqli_query($conn, "SELECT * FROM galeri WHERE id_wisata=$_GET[id]");
    while($row2 = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
?>
        <div class="pic">
          <img src="images/image/<?php echo $row2['foto']?>" />
        </div>
<?php
    }
?>
      </div>
    </div>
  </body>
</html>
