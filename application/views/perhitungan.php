


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
              <center><h1>Perhitungan AHP</h1></center>
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
                  <th>Keamanan</th>
                  <th>Kenyamanan</th>
                  <th>Fasilitas</th>
                  <th>Harga</th>
                  <th>Total</th>
                  <th>Bobot Prioritas</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $matriks_bobot = array();
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
                    $total_k1 +=$d['k1'];
                    $total_k2 +=$d['k2'];
                    $total_k3 +=$d['k3'];
                    $total_k4 +=$d['k4'];
                    $total_k5 +=$d['k5'];
                    $total_k6 +=$d['k6'];
                    $total_k7 +=$d['k7'];
                    }
                    ?>
                  <?php 
                  $jumlah_k1 =0;
                  $jumlah_k2 =0;
                  $jumlah_k3 =0;
                  $jumlah_k3 =0;
                  $jumlah_k4 =0;
                  $jumlah_k5 =0;
                  $jumlah_k6 =0;
                  $jumlah_k7 =0;
                  $no=1;


                  $matriks = array();
                  

                  foreach($data as $d){
                  $jumlah_k1=round($d['k1']/$total_k1,3)+
                  round($d['k2']/$total_k2,3)+
                  round($d['k3']/$total_k3,3)+
                  round($d['k4']/$total_k4,3)+
                  round($d['k5']/$total_k5,3)+
                  round($d['k6']/$total_k6,3)+
                  round($d['k7']/$total_k7,3);
                   $hasil = array();
                  // $a = array();
                  $a = array($d['k1'],$d['k2'],$d['k3'],$d['k4'],$d['k5'],$d['k6'],$d['k7']);
                  // Matriks B
                  $b = round($jumlah_k1/7,3);
                  array_push($matriks, $a);
                  array_push($matriks_bobot, $b);
                  //print_r($matriks);
                    ?>
                  <tr>
                  <td><?php echo $d['nama_kriteria'];?></td>
                  <td><?php echo round($d['k1']/$total_k1,3);?></td>
                  <td><?php echo round($d['k2']/$total_k2,3); ?></td>
                  <td><?php echo round($d['k3']/$total_k3,3); ?></td>
                  <td><?php echo round($d['k4']/$total_k4,3); ?></td>
                  <td><?php echo round($d['k5']/$total_k5,3); ?></td>
                  <td><?php echo round($d['k6']/$total_k6,3); ?></td>
                  <td><?php echo round($d['k7']/$total_k7,3); ?></td>
                  <td><?php echo round($jumlah_k1,3); ?></td>
                  <td><?php echo round($jumlah_k1/7,3); ?></td>
                </tr>                
                <?php
                 
                }


                //print_r($matriks_bobot);
                // print "<br>";
                $cr = 0;
                $ci = 0;
                $rata_eigen = 0;
                $total_eigen = 0;
                for($i=0; $i<7; $i++){
                  $jumlah = 0;
                  $eigen =0;
                    for($j=0; $j<sizeof($matriks[0]); $j++){
                      $jumlah+=($matriks[$i][$j]*$matriks_bobot[$j]);
                       //print $matriks[$i][$j] . " * ". $matriks_bobot[$j] ." | ";
                    } 
                    $eigen=$jumlah/$matriks_bobot[$i];
                    $total_eigen+=$eigen;
                    // print "JUMLAH : ".$jumlah." EIGEN : ".$eigen;
                    // print "<br>";
                    //print "JUMLAH EIGEN : ".$eigen;
                }
                // print "<br>";
                // print $total_eigen;
                $rata_eigen = $total_eigen/7;
                // print "<br>";
                $ci = ($rata_eigen-7)/(7-1);
                $cr = $ci/1.32;
                // print "<br>";
                // print $ci;
                // print "<br>";
                // print $cr;
                // print "<tr>
                //   <td colspan='9' align='right'>CI</td><td>";
                //   print round($ci,3);
                //   print "</td></tr>";
                // print "<tr>
                //   <td colspan='9' align='right'>CR</td><td>";
                //   print round($cr,3);
                //   print "</td></tr>";
                // print "<tr>
                //   <td colspan='9' align='right'>Konsisten / Tidak Konsisten </td><td>";
                //   if ($cr <= 0.1){
                //   print "Konsisten";
                //   }else print " Tidak Konsisten";
                //   print "</td></tr>";

                  ?>
                  <tr>
                  <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>

                    <td align='right'>CI</td>
                    <td><?= round($ci,3)?></td>
                  </tr>
                   <tr>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>

                    <td align='right'>CR</td>
                    <td><?= round($cr,3)?></td>
                  </tr>
                   <tr>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
 
                    <td align='right'>Konsisten / Tidak Konsisten </td>
                    <td>
                    <?php
                    if ($cr <= 0.1){
                      print "Konsisten";
                      }else{
                        print " Tidak Konsisten";
                      }

                      $bobot_k1 = $matriks_bobot[0];
                      $bobot_k2 = $matriks_bobot[1];
                      $bobot_k3 = $matriks_bobot[2];
                      $bobot_k4 = $matriks_bobot[3];
                      $bobot_k5 = $matriks_bobot[4];
                      $bobot_k6 = $matriks_bobot[5];
                      $bobot_k7 = $matriks_bobot[6];
                    ?>
                    </td>
                  </tr> 

                </tbody>
              </table>
              <form action="<?php echo site_url ('Home/simpanbobot')?>" method="post">
                <input type="hidden" value="<?php echo $bobot_k1;?>" name="bobot_k1">
                <input type="hidden" value="<?php echo $bobot_k2;?>" name="bobot_k2">
                <input type="hidden" value="<?php echo $bobot_k3;?>" name="bobot_k3">
                <input type="hidden" value="<?php echo $bobot_k4;?>" name="bobot_k4">
                <input type="hidden" value="<?php echo $bobot_k5;?>" name="bobot_k5">
                <input type="hidden" value="<?php echo $bobot_k6;?>" name="bobot_k6">
                <input type="hidden" value="<?php echo $bobot_k7;?>" name="bobot_k7">
                <button type="submit" class="btn btn-block btn-primary">OK</button>
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

