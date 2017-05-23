<!DOCTYPE html>
<html>
<head>
	<title>Cari Buku</title>
	<link href="web/css/bootstrap.min.css" rel="stylesheet">
	<link href="web/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
  <div class="row">
    <div class="col-md-12">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Perpustakaan</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
         
            <form class="navbar-form navbar-left" method="GET" action="">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" name="q">
              </div>
              <button type="submit" class="btn btn-default">Cari</button>
            </form>
        
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </div>

    <?php 

    require_once "main.php";

    $main = new Main();

    if (isset($_GET['q'])) {
      // echo $_GET['q'];
      // echo $main->show($_GET['q']);
    	$books = $main->show($_GET['q']);
    }else{
    	$books = $main->index();
    }

    ?>

    <div class="col-md-12">
    	<?php while($book = mysqli_fetch_assoc($books)) { ?>
    	  <div class="col-md-2">
    	    <div class="thumbnail">
    	      <img src="http://lorempixel.com/150/150/">
    	      <div class="caption">
    	        <h3><?php echo $book['judul']; ?></h3>
    	        <p><?php echo $book['penerbit']; ?></p>
    	        <p><a href="#" class="btn btn-success" role="button">Detail</a></p>
    	      </div>
    	    </div>
    	  </div>
    	<?php } ?>
    </div>
  </div>
</div>
</body>
</html>