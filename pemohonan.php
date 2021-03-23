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
                                            <li class="breadcrumb-item"><a href="index.php">Halaman Utama</a></li>
                                            <li class="breadcrumb-item active">Dewan Kenangan</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                             <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Pemohonan Balik Wang Taruhan</h4>

                                        <div id="progrss-wizard" class="twitter-bs-wizard">
                                            <ul class="twitter-bs-wizard-nav nav-justified">
                                                <li class="nav-item">
                                                    <a href="#progress-seller-details" class="nav-link" data-toggle="tab">
                                                        <span class="step-number">01</span>
                                                        <span class="step-title">Maklumat Pemohon</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#progress-company-document" class="nav-link" data-toggle="tab">
                                                        <span class="step-number">02</span>
                                                        <span class="step-title">Maklumat Sewaan</span>
                                                    </a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="#progress-bank-detail" class="nav-link" data-toggle="tab">
                                                        <span class="step-number">03</span>
                                                        <span class="step-title">Maklumat Akaun Bank</span>
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
                                                                    <div class="form-group">
                                                                        <label for="progress-basicpill-phoneno-input">No. Mykad/Kad Tentera/Kad Polis</label>
                                                                        <input type="text" class="form-control" id="progress-basicpill-phoneno-input" placeholder="" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
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
                                                                    <label for="progress-basicpill-email-input">E-mel</label>
                                                                    <input type="email" class="form-control" id="progress-basicpill-email-input">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
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
                                                        <form><br>
                                                          <h1 style="text-align: center;">MAKLUMAT DEWAN YANG DISEWA</h1><br>
                                                          <div class="row">
                                                            <div class="box box-solid">
                                                                <div class="box-body text-left">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <button type="button" class="btn btn-primary" id="tambah" name="tambah" style="margin-left: 88%">Tambah
                                                                            </button><br><br>
                                                                            <div class="col-md-2">
                                                                            </div>
                                                                                <div class="box-body" >
                                                                                    <table class="table table-bordered" id="jadualsewa" name="jadualsewa">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th style="min-width: 550px;">Jenis Dewan</th>
                                                                                                <th style="min-width: 550px;">No. Bil/Resit</th>
                                                                                                <th style="min-width: 350px;">Jumlah</th>
                                                                                                <th style="min-width: 200px;">Action</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                        </tbody>
                                                                                        <tfoot>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <select type="name" class="form-control" id="jenis" name=resit[jenis][]>
                                                                                                        <option></option>
                                                                                                            <option value= "">Dewan Kenangan</option>
                                                                                                            <option value= "">Dewan Bankuet</option>
                                                                                                            <option value= "">Dewan Auditorium</option>
                                                                                                            <option value= "">Dewan Tikam Batu</option>
                                                                                                            <option value= "">Dewan Perdana Heights</option>
                                                                                                            <option value= "">Dewan Bandar Laguna Merbok</option>
                                                                                                            <option value= "">Dewan Perdana Dewan Jeniang</option>
                                                                                                    </select>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <input type="text" id="noresit" name="resit[noresit][]" placeholder="" class="form-control">
                                                                                                </td>
                                                                                                 <td>
                                                                                                    <input type="text" id="jumlah" name="resit[jumlah][]" placeholder="" class="form-control">
                                                                                                </td>
                                                                                                <td></td>
                                                                                            </tr>                     
                                                                                    </tfoot>
                                                                                </table>                                                        
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><br><br>
                                                        </div>
                                                      </form>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="progress-bank-detail">
                                                    <div>
                                                      <form><br>
                                                        <h1 style="text-align: center;">AKAUN BANK</h1><br>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="progress-basicpill-firstname-input">Nama Bank</label>
                                                                    <select class="form-control">
                                                                        <option>Jenis Bank</option>
                                                                        <option>Affin Bank</option>
                                                                        <option>Alliance Bank</option>
                                                                        <option>Ambank</option>
                                                                        <option>CIMB</option>
                                                                        <option>Hong Leong Bank</option>
                                                                        <option>Maybank</option>
                                                                        <option>Public Bank</option>
                                                                        <option>RHB Bank</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label for="progress-basicpill-phoneno-input">No. Akaun Bank</label>
                                                                        <input type="text" class="form-control" id="no-akaun" placeholder="Pastikan No. akaun adalah tepat" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                          <br><hr><br>
                                                          <h1 style="text-align: center;">PENGAKUAN PENYEWA</h1><br>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div>
                                                                        <strong>Saya mengaku bahawa semua peralatan dewan MPSPK berada dalam keadaan baik dan dewan telah dibersihkan dengan sempurna  selepas tamat program.
                                                                        </strong><input type="checkbox" name="agree">
                                                                    </div>      
                                                                </div>
                                                            </div> 
                                                      </form>
                                                    </div>
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

$(document).ready(function() {
            $(document).on('click', '#tambah', function(e) {
            AddRow5(
                $("#jenis").val(), 
                $("#noresit").val(),
                $("#jumlah").val(),
            );
            $("#jenis").val("");
            $("#noresit").val("");
            $("#jumlah").val("");
        });
    });


       function AddRow5(jenis,noresit,jumlah) {
        var tBody = $("#jadualsewa> tbody")[0];
        //Add Row.
        row = tBody.insertRow(-1);
        
        //Add qualification.
        cell = $(row.insertCell(-1));
        cell.html("<select type='type' class='form-control' name='resit[titlexperience][]' value='"+jenis+"'>");
        //Add institution.
        cell = $(row.insertCell(-1));
        cell.html("<input type='type' class='form-control'  name='resit[noresit][]' value='"+noresit+"'>");
        //Add duration.
        cell = $(row.insertCell(-1));
        cell.html("<input type='type' class='form-control' name='resit[jumlah][]' value='"+jumlah+"'>");
        cell = $(row.insertCell(-1));
        var btnRemove = $("<input />");
        btnRemove.attr("type", "button");
        btnRemove.attr("class","remove btn btn-danger");
        // btnRemove.attr("onclick", "Remove(this);");
        btnRemove.val("Padam");
        cell.append(btnRemove);
    };

    $(document).ready(function() {
        $(document).on('click', '.remove', function() {
            // $("#modalDelete").modal('show');

            var row = $(this).closest("TR");
            var name = $("TD", row).eq(0).html();
            // if (confirm("Are you sure you want to delete this? ")) {
                $(row).remove();
            // }
        });
    });

    $(document).ready(function(){  
        var i=1; 
        $('#tambah').click(function(){
            i++;
            $('#tablehistory > tbody').append(`<tr>
                <td><input type="text" id="titlexperience" name="titlexperience" placeholder="" class="form-control"></td>
                <td><input type="text" id="type" name="type" placeholder="" class="form-control"></td>
                <td> <input type="text" id="field" name="field" placeholder="" class="form-control">></td>
            </tr>`);
        });
    });

</script>
<?php
include("footer.php")
?>