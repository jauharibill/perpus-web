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
                                        $query1="select * from pinjam";
                                        
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
                                            <th><center>Peminjam </center></th>
                                            <th><center>Jumlah </center></th>
                                            <th><center>Batas Pinjam </center></th>
                                            <th><center>Status </center></th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                     <?php while($data=mysqli_fetch_array($tampil))
                                    { 
                                        $id_buku = $data['id_buku'];
                                        $buku = mysqli_query($conn, "SELECT * FROM data_buku WHERE id=$id_buku");
                                        $no_induk = $data['no_induk_anggota'];
                                        $anggota = mysqli_query($conn, "SELECT * FROM data_anggota WHERE no_induk=$no_induk");
                                        $data_buku = mysqli_fetch_assoc($buku);
                                        $data_anggota = mysqli_fetch_assoc($anggota);
                                        ?>
                                    
                                        <tr>
                                        <td><?php echo $data_buku['id']; ?></td>
                                        <td><img src="<?php echo 'gambar_buku/'.$data_buku['photo']; ?>" width=200></td>
                                        <td><?php echo $data_buku['judul']; ?></td>
                                        <td><?php echo $data_buku['pengarang']; ?></td>
                                        <td><?php echo $data_anggota['nama']; ?></td>
                                        <td><?php echo $data['jumlah']; ?></td>
                                        <td><?php echo $data['tanggal_pinjam']; ?></td>
                                        <td><button class="btn btn-danger"><?php echo "belum di kembalikan" ?></button></td>
                                        </tr>
                                    <?php   
                                  } 
                                  ?>
                                   </tbody>
                                </table>
                   
                                  <?php $tampil=mysqli_query($conn, "select * from pinjam order by id");
                                  $buku=mysqli_num_rows($tampil);
                                    ?>

                                <center><h4>Jumlah Peminjam : <?php echo "$buku"; ?> orang </h4> </center>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
              <!-- row end -->
                </section><!-- /.content -->
       <?php include_once "layouts/footer.php"; ?>