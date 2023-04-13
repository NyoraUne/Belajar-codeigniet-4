<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($datacst as $cst) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $cst->nama_costumer; ?></td>
                                    <td><?= $cst->no_telp; ?></td>
                                    <td><?= $cst->alamat; ?></td>
                                    <td><?= $cst->role; ?></td>
                                    <td><?= $cst->create_at; ?></td>
                                </tr>
                            <?php endforeach; ?>
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
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="input-group-sm mb-1">
                                <label for="exampleInputPassword1" class="form-label">Nama Costumer</label>
                                <input id="nama_barang" name="nama_barang" type="text" class="form-control" id="exampleInputPassword1" value="<?= old('nama_barang'); ?>">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group-sm mb-1">
                                <label for="exampleInputPassword1" class="form-label">No Telp</label>
                                <input id="nama_barang" name="nama_barang" type="text" class="form-control" id="exampleInputPassword1" value="<?= old('nama_barang'); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="input-group-sm mb-1">
                        <label for="exampleInputPassword1" class="form-label">Alamat</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="button" class="btn btn-primary btn-sm mt-2">Small button</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
<!-- /.container-fluid -->