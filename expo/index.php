<?php
    include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<title>NatureWander</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
  	<link rel="stylesheet" href="css/component.css">
	
    <link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/vegas.min.css">
	<link rel="stylesheet" href="css/style.css">

	<!-- Google web font  -->
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
	
</head>
<body id="top" data-spy="scroll" data-offset="50" data-target=".navbar-collapse">


<!-- Preloader section -->

<div class="preloader">
     <div class="sk-spinner sk-spinner-pulse"></div>
</div>


<!-- Navigation section  -->

  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">

      <div class="navbar-header">
        <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
        </button>
        <a href="#top" class="navbar-brand smoothScroll">NatureWander</a>
      </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#top" class="smoothScroll"><span>Home</span></a></li>
            <li><a href="#about" class="smoothScroll"><span>About</span></a></li>
            <li><a href="#gallery" class="smoothScroll"><span>Blogs</span></a></li>
            <li><a href="#contact" class="smoothScroll"><span>message</span></a></li>
            <li><a href="login.php" class="smoothScroll"><span>login</span></a></li>
          </ul>
       </div>

    </div>
  </div>


<!-- Home section -->

<section id="home">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">

      <div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
        <h1 class="wow fadeInUp" data-wow-delay="0.6s">Let's Holiday</h1>
        <p class="wow fadeInUp" data-wow-delay="0.9s">NatureWander adalah pintu gerbang menuju petualangan tak terlupakan yang dipenuhi dengan momen indah dan pengalaman luar biasa. Di sini, kami mengajak Anda untuk melarikan diri dari rutinitas sehari-hari dan menjelajahi destinasi menakjubkan di seluruh Indonesia. Thank you.</p>
      </div>

    </div>
  </div>
</section>


<!-- Kategori Wisata section -->
<section id="about">
  <div class="container">
    <div class="row">

      <div class="col-md-9 col-sm-8 wow fadeInUp" data-wow-delay="0.2s">
        <h1>kategori Wisata</h1>
<?php
    $result = mysqli_query($conn, "SELECT * FROM kategori_wisata");
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
?>
      <div class="about-thumb">
          <h1><?php echo $row['nama'];?></h1>
          <p><?php echo $row['deskripsi'];?></p>
          <a href="wisata.php">Read More</a>
        </div>
<?php
    }
?>
      </div>
      
      <div class="col-md-3 col-sm-4 wow fadeInUp about-img" data-wow-delay="0.6s">
        <img src="images/image/dubai.png" class="img-responsive img-circle" alt="About">
      </div>

      <div class="clearfix"></div>

      <!-- Most Popular -->
      <div class="col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
        <div class="section-title text-center">
          <h1>Most Popular</h1>
          <h3>Most Popular Adalah tempat yang sering dikunjungi oleh Wisatawan dan menjadi tempat paling menarik</h3>
        </div>
      </div>

      <div id="team-carousel" class="owl-carousel">
<?php
    $result2 = mysqli_query($conn, "SELECT * FROM wisata WHERE jumlah_pengunjung > 0 ORDER BY jumlah_pengunjung DESC LIMIT 7;");
    while($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC))
    {
?>
<a href="Page-2.php?id=<?php echo $row2['id_wisata']?>">
      <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
        <div class="team-thumb">
          <div class="image-holder">
            <img src="images/image/<?php echo $row2['foto_gambar'];?>" class="img-responsive img-circle">
          </div>
          <h2 class="heading"><?php echo $row2['nama_lokasi'];?></h2>
          <p class="description"><?php
                  // Mengambil 'deskripsi' dari database
                  $deskripsi = $row2['deskripsi'];

                  // Menampilkan 'judul' dengan aturan yang diminta
                  if (strlen($deskripsi) > 100) {
                      $deskripsi_pendek = substr($deskripsi, 0, 100) . "...";
                      echo $deskripsi_pendek;
                  } else {
                      echo $deskripsi;
                  }?></p>
        </div>
      </div>
      </a>
<?php
    }
?>
      </div>
      <!-- end Most Popular -->

    </div>
  </div>
</section>


<!-- Blogs section -->

<section id="gallery">
  <div class="container">
    <div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
        <div class="section-title">
          <h1>Blogs</h1>
          <p>Mari kita merayakan keindahan ungkapan, merangkai makna, dan menemukan keajaiban di antara baris-baris tulisan. Blogs adalah panggilan untuk membebaskan kreativitas, mengekspresikan ide, dan menyatukan komunitas dalam diskusi yang mendalam.</p>
        </div>
      </div>
<?php
    $result3 = mysqli_query($conn, "SELECT * FROM cerita_pengunjung WHERE status=1");
    while($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC))
    {
?>
      <ul class="grid cs-style-4">
        <li class="col-md-6 col-sm-6">
          <figure>
            <div><img src="images/image/<?php echo $row3['gambar'];?>" alt="image 1"></div>
            <figcaption>
              <h1>                
                <?php
                  // Mengambil 'judul' dari database
                  $judul = $row3['judul'];

                  // Menampilkan 'judul' dengan aturan yang diminta
                  if (strlen($judul) > 10) {
                      $judul_pendek = substr($judul, 0, 10) . "...";
                      echo $judul_pendek;
                  } else {
                      echo $judul;
                  }
                ?>
                </h1>
              <small>
                <?php
                  // Mengambil 'cerita' dari database
                  $cerita = $row3['cerita'];

                  // Menampilkan 'isi' dengan aturan yang diminta
                  if (strlen($cerita) > 50) {
                      $cerita_pendek = substr($cerita, 0, 50) . "...";
                      echo $cerita_pendek;
                  } else {
                      echo $cerita;
                  }
                ?>
              </small>
              <a href="blogs_more.php?id=<?php echo $row3['id_cerita']?>">Read More</a>
            </figcaption>
          </figure>
        </li>
<?php
    }
?>
      </ul>

    </div>
  </div>
</section>


<!-- Contact section -->

<section id="contact">
  <div class="container">
    <div class="row">

       <div class="col-md-offset-1 col-md-10 col-sm-12">

        <div class="col-lg-offset-1 col-lg-10 section-title wow fadeInUp" data-wow-delay="0.4s">
          <h1>Send a message</h1>
          <p>"Tempatkan Pengalaman Menarik Anda Disini" untuk menuliskan bab baru dari kisah Anda. Ceritakan momen-momen yang menggugah hati, tempat-tempat yang menyentuh jiwa, dan petualangan yang membentuk diri Anda. Jadikan setiap kata sebagai lukisan yang menceritakan keunikan perjalanan hidup Anda. </p>
        </div>

        <form action="proses_add_cerita_pengunjung.php" method="post" class="wow fadeInUp" data-wow-delay="0.8s">
          <div class="col-md-6 col-sm-6">
            <input name="judul" type="text" class="form-control" id="judul" placeholder="Judul">
          </div>
          <div class="col-md-6 col-sm-6">
            <input name="lokasi" type="text" class="form-control" id="lokasi" placeholder="Lokasi">
          </div>
          <div class="col-md-12 col-sm-12">
            <textarea name="cerita" rows="6" class="form-control" id="cerita" placeholder="Message"></textarea>
          </div>
          <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
            <input type="submit" class="form-control" value="SEND MESSAGE">
          </div>
        </form>

      </div>

    </div>
  </div>
</section>


<!-- Footer section -->

<footer>
	<div class="container">
    
		<div class="row">

			<div class="col-md-12 col-sm-12">
            
                <ul class="social-icon"> 
                    <li><a href="https://www.instagram.com/riyaldo__/" class="fa fa-instagram wow fadeInUp" data-wow-delay="0.8s"></a></li>
                    <li><a href="https://www.instagram.com/myasirs04/" class="fa fa-instagram wow fadeInUp" data-wow-delay="0.8s"></a></li>
                    <li><a href="https://www.instagram.com/fahriza.athallah/" class="fa fa-instagram wow fadeInUp" data-wow-delay="0.8s"></a></li>
                </ul>

				<p class="wow fadeInUp"  data-wow-delay="1s" >Copyright &copy; 2023 NatureWander</p>
                
			</div>
			
		</div>
        
	</div>
</footer>

<!-- Back top -->
<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- Javascript  -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/vegas.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/toucheffects.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
<?php mysqli_close($conn); ?>
