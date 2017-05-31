<?php 
include_once "layouts/header.php"; 
require_once "../conn.php";

?>
                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel">
                                <header class="panel-heading">
                                    <b>Pinjam Buku</b>

                                </header>
                                <!-- <div class="box-header"> -->
                                    <!-- <h3 class="box-title">Responsive Hover Table</h3> -->

                                <!-- </div> -->
                                <div class="panel-body">
                      <form class="form-horizontal style-form" style="margin-top: 20px;" action="insert-pinjam-buku.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">No Induk Peminjam</label>
                              <div class="col-sm-8">
                                  <input name="no_induk" type="text" id="no_induk" class="form-control" placeholder="Ex : 00123" required />
                                  <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                              </div>
                              <input type="hidden" name="id_buku" value="<?php echo @$_GET['id_buku']; ?>">
                          </div>
                          <div class="form-group">
                               <div class="col-sm-8 col-md-offset-2">
                                <?php 
                                $id = $_GET['id_buku'];
                                $query = mysqli_query($conn, "SELECT * FROM data_buku WHERE id=$id") or die(mysqli_error($conn));
                                $data = mysqli_fetch_assoc($query);
                                ?>
                                <input type="number" name="jumlah" class="form-control" placeholder="maximum: <?php echo $data['jumlah_buku']; ?>">
                                <img src="<?php echo "gambar_buku/".$data['photo']; ?>" width=200>
                              </div>
                          </div>
                          <div class="form-group">
                              
                              <div class="col-sm-8 col-md-offset-2">
                              <label><strong>Judul Buku</strong></label> :
                                <?php echo $data['judul']; ?>
                              </div>
                              
                              <div class="col-sm-8 col-md-offset-2">
                              <label><strong>ID Buku</strong></label> :
                                <?php echo $data['id']; ?>
                              </div>
                              
                              <div class="col-sm-8 col-md-offset-2">
                              <label><strong>Tanggal Pinjam</strong></label> :
                                <?php echo Date("d-M-y"); ?>
                              </div>

                          </div>
                          <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-8">
                                  <input type="submit" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
	                              <a href="input-anggota.php" class="btn btn-sm btn-danger">Batal </a>
                              </div>
                          </div>
                          <div style="margin-top: 20px;"></div>
                      </form>
                                </div>
                            </div><!-- /.box -->
                        </div>
                    </div>
              <!-- row end -->
                </section><!-- /.content -->
       
       <?php include_once "layouts/footer.php"; ?>