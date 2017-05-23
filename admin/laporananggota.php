<?php 
    require_once "layouts/header.php";
?>
                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel">
                                <header class="panel-heading">
                                    <b>Laporan Anggota</b> <span class="pull-right">Bulan <?php echo Date('M-Y'); ?></span>

                                </header>
                                <!-- <div class="box-header"> -->
                                    <!-- <h3 class="box-title">Responsive Hover Table</h3> -->

                                <!-- </div> -->
                                <div class="panel-body table-responsive">
                                    <?php
                                        $bulan = Date('m');
                                        $query1="select * from data_anggota where month(tgl_input)=$bulan";
                                        $tampil=mysqli_query($conn, $query1) or die(mysql_error());
                                    ?>
                                    <table id="example" class="table table-hover table-bordered">
                                      <thead>
                                          <tr>
                                            <th><center>Nomor Induk </center></th>
                                            <th><center>Nama </center></th>
                                            <th><center>Jenis Kelamin </center></th>
                                            <th><center>Kelas </center></th>
                                            <th><center>Tempat Lahir </center></th>
                                            <th><center>Alamat </center></th>
                                            <th><center>Tools</center></th>
                                          </tr>
                                      </thead>
                                         <?php while($data=mysqli_fetch_array($tampil))
                                        { ?>
                                        <tbody>
                                            <tr>
                                            <td><?php echo $data['no_induk']; ?></td>
                                            <td><a href="detail-anggota.php?hal=edit&kd=<?php echo $data['id'];?>"><span class="fa fa-user"></span> <?php echo $data['nama']; ?></a></td>
                                            <td><?php echo $data['gender'];?></td>
                                            <td><?php echo $data['status'];?></td>
                                            <td><?php echo $data['ttl'];?></td>
                                            <td><?php echo $data['alamat'];?></td>
                                            <td><center><div id="thanks"><a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit Anggota" href="edit-anggota.php?hal=edit&kd=<?php echo $data['id'];?>"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a onclick="return confirm ('Yakin hapus <?php echo $data['nama'];?>.?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus Anggota" href="hapus-anggota.php?hal=hapus&kd=<?php echo $data['id'];?>"><span class="glyphicon glyphicon-trash"></a></center>
                                            </td>
                                            </tr>
                                             <?php   
                                              } 
                                              ?>
                                           </tbody>
                                       </table>
                   
                                  <?php $tampil=mysqli_query($conn, "select * from data_buku order by id");
                                  $buku=mysqli_num_rows($tampil);
                                    ?>
                                <center><h4>Jumlah Anggota : <?php echo "$buku"; ?> Anggota </h4> </center>
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