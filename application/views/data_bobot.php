


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <center><h1 style="font-size:40px">
        PEMILIHAN KOST DISEKITAR UNIVERSITAS BRAWIJAYA MENGUNAKAN METODE AHP-SAW
      </h1>
    </section>

    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <div class="col-xs-6">
              <a href="<?php echo site_url ('Home/data_kriteria_dan_bobot')?>"><button type="button" class="btn btn-block btn-primary">Data Kriteria</button></a>
              </div>
              <div class="col-xs-6">
              <a href="<?php echo site_url ('Home/data_bobot')?>"><button type="button" class="btn btn-block btn-primary">Data Bobot</button></a>
            </div>
          </br>
              <center><h1>Data Bobot</h1></center>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kriteria</th>
                  <th>Jarak ke UB</th>
                  <th>Jarak ke makanan</th>
                  <th>Jarak kos ke jalan utama</th>
                  <th>Fasilitas</th>
                  <th>Kenyamanan</th>
                  <th>Keamanan</th>
                  <th>Harga</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $total_k1 =0;
                  $total_k2 =0;
                  $total_k3 =0;
                  $total_k3 =0;
                  $total_k4 =0;
                  $total_k5 =0;
                  $total_k6 =0;
                  $total_k7 =0;
                  $no=1;
                  foreach($data as $d){
                    ?>
                <tr>
                  <td><?php echo $d['nama_kriteria'];?></td>
                  <td><?php echo $d['k1'];?></td>
                  <td><?php echo $d['k2']; ?></td>
                  <td><?php echo $d['k3']; ?></td>
                  <td><?php echo $d['k4']; ?></td>
                  <td><?php echo $d['k5']; ?></td>
                  <td><?php echo $d['k6']; ?></td>
                  <td><?php echo $d['k7']; ?></td>
                </tr>
                <?php 
                $total_k1 +=$d['k1'];
                $total_k2 +=$d['k2'];
                $total_k3 +=$d['k3'];
                $total_k4 +=$d['k4'];
                $total_k5 +=$d['k5'];
                $total_k6 +=$d['k6'];
                $total_k7 +=$d['k7'];
                } ?>
                 <tr>
                  <td>Total</td>
                  <td><?php echo $total_k1;?></td>
                  <td><?php echo $total_k2; ?></td>
                  <td><?php echo $total_k3; ?></td>
                  <td><?php echo $total_k4; ?></td>
                  <td><?php echo $total_k5; ?></td>
                  <td><?php echo $total_k6; ?></td>
                  <td><?php echo $total_k7; ?></td>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

