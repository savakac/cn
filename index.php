<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/logo.png">

	<title>Testing bootstrap</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> <!--Bootstrap-->
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<!-- Wrapper container head panel and slide -->
	<div class="container">

		<div class="row menu-bar-one hidden-xs">

			<div class="col-sm-4 col-md-3 menu-bar">
				<div class="logo-bar">
					<img src="images/logo_cn.jpg" alt="">
				</div>
			</div>

			<div class="col-sm-5 col-md-3 col-sm-offset-1 col-md-offset-4">

				<span class="info-panel">
					<a href="#">NEWSLETTER</a>
					<a href="#">PRESS</a>
					<a href="#">PARTNERI</a>
				</span>

				<form class="form-search search-box" role="search">
					<div class="form-group has-control has-feedback">
						<input type="text" class="form-control input-search form-input" placeholder="Search">
						<span class="glyphicon glyphicon-search form-control-feedback search-icon"></span>
					</div>
				</form>

			</div>

			<div class="col-md-2 social-network">
				<a href="#" title="Facebook"><img src="images/facebook-icon.png" alt=""></a>
				<a href="#" title="Google+"><img src="images/gplus.png" alt=""></a>
				<a href="#" title="Twitter"><img src="images/twitter.png" alt=""></a>
			</div>

		</div>

		<!-- Show component xs size -->
		<div class="row menu-bar-one visible-xs">
			<div class="col-xs-2 col-xs-offset-3 logo-bar-xs">
				<img src="images/logo_cn.jpg" alt="">
			</div>
		</div>

		<div class="row menu-bar-one-xs visible-xs">

			<button class="btn btn-default menu-button-xs" type="button">
				<span class="glyphicon glyphicon-align-justify"></span>
			</button>

			<button class="btn btn-default menu-button-xs" type="button">
				<span class="glyphicon glyphicon-search"></span>
			</button>

		</div>

		<div class="row social-network-xs visible-xs">
			<a href="#" title="Facebook"><img src="images/facebook-icon.png" alt=""></a>
			<a href="#" title="Google+"><img src="images/gplus.png" alt=""></a>
			<a href="#" title="Twitter"><img src="images/twitter.png" alt=""></a>
		</div>
		<!-- End show xs size -->

		<div class="row hidden-xs">
			<div class="col-lg-12 slide">	
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
 					<ol class="carousel-indicators slide-indicator">
    					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
    					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
  					</ol>

  					<!-- Wrapper for slides -->
  					<div class="carousel-inner">
    					<div class="item active">
      						<img src="images/image1.jpg" alt="">
      							<div class="carousel-caption carousel-text">
        							Image 1
      							</div>
    					</div>
    					<div class="item">
      						<img src="images/image2.jpg" alt="">
      							<div class="carousel-caption carousel-text">
        							Image 2
      							</div>
    					</div>
    					<div class="item">
      						<img src="images/image3.jpg" alt="">
      							<div class="carousel-caption carousel-text">
        							Image 3
      							</div>
    					</div>
  					</div>

  					<!-- Controls -->
  					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    				<span class="glyphicon glyphicon-chevron-left"></span>
  					</a>
  					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    				<span class="glyphicon glyphicon-chevron-right"></span>
  					</a>
				</div>
			</div>
		</div>
 
		<div class="row event-menu hidden-xs">			

			<div class="col-lg-2 col-md-2 col-sm-3 col-md-offset-1 event-menu-item">
				<a href="#" type="button" class="btn btn-default btn-lg col-md-2 button-menu">
					<span class="glyphicon glyphicon-calendar"></span>
			<p>KALENDÁR AKCIÍ</p>
				</a>
			</div>			
				
			<div class="col-lg-2 col-md-2 col-sm-2 event-menu-item">
				<a href="#" type="button" class="btn btn-default btn-lg col-md-2 button-menu">
					<span class="glyphicon glyphicon-bullhorn"></span>
					<p>AKTUALITY</p>
				</a>
			</div>

			<div class="col-lg-2 col-md-2 col-sm-2 event-menu-item">
				<a href="#" type="button" class="btn btn-default btn-lg col-md-2 button-menu">
					<span class="glyphicon glyphicon-picture"></span>
					<p>FESTIVAL CESTOU NECESTOU</p>
				</a>
			</div>
		
			<div class="col-lg-2 col-md-2 col-sm-2 event-menu-item">
				<a href="#" type="button" class="btn btn-default btn-lg col-md-2 button-menu">
					<span class="glyphicon glyphicon-facetime-video"></span>
					<p>PREDNÁŠKY</p>
				</a>
			</div>
		
			<div class="col-lg-2 col-md-2 col-sm-3 event-menu-item">
				<a href="#" type="button" class="btn btn-default btn-lg col-md-2 button-menu">
					<span class="glyphicon glyphicon-user"></span>
					<p>PREDNÁŠAJÚCI</p>
				</a>
			</div>

		</div>

	</div>
	<!-- End wrapper head panel and slide -->

	<!-- Wrapper conntent -->
	<div class="container">
		<div class="row">
			<div class="col-md-12 wrapper-content">
				<div class="row">
		
					<div class="col-md-5 col-md-offset-1 content-item-1">
						<h1>Galeria</h1>
					</div>
		
					<div class="col-md-5 content-item-1">
						<h1>Aktuality</h1>
					</div>
		
				</div>
			</div>
		</div>
	</div>
	<!-- End wrapper conntent -->

	<!-- Wrapper footer-panel and copyright -->
	<div class="container">		
		<div class="row footer-panel">		
			<div class="col-md-2 col-md-offset-1 footer-square">
				<p>NAVIÁCIA</p>
			</div>
		
			<div class="col-md-2 footer-square">
				<p>ARCHÍV</p>
			</div>
		
			<div class="col-md-4 footer-square">
				<p>CESTOU NECESTOU</p>
			</div>
		
			<div class="col-md-2 footer-square">
				<p>KONTAKT</p>
			</div>		
		</div>
		
		<div class="row footer-copy">
			<div class="col-md-10 col-md-offset-1 footer">
				<p class="copy">Copyright &copy 2014</p>
			</div>
		</div>
	</div>
	<!-- End wrapper footer-panel and copyright -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>