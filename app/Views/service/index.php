<style type="text/css">
    .selected {
        background-color: brown;
        color: #FFF;
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
            <div class="row ml-1 mr-1 mt-2 mb-2">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="mb-0" for="exampleInputEmail1">ID User</label>
                                <div class="input-group mb-3">
                                    <input type="text" id="id_costumer" name="id_costumer" class="form-control" readonly>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" data-toggle="modal" data-target="#exampleModal">Pilih User</button>
                                    </div>
                                </div>
                            </div>
                            <!-- modal pilih costumer start -->
                            <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <input id="nama_costumer" type="text" class="form-control input-sm" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="mb-0" for="exampleInputPassword1">No Telp</label>
                                <input id="no_telp" type="text" class="form-control input-sm" readonly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="mb-0" for="exampleInputPassword1">Tgl Terima</label>
                                <input id="tgl_terima" name="tgl_terima" type="date" class="form-control input-sm">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row 1 end -->
            <!-- row 2 Start -->
            <div class="row ml-1 mr-1 mt-2 mb-2">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="mb-0" for="exampleInputPassword1">Type Unit</label>
                                <div class="input-group mb-3">
                                    <select class="custom-select" id="id_type_unit" name="id_type_unit">
                                        <?php foreach ($typeunit as $tu) : ?>
                                            <option value="<?= $tu['id_type_unit']; ?>"><?= $tu['type_unit']; ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="mb-0" for="exampleInputPassword1">Nama Unit</label>
                                <input id="nama_unit" name="nama_unit" type="Text" class="form-control input-sm">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="mb-0" for="exampleInputPassword1">Serial Number</label>
                                <input id="serial_unit" name="serial_unit" type="Text" class="form-control input-sm">
                            </div>
                        </div>
                        <div class="col">
                            <div class="row  ">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="mb-0" for="exampleInputPassword1">Admin</label>
                                        <?php $session = session() ?>
                                        <input name="id_admin" id="id_admin" type="Text" class="form-control input-sm" value="<?php echo $session->get('id_staf') ?>" hidden>
                                        <input name="id_adminfake" id="id_adminfake" type="Text" class="form-control input-sm" value="<?php echo $session->get('nama') ?>" placeholder="" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="mb-0" for="exampleInputPassword1">Teknisi</label>
                                        <div class="input-group mb-3">
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
            <!-- row 1 Start -->
            <div class="row ml-1 mr-1 mt-2 mb-2">
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


                        </div>
                    </div>
                </div>
            </div>
            <!-- row 1 end -->
            <ul class="">
                <button type="submit" class="btn btn-primary btn-lg ml-1 mr-3 mb-3 float-right">Simpan</button>
                <button type="reset" class="btn btn-primary btn-lg ml-3 mr-0 mb-3 float-right">Reset</button>
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
        <div class="row mt-2 mb-2 ml-2 mr-2">
            <div class="col">
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
                                <td align="right" class="<?= $i; ?>"><?= $sv->id_service; ?></td>
                                <td class="<?= $i; ?>"><?= $sv->nama_costumer; ?></td>
                                <td class="<?= $i; ?>"><?= $sv->no_telp; ?></td>
                                <td class="<?= $i; ?>"><?= $sv->nama_unit; ?></td>
                                <td class="<?= $i; ?>"><?= $sv->nama_admin; ?></td>
                                <td class="<?= $i; ?>"><?= $sv->nama_teknisi; ?></td>
                                <td class="<?= $i; ?>"><?= $sv->nama_status; ?></td>
                                <td>
                                    <button type="button" class="<?= $i; ?> btn btn-outline-info btn-sm">Detail</button>
                                    <!-- <button type="button" class="btn btn-primary btn-sm">Small button</button> -->
                                </td>
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
                <!-- script data tables start -->
                <script>
                    $(document).ready(function() {
                        $('#service').DataTable();
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