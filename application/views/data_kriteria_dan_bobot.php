


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
              <center><h1>Data Kriteria</h1></center>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Jarak kos ke UB</th>
                  <th>Jarak kos ke makanan</th>
                  <th>Jarak kos ke jalan utama</th>
                  <th>Fasilitas</th>
                  <th>Kenyamanan</th>
                  <th>Keamanan</th>
                  <th>Harga</th>
                  <th>Jenis Kelamin</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach($data as $d){ ?>
                <tr>
                  <td><?php echo $no++;?></td>
                  <td><?php echo $d['nama']; ?></td>
                  <td><?php echo $d['alamat']; ?></td>
                  <td><?php echo $d['kos_ub']; ?></td>
                  <td><?php echo $d['kos_makanan']; ?></td>
                  <td><?php echo $d['kos_jalan']; ?></td>
                  <td><?php echo $d['fasilitas']; ?></td>
                  <td><?php echo $d['kenyamanan']; ?></td>
                  <td><?php echo $d['keamanan']; ?></td>
                  <td><?php echo $d['harga']; ?></td>
                  <td><?php echo $d['jenis_kelamin']; ?></td>
                </tr>
                <?php } ?>
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

