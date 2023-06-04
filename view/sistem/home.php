 <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: -2.1634076, lng: 106.1695294};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 17, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map, title: 'Nama Maps'});
}
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyY0ZSEe2hO5U1aOaJ2spgAw60s2gYsds"
    async defer></script>
    
<title><?php echo $row_data['nama'];?> | Dashboard</title>

    
<?php
date_default_timezone_set('Asia/Jakarta');
if($_SESSION['level_simpeg']=="admin")
{
    ?>
    <script src="bootstrap/chart/js/highcharts.js"></script>
    
    <script src="bootstrap/chart/js/jquery-1.10.1.min.js"></script>

    <script>
        var chart; 
        $(document).ready(function() {
              chart = new Highcharts.Chart(
              {
                  
                 chart: {
                    renderTo: 'mygraph',
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                 },   
                 title: {
                    text: 'Grafik Data Pegawai '
                 },
                 tooltip: {
                    formatter: function() {
                        return '<b>'+
                        this.point.name +'</b>: '+ Highcharts.numberFormat(this.percentage, 2) +' % ';
                    }
                 },
                 
                
                 plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            color: '#000000',
                            connectorColor: 'green',
                            formatter: function() 
                            {
                                return '<b>' + this.point.name + '</b>: ' + Highcharts.numberFormat(this.percentage, 2) +' % ';
                            }
                        }
                    }
                 },
       
                    series: [{
                    type: 'pie',
                    name: 'pegawai share',
                    data: [
                    <?php
                        include "config/koneksi.php";
                        $query = mysqli_query($koneksi,"SELECT * from pegawai GROUP BY gender");
                     
                        while ($row = mysqli_fetch_array($query)) {
                            $gender = $row['gender'];
                         
                            $data = mysqli_num_rows(mysqli_query($koneksi,"SELECT * from pegawai where gender='$gender'"));
                            $jumlah = $data;
                            ?>
                            [ 
                                '<?php if($gender=="l"){ echo "Laki - Laki"; } else { echo "Wanita";} ?>', <?php echo $jumlah; ?>
                            ],
                            <?php
                        }
                        ?>
             
                    ]
                }]
              });
        }); 
    </script>

            <!-- INI UNTUK JUDUL -->
            <section class="content-header">
              <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home </a></li>
                <li class="active"></i>/Dashboard</li>
              </ol>
            </section>
            <section class="content">
            <br><br>
            <!-- INI UNTUK ISI -->
            <!-- INI UNTUK ISI -->
            <div class="row">

            <div class="col-lg-6 col-xs-12 col-md-6">
                  <!-- small box -->
              <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                  <h6 class="text-capitalize"><center>Grafik Data Pegawai <?php echo $row_data['nama'];?></center></h6>
                <div id ="mygraph"></div>
                </div>
              </div>
            </div>

            <?php
                $jml = mysqli_num_rows($data_pegawai);
            ?>
                <div class="col-xl-3 col-sm-6">
                  <div class="card">
                    <div class="card-body p-3">
                      <div class="row">
                        <div class="col-8">
                          <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Jumlah Pegawai</p>
                            <h5 class="font-weight-bolder">
                              <b><?php echo $jml; ?></b>
                            </h5>
                          </div>
                          <a href="index.php?controller=pegawai&method=select" class="small-box-footer">Lihat Data Pegawai <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-3 col-sm-6">
                  <div class="card">
                    <div class="card-body p-3">
                      <div class="row">
                        <div class="col-8">
                          <div class="numbers">
                          <?php
                        $jml_pengguna = mysqli_num_rows($data_pengguna);
                    ?>
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Data Pengguna</p>
                            <h5 class="font-weight-bolder">
                              <b><b><?php echo $jml_pengguna; ?></b></b>
                            </h5>
                          </div>
                          <a href="index.php?controller=user&method=pengguna" class="small-box-footer">Lihat Data Pengguna <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <section>
                <div id="map" style="width :100%;height:400px;"></div>
            </section>
            
    </section>
    <section>
        </div></div>
    </section>




<script src="bootstrap/chart/js/highcharts.js"></script>
<script src="bootstrap/chart/js/jquery-1.10.1.min.js"></script>

<!-- bagian user -- >


<?php
}else
{
?>

<!-- INI UNTUK JUDUL -->
            <section class="content-header">
              <h1>Dashboard
                <small>Control panel</small>
              </h1>
              <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active"></i>Dashboard</li>
              </ol>
            </section>
            <section class="content">


            <br>
            <section>

            <?php 

            $usr = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$_SESSION[username_simpeg]'");
            $dt = mysqli_fetch_array($usr);

            $tgl = date('Y-m-d');

            $qry_kenaikan = mysqli_query($koneksi,"SELECT * FROM mutasi WHERE nip='$dt[nip]'");

            $kenaikan = mysqli_fetch_array($qry_kenaikan);

            $date1 = new DateTime($kenaikan['tmt_kenaikan']);
            $date2 = new DateTime($tgl);

            $date3 = new DateTime($kenaikan['tmt_gaji']);


            $difference = $date1->diff($date2);
            $difference2 = $date3->diff($date2);

            $cek=$difference->days;
            $cek2=$difference2->days;
            
            //pemberitahuan
            ?>
            
            <?php
            if ($cek=="0" OR $cek2=="0" OR date('m')=="01" OR date('m')=="01") {
            ?>
            <div class="box bg-maroon box-solid box-solid">
            <div class="box-header with-border">
            <i class="fa fa-calendar"></i>
              <h3 class="box-title"><b>Pemberitahuan !</b></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn bg-maroon btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn bg-maroon btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php
                $qry_pegawai = mysqli_query($koneksi,"SELECT * FROM pegawai WHERE nip='$dt[nip]'");
                $dt_pegawai = mysqli_fetch_array($qry_pegawai);
                echo "<label>Diberitahukan kepada yang bersangkutan,</label> <br> ";
                if (date('m')=="01") {
                  echo "<label>- Kenaikan Pangkat Bpk/Ibu ".$dt_pegawai['nama']." Akan Naik Ke Pangkat/Golongan ".$kenaikan['kenaikan_pangkat']." , menurut TMT " .TanggalIndo($kenaikan['tmt_kenaikan']). "</label>";
                  echo"<br>";
                }
                  if (date('m')=="01") {
                  echo "<label>- Kenaikan gaji berkala Bpk/Ibu ".$dt_pegawai['nama']." akan naik menjadi Rp. ".number_format($kenaikan['kenaikan_gaji'],0,".",".")." , menurut TMT " .TanggalIndo($kenaikan['tmt_gaji']). "</label>";
                  echo"<br>";
                }
                if ($cek=="0") {
                  echo "<label>- Kenaikan pangkat Bpk/Ibu ".$dt_pegawai['nama']." sekarang ke Pangkat/Golongan ".$kenaikan['kenaikan_pangkat']." , TMT " .TanggalIndo($kenaikan['tmt_kenaikan']). "</label>";
                  echo"<br>";
                }
                  if ($cek2=="0") {
                  echo "<label>- Kenaikan gaji berkala Bpk/Ibu ".$dt_pegawai['nama']." sekarang naik menjadi Rp. ".number_format($kenaikan['kenaikan_gaji'],0,".",".")." , TMT " .TanggalIndo($kenaikan['tmt_gaji']). "</label>";
                  echo"<br>";
                }
                ?>
            </div>
            </div>
            <?php }else{} ?>
            
            
            <!-- end-->
            </section>
            <br>
            <!-- INI UNTUK ISI -->
            <!-- INI UNTUK ISI -->
            <div class="row">

            <?php

                $data_gaji   = mysqli_query($koneksi,"SELECT * FROM gaji WHERE nip ='$dt[nip]' ORDER BY id DESC");
                $jml = mysqli_fetch_array($data_gaji);
            ?>
              <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-aqua">
                    <div class="inner">
                      <p>Data Penghasilan Terakhir : <br> <?php if($jml['tgl_gaji']=="" OR $jml['tgl_gaji']=="0000-00-00"){ echo "<br>";}else{ echo str_replace("01 ","",TanggalIndo($jml['tgl_gaji'])); }?></p>
                      <a style="font-size: 25px;color:white;" align="center"><b>Rp. <?php echo number_format($jml['gaji_bersih'],0,".","."); ?></b></a>
                    </div>
                    <div class="icon">
                      <i class="fa fa-money"></i>
                    </div>
                    <a href="index.php?controller=pegawai&method=info_gaji" class="small-box-footer">Lihat Riwayat Penggajian <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>



                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-blue">
                  <?php
                     $dt_keluarga = mysqli_query($koneksi,"SELECT * FROM keluarga WHERE nip ='$dt[nip]'");
                    $dt_anak     = mysqli_query($koneksi,"SELECT * FROM anak WHERE nip ='$dt[nip]'");

                    $jml_keluarga = mysqli_num_rows($dt_keluarga);
                    $jml_anak = mysqli_num_rows($dt_anak);

                    ?>
                    <div class="inner">
                      <p>Jumlah Tanggungan Keluarga</p>
                      <br>
                      <p align="center" style="font-size: 25px;"><b><?php echo $jml_anak+$jml_keluarga;?> Orang</b></p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-users"></i>
                    </div>
                    <a href="index.php?controller=pegawai&method=info" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>


              <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-green">
                  <?php
                    $dt_berkas     = mysqli_query($koneksi,"SELECT * FROM berkas WHERE nip ='$dt[nip]'");

                    $jml_berkas = mysqli_num_rows($dt_berkas);

                    ?>
                    <div class="inner">
                      <p>Jumlah Berkas Masuk</p>
                      <br>
                      <p align="center" style="font-size: 25px;"><b><?php echo $jml_berkas;?></b></p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-archive"></i>
                    </div>
                    <a href="index.php?controller=berkas&method=select" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
            </div>
    <section>
               <div id="map" style="width:100%;height:400px;"></div>
    </section>
    </section>
     



<?php
}
?>
