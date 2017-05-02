


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
            <div class="col-xs-4">
              <a href="<?php echo site_url ('Home/pengujian')?>"><button type="button" class="btn btn-block btn-primary">Rangking Kost Keseluruhan</button></a>
              </div>
              <div class="col-xs-4">
              <a href="<?php echo site_url ('Home/rangking_cowok2')?>"><button type="button" class="btn btn-block btn-primary">Rangking Kost Cowok</button></a>
              </div>
              <div class="col-xs-4">
              <a href="<?php echo site_url ('Home/rangking_cewek2')?>"><button type="button" class="btn btn-block btn-primary">Rangking Kost Cewek</button></a>
            </div>
              <center><h3>Perangkingan Kost Keseluruhan</h3></center>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Ranking</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Nilai Prefensi</th>
                  <th>Jenis Kelamin </th>
                </tr>
                </thead>
                <tbody>
               <?php $no=1; foreach($data as $d){ ?>
                <tr>
                  <td><?php echo $no++;?></td>
                  <td><?php echo $d['nama']; ?></td>
                  <td><?php echo $d['alamat']; ?></td>
                  <td><?php echo $d['nilai_preferensi']; ?></td>
                  <td><?php echo $d['jenis_kelamin']; ?></td>
                </tr>
                <?php }
                ?>
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

