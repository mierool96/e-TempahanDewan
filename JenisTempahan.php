
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
                                    <h4 class="mb-0">Jenis Tempahan</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="index.php">Halaman Utama</a></li>
                                            <li class="breadcrumb-item active">Jenis Tempahan</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <a href="SenaraiDewan.php"><img class="card-img-top" src="assets/images/DK.jpg" alt="Card image cap"></a>
                                            <!--<img class="service-1">-->
                                    <div class="card-body">
                                        <div class="text-center">
                                            <div class="media-body">
                                                <h5 class="text-truncate"><a href="tempahan.php" class="text-dark">Dewan Tempahan</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <a href="SenaraiKompleks.php"><img src="assets/images/companies/img-2.png" alt="" class="avatar-sm mt-2 mb-4"></a>
                                            <div class="media-body">
                                                <h5 class="text-truncate"><a href="SenaraiKompleks.php" class="text-dark">Kompleks Sukan</a></h5>
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