<!doctype html>
<?php
    $page = "";
    if(isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = "information.php";
    }
?>
<html lang="en">
  <head>
  	<title>Website menu 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/style.css">

	</head>
	<body>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight">
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
                    <?php if($page == "information.php") { ?>
					    <li class="colorlib-active"><a href="index.php?page=information.php">Acceuil</a></li>
					    <li><a href="index.php?page=liste.php">Actualités</a></li>
                    <?php } else if($page == "liste.php") { ?>
                        <li><a href="index.php?page=information.php">Acceuil</a></li>
					    <li class="colorlib-active"><a href="index.php?page=liste.php">Actualités</a></li>
                    <?php } ?>
				</ul>
			</nav>
		</aside> <!-- END COLORLIB-ASIDE -->

		<div id="colorlib-main">
			<section class="ftco-section pt-4 mb-5 ftco-intro">
				<div class="container-fluid px-3 px-md-0">
					<div class="row">
                    <?php
                        include($page);
                    ?>
					</div>
				</div>
			</section>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

	</section>

	<script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>

	</body>
</html>

