      <?php 
      include_once "layouts/header.php";
      include_once "../conn.php";
       ?>
                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel">
                                <header class="panel-heading">
                                    <b>Input buku</b>

                                </header>
                                <!-- <div class="box-header"> -->
                                    <!-- <h3 class="box-title">Responsive Hover Table</h3> -->

                                <!-- </div> -->
                                <div class="panel-body">
                      <form class="form-horizontal style-form" style="margin-top: 20px;" action="insert-buku.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Judul Buku</label>
                              <div class="col-sm-8">
                                  <input name="judul" type="text" id="judul" class="form-control" placeholder="Judul Buku" required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Photo Buku</label>
                              <div class="col-sm-8">
                                  <input name="photo" type="file" id="photo" class="form-control" placeholder="photo" required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Pengarang</label>
                              <div class="col-sm-8">
                                  <input name="pengarang" type="text" id="nama" class="form-control" placeholder="Pengarang" required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tahun Terbit</label>
                              <div class="col-sm-8">
                              <select id="tahun_terbit" name="th_terbit" class="form-control">
                                <?php for ($i=0; $i < 20; $i++) { 
                                  ?>
                                    <option value="<?php echo 2000+$i; ?>"><?php echo 2000+$i; ?></option>
                                  <?php
                                } ?>
                                </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Penerbit</label>
                              <div class="col-sm-8">
                                  <input name="penerbit" type="text" id="penerbit" class="form-control" placeholder="Penerbit" required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Kategori</label>
                              <div class="col-sm-8">
                                
                                  <select class="form-control" name="kategori"  id="kategori">
                                  <option> -- Pilih Kategori --</option>
                                  <?php
                                    $query = mysqli_query($conn, "SELECT * FROM kategori_buku");
                                    while($kategori = mysqli_fetch_assoc($query)) {
                                   ?> 
                                  <option value="<?php echo $kategori['id'] ?>"> <?php echo $kategori['name'] ?></option>
                                  <?php } ?>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jumlah Buku</label>
                              <div class="col-sm-8">
                                  <input name="jumlah_buku" class="form-control" id="jumlah_buku" type="text" placeholder="Jumlah Buku" required />
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