


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
                        <center><h3>Pengujian Akurasi</h3></center>
                    </div>
                    <div class="col-xs-12">
                        <select id="parameter">
                            <option value="0">Jumlah Parameter</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                    </div>
                    <br><br>
                    <div class="col-xs-3">
                        <select id="1" style="visibility: hidden;">
                            <option value="0">Pilih Parameter</option>
                            <option value="1">Jarak Kost ke UB</option>
                            <option value="2">Jarak Kost ke Makanan</option>
                            <option value="3">Jarak Kost ke Jalan Utama</option>
                            <option value="4">Fasilitas</option>
                            <option value="5">Kenyamanan</option>
                            <option value="6">Keamanan</option>
                            <option value="7">Harga</option>
                        </select>
                    </div>
                    <div class="col-xs-3">
                        <select id="2" style="visibility: hidden;">
                            <option value="0">Pilih Parameter</option>
                            <option value="1">Jarak Kost ke UB</option>
                            <option value="2">Jarak Kost ke Makanan</option>
                            <option value="3">Jarak Kost ke Jalan Utama</option>
                            <option value="4">Fasilitas</option>
                            <option value="5">Kenyamanan</option>
                            <option value="6">Keamanan</option>
                            <option value="7">Harga</option>
                        </select>
                    </div>
                    <div class="col-xs-3">
                        <select id="3" style="visibility: hidden;">
                            <option value="0">Pilih Parameter</option>
                            <option value="1">Jarak Kost ke UB</option>
                            <option value="2">Jarak Kost ke Makanan</option>
                            <option value="3">Jarak Kost ke Jalan Utama</option>
                            <option value="4">Fasilitas</option>
                            <option value="5">Kenyamanan</option>
                            <option value="6">Keamanan</option>
                            <option value="7">Harga</option>
                        </select>
                    </div>
                    <div class="col-xs-3">
                        <select id="4" style="visibility: hidden;">
                            <option value="0">Pilih Parameter</option>
                            <option value="1">Jarak Kost ke UB</option>
                            <option value="2">Jarak Kost ke Makanan</option>
                            <option value="3">Jarak Kost ke Jalan Utama</option>
                            <option value="4">Fasilitas</option>
                            <option value="5">Kenyamanan</option>
                            <option value="6">Keamanan</option>
                            <option value="7">Harga</option>
                        </select>
                    </div>
                    <div class="col-xs-3">
                        <select id="5" style="visibility: hidden;">
                            <option value="0">Pilih Parameter</option>
                            <option value="1">Jarak Kost ke UB</option>
                            <option value="2">Jarak Kost ke Makanan</option>
                            <option value="3">Jarak Kost ke Jalan Utama</option>
                            <option value="4">Fasilitas</option>
                            <option value="5">Kenyamanan</option>
                            <option value="6">Keamanan</option>
                            <option value="7">Harga</option>
                        </select>
                    </div>
                    <div class="col-xs-3">
                        <select id="6" style="visibility: hidden;">
                            <option value="0">Pilih Parameter</option>
                            <option value="1">Jarak Kost ke UB</option>
                            <option value="2">Jarak Kost ke Makanan</option>
                            <option value="3">Jarak Kost ke Jalan Utama</option>
                            <option value="4">Fasilitas</option>
                            <option value="5">Kenyamanan</option>
                            <option value="6">Keamanan</option>
                            <option value="7">Harga</option>
                        </select>
                    </div>
                    <div class="col-xs-3">
                        <select id="7" style="visibility: hidden;">
                            <option value="0">Pilih Parameter</option>
                            <option value="1">Jarak Kost ke UB</option>
                            <option value="2">Jarak Kost ke Makanan</option>
                            <option value="3">Jarak Kost ke Jalan Utama</option>
                            <option value="4">Fasilitas</option>
                            <option value="5">Kenyamanan</option>
                            <option value="6">Keamanan</option>
                            <option value="7">Harga</option>
                        </select>
                    </div>
                    <br><br><br>
                    <div class="col-xs-4"></div>
                    <div class="col-xs-4"><button onclick="submit()" type="button" class="btn btn-block btn-primary">SUBMIT</button></div>
                    <div class="col-xs-4"></div>
                    <br><br><br>
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
<?php
$k1 = array();
$k2 = array();
$k3 = array();
$k4 = array();
$k5 = array();
$k6 = array();
$k7 = array();

foreach ($data as $d) {
    $k1[] = $d['k1'];
    $k2[] = $d['k2'];
    $k3[] = $d['k3'];
    $k4[] = $d['k4'];
    $k5[] = $d['k5'];
    $k6[] = $d['k6'];
    $k7[] = $d['k7'];
}

$jk1 = json_encode($k1);
$jk2 = json_encode($k2);
$jk3 = json_encode($k3);
$jk4 = json_encode($k4);
$jk5 = json_encode($k5);
$jk6 = json_encode($k6);
$jk7 = json_encode($k7);

$max = array();
$max[] = $this->M_kriteria->getK1Max();
$max[] = $this->M_kriteria->getK2Max();
$max[] = $this->M_kriteria->getK3Max();
$max[] = $this->M_kriteria->getK4Max();
$max[] = $this->M_kriteria->getK5Max();
$max[] = $this->M_kriteria->getK6Max();
$max[] = $this->M_kriteria->getK7Max();

$sk1 = array();
$sk2 = array();
$sk3 = array();
$sk4 = array();
$sk5 = array();
$sk6 = array();
$sk7 = array();
$nama_orang = array();
foreach ($kriteria as $d) {
    $sk1[] = round($d['kos_ub'] / $max[0], 3);
    $sk2[] = round($d['kos_makanan'] / $max[1], 3);
    $sk3[] = round($d['kos_jalan'] / $max[2], 3);
    $sk4[] = round($d['fasilitas'] / $max[3], 3);
    $sk5[] = round($d['kenyamanan'] / $max[4], 3);
    $sk6[] = round($d['keamanan'] / $max[5], 3);
    $sk7[] = round($d['harga'] / $max[6], 3);
    $nama_orang[] = $d['nama'];
}

$jsk1 = json_encode($sk1);
$jsk2 = json_encode($sk2);
$jsk3 = json_encode($sk3);
$jsk4 = json_encode($sk4);
$jsk5 = json_encode($sk5);
$jsk6 = json_encode($sk6);
$jsk7 = json_encode($sk7);
$jnama_orang = json_encode($nama_orang);
?>

<script type="text/javascript">
    //AHP
    var index = 0;
    var k1 = <?php echo $jk1; ?>;
    var k2 = <?php echo $jk2; ?>;
    var k3 = <?php echo $jk3; ?>;
    var k4 = <?php echo $jk4; ?>;
    var k5 = <?php echo $jk5; ?>;
    var k6 = <?php echo $jk6; ?>;
    var k7 = <?php echo $jk7; ?>;

    function submit() {
        var arr = [];
        var total = [];
        var matriks = [];
        var matriks_bobot = [];

        for (var i = 0; i < 7; i++) {
            total[i] = 0.0;
        }

        for (var i = 1; i < index; i++) {
            arr[i - 1] = document.getElementById(i.toString()).selectedIndex;
        }
        arr.sort();
        for (var i = 0; i < 7; i++) {
            for (var j = 0; j < index - 1; j++) {
                if ((i + 1) === arr[j]) {
                    total[0] += parseFloat(k1[i]);
                    total[1] += parseFloat(k2[i]);
                    total[2] += parseFloat(k3[i]);
                    total[3] += parseFloat(k4[i]);
                    total[4] += parseFloat(k5[i]);
                    total[5] += parseFloat(k6[i]);
                    total[6] += parseFloat(k7[i]);
                }
            }
        }

        for (var i = 0; i < index - 1; i++) {
            var a = [];
            var total_akhir = 0.0;

            for (var j = 0; j < index - 1; j++) {
                if (arr[j] === 1) {
                    a[j] = parseFloat(k1[i]);
                    total_akhir += parseFloat((parseFloat(k1[i]) / total[arr[j] - 1]).toFixed(3));
                } else if (arr[j] === 2) {
                    a[j] = parseFloat(k2[i]);
                    total_akhir += parseFloat((parseFloat(k2[i]) / total[arr[j] - 1]).toFixed(3));
                } else if (arr[j] === 3) {
                    a[j] = parseFloat(k3[i]);
                    total_akhir += parseFloat((parseFloat(k3[i]) / total[arr[j] - 1]).toFixed(3));
                } else if (arr[j] === 4) {
                    a[j] = parseFloat(k4[i]);
                    total_akhir += parseFloat((parseFloat(k4[i]) / total[arr[j] - 1]).toFixed(3));
                } else if (arr[j] === 5) {
                    a[j] = parseFloat(k5[i]);
                    total_akhir += parseFloat((parseFloat(k5[i]) / total[arr[j] - 1]).toFixed(3));
                } else if (arr[j] === 6) {
                    a[j] = parseFloat(k6[i]);
                    total_akhir += parseFloat((parseFloat(k6[i]) / total[arr[j] - 1]).toFixed(3));
                } else if (arr[j] === 7) {
                    a[j] = parseFloat(k7[i]);
                    total_akhir += parseFloat((parseFloat(k7[i]) / total[arr[j] - 1]).toFixed(3));
                }
            }

            var b = (total_akhir / (index - 1)).toFixed(3);

            matriks[i] = a;
            matriks_bobot[i] = b;
        }

        var ci = 0;
        var cr = 0;
        var rata_eigen = 0;
        var total_eigen = 0;

        for (var i = 0; i < index - 1; i++) {
            var jumlah = 0;
            var eigen = 0;

            for (var j = 0; j < matriks[0].length; j++) {
                jumlah += (matriks[i][j] * matriks_bobot[j]);
            }

            eigen = jumlah / matriks_bobot[i];
            total_eigen += eigen;
        }

        rata_eigen = total_eigen / (index - 1);
        ci = (rata_eigen - (index - 1)) / ((index - 1) - 1);

        var random = [0, 0, 0.58, 0.9, 1.12, 1.24, 1.32];
        cr = ci / random[index - 2];

        console.log(ci);
        console.log(cr);

        //SAW
        var sk1 = <?php echo $jsk1; ?>;
        var sk2 = <?php echo $jsk2; ?>;
        var sk3 = <?php echo $jsk3; ?>;
        var sk4 = <?php echo $jsk4; ?>;
        var sk5 = <?php echo $jsk5; ?>;
        var sk6 = <?php echo $jsk6; ?>;
        var sk7 = <?php echo $jsk7; ?>;
        var nama_orang = <?php echo $jnama_orang; ?>;
        var matriks_saw = [];

        for (var i = 0; i < nama_orang.length; i++) {
            var a = [];

            for (var j = 0; j < index - 1; j++) {
                if (arr[j] === 1) {
                    a[j] = sk1[i];
                } else if (arr[j] === 2) {
                    a[j] = sk2[i];
                } else if (arr[j] === 3) {
                    a[j] = sk3[i];
                } else if (arr[j] === 4) {
                    a[j] = sk4[i];
                } else if (arr[j] === 5) {
                    a[j] = sk5[i];
                } else if (arr[j] === 6) {
                    a[j] = sk6[i];
                } else if (arr[j] === 7) {
                    a[j] = sk7[i];
                }
            }

            matriks_saw[i] = a;
        }

        var nilai_preferensi = [];
        for (var i = 0; i < matriks_saw.length; i++) {
            var jumlah = 0;

            for (var j = 0; j < matriks_saw[0].length; j++) {
                jumlah += (matriks_saw[i][j] * matriks_bobot[j]);
            }

            nilai_preferensi[i] = jumlah.toFixed(6);
        }
        
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('index.php/Home/simpanPreferensi2'); ?>",
            data: {nama : nama_orang, data : nilai_preferensi},
            success: function(data) {
                        window.location = "<?php echo base_url('index.php/Home/pengujian'); ?>";
                    }, 
            failed: function(data) {
                        
                    }
        });

    }

    function visibility(i1, i2, i3, i4, i5, i6, i7) {
        var d1 = document.getElementById("1");
        d1.style.visibility = i1;

        var d2 = document.getElementById("2");
        d2.style.visibility = i2;
        d2.onchange = function () {
            if (d2.selectedIndex === d1.selectedIndex) {
                d2.selectedIndex = 0;
                window.alert("Parameter tidak boleh sama!");
            }
        }

        var d3 = document.getElementById("3");
        d3.style.visibility = i3;
        d3.onchange = function () {
            if (d3.selectedIndex === d2.selectedIndex || d3.selectedIndex === d1.selectedIndex) {
                d3.selectedIndex = 0;
                window.alert("Parameter tidak boleh sama!");
            }
        }

        var d4 = document.getElementById("4");
        d4.style.visibility = i4;
        d4.onchange = function () {
            if (d4.selectedIndex === d3.selectedIndex || d4.selectedIndex === d2.selectedIndex
                    || d4.selectedIndex === d1.selectedIndex) {
                d3.selectedIndex = 0;
                window.alert("Parameter tidak boleh sama!");
            }
        }

        var d5 = document.getElementById("5");
        d5.style.visibility = i5;
        d5.onchange = function () {
            if (d5.selectedIndex === d4.selectedIndex || d5.selectedIndex === d3.selectedIndex
                    || d5.selectedIndex === d2.selectedIndex || d5.selectedIndex === d1.selectedIndex) {
                d3.selectedIndex = 0;
                window.alert("Parameter tidak boleh sama!");
            }
        }

        var d6 = document.getElementById("6");
        d6.style.visibility = i6;
        d6.onchange = function () {
            if (d6.selectedIndex === d5.selectedIndex || d6.selectedIndex === d4.selectedIndex
                    || d6.selectedIndex === d3.selectedIndex || d6.selectedIndex === d2.selectedIndex
                    || d6.selectedIndex === d1.selectedIndex) {
                d3.selectedIndex = 0;
                window.alert("Parameter tidak boleh sama!");
            }
        }

        var d7 = document.getElementById("7");
        d7.style.visibility = i7;
        d7.onchange = function () {
            if (d7.selectedIndex === d6.selectedIndex || d7.selectedIndex === d5.selectedIndex
                    || d7.selectedIndex === d4.selectedIndex || d7.selectedIndex === d3.selectedIndex
                    || d7.selectedIndex === d2.selectedIndex || d7.selectedIndex === d1.selectedIndex) {
                d3.selectedIndex = 0;
                window.alert("Parameter tidak boleh sama!");
            }
        }
    }

    window.onload = function () {
        var select = document.getElementById("parameter");
        select.onchange = function () {
            if (select.selectedIndex === 0) {
                visibility('hidden', 'hidden', 'hidden', 'hidden', 'hidden', 'hidden', 'hidden');
            } else if (select.selectedIndex === 1) {
                index = 2;
                visibility('visible', 'hidden', 'hidden', 'hidden', 'hidden', 'hidden', 'hidden');
            } else if (select.selectedIndex === 2) {
                index = 3;
                visibility('visible', 'visible', 'hidden', 'hidden', 'hidden', 'hidden', 'hidden');
            } else if (select.selectedIndex === 3) {
                index = 4;
                visibility('visible', 'visible', 'visible', 'hidden', 'hidden', 'hidden', 'hidden');
            } else if (select.selectedIndex === 4) {
                index = 5;
                visibility('visible', 'visible', 'visible', 'visible', 'hidden', 'hidden', 'hidden');
            } else if (select.selectedIndex === 5) {
                index = 6;
                visibility('visible', 'visible', 'visible', 'visible', 'visible', 'hidden', 'hidden');
            } else if (select.selectedIndex === 6) {
                index = 7;
                visibility('visible', 'visible', 'visible', 'visible', 'visible', 'visible', 'hidden');
            } else if (select.selectedIndex === 7) {
                index = 8;
                visibility('visible', 'visible', 'visible', 'visible', 'visible', 'visible', 'visible');
            }
        }
    }
</script>