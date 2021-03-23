
@section('style')
<style type="text/css">
  .service-1 {
  background: url("assets/images/DK.jpg");
  background-repeat: no-repeat;
  background-attachment: ;
  background-size: 100%;
  padding: 50px;
  background-position: center;
  width: 100%
}
   .service-2 {
  background: url("/images/examiner.png");
  background-repeat: no-repeat;
  background-attachment: ;
  background-size: auto;
  padding: 50px;
  background-position: center;
  width: 100%
} 
.service-3 {
  background: url("/images/consultant.png");
  background-repeat: no-repeat;
  background-attachment: ;
  background-size: auto;
  padding: 50px;
  background-position: center;
  width: 100%
} 
.service-4 {
  background: url("/images/researcher.png");
  background-repeat: no-repeat;
  background-attachment: ;
  background-size: auto;
  padding: 50px;
  background-position: center;
  width: 100%
} 
.service-5 {
  background: url("/images/coordinator.png");
  background-repeat: no-repeat;
  background-attachment: ;
  background-size: auto;
  padding: 50px;
  background-position: center;
  width: 100%
} 

</style>
@endsection
<?php
include("header.php")
?>
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Senarai Dewan</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="JenisTempahan.php">Jenis Tempahan</a></li>
                                            <li class="breadcrumb-item active">Senarai Dewan</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <a href="DewanKenangan.php"><img class="card-img-top" src="assets/images/DK.jpg" alt="Card image cap"></a>
                                    <div class="card-body">
                                        <div class="text-center">
                                            <div class="media-body">
                                                <h5 class="text-truncate"><a href="DewanKenangan.php" class="text-dark">Dewan Kenangan</a></h5>
                                                <p class="text-muted">
                                                    <i class="mdi mdi-account mr-1"></i> Majlis Perbandaran Sungai Petani
                                                </p>
                                            </div>
                                        </div>
                                        <hr class="my-4">
                                        <div class="row text-center">
                                            <div class="col-6">
                                                <div class="text-center">
                                                    <!-- Large modal -->
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#infoDK">Info Tempahan</button>
                                                </div>
                                                <div class="modal fade bs-example-modal-lg" id="infoDK" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Info Tempahan Dewan Kenangan</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">DEPOSIT</h4>
                                                                        <div class="table-responsive">
                                                                            <table class="table mb-0">
                                                                                <thead class="thead-light">
                                                                                    <tr>
                                                                                        <th>Keterangan</th>
                                                                                        <th><b>Jumlah yang perlu dijelaskan</b></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">Mengesahkan tempahan, jaminan kebersihan dewan, kerosakkan harta benda majlis dll.</th>
                                                                                        <td>RM 800.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">HARGA DEWAN</h4>
                                                                        <div class="table-responsive">
                                                                            <table class="table mb-0">
                                                                                <thead class="thead-light">
                                                                                    <tr>
                                                                                        <th>Keterangan</th>
                                                                                        <th><b>Jumlah yang perlu di bayar</b></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">Harga Dewan Kenangan Per Hari</th>
                                                                                        <td>RM 2000.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">SEWAAN PERALATAN</h4>
                                                                        <div class="table-responsive">
                                                                            <table class="table mb-0">
                                                                                <thead class="thead-light">
                                                                                    <tr>
                                                                                        <th>Peralatan</th>
                                                                                        <th><b>Kadar Harga Seunit</b></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">i. Kerusi Plastik</th>
                                                                                        <td>RM 1.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                                 <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">ii. Kerusi Bankuet</th>
                                                                                        <td>RM 2.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                                   <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">iii. Meja Empat Segi 6'x3'</th>
                                                                                        <td>RM 5.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                                   <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">iv. Meja  Bulat Bankuet</th>
                                                                                        <td>RM 8.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            </div>
                                            <div class="col-6">
                                                <button onclick="location.href='Jadual Dewan Kenangan.php'" type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" >Jadual Dewan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <a href="DewanKenanganPakej.php"><img class="card-img-top" src="assets/images/DK.jpg" alt="Card image cap"></a>
                                            <!--<img class="service-1">-->
                                    <div class="card-body">
                                        <div class="text-center">
                                            <div class="media-body">
                                                <h5 class="text-truncate"><a href="DewanKenanganPakej.php" class="text-dark">Dewan Kenangan (Pakej Perkahwinan)</a></h5>
                                                <p class="text-muted">
                                                    <i class="mdi mdi-account mr-1"></i> Majlis Perbandaran Sungai Petani
                                                </p>
                                            </div>
                                        </div>
                                        <hr class="my-4">
                                        <div class="row text-center">
                                            <div class="col-6">
                                                <div class="text-center">
                                                    <!-- Large modal -->
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#infoDKP">Info Tempahan</button>
                                                </div>
                                                <div class="modal fade bs-example-modal-lg" id="infoDKP" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Info Tempahan Dewan Kenangan</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">DEPOSIT</h4>
                                                                        <div class="table-responsive">
                                                                            <table class="table mb-0">
                                                                                <thead class="thead-light">
                                                                                    <tr>
                                                                                        <th>Keterangan</th>
                                                                                        <th><b>Jumlah yang perlu dijelaskan</b></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">Mengesahkan tempahan, jaminan kebersihan dewan, kerosakkan harta benda majlis dll.</th>
                                                                                        <td>RM 800.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">HARGA DEWAN</h4>
                                                                        <div class="table-responsive">
                                                                            <table class="table mb-0">
                                                                                <thead class="thead-light">
                                                                                    <tr>
                                                                                        <th>Pakej</th>
                                                                                        <th>Perkhidmatan</th>
                                                                                        <th><b>HARGA</b></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">A</th>
                                                                                        <td>Sewaan dewan hawa dingin dengan peralatan termasuk perkhidmatan susun-atur meja dalam dewan disediakan oleh pihak Majlis:
                                                                                        <br>i) 50 meja bulat (tanpa alas)<br>ii) 15 meja panjang (tanpa alas)<br>iii) 500 kerusi bankuet (tanpa sarung)</td>
                                                                                        <td>RM 4,400.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                                 <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">B</th>
                                                                                        <td>Sewaan dewan hawa dingin dengan peralatan termasuk perkhidmatan susun-atur meja dalam dewan disediakan oleh pihak Majlis:
                                                                                        <br>i) 60 meja bulat (tanpa alas)<br>ii) 15 meja panjang (tanpa alas)<br>iii) 600 kerusi bankuet (tanpa sarung)</td>
                                                                                        <td>RM 4,700.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                                 <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">C</th>
                                                                                        <td>Sewaan dewan hawa dingin dengan peralatan termasuk perkhidmatan susun-atur meja dalam dewan disediakan oleh pihak Majlis:
                                                                                        <br>i) 70 meja bulat (tanpa alas)<br>ii) 15 meja panjang (tanpa alas)<br>iii) 700 kerusi bankuet (tanpa sarung)</td>
                                                                                        <td>RM 4,900.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            </div>
                                            <div class="col-6">
                                                <button onclick="location.href='Jadual Dewan Kenangan.php'" type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" >Jadual Dewan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="assets/images/companies/img-2.png" alt="" class="avatar-sm mt-2 mb-4">
                                            <div class="media-body">
                                                <h5 class="text-truncate"><a href="DewanTikamBatu.php" class="text-dark">Dewan Tikam Batu</a></h5>
                                                <p class="text-muted">
                                                    <i class="mdi mdi-account mr-1"></i> Majlis Perbandaran Sungai Petani
                                                </p>
                                            </div>
                                        </div>
                                        <hr class="my-4">
                                        <div class="row text-center">
                                            <div class="col-6">
                                                <div class="text-center">
                                                    <!-- Large modal -->
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#infoDTB">Info Tempahan</button>
                                                </div>
                                                <div class="modal fade bs-example-modal-lg" id="infoDTB" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Info Tempahan Dewan Tikam Batu</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">DEPOSIT</h4>
                                                                        <div class="table-responsive">
                                                                            <table class="table mb-0">
                                        
                                                                                <thead class="thead-light">
                                                                                    <tr>
                                                                                        <th>Keterangan</th>
                                                                                        <th><b>Jumlah yang perlu dijelaskan</b></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">Mengesahkan tempahan, jaminan kebersihan dewan, kerosakkan harta benda majlis dll.</th>
                                                                                        <td>RM 500.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">HARGA DEWAN</h4>
                                                                        <div class="table-responsive">
                                                                            <table class="table mb-0">
                                                                                <thead class="thead-light">
                                                                                    <tr>
                                                                                        <th>Jenis Pengunaan</th>
                                                                                        <th>Keterangan</th>
                                                                                        <th><b>Harga</b></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">Perkahwinan</th>
                                                                                        <td>Sewaan Dewan penghawa dingin dengan peralatan:<br>i) 28 meja bulat <br>ii) 15 meja panjang<br>iii) 192 kerusi plastik (tanpa alas)<br>iv) 40 kerusi bankuet(tanpa sarung)</td>
                                                                                        <td>RM 2000.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">Lain-lain</th>
                                                                                        <td>Sewaan Dewan tanpa penghawa dingin</td>
                                                                                        <td>RM 500.00 (3 jam pertama)<br>RM150.00 (+ setiap jam seterusnya)</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">SEWAAN PERALATAN</h4>
                                                                        <div class="table-responsive">
                                                                            <table class="table mb-0">
                                                                                <thead class="thead-light">
                                                                                    <tr>
                                                                                        <th>Peralatan</th>
                                                                                        <th><b>Kadar Harga Seunit</b></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">i. Kerusi Plastik</th>
                                                                                        <td>RM 1.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                                 <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">ii. Kerusi Bankuet</th>
                                                                                        <td>RM 2.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                                   <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">iii. Meja Empat Segi 6'x3'</th>
                                                                                        <td>RM 5.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">v. Meja  Bulat Bankuet</th>
                                                                                        <td>RM 8.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">iv. Single Sofa</th>
                                                                                        <td>RM 20.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">vi. Rostrum</th>
                                                                                        <td>RM 20.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            </div>
                                            <div class="col-6">
                                                <button onclick="location.href='Jadual Dewan Kenangan.php'" type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" >Jadual Dewan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="assets/images/companies/img-3.png" alt="" class="avatar-sm mt-2 mb-4">
                                            <div class="media-body">
                                                <h5 class="text-truncate"><a href="DewanBankuet.php" class="text-dark">Dewan Bankuet</a></h5>
                                                <p class="text-muted">
                                                    <i class="mdi mdi-account mr-1"></i> Majlis Perbandaran Sungai Petani
                                                </p>
                                            </div>
                                        </div>
                                        <hr class="my-4">
                                        <div class="row text-center">
                                            <div class="col-6">
                                                <div class="text-center">
                                                    <!-- Large modal -->
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#infoDB">Info Tempahan</button>
                                                </div>
                                                <div class="modal fade bs-example-modal-lg" id="infoDB" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Info Tempahan Dewan Bankuet</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">DEPOSIT</h4>
                                                                        <div class="table-responsive">
                                                                            <table class="table mb-0">
                                        
                                                                                <thead class="thead-light">
                                                                                    <tr>
                                                                                        <th>Keterangan</th>
                                                                                        <th><b>Jumlah yang perlu dijelaskan</b></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">Mengesahkan tempahan, jaminan kebersihan dewan, kerosakkan harta benda majlis dll.</th>
                                                                                        <td>RM 500.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">HARGA DEWAN</h4>
                                                                        <div class="table-responsive">
                                                                            <table class="table mb-0">
                                                                                <thead class="thead-light">
                                                                                    <tr>
                                                                                        <th>Keterangan</th>
                                                                                        <th><b>Jumlah yang perlu di bayar</b></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">Harga Dewan Kenangan Per Hari</th>
                                                                                        <td>RM 2000.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">SEWAAN PERALATAN</h4>
                                                                        <div class="table-responsive">
                                                                            <table class="table mb-0">
                                                                                <thead class="thead-light">
                                                                                    <tr>
                                                                                        <th>Peralatan</th>
                                                                                        <th><b>Kadar Harga Seunit</b></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">i. Kerusi Plastik</th>
                                                                                        <td>RM 1.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                                 <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">ii. Kerusi Bankuet</th>
                                                                                        <td>RM 2.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                                   <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">iii. Meja Empat Segi 6'x3'</th>
                                                                                        <td>RM 5.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                                   <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">iv. Meja  Bulat Bankuet</th>
                                                                                        <td>RM 8.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            </div>
                                            <div class="col-6">
                                                <button onclick="location.href='Jadual Dewan Kenangan.php'" type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" >Jadual Dewan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="assets/images/companies/img-4.png" alt="" class="avatar-sm mt-2 mb-4">
                                            <div class="media-body">
                                                <h5 class="text-truncate"><a href="JenisDA.php" class="text-dark">Dewan Auditorium</a></h5>
                                                <p class="text-muted">
                                                    <i class="mdi mdi-account mr-1"></i> Majlis Perbandaran Sungai Petani
                                            </div>
                                        </div>

                                        <hr class="my-4">

                                        <div class="row text-center">
                                            <div class="col-6">
                                                <div class="text-center">
                                                    <!-- Large modal -->
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#infoDA">Info Tempahan</button>
                                                </div>
                                                <div class="modal fade bs-example-modal-lg" id="infoDA"tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Info Tempahan Dewan Kenangan</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">DEPOSIT</h4>
                                                                        <div class="table-responsive">
                                                                            <table class="table mb-0">
                                        
                                                                                <thead class="thead-light">
                                                                                    <tr>
                                                                                        <th>Keterangan</th>
                                                                                        <th><b>Jumlah yang perlu dijelaskan</b></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">Mengesahkan tempahan, jaminan kebersihan dewan, kerosakkan harta benda majlis dll.</th>
                                                                                        <td>RM 500.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">HARGA DEWAN</h4>
                                                                        <div class="table-responsive">
                                                                            <table class="table mb-0">
                                                                                <thead class="thead-light">
                                                                                    <tr>
                                                                                        <th>Keterangan</th>
                                                                                        <th><b>Dewan Auditorium</b></th>
                                                                                        <th><b>Bilik Serbaguna</b></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">Kadar Sewa<br>(Dewan berhawa dingin + PA System)</th>
                                                                                        <td>RM 500.00 (3 jam pertama)<br>RM 150.00 (+ Setiap 1 jam seterusnya)</td>
                                                                                        <td>RM 300.00 (3 jam pertama)<br>RM 80.00 (+ Setiap 1 jam seterusnya)</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            </div>
                                            <div class="col-6">
                                                <button onclick="location.href='Jadual Dewan Kenangan.php'" type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" >Jadual Dewan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="assets/images/companies/img-5.png" alt="" class="avatar-sm mt-2 mb-4">
                                            <div class="media-body">
                                                <h5 class="text-truncate"><a href="DewanPerdanaHeights.php" class="text-dark">Dewan Perdana Heights</a></h5>
                                                <p class="text-muted">
                                                    <i class="mdi mdi-account mr-1"></i>Majlis Perbandaran Sungai Petani
                                                </p>
                                            </div>
                                        </div>

                                        <hr class="my-4">

                                        <div class="row text-center">
                                            <div class="col-6">
                                                <div class="text-center">
                                                    <!-- Large modal -->
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#infoDPH">Info Tempahan</button>
                                                </div>
                                                <div class="modal fade bs-example-modal-lg" id="infoDPH" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Info Tempahan Dewan Perdana Heights</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">DEPOSIT</h4>
                                                                        <div class="table-responsive">
                                                                            <table class="table mb-0">
                                        
                                                                                <thead class="thead-light">
                                                                                    <tr>
                                                                                        <th>Keterangan</th>
                                                                                        <th><b>Jumlah yang perlu dijelaskan</b></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">Mengesahkan tempahan, jaminan kebersihan dewan, kerosakkan harta benda majlis dll.</th>
                                                                                        <td>RM 300.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">HARGA DEWAN</h4>
                                                                        <div class="table-responsive">
                                                                            <table class="table mb-0">
                                                                                <thead class="thead-light">
                                                                                    <tr>
                                                                                        <th>Keterangan</th>
                                                                                        <th><b>Jumlah yang perlu di bayar</b></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">Sewaan Dewan tanpa penghawa dingin dengan peralatan:<br>i) 12 meja bulat (tanpa alas)<br>ii) 3 meja panjang (tanpa alas)<br>iii) 200 kerusi plastik (tanpa sarung)</th>
                                                                                        <td>RM 500.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">SEWAAN PERALATAN</h4>
                                                                        <div class="table-responsive">
                                                                            <table class="table mb-0">
                                                                                <thead class="thead-light">
                                                                                    <tr>
                                                                                        <th>Peralatan</th>
                                                                                        <th><b>Kadar Harga Seunit</b></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">i) Kerusi Plastik</th>
                                                                                        <td>RM 1.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                                   <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">ii) Meja Empat Segi 6'x3'</th>
                                                                                        <td>RM 5.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                                   <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">iii) Meja  Bulat Bankuet</th>
                                                                                        <td>RM 8.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            </div>
                                            <div class="col-6">
                                                <button onclick="location.href='Jadual Dewan Kenangan.php'" type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" >Jadual Dewan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="assets/images/companies/img-6.png" alt="" class="avatar-sm mt-2 mb-4">
                                            <div class="media-body">
                                                <h5 class="text-truncate"><a href="DewanLagunaMerbok.php" class="text-dark">Dewan Bandar Laguna Merbok</a></h5>
                                                <p class="text-muted">
                                                    <i class="mdi mdi-account mr-1"></i> Majlis Perbandaran Sungai Petani
                                                </p>
                                            </div>
                                        </div>

                                        <hr class="my-4">

                                        <div class="row text-center">
                                            <div class="col-6">
                                                <div class="text-center">
                                                    <!-- Large modal -->
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#infoDLM">Info Tempahan</button>
                                                </div>
                                                <div class="modal fade bs-example-modal-lg" id="infoDLM" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Info Tempahan Dewan Bandar Laguna Merbok</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">DEPOSIT</h4>
                                                                        <div class="table-responsive">
                                                                            <table class="table mb-0">
                                        
                                                                                <thead class="thead-light">
                                                                                    <tr>
                                                                                        <th>Keterangan</th>
                                                                                        <th><b>Jumlah yang perlu dijelaskan</b></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">Mengesahkan tempahan, jaminan kebersihan dewan, kerosakkan harta benda majlis dll.</th>
                                                                                        <td>RM 500.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">HARGA DEWAN</h4>
                                                                        <div class="table-responsive">
                                                                            <table class="table mb-0">
                                                                                <thead class="thead-light">
                                                                                    <tr>
                                                                                        <th>Jenis Pengunaan</th>
                                                                                        <th>Keterangan</th>
                                                                                        <th><b>Harga</b></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">Perkahwinan</th>
                                                                                        <td>Sewaan Dewan penghawa dingin dengan peralatan:<br>i) 24 meja bulat (tanpa alas)<br>ii) 8 meja panjang (tanpa alas)<br>iii) 160 kerusi plastik (tanpa alas)<br>iv) 36 kerusi bankuet</td>
                                                                                        <td>RM 2000.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">Lain-lain</th>
                                                                                        <td>Sewaan Dewan tanpa penghawa dingin</td>
                                                                                        <td>RM 500.00 (3 jam pertama)<br>RM150.00 (+ setiap jam seterusnya)</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">SEWAAN PERALATAN</h4>
                                                                        <div class="table-responsive">
                                                                            <table class="table mb-0">
                                                                                <thead class="thead-light">
                                                                                    <tr>
                                                                                        <th>Peralatan</th>
                                                                                        <th><b>Kadar Harga Seunit</b></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">i. Kerusi Plastik</th>
                                                                                        <td>RM 1.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                                 <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">ii. Kerusi Bankuet</th>
                                                                                        <td>RM 2.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                                   <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">iii. Meja Empat Segi 6'x3'</th>
                                                                                        <td>RM 5.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                                   <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">iv. Meja  Bulat Bankuet</th>
                                                                                        <td>RM 8.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            </div>
                                            <div class="col-6">
                                                <button onclick="location.href='Jadual Dewan Kenangan.php'" type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" >Jadual Dewan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="assets/images/companies/img-7.png" alt="" class="avatar-sm mt-2 mb-4">
                                            <div class="media-body">
                                                <h5 class="text-truncate"><a href="DewanJeniang.php" class="text-dark">Dewan Jeniang</a></h5>
                                                <p class="text-muted">
                                                    <i class="mdi mdi-account mr-1"></i>Majlis Perbandaran Sungai Petani
                                                </p>
                                            </div>
                                        </div>
                                        <hr class="my-4">
                                        <div class="row text-center">
                                            <div class="col-6">
                                                <div class="text-center">
                                                    <!-- Large modal -->
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#infoDJ">Info Tempahan</button>
                                                </div>
                                                <div class="modal fade bs-example-modal-lg" id="infoDJ" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Info Tempahan Dewan Jeniang</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">DEPOSIT</h4>
                                                                        <div class="table-responsive">
                                                                            <table class="table mb-0">
                                        
                                                                                <thead class="thead-light">
                                                                                    <tr>
                                                                                        <th>Keterangan</th>
                                                                                        <th><b>Jumlah yang perlu dijelaskan</b></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">Mengesahkan tempahan, jaminan kebersihan dewan, kerosakkan harta benda majlis dll.</th>
                                                                                        <td>RM 500.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">HARGA DEWAN</h4>
                                                                        <div class="table-responsive">
                                                                            <table class="table mb-0">
                                                                                <thead class="thead-light">
                                                                                    <tr>
                                                                                        <th>Keterangan</th>
                                                                                        <th><b>Jumlah yang perlu di bayar</b></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">Harga Dewan Kenangan Per Hari</th>
                                                                                        <td>RM 2000.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">SEWAAN PERALATAN</h4>
                                                                        <div class="table-responsive">
                                                                            <table class="table mb-0">
                                                                                <thead class="thead-light">
                                                                                    <tr>
                                                                                        <th>Peralatan</th>
                                                                                        <th><b>Kadar Harga Seunit</b></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">i. Kerusi Plastik</th>
                                                                                        <td>RM 1.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                                 <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">ii. Kerusi Bankuet</th>
                                                                                        <td>RM 2.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                                   <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">iii. Meja Empat Segi 6'x3'</th>
                                                                                        <td>RM 5.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                                   <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">iv. Meja  Bulat Bankuet</th>
                                                                                        <td>RM 8.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            </div>
                                            <div class="col-6">
                                                <button onclick="location.href='Jadual Dewan Kenangan.php'" type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" >Jadual Dewan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="assets/images/companies/img-7.png" alt="" class="avatar-sm mt-2 mb-4">
                                            <div class="media-body">
                                                <h5 class="text-truncate"><a href="DewanGurun.php" class="text-dark">Dewan Taman Gurun Jaya</a></h5>
                                                <p class="text-muted">
                                                    <i class="mdi mdi-account mr-1"></i>Majlis Perbandaran Sungai Petani
                                                </p>
                                            </div>
                                        </div>
                                        <hr class="my-4">
                                        <div class="row text-center">
                                            <div class="col-6">
                                                <div class="text-center">
                                                    <!-- Large modal -->
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#infoDJ">Info Tempahan</button>
                                                </div>
                                                <div class="modal fade bs-example-modal-lg" id="infoDJ" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Info Tempahan Dewan Taman Gurun Jaya</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">DEPOSIT</h4>
                                                                        <div class="table-responsive">
                                                                            <table class="table mb-0">
                                        
                                                                                <thead class="thead-light">
                                                                                    <tr>
                                                                                        <th>Keterangan</th>
                                                                                        <th><b>Jumlah yang perlu dijelaskan</b></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">Mengesahkan tempahan, jaminan kebersihan dewan, kerosakkan harta benda majlis dll.</th>
                                                                                        <td>RM 500.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">HARGA DEWAN</h4>
                                                                        <div class="table-responsive">
                                                                            <table class="table mb-0">
                                                                                <thead class="thead-light">
                                                                                    <tr>
                                                                                        <th>Keterangan</th>
                                                                                        <th><b>Jumlah yang perlu di bayar</b></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">Harga Dewan Kenangan Per Hari</th>
                                                                                        <td>RM 2000.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">SEWAAN PERALATAN</h4>
                                                                        <div class="table-responsive">
                                                                            <table class="table mb-0">
                                                                                <thead class="thead-light">
                                                                                    <tr>
                                                                                        <th>Peralatan</th>
                                                                                        <th><b>Kadar Harga Seunit</b></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">i. Kerusi Plastik</th>
                                                                                        <td>RM 1.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                                 <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">ii. Kerusi Bankuet</th>
                                                                                        <td>RM 2.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                                   <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">iii. Meja Empat Segi 6'x3'</th>
                                                                                        <td>RM 5.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                                   <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">iv. Meja  Bulat Bankuet</th>
                                                                                        <td>RM 8.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            </div>
                                            <div class="col-6">
                                                <button onclick="location.href='Jadual Dewan Kenangan.php'" type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" >Jadual Dewan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Nazox.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->
<?php
include("footer.php")
?>