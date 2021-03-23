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
                                        <h4 class="mb-0">Halaman Utama</h4>

                                        <div class="page-title-right">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="index.php">Halaman Utama</a></li>
                                                <li class="breadcrumb-item active">Halaman Utama</li>
                                            </ol>
                                        </div>

                                    </div>
                                </div>
                            </div>
                           <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Lokasi Dewan</h4>
        
                                        <div id="gmaps-markers" class="gmaps"></div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © MPSPK.
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