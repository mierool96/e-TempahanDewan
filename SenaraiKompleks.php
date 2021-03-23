
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
                                    <h4 class="mb-0">Senarai Kompleks</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="JenisTempahan.php">Jenis Tempahan</a></li>
                                            <li class="breadcrumb-item active">Senarai Kompleks</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-2">
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <a href="PadangHoki.php"><img class="card-img-top" src="assets/images/DK.jpg" alt="Card image cap"></a>
                                            <!--<img class="service-1">-->
                                    <div class="card-body">
                                        <div class="text-center">
                                            <div class="media-body">
                                                <h5 class="text-truncate"><a href="PadangHoki.php" class="text-dark">Padang Hoki Sintetik</a></h5>
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
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#infoPH">Info Tempahan</button>
                                                </div>
                                                <div class="modal fade bs-example-modal-lg" id="infoPH" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Info Tempahan Padang Hoki Sintetik</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">KADAR HARGA SEWAAN</h4>
                                                                        <div class="table-responsive">
                                                                            <table class="table mb-0">
                                        
                                                                                <thead class="thead-light">
                                                                                    <tr>
                                                                                        <th>Hari</th>
                                                                                        <th><b>Masa</b></th>
                                                                                        <th><b>Kadar Caj</b></th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">Hari Minggi/Cuti Umum</th>
                                                                                        <td>2 Jam</td>
                                                                                        <td>RM 100</td>
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
                                                <h5 class="text-truncate"><a href="#" class="text-dark">Padang Bola Sepak</a></h5>
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
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#infoPB">Info Tempahan</button>
                                                </div>
                                                <div class="modal fade bs-example-modal-lg" id="infoPB" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Info Tempahan Padang Bola Sepak</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Cras mattis consectetur purus sit amet fermentum.
                                                                    Cras justo odio, dapibus ac facilisis in,
                                                                    egestas eget quam. Morbi leo risus, porta ac
                                                                    consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque
                                                                    nisl consectetur et. Vivamus sagittis lacus vel
                                                                    augue laoreet rutrum faucibus dolor auctor.</p>
                                                                <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.
                                                                    Praesent commodo cursus magna, vel scelerisque
                                                                    nisl consectetur et. Donec sed odio dui. Donec
                                                                    ullamcorper nulla non metus auctor
                                                                    fringilla.</p>
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
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="assets/images/companies/img-3.png" alt="" class="avatar-sm mt-2 mb-4">
                                            <div class="media-body">
                                                <h5 class="text-truncate"><a href="#" class="text-dark">Padang Serbaguna</a></h5>
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
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#infoPS">Info Tempahan</button>
                                                </div>
                                                <div class="modal fade bs-example-modal-lg" id="infoPS" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Info Tempahan Padang Serbaguna</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Cras mattis consectetur purus sit amet fermentum.
                                                                    Cras justo odio, dapibus ac facilisis in,
                                                                    egestas eget quam. Morbi leo risus, porta ac
                                                                    consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque
                                                                    nisl consectetur et. Vivamus sagittis lacus vel
                                                                    augue laoreet rutrum faucibus dolor auctor.</p>
                                                                <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.
                                                                    Praesent commodo cursus magna, vel scelerisque
                                                                    nisl consectetur et. Donec sed odio dui. Donec
                                                                    ullamcorper nulla non metus auctor
                                                                    fringilla.</p>
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
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="assets/images/companies/img-4.png" alt="" class="avatar-sm mt-2 mb-4">
                                            <div class="media-body">
                                                <h5 class="text-truncate"><a href="#" class="text-dark">Gelanggang Futsal</a></h5>
                                                <p class="text-muted">
                                                    <i class="mdi mdi-account mr-1"></i> Majlis Perbandaran Sungai Petani
                                            </div>
                                        </div>

                                        <hr class="my-4">

                                        <div class="row text-center">
                                            <div class="col-6">
                                                <div class="text-center">
                                                    <!-- Large modal -->
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#infoGF">Info Tempahan</button>
                                                </div>
                                                <div class="modal fade bs-example-modal-lg" id="infoGF" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Info Tempahan Gelanggang Futsal</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Cras mattis consectetur purus sit amet fermentum.
                                                                    Cras justo odio, dapibus ac facilisis in,
                                                                    egestas eget quam. Morbi leo risus, porta ac
                                                                    consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque
                                                                    nisl consectetur et. Vivamus sagittis lacus vel
                                                                    augue laoreet rutrum faucibus dolor auctor.</p>
                                                                <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.
                                                                    Praesent commodo cursus magna, vel scelerisque
                                                                    nisl consectetur et. Donec sed odio dui. Donec
                                                                    ullamcorper nulla non metus auctor
                                                                    fringilla.</p>
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
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="assets/images/companies/img-5.png" alt="" class="avatar-sm mt-2 mb-4">
                                            <div class="media-body">
                                                <h5 class="text-truncate"><a href="#" class="text-dark"></a>Lain-Lain Tempahan</h5>
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
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#infoLT">Info Tempahan</button>
                                                </div>
                                                <div class="modal fade bs-example-modal-lg" id="infoLT" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title mt-0" id="myLargeModalLabel">Info Lain-Lain Tempahan</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Cras mattis consectetur purus sit amet fermentum.
                                                                    Cras justo odio, dapibus ac facilisis in,
                                                                    egestas eget quam. Morbi leo risus, porta ac
                                                                    consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque
                                                                    nisl consectetur et. Vivamus sagittis lacus vel
                                                                    augue laoreet rutrum faucibus dolor auctor.</p>
                                                                <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.
                                                                    Praesent commodo cursus magna, vel scelerisque
                                                                    nisl consectetur et. Donec sed odio dui. Donec
                                                                    ullamcorper nulla non metus auctor
                                                                    fringilla.</p>
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
                            
                        </div>>
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