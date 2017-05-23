<?php include_once "layouts/header.php"; ?>
                <!-- Main content -->
                <section class="content">

                    <div class="row" style="margin-bottom:5px;">


                        <div class="col-md-3">
                            <div class="sm-st clearfix">
                                <span class="sm-st-icon st-red"><i class="fa fa-user"></i></span>
                                <div class="sm-st-info">
                                <?php $tampil=mysqli_query($conn, "select * from data_anggota order by id desc");
                        $total=mysqli_num_rows($tampil);
                    ?>
                                    <span><?php echo "$total"; ?></span>
                                    Total Anggota
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="sm-st clearfix">
                                <span class="sm-st-icon st-violet"><i class="fa fa-book"></i></span>
                                <div class="sm-st-info">
                                <?php $tampil=mysqli_query($conn, "select * from data_buku order by id desc");
                        $total1=mysqli_num_rows($tampil);
                    ?>
                                    <span><?php echo "$total1"; ?></span>
                                    Total Buku
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="sm-st clearfix">
                                <span class="sm-st-icon st-blue"><i class="fa fa-refresh fa-spin fa-1x"></i></span>
                                <div class="sm-st-info">
                                <?php $tampil=mysqli_query($conn, "select * from trans_pinjam order by id desc");
                        $total2=mysqli_num_rows($tampil);
                    ?>
                                    <span><?php echo "$total2"; ?></span>
                                    Total Peminjaman Buku
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="sm-st clearfix">
                                <span class="sm-st-icon st-green"><i class="fa fa-group"></i></span>
                                <div class="sm-st-info">
                                <?php $tampil=mysqli_query($conn, "select * from pengunjung order by id desc");
                        $total3=mysqli_num_rows($tampil);
                    ?>
                                    <span><?php echo "$total3"; ?></span>
                                    Total Pengunjung
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Main row -->
                    <div class="row">
                        <div class="col-md-7">
                          <section class="panel tasks-widget">
                            <header class="panel-heading">
                                Daftar Bacaan PerPusWeb
                            </header>
                            <div class="panel-body">
                              <div class="task-content">
                                  <ul class="task-list">
                                  <?php
                                  $tampil=mysqli_query($conn, "select * from data_buku order by id desc limit 7");
                                  while($data6=mysqli_fetch_array($tampil)){
                                  ?>
                                      <li>
                                          <div class="task-checkbox">
                                              <!-- <input type="checkbox" class="list-child" value=""  /> -->
                                              <input type="checkbox" class="flat-grey list-child"/>
                                              <!-- <input type="checkbox" class="square-grey"/> -->
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp"><?php echo $data6['judul']; ?></span>
                                              <span class="label label-primary"><?php echo $data6['tgl_input']; ?></span>
                                              <div class="pull-right hidden-phone">
                                                  <button class="btn btn-info btn-xs"><i class="fa fa-check"></i></button>
                                                  <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
                                                  <button class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button>
                                              </div>
                                          </div>
                                      </li>     
                                    <?php } ?>
                                  </ul>
                              </div>

                              <div class=" add-task-row">
                                  <a class="btn btn-warning btn-sm pull-left" href="buku.php">Lihat Buku Bacaan</a>
                                  <!--<a class="btn btn-default btn-sm pull-right" href="#">See All Tasks</a>-->
                              </div>
                          </div>
                      </section>
                  </div>
                        <!--earning graph start-->

                        <!-- <div class="col-md-8">
                            <section class="panel">
                                <header class="panel-heading">
                                    Grafik Peminjaman Buku
                                </header>
                                <div class="panel-body">
                                    <canvas id="linechart" width="600" height="330"></canvas>
                                </div>
                            </section>
                        </div> -->
                        <!--earning graph end-->
                                    <div class="col-lg-4">

                                        <!--chat start-->
                                        <section class="panel">
                                            <header class="panel-heading">
                                                Pemberitahuan
                                            </header>
                                                <div class="panel-body" id="noti-box">
                                                <?php
                                                $tampil=mysqli_query($conn, "select * from data_anggota order by id desc limit 1");
                                                while($data2=mysqli_fetch_array($tampil)){
                                                ?>
                                                    <div class="alert alert-block alert-danger">
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong><?php echo $data2['nama'];?></strong>, Telah terdaftar menjadi anggota perpustakaan.
                                                    </div>
                                                    <?php } ?>
                                                    
                                                <?php
                                                $tampil=mysqli_query($conn, "select * from admin order by user_id desc limit 1");
                                                while($data3=mysqli_fetch_array($tampil)){
                                                ?>
                                                    <div class="alert alert-success">
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong><?php echo $data3['fullname']; ?></strong>, Telah ditambahkan menjadi admin PerPusWeb yang baru. 
                                                    </div>
                                                <?php } ?>
                                                    
                                                <?php
                                                $tampil=mysqli_query($conn, "select * from data_buku order by id desc limit 1");
                                                while($data4=mysqli_fetch_array($tampil)){
                                                ?>
                                                    <div class="alert alert-info">
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong><?php echo $data4['judul']; ?></strong>, Buku bacaan baru yang ada di PerPusWeb.
                                                    </div>
                                                <?php } ?>
                                                   
                                                <?php
                                                $tampil=mysqli_query($conn, "select * from pengunjung order by id desc limit 1");
                                                while($data5=mysqli_fetch_array($tampil)){
                                                ?>   
                                                    <div class="alert alert-warning">
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong><?php echo $data5['nama']; ?> </strong> Pengunjung baru di PerPusWeb.
                                                    </div>
                                                <?php } ?>
                                                </div>
                                        </section>



                      </div>


                  </div>
                    
                    <div class="row">
                        <div class="col-md-5">
                            <div class="panel">
                                <header class="panel-heading">
                                    Daftar Anggota Baru
                                </header><?php
                        $tampil=mysqli_query($conn, "select * from data_anggota order by id desc limit 3");
                        while($data1=mysqli_fetch_array($tampil)){
                        ?>
                                <ul class="list-group teammates">
                                    <li class="list-group-item">
                                        <a href="anggota.php"><img src="<?php echo $data1['foto']; ?>" width="50" height="50" style="border: 3px solid #555555;"></a>
                                        <a href="anggota.php"><?php echo $data1['nama']; ?></a>
                                    </li>
                                </ul>
                               <?php } ?>
                                <div class="panel-footer bg-white">
                                    <!-- <span class="pull-right badge badge-info">32</span> -->
                                    <a href="anggota.php" class="btn btn-sm btn-info">Data Anggota <i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
              </div>
              <!-- row end -->
                </section><!-- /.content -->
       <?php include_once "layouts/footer.php"; ?>