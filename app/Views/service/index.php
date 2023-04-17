<style type="text/css">
    .selected {
        background-color: brown;
        color: #FFF;
    }

    .row-bottom-margin {
        margin-bottom: -10px;
    }
</style>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- card form input data start -->
    <div class="card">
        <div class="card-header">
            Penerimaan Service
        </div>
        <form action="tbhservice" method="post">
            <!-- row 1 Start -->
            <div class="row ml-1 mr-1 mt-2 row-bottom-margin">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="mb-0" for="exampleInputEmail1">ID User</label>
                                <div class="input-group mb-3">
                                    <input type="text" id="id_costumer" name="id_costumer" class="form-control" readonly>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" data-toggle="modal" data-target="#costumermodal">
                                            &nbsp;&nbsp;<i class="fa-solid fa-magnifying-glass-plus"></i>&nbsp;&nbsp;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- modal pilih costumer start -->
                            <div class="modal fade " id="costumermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- isi modal, tabel costumer -->
                                            <table id="costumer" class="display" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Nama</th>
                                                        <th>No Telphone</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($costumer as $cst) : ?>
                                                        <tr>
                                                            <td><?= $cst->id_costumer; ?></td>
                                                            <td><?= $cst->nama_costumer; ?></td>
                                                            <td><?= $cst->no_telp; ?></td>
                                                            <td><?= $cst->nama; ?></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>ID costumer</th>
                                                        <th>Nama</th>
                                                        <th>No Telphone</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <!-- script data tables start -->
                                            <script>
                                                $(document).ready(function() {
                                                    $('#costumer').DataTable();
                                                });


                                                var table = document.getElementById('costumer');

                                                for (var i = 1; i < table.rows.length; i++) {
                                                    table.rows[i].onclick = function() {
                                                        //rIndex = this.rowIndex;
                                                        document.getElementById("id_costumer").value = this.cells[0].innerHTML;
                                                        document.getElementById("nama_costumer").value = this.cells[1].innerHTML;
                                                        document.getElementById("no_telp").value = this.cells[2].innerHTML;
                                                    };
                                                }

                                                var table = document.getElementById('costumer');
                                                var selected = table.getElementsByClassName('selected');
                                                table.onclick = highlight;

                                                function highlight(e) {
                                                    if (selected[0]) selected[0].className = '';
                                                    e.target.parentNode.className = 'selected';
                                                }

                                                function fnselect() {
                                                    var element = document.querySelectorAll('.selected');
                                                    if (element[0] !== undefined) { //it must be selected
                                                    }
                                                }
                                            </script>
                                            <!-- script data tables end-->
                                            <!-- isi modal, tabel costumer -->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- modal pilih costumer end -->
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="mb-0" for="exampleInputPassword1">Nama User</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                                    </div>
                                    <input id="nama_costumer" type="text" class="form-control input-sm" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="mb-0" for="exampleInputPassword1">No Telp</label>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-phone"></i></span>
                                    </div>
                                    <input id="no_telp" type="text" class="form-control input-sm" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="mb-0" for="exampleInputPassword1">Tgl Terima</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-calendar-days"></i></i></span>
                                    </div>
                                    <input id="tgl_terima" name="tgl_terima" type="datetime" class="form-control input-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row 1 end -->
            <!-- row 2 Start -->
            <div class="row ml-1 mr-1 mt-2 row-bottom-margin">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="mb-0" for="exampleInputPassword1">Type Unit</label>
                                <div class="input-group mb-3">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i id="typeunit" class="fa-solid fa-laptop"></i></span>
                                        </div>
                                        <select class="custom-select" id="id_type_unit" name="id_type_unit">
                                            <?php foreach ($typeunit as $tu) : ?>
                                                <option value="<?= $tu['id_type_unit']; ?>"><?= $tu['type_unit']; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <script>
                                var select = document.getElementById('id_type_unit');
                                var icon = document.getElementById('typeunit');

                                select.addEventListener('change', function() {
                                    if (select.value == '1') {
                                        icon.className = 'fa-solid fa-laptop';
                                    } else if (select.value == '2') {
                                        icon.className = 'fa-solid fa-mobile-android';
                                    } else {
                                        icon.className = 'fa-solid fa-question';
                                    }
                                });
                            </script>

                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="mb-0" for="exampleInputPassword1">Nama Unit</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-laptop-medical"></i></span>
                                    </div>
                                    <input id="nama_unit" name="nama_unit" type="Text" class="form-control input-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="mb-0" for="exampleInputPassword1">Serial Number</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-list-ol"></i></span>
                                    </div>
                                    <input id="serial_unit" name="serial_unit" type="Text" class="form-control input-sm">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row  ">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="mb-0" for="exampleInputPassword1">Admin</label>
                                        <?php $session = session() ?>
                                        <input name="id_admin" id="id_admin" type="Text" class="form-control input-sm" value="<?php echo $session->get('id_staf') ?>" hidden>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                                            </div>
                                            <input name="id_adminfake" id="id_adminfake" type="Text" class="form-control input-sm" value="<?php echo $session->get('nama') ?>" placeholder="" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="mb-0" for="exampleInputPassword1">Teknisi</label>
                                        <div class="input-group mb-3">

                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                                            </div>
                                            <select class="custom-select" id="id_teknisi" name="id_teknisi">
                                                <?php foreach ($teknisi as $tech) : ?>
                                                    <option value="<?= $tech['id_staf']; ?>"><?= $tech['nama']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row 2 end -->
            <!-- row 3 Start -->
            <div class="row ml-1 mr-1 mt-2 row-bottom-margin">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="mb-0" for="exampleInputEmail1">Problem</label>
                                <div class="input-group mb-3">
                                    <textarea class="form-control" id="problem_service" name="problem_service" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="mb-0" for="exampleInputEmail1">Catatan</label>
                                <div class="input-group mb-3">
                                    <textarea class="form-control" id="catatan_service" name="catatan_service" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="mb-0" for="exampleInputEmail1">Kelengkapan</label>
                                <div class="input-group mb-3">
                                    <textarea class="form-control" id="kelengkapan_service" name="kelengkapan_service" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <br>
                            <button type="submit" class="btn btn-primary mb-4" style="width: 100%;">Simpan</button><br>
                            <button type="reset" class="btn btn-primary" style="width: 100%; position: relative; bottom: 0px;">Reset</button>


                        </div>
                    </div>
                </div>
            </div>
            <!-- row 3 end -->
            <ul class="">
            </ul>
        </form>
    </div>
    <!-- card form input data end -->
    <!-- card form Table Service start -->
    <div class="card mt-2">
        <div class="card-header">
            Table Service
        </div>
        <!-- isi card start -->
        <div class="row mt-2 ml-2 mr-2 row-bottom-margin">
            <div class="col">
                <!-- table service start -->
                <table id="service" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID Service</th>
                            <th>Nama Cst</th>
                            <th>No Telp</th>
                            <th>Nama Unit</th>
                            <th>Admin</th>
                            <th>Teknisi</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($service as $sv) : ?>
                            <?php $i = 0;
                            if ($sv->id_status_service == 1) {
                                $i = 'text-primary';
                            } else if ($sv->id_status_service == 2) {
                                $i = 'text-warning';
                            } else if ($sv->id_status_service == 3) {
                                $i = 'text-success';
                            } else if ($sv->id_status_service == 4) {
                                $i = 'text-danger';
                            }
                            ?>
                            <tr>
                                <td align="right" class="<?= $i; ?>">SV <?= $sv->id_service; ?></td>
                                <td class="<?= $i; ?>"><?= $sv->nama_costumer; ?></td>
                                <td class="<?= $i; ?>"><?= $sv->no_telp; ?></td>
                                <td class="<?= $i; ?>"><?= $sv->nama_unit; ?></td>
                                <td class="<?= $i; ?>"><?= $sv->nama_admin; ?></td>
                                <td class="<?= $i; ?>"><?= $sv->nama_teknisi; ?></td>
                                <td class="<?= $i; ?>"><?= $sv->nama_status; ?></td>
                                <td>

                                    <button type="button" class="<?= $i; ?> btn btn-outline-info btn-sm" data-toggle="modal" data-target="#detailmod<?= $sv->id_service; ?>">Detail</button>
                                    <!-- <button type="button" class="btn btn-primary btn-sm">Small button</button> -->
                                </td>
                                <!-- modal detail start -->
                                <!-- Modal -->
                                <div class="modal fade" id="detailmod<?= $sv->id_service; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">ID Service "<?= $sv->id_service; ?>"</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- isi modal start -->
                                                <form action="" method="post">
                                                    <!-- Row 1     -->
                                                    <div class="row row-bottom-margin">
                                                        <div class="col">
                                                            <div class="mb-3 input-group-sm">
                                                                <label class="form-label mb-0">ID Costumer</label>
                                                                <input type="Text" class="form-control" value="<?= $sv->id_costumer; ?>" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3 input-group-sm">
                                                                <label class="form-label mb-0">Nama Costumer</label>
                                                                <input type="Text" class="form-control" value="<?= $sv->nama_costumer; ?>" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3 input-group-sm">
                                                                <label class="form-label mb-0">No Telp</label>
                                                                <input type="Text" class="form-control" value="<?= $sv->no_telp; ?>" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3 input-group-sm">
                                                                <label class="form-label mb-0">Tgl Di Terima</label>
                                                                <input type="Text" class="form-control" value="<?= $sv->tgl_terima; ?>" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- row 1 end -->
                                                    <!-- Row 2     -->
                                                    <div class="row row-bottom-margin">
                                                        <div class="col">
                                                            <div class="mb-3 input-group-sm">
                                                                <label class="form-label mb-0">Nama Unit</label>
                                                                <input type="Text" class="form-control" value="<?= $sv->nama_unit; ?>" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3 input-group-sm">
                                                                <label class="form-label mb-0">Serial Number</label>
                                                                <input type="Text" class="form-control" value="<?= $sv->serial_unit; ?>" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3 input-group-sm">
                                                                <label class="form-label mb-0">Type Unit</label>
                                                                <input type="Text" class="form-control" value="<?= $sv->type_unit; ?>" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3 input-group-sm">
                                                                <label class="form-label mb-0">Tgl Di kembalikan</label>
                                                                <input type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- row 2 end -->
                                                    <!-- row 3 Start -->
                                                    <div class="row row-bottom-margin">
                                                        <div class="col">
                                                            <div class="mb-3 input-group-sm">
                                                                <label class="form-label mb-0">Problem</label>
                                                                <textarea class="form-control" id="problem_service" name="problem_service" rows="3" readonly><?= $sv->problem_service; ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3 input-group-sm">
                                                                <label class="form-label mb-0">Catatan</label>
                                                                <textarea class="form-control" id="problem_service" name="problem_service" rows="3" readonly><?= $sv->catatan_service; ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3 input-group-sm">
                                                                <label class="form-label mb-0">Kelengkapan</label>
                                                                <textarea class="form-control" id="problem_service" name="problem_service" rows="3" readonly><?= $sv->kelengkapan_service; ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3 input-group-sm">
                                                                <label class="form-label mb-0">Solusi</label>
                                                                <textarea class="form-control" id="problem_service" name="problem_service" rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- row 3 end -->
                                                    <!-- Row 4     -->
                                                    <div class="row row-bottom-margin">
                                                        <div class="col">
                                                            <div class="mb-3 input-group-sm">
                                                                <label class="form-label mb-0">Status</label>
                                                                <input type="Text" class="form-control <?= $i; ?>" value="<?= $sv->nama_status; ?>" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3 input-group-sm">
                                                                <label class="form-label mb-0">Admin Penerim</label>
                                                                <input type="Text" class="form-control" value="<?= $sv->nama_admin; ?>" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3 input-group-sm">
                                                                <label class="form-label mb-0">Teknisi Penanggung Jawab</label>
                                                                <input type="Text" class="form-control" value="<?= $sv->nama_teknisi; ?>" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3 input-group-sm">
                                                                <label class="form-label mb-0">Admin Pengembalian Service</label>
                                                                <input name="id_admin" id="id_admin" type="Text" class="form-control input-sm" value="<?php echo $session->get('id_staf') ?>" hidden>
                                                                <input name="id_adminfake" id="id_adminfake" type="Text" class="form-control input-sm" value="<?php echo $session->get('nama') ?>" placeholder="" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- row 4 end -->
                                                    <!-- Row 1     -->
                                                    <div class="row row-bottom-margin">
                                                        <div class="col">
                                                            <div class="mb-3 input-group-sm">
                                                                <label class="form-label mb-0">Nota</label>
                                                                <button type="button" class="btn btn-outline-dark btn-sm" style="width: 100%;" data-toggle="modal" onclick="$('#detailmod<?= $sv->id_service; ?>').modal('hide');$('#nota<?= $sv->id_service; ?>').modal('show'); ">List Nota</button>
                                                            </div>
                                                        </div>

                                                        <div class="col">
                                                            <div class="mb-3 input-group-sm">
                                                                <label class="form-label mb-0">Uang Di Terima</label>
                                                                <input type="Text" class="form-control" value="<?= $sv->nama_costumer; ?>" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3 input-group-sm">
                                                                <label class="form-label mb-0">Uang Kembalian</label>
                                                                <input type="Text" class="form-control" value="<?= $sv->no_telp; ?>" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3 input-group-sm">
                                                                <label class="form-label mb-0">Total Biaya</label>
                                                                <input type="Text" class="form-control" value="<?= $sv->tgl_terima; ?>" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- row 1 end -->
                                                </form>
                                                <!-- isi modal end -->
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- modal detail end -->
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID Service</th>
                            <th>Nama Cst</th>
                            <th>No Telp</th>
                            <th>Nama Unit</th>
                            <th>Admin</th>
                            <th>Teknisi</th>
                            <th>Status</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot>
                </table>
                <!-- table service End -->
                <?php foreach ($service as $sv) : ?>
                    <!-- modal nota start -->
                    <div class="modal fade" id="nota<?= $sv->id_service; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">ID Service <?= $sv->id_service; ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- table nota start -->
                                    <table id="nota" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011-04-25</td>
                                                <td>$320,800</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <!-- table nota end -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" onclick="$('#detailmod<?= $sv->id_service; ?>').modal('show');$('#nota<?= $sv->id_service; ?>').modal('hide'); ">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- modal end -->
                <!-- script data tables start -->
                <script>
                    $(document).ready(function() {
                        $('#service').DataTable();
                    });
                    $(document).ready(function() {
                        $('#nota').DataTable();
                    });
                </script>
                <!-- script data tables end-->
                <!-- isi card end -->
            </div>
        </div>
    </div>
    <!-- card form Table Service End -->


</div>
<!-- /.container-fluid -->