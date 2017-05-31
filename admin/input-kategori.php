<?php include_once "layouts/header.php"; ?>
	
	<div class="content">
		<div class="row">
			<div class="col-xs-12">
				<form class="form" name="kategori" method="POST" action="insert-kategori.php">
					<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Name">
					</div>
					<div class="form-group">
						<button class="btn btn-primary">Submit</button>
					</div>
				</form>		
			</div>
		</div>
		
	</div>

<?php include_once "layouts/footer.php"; ?>