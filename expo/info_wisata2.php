<?php 
    include "koneksi.php";
?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="NatureWander, Judul, Lokasi">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>About</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="About.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.5.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="About">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode">
    <header class="u-align-center u-border-3 u-border-black u-border-no-left u-border-no-right u-border-no-top u-clearfix u-custom-border u-header" id="sec-35cc"><div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">NatureWander</h2>
s
        <a href="https://nicepage.com/templates" class="u-align-right u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-palette-1-base u-btn-1">Back</a>
      </div>
    </header>


    <section class="u-clearfix u-section-1" id="sec-b1a9">
      <div class="u-clearfix u-sheet u-sheet-1">
            <?php
              $results = mysqli_query($conn, "SELECT w.*, k.nama FROM wisata w join kategori_wisata k on (w.id_kategori=k.id_kategori) WHERE id_wisata=$_GET[id]");
              $rows = mysqli_fetch_array($results, MYSQLI_ASSOC);
              $ids = $rows['id_wisata'];
              $jumlah_pengunjung=$rows['jumlah_pengunjung'] + 1 ;
              mysqli_query($conn, "UPDATE `wisata` SET `jumlah_pengunjung` = '$jumlah_pengunjung' WHERE id_wisata=$ids; ");
            ?>
              <h1 class="u-text u-title u-text-1"><?php echo $rows['nama_lokasi'];?></h1>

        <div class="u-carousel u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-gallery u-layout-thumbnails u-lightbox u-no-transition u-show-text-always u-gallery-1" data-interval="5000" data-u-ride="carousel" id="carousel-e8a5">
          <div class="u-carousel-inner u-gallery-inner" role="listbox">
            <div class="u-active u-carousel-item u-gallery-item u-carousel-item-1">
              <div class="u-back-slide" data-image-width="853" data-image-height="1280">
                <img class="u-back-image u-expanded" src="images/288a2cfbb62caa7d9d007170f1b8e3e2dd9fa3f63cc774032e739a6256d1949f199790364d0ac74651a12667c59149a3ce1f9d257bd0c578fe7e03_1280.jpg">
              </div>
              <div class="u-over-slide u-over-slide-1">
                <h3 class="u-gallery-heading">Sample text</h3>
                <p class="u-gallery-text">Sample Text</p>
              </div>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-2">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="images/default-image.jpg">
              </div>
              <div class="u-over-slide u-over-slide-2">
                <h3 class="u-gallery-heading">Sample Title</h3>
                <p class="u-gallery-text">Sample Text</p>
              </div>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-3" data-image-width="853" data-image-height="1280">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="https://pixabay.com/get/ga02047dfd2a7982b71069a5a80ff26af585fe2171b173abd76152138ee6fe06fae77f756d8cd01111af02a0327188afeaff0b85efedc74603b7b366ad13b0100_1280.jpg">
              </div>
              <div class="u-over-slide u-over-slide-3">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
              <style data-mode="XL" data-visited="true"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-4" data-image-width="1280" data-image-height="854">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="https://pixabay.com/get/g8af6bfb0120819078c354bd9c64b934795928600556fcd913dd3351065cd6e1ee47b09e458b58f33890b21f9395ad72406d572a41476f89c5e5bb52ca775a179_1280.jpg">
              </div>
              <div class="u-over-slide u-over-slide-4">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
              <style data-mode="XL" data-visited="true"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-5" data-image-width="853" data-image-height="1280">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="https://pixabay.com/get/g7888293ddc288a2cfbb62caa7d9d007170f1b8e3e2dd9fa3f63cc774032e739a6256d1949f199790364d0ac74651a12667c59149a3ce1f9d257bd0c578fe7e03_1280.jpg">
              </div>
              <div class="u-over-slide u-over-slide-5">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
              <style data-mode="XL" data-visited="true"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-6" data-image-width="1280" data-image-height="854">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="https://pixabay.com/get/g4ee76880de40bed71af5d8a3c366339699567b1272d8a0dd72fb6af48b88d3913b2dd9c6a7adebe26fea2cf750f030a576f72e4833a8e7c4096f632ce93474cf_1280.jpg">
              </div>
              <div class="u-over-slide u-over-slide-6">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
              <style data-mode="XL" data-visited="true"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
          </div>
          <a class="u-carousel-control u-carousel-control-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-1" href="#carousel-e8a5" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
          </a>
          <a class="u-carousel-control u-carousel-control-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-2" href="#carousel-e8a5" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
          </a>
          <ol class="u-carousel-thumbnails u-spacing-10 u-carousel-thumbnails-1">
            <li class="u-active u-carousel-thumbnail u-carousel-thumbnail-1" data-u-target="#carousel-e8a5" data-u-slide-to="0">
              <img class="u-carousel-thumbnail-image u-image" src="images/image/<?php echo $rows['foto_gambar'];?>">
            </li>
          </ol>

        </div>

        <h2 class="u-subtitle u-text u-text-grey-50 u-text-2"><?php echo $rows['nama']?></h2>
        <p class="u-small-text u-text u-text-variant u-text-3"><?php echo $rows['deskripsi']?></p>
        
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-33b8"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Copyright Naturewander</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
  </body>
</html>