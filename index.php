<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/logo.png">

	<title>Testing page</title>

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
			<div class="col-sm-12 wrapper-content">
				<div class="row">
		
					<div class="col-sm-5 col-sm-offset-1 content-item-1">
						
						<h1>NAJBLIŽŠIE AKCIE</h1>

						<div class="closest-action">
							<img src="images/akcie.png" alt="">
							<h2 class="closest-action-title">12.12. 2014, 13:00</br> BRATISLAVA, DK LUKY</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam bibendum leo vel mi malesuada, ac pharetra nunc congue.</p>
							<div class="col-xs-offset-10">
								<button type="button" class="btn btn-primary btn-lg">VIAC</button>
							</div>
						</div>

						<div class="closest-action">
							<img src="images/akcie.png" alt="">
							<h2 class="closest-action-title">12.12. 2014, 13:00</br> BRATISLAVA, DK LUKY</h2>
							<p>BLorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam bibendum leo vel mi malesuada, ac pharetra nunc congue.</p>
							<div class="col-xs-offset-10">
								<button type="button" class="btn btn-primary btn-lg">VIAC</button>
							</div>
						</div>

					</div>
		
					<div class="col-sm-5 content-item-1">
						<h1>NOVINKY</h1>

						<div class="new-informations">
							<button type="button" class="btn btn-primary btn-lg">1.</button>
							<h2 class="closest-action-title">Nadpis</h2>
							<p>Quisque lorem elit, porttitor eget turpis sit amet, suscipit consequat nunc. Nullam ut quam in mauris luctus commodo nec vitae nibh. Phasellus vel sollicitudin ipsum.</p>
						</div>
						<div class="new-informations">
							<button type="button" class="btn btn-primary btn-lg">2.</button>
							<h2 class="closest-action-title">Nadpis</h2>
							<p>Quisque lorem elit, porttitor eget turpis sit amet, suscipit consequat nunc. Nullam ut quam in mauris luctus commodo nec vitae nibh. Phasellus vel sollicitudin ipsum.</p>
						</div>
						<div class="new-informations">
							<button type="button" class="btn btn-primary btn-lg">3.</button>
							<h2 class="closest-action-title">Nadpis</h2>
							<p>Quisque lorem elit, porttitor eget turpis sit amet, suscipit consequat nunc. Nullam ut quam in mauris luctus commodo nec vitae nibh. Phasellus vel sollicitudin ipsum. </p>
						</div>
						<div class="new-informations">
							<button type="button" class="btn btn-primary btn-lg">4.</button>
							<h2 class="closest-action-title">Nadpis</h2>
							<p>Quisque lorem elit, porttitor eget turpis sit amet, suscipit consequat nunc. Nullam ut quam in mauris luctus commodo nec vitae nibh. Phasellus vel sollicitudin ipsum. </p>
						</div>

					</div>
		
				</div>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 banner">
				<p>Banner</p>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="row">

					<div class="col-sm-5 col-sm-offset-1 content-item-1">
						
						<h1>GALÉRIA</h1>

						<a href="#"><img class="gallery" src="images/akcie.png" alt=""></a>
						<a href="#"><img class="gallery" src="images/akcie.png" alt=""></a>
						<a href="#"><img class="gallery" src="images/akcie.png" alt=""></a>
						<a href="#"><img class="gallery" src="images/akcie.png" alt=""></a>
						<a href="#"><img class="gallery" src="images/akcie.png" alt=""></a>
						<a href="#"><img class="gallery" src="images/akcie.png" alt=""></a>
						<div class="col-xs-offset-8 col-md-offset-6 col-lg-offset-9">
							<button type="button" class="btn btn-primary btn-lg">VIAC</button>
						</div>

					</div>

					<div class="col-sm-5 content-item-1">
						<h1>BUĎ SÚČASŤOU</h1>

						<a href="#" title="Dobrovoľník"><img class="gallery" src="images/dobrovolnik-icon.png" alt=""></a>
						<a href="#" title="Účastník"><img class="gallery" src="images/ucastnik-icon.png" alt=""></a>
						<a href="#" title="Partner"><img class="gallery" src="images/partner-icon.png" alt=""></a>
						<a href="#" title="Prezentujúci"><img class="gallery" src="images/prezentujuci-icon.png" alt=""></a>
						<a href="#" title="Mám nápad"><img class="gallery" src="images/napad-icon.png" alt=""></a>
						<a href="#" title="Anketa"><img class="gallery" src="images/anketa-icon.png" alt=""></a>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>PARTNERY</h1>
			</div>
		</div>
	</div>
	<!-- End wrapper conntent -->

	<!-- Wrapper footer-panel and copyright -->
	<div class="container">		
		<div class="row footer-panel">		
			<div class="col-md-2 col-md-offset-1 footer-square">
				<p>NAVIGÁCIA</p>
				<ul class="navigation">
					<li><a href="#">KALENDÁR AKCIÍ</a></li>
					<li><a href="#">NOVINKY</a></li>
					<li><a href="#">FESTIVALY</a></li>
					<li><a href="#">PREZENTÁCIE</a></li>
					<li><a href="#">PREZENTUJÚCI</a></li>
					<li><a href="#">O NÁS</a></li>
					<li><a href="#">ARCHÍV</a></li>
				</ul>
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
				<p class="copy">COPYRIGHT &copy <?php echo date('Y'); ?> BY OZ CESTOU NECESTOU</p>
			</div>
		</div>
	</div>
	<!-- End wrapper footer-panel and copyright -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>