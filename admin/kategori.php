<?php include_once "layouts/header.php"; ?>
                                        
                <section class="content">

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel">
                                <header class="panel-heading">
                                    <b>Data Kategori</b>

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
                                        $query1="select * from kategori_buku";
                                        
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
                                            <th><center>ID </center></th>
                                            <th><center>Kategori </center></th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                     <?php 
                                     while($data=mysqli_fetch_array($tampil)){ 
                                     ?>
                                        <tr>
                                        <td><?php echo $data['id']; ?></td>
                                        <td><?php echo $data['name']; ?></td>
                                        </tr>
                                        <?php   
                                          } 
                                        ?>
                                      </tbody>
                                    </table>
                   
                                  <?php 
                                  $tampil   =mysqli_query($conn, "select * from kategori_buku order by id");
                                  $kategori =mysqli_num_rows($tampil);
                                  ?>

                                <center><h4>Jumlah Kategori : <?php echo $kategori; ?></h4> </center>
                  
                                <div class="text-right" style="margin-top: 10px;">
                                 <a href="buku.php" class="btn btn-sm btn-info">Refresh Kategori <i class="fa fa-refresh"></i></a> <a href="input-kategori.php" class="btn btn-sm btn-warning">Tambah Kategori <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
              <!-- row end -->
                </section><!-- /.content -->
       <?php include_once "layouts/footer.php"; ?>