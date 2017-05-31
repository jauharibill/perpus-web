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
            <a class="navbar-brand" href="/">Perpustakaan</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
         
            <form class="navbar-form navbar-left" method="GET" action="">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" name="q" value="<?php echo @$_GET['q']; ?>">
              </div>
              <button type="submit" class="btn btn-default">Cari</button>
            </form>
        
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </div>