<?php 
    require_once "layouts/header.php";
?>
                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel">
                                <header class="panel-heading">
                                    <b>Laporan Buku</b> <span class="pull-right">Bulan <?php echo Date('M-Y'); ?></span>

                                </header>
                                <!-- <div class="box-header"> -->
                                    <!-- <h3 class="box-title">Responsive Hover Table</h3> -->

                                <!-- </div> -->
                                <div class="panel-body table-responsive">
                                    <?php
                                        $bulan = Date('m');
                                        $query1="select * from data_buku where month(tgl_input)=$bulan";
                                        $tampil=mysqli_query($conn, $query1) or die(mysql_error());
                                    ?>
                                    <table id="example" class="table table-hover table-bordered">
                                      <thead>
                                          <tr>
                                            <th><center>Judul </center></th>
                                            <th><center>Pengarang </center></th>
                                            <th><center>Tahun Terbit </center></th>
                                            <th><center>Penerbit </center></th>
                                            <th><center>Jumlah </center></th>
                                            <th><center>Lokasi </center></th>
                                          </tr>
                                      </thead>
                                     <?php while($data=mysqli_fetch_array($tampil))
                                    { ?>
                                    <tbody>
                                        <tr>
                                        <td><a href="404.php?hal=edit&kd=<?php echo $data['id'];?>"><span class="fa fa-book"></span> <?php echo $data['judul']; ?></a></td>
                                        <td><?php echo $data['pengarang']; ?></td>
                                        <td><?php echo $data['th_terbit'];?></td>
                                        <td><?php echo $data['penerbit'];?></td>
                                        <td><?php echo $data['jumlah_buku'];?></td>
                                        <td><?php echo $data['lokasi'];?></td>
                                    <?php   
                                  } 
                                  ?>
                                   </tbody>
                                </table>
                   
                                  <?php $tampil=mysqli_query($conn, "select * from data_buku order by id");
                                  $buku=mysqli_num_rows($tampil);
                                    ?>
                                <center><h4>Jumlah Buku : <?php echo "$buku"; ?> Pcs </h4> </center>
                                <div class="text-right" style="margin-top: 10px;">
                                     <a href="buku.php" class="btn btn-sm btn-info">Cetak <i class="fa fa-print"></i></a>
                                </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
              <!-- row end -->
                </section><!-- /.content -->

<?php 
    require_once "layouts/footer.php"; 
?> 