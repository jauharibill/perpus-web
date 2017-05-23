<?php include_once "layouts/header.php"; ?>

                <section class="content">

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel">
                                <header class="panel-heading">
                                    <b>Detail Admin</b>

                                </header>
                                <!-- <div class="box-header"> -->
                                    <!-- <h3 class="box-title">Responsive Hover Table</h3> -->
                    <?php
                    $query = mysqli_query($conn, "SELECT * FROM admin WHERE user_id='$_GET[kd]'");
                    $data  = mysqli_fetch_array($query);
                    ?>
                                <!-- </div> -->
                                <div class="panel-body">
                      <table id="example" class="table table-hover table-bordered">
                    <tr>
                    <td>User ID</td>
                    <td><?php echo $data['user_id']; ?></td>
                    <td rowspan="9"><div class="pull-right image">
                            <img src="<?php echo $data['gambar']; ?>" class="img-rounded" height="300" width="250" alt="User Image" style="border: 3px solid #333333;" />
                        </div></td>
                    </tr>
                    <tr>
                    <td width="250">Username</td>
                    <td width="550"><?php echo $data['username']; ?></td>
                    </tr>
                    <tr>
                    <td>Password</td>
                    <td><?php echo $data['password']; ?></td>
                    </tr>
                    <tr>
                    <td>Fullname</td>
                    <td><?php echo $data['fullname']; ?></td>
                    </tr>
                   </table>
                  <!-- </div>-->
                  <?php// $tampil=mysqli_query($conn, "select * from karyawan order by nip desc");
                        //$user=mysqli_num_rows($tampil);
                    ?>
                   <!-- <center><h4>Jumlah Karyawan : <?php //echo "$user"; ?> Orang </h4> </center> -->
                <div class="text-right">
                <a href="admin.php" class="btn btn-sm btn-warning"> Kembali <i class="fa fa-arrow-circle-right"></i></a>
                </div>  
                                </div>
                            </div><!-- /.box -->
                        </div>
                    </div>
              <!-- row end -->
                </section><!-- /.content -->
                
            <?php include_once "layouts/footer.php"; ?>