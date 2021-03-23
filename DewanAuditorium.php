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
                                    <h4 class="mb-0">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="JenisDA.php">Jenis Tempahan</a></li>
                                            <li class="breadcrumb-item active">Dewan Auditorium</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                             <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Tempahan Dewan Auditorium</h4>

                                        <div id="progrss-wizard" class="twitter-bs-wizard">
                                            <ul class="twitter-bs-wizard-nav nav-justified">
                                                <li class="nav-item">
                                                    <a href="#progress-seller-details" class="nav-link" data-toggle="tab">
                                                        <span class="step-number">01</span>
                                                        <span class="step-title">Maklumat Peribadi</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#progress-company-document" class="nav-link" data-toggle="tab">
                                                        <span class="step-number">02</span>
                                                        <span class="step-title">Maklumat Penggunaan</span>
                                                    </a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="#progress-bank-detail" class="nav-link" data-toggle="tab">
                                                        <span class="step-number">03</span>
                                                        <span class="step-title">Sewaan</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#progress-confirm-detail" class="nav-link" data-toggle="tab">
                                                        <span class="step-number">04</span>
                                                        <span class="step-title">Syarat Penyewaan</span>
                                                    </a>
                                                </li>
                                            </ul>

                                            <div id="bar" class="progress mt-4">
                                                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"></div>
                                            </div>
                                            <div class="tab-content twitter-bs-wizard-tab-content">
                                                <div class="tab-pane" id="progress-seller-details">
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="progress-basicpill-firstname-input">Nama Penuh</label>
                                                                    <input type="text" class="form-control" id="progress-basicpill-firstname-input">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="progress-basicpill-lastname-input">Organisasi/Jabatan/Agensi/Persatuan</label>
                                                                    <input type="text" class="form-control" id="progress-basicpill-lastname-input">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="progress-basicpill-phoneno-input">No. Mykad/Kad Tentera/Kad Polis</label>
                                                                    <input type="text" class="form-control" id="progress-basicpill-phoneno-input" placeholder="" required>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="progress-basicpill-phoneno-input">Nombor Telefon (HP)</label>
                                                                    <input type="text" class="form-control" id="progress-basicpill-phoneno-input" onkeypress="return validateNumber(event)" minlength="10" maxlength="11" required>
                                                                </div>
                                                            </div>
                                                              <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="progress-basicpill-phoneno-input">Nombor Pejabat/Faks</label>
                                                                    <input type="text" class="form-control" id="progress-basicpill-phoneno-input" onkeypress="return validateNumber(event)" minlength="10" maxlength="11" required>
                                                                </div>
                                                            </div>
                                                             <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="progress-basicpill-phoneno-input">Permohonan Adalah Mewakili </label>
                                                                    <select class="form-control">
                                                                        <option>Pilihan</option>
                                                                        <option>Sendiri</option>
                                                                        <option>Agensi Kerajaan</option>
                                                                        <option>Ageni Swasta</option>
                                                                        <option>Kakitangan MPSPK</option>
                                                                        <option>Lain-lain</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                               <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="progress-basicpill-phoneno-input">Jantina</label>
                                                                    <select class="form-control">
                                                                        <option>Pilihan</option>
                                                                        <option>Lelaki</option>
                                                                        <option>Perempuan</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="progress-basicpill-email-input">E-mel</label>
                                                                    <input type="email" class="form-control" id="progress-basicpill-email-input">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label for="progress-basicpill-address-input">Alamat</label>
                                                                    <textarea id="progress-basicpill-address-input" class="form-control" rows="2"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane" id="progress-company-document">
                                                  <div>
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="progress-basicpill-phoneno-input">Tujuan Penggunaan</label>
                                                                    <input type="text" class="form-control" id="tujuan-pengunaan">
                                                                </div>
                                                            </div> 
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="progress-basicpill-email-input">E-mel</label>
                                                                    <input type="email" class="form-control" id="emel">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="example-date-input">Tarikh (Dari)</label>
                                                                    <input class="form-control" type="date" value="" id="example-date-input">
                                                                </div>
                                                            </div> 
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="example-date-input">Tarikh (Hingga)</label>
                                                                    <input class="form-control" type="date" value="" id="example-date-input">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="example-time-input">Masa (Dari)</label>
                                                                    <input class="form-control" type="time" value="2020-03-19" id="example-time-input">
                                                                </div>
                                                            </div> 
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="example-time-input">Masa (Hingga)</label>
                                                                    <input class="form-control" type="time" value="2020-03-19" id="example-time-input">
                                                                </div>
                                                            </div> 
                                                        </div>
                                                        <hr>
                                                    </form>
                                                  </div>
                                                </div>
                                                <div class="tab-pane" id="progress-bank-detail">
                                                    <div>
                                                      <form><br>
                                                    <h1 style="text-align: center;">SEWAAN PERALATAN</h1><br>
                                                          <br><hr>
                                                          <h1 style="text-align: center;">SEWAAN PENGHAWA DINGIN</h1><br>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                  <div class="form-group">
                                                                      <label for="progress-basicpill-namecard-input">Adakah anda ingin menyewa penghawa dingin?</label>
                                                                      <br><br>
                                                                        <select class="form-control">
                                                                            <option>Pilihan</option>
                                                                            <option>YA</option>
                                                                            <option>TIDAK</option>
                                                                        </select>
                                                                    </div>
                                                               </div>
                                                               <div class="col-md-6">
                                                                   <label>Jumlah Jam Sewaan (Per Jam)
                                                                        <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">Info</button>
                                                                        <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog modal-dialog-centered">
                                                                                <div class="modal-content">
                                                                                   <div class="modal-header">
                                                                                        <h5 class="modal-title mt-0" id="myLargeModalLabel">Info Penyewaan Penghawa Dingin</h5>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <div class="card">
                                                                                            <div class="card-body">
                                                                                                <div class="table-responsive">
                                                                                                    <table class="table mb-0">
                                                                                                        <thead class="thead-light">
                                                                                                            <tr>
                                                                                                                <th>Harga</th>
                                                                                                                <th><b>Catatan</b></th>
                                                                                                            </tr>
                                                                                                        </thead>
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <th scope="row">RM 500.00 </th>
                                                                                                                <td>Bagi 3 jam pertama</td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <th scope="row">RM 150.00</th>
                                                                                                                <td>Setiap 1 jam seterusnya</td>
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
                                                                    </label>
                                                                    <input type="text" class="form-control" id="progress-basicpill-card-verification-input" onkeypress="return validateNumber(event)" minlength="0" maxlength="2" required>
                                                                </div>
                                                            </div> 
                                                            <br><br><hr>
                                                          <h1 style="text-align: center;">HARGA SEWAAN</h1><br>
                                                          <div class="row">
                                                              <div class="col-lg-6">
                                                                  <div class="form-group">
                                                                      <label for="progress-basicpill-expiration-input">Jumlah <b>Harga</b> Yang Perlu Dibayar</label>
                                                                      <input type="text" class="form-control" id="progress-basicpill-expiration-input">
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </form>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="progress-confirm-detail">
                                                    <section class="">
                                                        <div class="col-xs-12"><hr>
                                                            <h4>SYARAT-SYARAT AM SEWAAN DEWAN MPSPK BANDAR LAGUNA MERBOK</h4><br>
                                                            <p> 
                                                                Dengan ini saya/kami bersetuju mematuhi segala <font style="font-weight: bold;" color="red">syarat-syarat</font> seperti yang telah ditetapkan seperti di bawah:<br>
                                                            </p>
                                                            <p>i.SYARAT WAJIB: Membuat BAYARAN DEPOSIT bagi tujuan pengesahan tempahan dalam tempoh 7 HARI BERKERJA dan sebagai wang jaminan kebersihan dewan, hartabenda Majlis dan lain-lain.</p>
                                                            <p>ii.SYARAT WAJIB: Membuat BAYARAN PENUH SEWAAN DEWAN satu minggu atau 7 HARI SEBELUM tarikh aktiviti bermula.</p>
                                                            <p>iii.Bayaran</p>
                                                            <p>iv.Kegagalan pihak tuan/puan, membuat bayaran deposit/bayaran sewaan dewan, tempahan dewan akan terbatal dengan sendirinya.</p>
                                                            <p>v.Hanya permohonan yang diluluskan sahaja dibenarkan mengguna dewan MPSPK.</p>
                                                            <p>vi.Kegagalan mematuhi tarikh/masa dengan sendirinya akan dianggap batal dan wang tidak akan dikembalikan.</p>
                                                            <p>vii.LARANGAN KE ATAS PENYEWA:-</p>
                                                            <p>a.Dilarang menyewa semula (meminda hal penyewaan) kepada orang lain.</p>
                                                            <p>b.Dilarang membawa masuk makanan dan minuman yang haram disisi agama islam.</p>
                                                            <p>c.Dilarang memasak di dalam dewan atau melakukan perkara yang boleh merosakkan/mengotorkan dewan.</p>
                                                            <p>d.Dilarang merokok di dalam kawasan dewan.</p>
                                                            <p>e.Dilarang membawa patung atau berhala nagi tujuan keagamaan.</p>
                                                            <p>f.Dilarang mengajurkan aktiviti politik,perjudian dan lain-lain aktiviti yang diharamkan oleh kerajaan.</p>
                                                            <p>g.Dilarang menyambungkan talian elektrik keluar daripada dewan tanpa kebenaran pihak MPSPK.</p>
                                                            <p>ix.Bagi tujuan pementasan dan persembahan perlu mendapatkan kelulusan bertulis daripada Pejabat Daerah dan Tanah Kuala Muda.</p>
                                                            <p>x. Berpakaian sopan dan tidak menjolok mata sepanjang program berjalan.</p>
                                                            <p>xi. Bagi penganjuran ekspo perlu mendapatkan kelulusan permit perniagaan sementara dari Bah. Pelesenan/Jab. Kesihatan MPSKP.</p>
                                                            <p>xii. MPSPK tidak bertanggungjawab atas sebarang kemalangan / kecederaan yang berlaku ke atas mana-mana individu.</p>
                                                            <p>xiii.MPSPK tidak bertanggungjawab atas sebarang kerosakan/kehilangan kenderaan yang diletakan di kawasan letak kereta.</p>
                                                            <p>xiv.Wang deposit akan ditahan sekiranya berlaku kehilangan berlaku kehilangan peralatan,kerosakan harta benda Majlis.</p>
                                                            <p>xv.Wang deposit akan ditahan sekiranya dewan tidak dibersihkan sempurna selepas penggunaan.</p>
                                                            <p>xvi. Sebarang kerosakan atau kehilangan peralatan dewan perlulah diganti.</p>
                                                            <p>xvii.Pihak Majlis berhak memotong wang deposit atau melucutkan hak wang deposit tersebut akibat pelanggaran syarat.</p>
                                                            <p>xviii.Wang pertaruhan akan dimasukan ke dalam akuan hasil Majlis akibat kesalahan di atas.</p>
                                                            <p>xix. Wang deposit akan dikembalikan setelah semua syarat-syarat yang dikenakan samaada secara bertulis atau lisan dipatuhi.</p>
                                                            <p>xx. Untuk tuntutan balik wang deposit, sila lengkapkan borang EFT.</p>
                                                            <p>xxi.Yang Dipertua MPSPK boleh mengikut budi bicaranya meminda jadual dari semasa ke semasa.</p>
                                                            <p>xxii.Pihak MPSPK berhak membatalkan kebenaran penggunaan dewan atas sebab-sebab yang tidak dapat dielakan pada bila-bila masa tanpa sebarang notis terlebih dahulu.</p>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                <li class="previous"><a href="#">Kembali</a></li>
                                                <li class="next"><a href="#">Seterusnya</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>   
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
<script type="text/javascript">
function validateNumber(event) {
    var key = window.event ? event.keyCode : event.which;
    if (event.keyCode === 8 || event.keyCode === 46) {
        return true;
    } else if ( key < 48 || key > 57 ) {
        return false;
    } else {
        return true;
    }
};
</script>
<?php
include("footer.php")
?>