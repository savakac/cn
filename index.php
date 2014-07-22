<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Testing bootstrap</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> <!--Bootstrap-->
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 menu-bar">

				<a class="navbar-brand" href="#">Cestou necestou</a>

				<form class="navbar-form navbar-right" role="search" style="padding-right: 20px; padding-left: 20px">
					<div class="form-group has-success has-feedback">
						<input type="text" class="form-control" placeholder="Search">
						<span class="glyphicon glyphicon-search form-control-feedback"></span>
					</div>
				</form>
		
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12 slide">
				
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
 					<ol class="carousel-indicators">
    					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
    					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
  					</ol>

  					<!-- Wrapper for slides -->
  					<div class="carousel-inner">
    					<div class="item active">
      						<img src="images/image1.jpg">
      							<div class="carousel-caption">
        							Image 1
      							</div>
    					</div>
    					<div class="item">
      						<img src="images/image2.jpg">
      							<div class="carousel-caption">
        							Image 2
      							</div>
    					</div>
    					<div class="item">
      						<img src="images/image3.jpg">
      							<div class="carousel-caption">
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
	
		<div class="row event-menu">

			<div class="col-xs-1">

			</div>
			
			<div class="col-xs-2 event-menu-item">
				<button type="button" class="btn btn-default btn-lg col-md-2 button-size">
					<span class="glyphicon glyphicon-calendar"></span>
					<p>KALENDÁR AKCIÍ</p>
				</button>
			</div>
			
			<div class="col-xs-2 event-menu-item">
				<button type="button" class="btn btn-default btn-lg col-md-2 button-size">
					<span class="glyphicon glyphicon-bullhorn"></span>
					<p>AKTUALITY</p>
				</button>
			</div>
			
			<div class="col-xs-2 event-menu-item">
				<button type="button" class="btn btn-default btn-lg col-md-2 button-size">
					<span class="glyphicon glyphicon-picture"></span>
					<p>FESTIVAL CESTOU NECESTOU</p>
				</button>
			</div>
			
			<div class="col-xs-2 event-menu-item">
				<button type="button" class="btn btn-default btn-lg col-md-2 button-size">
					<span class="glyphicon glyphicon-facetime-video"></span>
					<p>PREDNÁŠKY</p>
				</button>
			</div>
			
			<div class="col-xs-2 event-menu-item">
				<button type="button" class="btn btn-default btn-lg col-md-2 button-size">
					<span class="glyphicon glyphicon-user"></span>
					<p>PREDNÁŠAJÚCI</p>
				</button>
			</div>
			
			<div class="col-xs-1">

			</div>

		</div>

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

		<div class="row footer-panel">
			<div class="col-md-12">

			</div>
		</div>

		<div class="row footer">
			<div class="col-md-8 col-md-offset-2">
				<p class="copy">Copyright &copy 2014</p>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> <!--JQuery-->
	<script src="js/bootstrap.min.js"></script> <!--Bootstrap script-->
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>