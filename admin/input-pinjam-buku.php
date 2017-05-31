<?php include_once "layouts/header.php"; ?>
                                        
                <section class="content">

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel">
                                <header class="panel-heading">
                                    <b>Data Buku</b>

                                </header>
                                <!-- <div class="box-header"> -->
                                    <!-- <h3 class="box-title">Responsive Hover Table</h3> -->

                                <!-- </div> -->
                                <div class="panel-body table-responsive">
                                    <div class="box-tools m-b-15">
                                        <form action="buku.php" method="POST">
                                            <div class="input-group">
                                            <input type='text' class="form-control input-sm pull-right" style="width: 150px;"  name='qcari' placeholder='Cari berdasarkan Judul' required /> 
                                                <div class="input-group-btn">
                                                    <button class="btn btn-sm btn-default" type="submit"><i class="fa fa-search"></i></button>
                                                </div>
                                            </div>
                                        </form>    
                                    </div>
                                    <?php
                                        $query1="select * from data_buku";
                                        
                                        if(isset($_POST['qcari'])){
                                           $qcari=$_POST['qcari'];
                                           $query1="SELECT * FROM  data_buku 
                                           where judul like '%$qcari%'
                                           or pengarang like '%$qcari%'  ";
                                        }
                                        $tampil=mysqli_query($conn, $query1) or die(mysql_error());
                                    ?>
                                    <table id="example" class="table table-hover table-bordered">
                                      <thead>
                                          <tr>
                                            <th><center># </center></th>
                                            <th><center>Photo </center></th>
                                            <th><center>Judul </center></th>
                                            <th><center>Pengarang </center></th>
                                            <th><center>Tahun Terbit </center></th>
                                            <th><center>Penerbit </center></th>
                                            <th><center>Jumlah </center></th>
                                            <th><center>Aksi</center></th>
                                          </tr>
                                      </thead>
                                     <?php while($data=mysqli_fetch_array($tampil))
                                    { ?>
                                    <tbody>
                                        <tr>
                                        <td><?php echo $data['id']; ?></td>
                                        <td><img src="<?php echo 'gambar_buku/'.$data['photo']; ?>" width=200></td>
                                        <td><?php echo $data['judul']; ?></td>
                                        <td><?php echo $data['pengarang']; ?></td>
                                        <td><?php echo $data['th_terbit'];?></td>
                                        <td><?php echo $data['penerbit'];?></td>
                                        <td><?php echo $data['jumlah_buku'];?></td>
                                        <td><a href="form-pinjam-buku.php?id_buku=<?php echo $data['id']; ?>" class="btn btn-success"><span class="fa fa-trash"></span>Pinjam</a></td>
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
                                 <a href="buku.php" class="btn btn-sm btn-info">Refresh Buku <i class="fa fa-refresh"></i></a> <a href="404.php" class="btn btn-sm btn-warning">Tambah Buku <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
              <!-- row end -->
                </section><!-- /.content -->
       <?php include_once "layouts/footer.php"; ?>