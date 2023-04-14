<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- card form input data start -->
    <div class="card">
        <div class="card-header">
            Penerimaan Service
        </div>
        <form action="" method="post">
            <!-- row 1 Start -->
            <div class="row ml-1 mr-1 mt-2 mb-2">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="mb-0" for="exampleInputEmail1">ID User</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" readonly>
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
                                            </script>
                                            <!-- script data tables end-->
                                            <!-- isi modal, tabel costumer -->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- modal pilih costumer end -->
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="mb-0" for="exampleInputPassword1">Nama User</label>
                                <input type="text" class="form-control input-sm" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="mb-0" for="exampleInputPassword1">No Telp</label>
                                <input type="text" class="form-control input-sm" readonly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="mb-0" for="exampleInputPassword1">Tgl Terima</label>
                                <input type="date" class="form-control input-sm">
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
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>Laptop</option>
                                        <option value="1">Handphone</option>
                                        <option value="2">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="mb-0" for="exampleInputPassword1">Nama Unit</label>
                                <input type="Text" class="form-control input-sm">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="mb-0" for="exampleInputPassword1">Serial Number</label>
                                <input type="Text" class="form-control input-sm">
                            </div>
                        </div>
                        <div class="col">
                            <div class="row  ">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="mb-0" for="exampleInputPassword1">Admin</label>
                                        <input type="Text" class="form-control input-sm" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="mb-0" for="exampleInputPassword1">Teknisi</label>
                                        <div class="input-group mb-3">
                                            <select class="custom-select" id="inputGroupSelect01">
                                                <option selected>Laptop</option>
                                                <option value="1">Handphone</option>
                                                <option value="2">Other</option>
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
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="mb-0" for="exampleInputEmail1">Catatan</label>
                                <div class="input-group mb-3">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
                <button type="button" class="btn btn-primary btn-lg ml-3 mr-3 mb-3 float-right">Simpan</button>
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
                            <td>Donna Snider</td>
                            <td>Customer Support</td>
                            <td>New York</td>
                            <td>27</td>
                            <td>2011-01-25</td>
                            <td>$112,000</td>
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