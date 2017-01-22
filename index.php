<!DOCTYPE HTML>
<html> 

<head>
  <title>Maduro Cigars Club Arad</title>
  <meta name="description" content="Maduro Cigars Club - clubul pasionatilor de trabucuri din Arad" />
  <meta name="keywords" content="maduro, cigars, club, Arad, cigar, afficionado, cuba, cubans, trabuc, trabucuri, cohiba, romeoyjulieta, montecristo, partagas, behike, siglo" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<!--  <meta name=viewport content="width=device-width, initial-scale=1">-->
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <link rel="stylesheet" type="text/css" href="style/responsiveslides.css"/>
  <script src="js/jquery-1.11.3.min.js"></script>
<!--  <script src="js/modernizr-2.8.3.min.js"></script>-->
  <script src="js/responsiveslides.js"></script>
  <script>
    // You can also use "$(window).load(function() {"
	$(function () {
	  // Slideshow 1
	  $("#slider1").responsiveSlides({
	    speed: 600,
        timeout: 3000
      });
    });
  </script>
</head>

<body>
  <div id="main">
    <?php $currentPage = 'index'; require 'includes/header-nav.php'; ?>
    <div id="index_content">
        <!--start-image-slider-->
		<div id="image_slider">
		  <!-- Slideshow 1 -->
		  <ul class="rslides" id="slider1">
            <li><img src="style/slider/Davidoff_and_scissors.jpg" alt="Davidoff_and_scissors"></li>
			<li><img src="style/slider/cigars_and_cognac.jpg" alt="cigars_and_cognac"></li>
            <li><img src="style/slider/Bourbon_And_Cohiba.jpg" alt="Bourbon_And_Cohiba"></li>
            <li><img src="style/slider/habana_cigars.jpg" alt="habana_cigars"></li>
            <li><img src="style/slider/Handmade_cigars.jpg" alt="Handmade_cigars"></li>
<!--			<li><img src="/style/slider/cigar_boxes.jpg" alt="cigar_boxes"></li>-->
			<li><img src="style/slider/Kristoff1.jpg" alt="Kristoff cigars"></li>
          </ul>
        </div>
	    <!--End-image-slider-->
    </div>
    <?php include 'includes/footer.php'; ?>
  </div>
</body>
</html>
