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

    <?php 
    require_once "layout/header.php";
    require_once "main.php";
    $main = new Main();
    if (isset($_GET['q'])) {
    	$books = $main->show($_GET['q']);
    }else{
    	$books = $main->index();
    }
    ?>

    <div class="col-md-12">
    	<?php while($book = mysqli_fetch_assoc($books)) { ?>
    	  <div class="col-md-2">
    	    <div class="thumbnail">
    	      <img src="<?php echo "admin/gambar_buku/".$book['photo']; ?>">
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