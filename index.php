<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Perpustakaan UIN Malang</title>
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,400italic,600,300italic,300|Oswald:400,300,700' rel='stylesheet' type='text/css'>
		<!-- Bootstrap -->
		<link href="web/css/bootstrap.min.css" rel="stylesheet">
		<link href="web/css/font-awesome.min.css" rel="stylesheet">


		<link href="web/css/owl.carousel.css" rel="stylesheet">
		<link href="web/css/owl.theme.css" rel="stylesheet">
		<link href="web/css/owl.transitions.css" rel="stylesheet">

		<link href="web/css/style.css" rel="stylesheet">




		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="web/js/html5shiv.min.js"></script>
		<script src="web/js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body data-spy="scroll" data-target=".main-nav">

		<header class="st-navbar">
			<nav class="navbar navbar-default navbar-fixed-top clearfix" role="navigation">
				<div class="container"><!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sept-main-nav">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"><span class="fa fa-book"></span> Perpustakaan</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse main-nav" id="sept-main-nav">
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="#home">Home</a></li>
							<li><a href="#search">Search Book</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#contact">Contact Us</a></li>
							<li><a href="/login.php">Login</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
		</header>
		
		<section class="home" id="home" data-stellar-background-ratio="0.4">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="st-home-unit">
							<div class="hero-txt">
								<p class="hero-work">Perpustakaan UIN Malang</p>
								<h2 class="hero-title">Menulislah maka kamu akan hidup selamanya</h2>
								<!-- <p class="hero-sub-title">We Provide Hight Quality Bootstrap Template</p> -->
								<!-- <a href="#" class="btn btn-default btn-lg left-btn">Purchase Now</a> -->
								<a href="#" class="btn btn-main btn-lg">Find Out More</a>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="mouse-icon"><div class="wheel"></div></div>
		</section>

		
		<section class="about" id="search">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title st-center">
							<h3>Cari Buku</h3>
						</div>
						<div class="row mb90">
							<form action="/cari.php" method="GET">
								<div class="col-md-12 input-group">
									<input type="text" name="q" placeholder="Cari Buku" class="form-control" aria-describedby="search">
									<span class="input-group-addon"><i class="fa fa-search"></i></span>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="about" id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title st-center">
							<h3>Selamat Datang di Perpustakaan UIN Malang</h3>
							<p>Kumpulan buku terbaik uin malang</p>
						</div>
						<div class="row mb90">
							<div class="col-md-6">
								<p>Texit l, habere se indocti magnosque culpa gravioribus discedere eas indignae diogenem, praetermissum effugiendorum vult dicent, periculum dolere putat. Iucunditatem quid turbulenta patre eae depravatum talem elaborare plerisque repellere, o potiendi tuo aliter, militaris sint tranquillat liberalitati. Locus delicata divelli intemperantes audeam maximisque sitne pulcherrimum aegritudines studium. Habent inveniri fidelissimae aequi andriam laudabilis. Libido censet assiduitas quae probantur tantalo exquisitaque erunt laudatur optari. Late suapte veterum enim qui magna securi eaque proficiscuntur.</p>
							</div>
							<div class="col-md-6">
								<img src="web/photos/about.jpg" alt="" class="img-responsive">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>	

		<section class="contact" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title st-center">
							<h3>Hubungi Kami</h3>
							<p>Info Lebih Lanjut</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<form class="contact-form" role="form">
							<input type="text" class="form-control" id="fname" name="fname" placeholder="Your Full Name">
							<input type="email" class="form-control" id="email" name="email" placeholder="Your E-mail">
							<input type="text" class="form-control" id="subj" name="subj" placeholder="Your Subject">
							<textarea id="mssg" name="mssg" placeholder="Your Message" class="form-control" rows="10"></textarea>
							<button class="btn btn-main btn-lg" type="submit" id="send" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Sending..."><i class="fa fa-paper-plane "></i> Send</button>
						</form>
						<div id="result-message" role="alert"></div>
					</div>
					<div class="col-md-6">
						<p>Homines praetore aperiam aegritudine turpe quietus, amorem errore meo horreat triario quantus rectas tollitur. Infimum audiebamus saluto disciplina praetermittenda, aspernatur vocent firmitatem contenta eademque ibidem quales efficiat. Oblivione democriti, philosophorum philosopho, ordiamur sapiens iudex cyrenaicos similia, divitiarum panaetium. Tradere praetulerit, declarant scripserit doleamus iisque iudicabit aegritudo individua tractatas qua modice. Difficilius loqueretur improbe aetatis consectetur solis velint, grata quiddam partus occulta delectari maior, theseo eveniunt, turpius nesciunt amicitias constantia seque, utraque, statu genus scriptorem fugit fuissent duxit, compluribus primos scaevolam.</p>
						<address>
							<strong>Twitter, Inc.</strong><br>
							795 Folsom Ave, Suite 600<br>
							San Francisco, CA 94107<br>
							<abbr title="Phone">P:</abbr> (123) 456-7890
						</address>
					</div>
				</div>
			</div>
		</section>

		<footer class="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						&copy; <a href="https://www.cantothemes.com">CantoThemes</a> 2015.
						<!-- Don't Remove/Edit this. If you remove this you don't have permission to use this template. -->
						Designed by <a href="https://www.cantothemes.com">CantoThemes</a>
						<!-- So Please don't remove this -->
					</div>
				</div>
			</div>
		</footer>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="web/js/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="web/js/bootstrap.min.js"></script>
		<script src="web/js/jquery.easing.min.js"></script>
		<script src="web/js/jquery.stellar.js"></script>
		<script src="web/js/jquery.appear.js"></script>
		<script src="web/js/jquery.nicescroll.min.js"></script>
		<script src="web/js/jquery.countTo.js"></script>
		<script src="web/js/jquery.shuffle.modernizr.js"></script>
		<script src="web/js/jquery.shuffle.js"></script>
		<script src="web/js/owl.carousel.js"></script>
		<script src="web/js/jquery.ajaxchimp.min.js"></script>
		<script src="web/js/script.js"></script>
	</body>
</html>