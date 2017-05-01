


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
              <a href="<?php echo site_url ('Home/perhitungan')?>"><button type="button" class="btn btn-block btn-primary">Perhitungan AHP</button></a>
              </div>
              <div class="col-xs-6">
              <a href="<?php echo site_url ('Home/perhitungan_SAW')?>"><button type="button" class="btn btn-block btn-primary">Perhitungan SAW</button></a>
            </div>
          </br>
              <center><h1>Perhitungan SAW</h1></center>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Nama</th>
                  <th>Jarak kos ke UB</th>
                  <th>Jarak kos ke makanan</th>
                  <th>Jarak kos ke jalan utama</th>
                  <th>Fasilitas</th>
                  <th>Kenyamanan</th>
                  <th>Keamanan</th>
                  <th>Harga</th>
                  <th>Nilai Prefensi</th>
                </tr>
                </thead>
                <tbody>
                 <?php $no=1;
                  $max1=$this->M_kriteria->getK1Max(); 
                  $max2=$this->M_kriteria->getK2Max();
                  $max3=$this->M_kriteria->getK3Max();
                  $max4=$this->M_kriteria->getK4Max();
                  $max5=$this->M_kriteria->getK5Max();
                  $max6=$this->M_kriteria->getK6Max();
                  $max7=$this->M_kriteria->getK7Max();
                  //print_r($matriks_bobot[0]);
                  //echo $max4;
                  ?>
                 <?php $no=1;
                 $matriks = array();
                 $nama_orang = array();
                  foreach($kriteria as $d){
                  $a = array(round($d['kos_ub']/$max1,3),
                    round($d['kos_makanan']/$max2,3),
                    round($d['kos_jalan']/$max3,3),
                    round($d['fasilitas']/$max4,3),
                    round($d['kenyamanan']/$max5,3),
                    round($d['keamanan']/$max6,3),
                    round($d['harga']/$max7,3));
                  array_push($matriks, $a);
                  $b = $d['nama'];
                  array_push($nama_orang, $b);
                  //print_r($matriks);
                }
                $nilai_preferensi = array();
                $bobot_prioritas1 = implode(",",$bobot_prioritas[0]);
                //echo $bobot_prioritas1;
                $matriks_bobot = explode(",", $bobot_prioritas1);
                //print_r($matriks_bobot);
                  for($i=0; $i<count($matriks); $i++){
                    $jumlah = 0;
                    $eigen = 0;
                      for($j=0; $j<sizeof($matriks[0]); $j++){
                         $jumlah += ($matriks[$i][$j]*$matriks_bobot[$j]);
                         //print $matriks[$i][$j]."*".$matriks_bobot[$j]." | ";
                      } 
                 //     $eigen=$jumlah/$matriks_bobot[$i];
                 //     $total_eigen+=$eigen;
                      //print "JUMLAH : ".$jumlah;
                      //print "<br>";

                      array_push($nilai_preferensi, $jumlah);
                 //     print "JUMLAH EIGEN : ".$eigen;
                  }
                  $urutan = 0;
                foreach($kriteria as $d){
                   ?>
                <tr>
                  <td><?php echo $no++;?></td>
                  <td><?php echo $d['nama']; ?></td>
                  <td><?php echo round($d['kos_ub']/$max1,3); ?></td>
                  <td><?php echo round($d['kos_makanan']/$max2,3); ?></td>
                  <td><?php echo round($d['kos_jalan']/$max3,3); ?></td>
                  <td><?php echo round($d['fasilitas']/$max4,3); ?></td>
                  <td><?php echo round($d['kenyamanan']/$max5,3); ?></td>
                  <td><?php echo round($d['keamanan']/$max6,3); ?></td>
                  <td><?php echo round($d['harga']/$max7,3); ?></td>
                  <td><?php echo $nilai_preferensi[$urutan++];?></td>
                </tr>
                <?php }

                $nilai_preferensi1 = implode(",", $nilai_preferensi);
                $nama_orang1 = implode(",", $nama_orang);
                ?>
                </tbody>
              </table>
              <form action="<?php echo site_url ('Home/simpanPreferensi')?>" method="post">
                <input type="hidden" name="nama" value="<?php echo $nama_orang1;?>">
                <input type="hidden" name="nilai_preferensi" value="<?php echo $nilai_preferensi1;?>">
                <button type="submit" class="btn btn-block btn-primary">Perangkingan</button>
              </form>
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

