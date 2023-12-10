<?php 
    include "koneksi.php";
?>

<!DOCTYPE html>
<html style="font-size: 16px">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta name="keywords" content="NatureWander, Judul, Lokasi" />
    <meta name="description" content="" />
    <meta name="page_type" content="np-template-header-footer-from-plugin" />
    <title>About</title>
    <link rel="stylesheet" href="nicepage.css" media="screen" />
    <link rel="stylesheet" href="About.css" media="screen" />
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.5.4, nicepage.com" />
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" />

    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": ""
      }
    </script>
    <meta name="theme-color" content="#478ac9" />
    <meta property="og:title" content="About" />
    <meta property="og:type" content="website" />
  </head>
  <body class="u-body u-xl-mode">
    <header class="u-align-center u-border-3 u-border-black u-border-no-left u-border-no-right u-border-no-top u-clearfix u-custom-border u-header" id="sec-35cc">
      <div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">NatureWander</h2>
        <a href="https://nicepage.com/templates" class="u-align-right u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-palette-1-base u-btn-1">Back</a>
      </div>
    </header>

    <section class="u-clearfix u-section-1" id="sec-b1a9">
      <div class="u-clearfix u-sheet u-valign-middle-sm u-valign-middle-xl u-sheet-1">
                    <?php
              $results = mysqli_query($conn, "SELECT w.*, k.nama FROM wisata w join kategori_wisata k on (w.id_kategori=k.id_kategori) WHERE id_wisata=$_GET[id]");
              $rows = mysqli_fetch_array($results, MYSQLI_ASSOC);
              $ids = $rows['id_wisata'];
              $jumlah_pengunjung=$rows['jumlah_pengunjung'] + 1 ;
              mysqli_query($conn, "UPDATE `wisata` SET `jumlah_pengunjung` = '$jumlah_pengunjung' WHERE id_wisata=$ids; ");
            ?>
              <h1 class="u-text u-title u-text-1"><?php echo $rows['nama_lokasi'];?></h1>
        <div
          class="u-carousel u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-gallery u-layout-thumbnails u-lightbox u-no-transition u-show-text-always u-gallery-1"
          data-interval="5000"
          data-u-ride="carousel"
          id="carousel-628a"
        >
          <div class="u-carousel-inner u-gallery-inner" role="listbox">
            <div class="u-active u-carousel-item u-gallery-item u-carousel-item-1">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="images/about-img.jpg" />
              </div>
                <h3 class="u-gallery-heading">Sample Title</h3>
                <p class="u-gallery-text">Sample Text</p>
              </div>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-2">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded" src="images/default-image.jpg" />
              </div>
              <div class="u-over-slide u-over-slide-2">
                <h3 class="u-gallery-heading">Sample Title</h3>
                <p class="u-gallery-text">Sample Text</p>
              </div>
            </div>
          </div>
          <a class="u-carousel-control u-carousel-control-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-1" href="#carousel-628a" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847">
                <path
                  d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"
                ></path>
              </svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847">
                <path
                  d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"
                ></path>
              </svg>
            </span>
          </a>
          <a class="u-carousel-control u-carousel-control-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-2" href="#carousel-628a" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847">
                <path
                  d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"
                ></path>
              </svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847">
                <path
                  d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"
                ></path>
              </svg>
            </span>
          </a>

          <ol class="u-carousel-thumbnails u-spacing-10 u-carousel-thumbnails-1">
                      <?php 
            $results1 = mysqli_query($conn, "SELECT g.*, w.nama_lokasi FROM wisata w join galeri g on (w.id_wisata =g.id_wisata) WHERE id_foto=$_GET[id]");
            while($rows1 = mysqli_fetch_array($results, MYSQLI_ASSOC))
              {
          ?>
                   <?php 
              }
            ?>
            <li class="u-active u-carousel-thumbnail u-carousel-thumbnail-1" data-u-target="#carousel-628a" data-u-slide-to="0">
              <img class="u-carousel-thumbnail-image u-image" src="images/about-img.jpg" />
            </li>
   
          </ol>
        </div>
        <h2 class="u-subtitle u-text u-text-grey-50 u-text-2"><?php echo $rows['nama']?></h2>
        <a href="https://nicepage.com/k/offer-html-templates" class="u-btn u-btn-round u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-radius-19 u-btn-1">Cek di Map</a>
        <p class="u-align-justify u-small-text u-text u-text-variant u-text-3">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis rerum temporibus assumenda. Laboriosam, rem unde molestias qui praesentium animi expedita quas magni amet id doloribus numquam nemo harum aut tempore, et sed
          aliquam at veniam. Autem delectus ullam ipsa dolor fugiat. Esse impedit animi magnam soluta atque quo magni labore cumque, officiis molestiae exercitationem sit sed vitae repudiandae voluptatem, voluptatum cum voluptatibus.
          Voluptatibus temporibus nesciunt corporis eligendi maiores illum accusantium quos harum quibusdam rem beatae, ipsa odio ipsam dolores qui ducimus repudiandae ea dolorum officia accusamus vero facere. Possimus labore praesentium
          pariatur non id dolore ipsam numquam, quo sapiente obcaecati.<br />
        </p>
      </div>
    </section>

    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-33b8">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Copyright Naturewander</p>
      </div>
    </footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank"> <span>Website Builder Software</span> </a>.
    </section>
  </body>
</html>
