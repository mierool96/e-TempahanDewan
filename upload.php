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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Halaman Utama</a></li>
                                            <li class="breadcrumb-item active">Halaman Utama</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                           <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Senarai Tempahan</h4>
        
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>No. Tempahan</th>
                                                <th>Senarai Tempahan</th>
                                                <th>Tarikh Mula</th>
                                                <th>Tarikh Habis</th>
                                                <th>Muat Naik Resit Wang Pendahuluan</th>
                                                <th>Muat Naik Resit Pembayaran Penuh</th>
                                                <th>Catatan</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>DK110</td>
                                                <td>Dewan Kenangan</td>
                                                <td>12/3/2021</td>
                                                <td>08/4/2021</td>
                                                <td><input type="file" id="supporting" name="supporting[]" multiple="multiple"><button type="button" class="btn btn-primary  waves-effect waves-light">Hantar</button></td>
                                                <td><input type="file" id="supporting" name="supporting[]" multiple="multiple"><button type="button" class="btn btn-primary  waves-effect waves-light">Hantar</button></td>
                                                <td>Sedang Diproses</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->  

                        
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