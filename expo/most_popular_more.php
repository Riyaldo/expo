<?php
  include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>NatureWander</title>
<!-- Bootstrap core CSS -->
<link href="mediumish-html/assets/css/bootstrap.min2.css" rel="stylesheet">
<!-- Fonts -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Righteous%7CMerriweather:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="mediumish-html/assets/css/mediumish.css" rel="stylesheet">
</head>
<body>

<!-- Begin Nav
================================================== -->
<nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="container">
	<!-- Begin Logo -->
	<a class="navbar-brand" href="index.html">NatureWander</a>
	<!-- End Logo -->
	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<!-- Begin Menu -->
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
			<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
			</li>
		</ul>
		<!-- End Menu -->
	</div>
</div>
</nav>
<!-- End Nav
================================================== -->

<!-- Begin Article
================================================== -->
<?php
    $result = mysqli_query($conn, "SELECT * FROM most_popular WHERE id_place=$_GET[id]");
    while($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)){
?>
<div class="container">
	<div class="row">
		<!-- Begin Post -->
		<div class="col-md-8 col-md-offset-2 col-xs-12">
			<div class="mainheading">
				<h1 class="posttitle"> 
					<?php
                  // Mengambil 'tempat' dari database
                  $tempat = $rows['tempat'];
				//   Menampilkan tempat
				echo $tempat;
                ?>
				</h1>

			</div>

			<!-- Begin Featured Image -->
			<img class="featured-image img-fluid" src="images/image/<?php echo $rows['gambar']?>" alt="gambar">
			<!-- End Featured Image -->

			<!-- Begin Post Content -->
			<div class="article-post">
				<p>
				<?php
                  // Mengambil 'isi' dari database
                  $deskripsi = $rows['deskripsi'];
				//   Menampilkan judul
				echo $deskripsi;
                ?>
				</p>
				
			</div>
			<!-- End Post Content -->


		</div>
		<!-- End Post -->

	</div>
</div>
<?php
	}
?>
<!-- End Article
================================================== -->


<!-- Begin Footer
================================================== -->
<div class="container">
	<div class="footer">
		<p class="pull-left">
			 Copyright &copy; <a href="">NatureWander</a>
		</p>
		<div class="clearfix">
		</div>
	</div>
</div>
<!-- End Footer
================================================== -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="mediumish-html/assets/js/jquery.min3.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="mediumish-html/assets/js/bootstrap.min2.js"></script>
<script src="mediumish-html/assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="mediumish-html/assets/js/mediumish2.js"></script>
</body>
</html>
