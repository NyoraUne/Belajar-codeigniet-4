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
                                <th>Nama</th>
                                <th>No Telphone</th>
                                <th>Alamat</th>
                                <th>Status</th>
                                <th>Tgl Bergabung</th>
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
                                    <td><?= $cst->nama; ?></td>
                                    <td><?= $cst->create_at; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>No Telphone</th>
                                <th>Alamat</th>
                                <th>Status</th>
                                <th>Tgl Bergabung</th>
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
                <form method="post" action="tbhwcst">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="input-group-sm mb-1">
                                    <label for="exampleInputPassword1" class="form-label">Nama Costumer</label>
                                    <input id="nama_costumer" name="nama_costumer" type="text" class="form-control" id="exampleInputPassword1" value="<?= old('nama_barang'); ?>">
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group-sm mb-1">
                                    <label for="exampleInputPassword1" class="form-label">No Telp</label>
                                    <input id="no_telp" name="no_telp" type="text" class="form-control" id="exampleInputPassword1" value="<?= old('nama_barang'); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="input-group-sm mb-1">
                            <label for="exampleInputPassword1" class="form-label">Alamat</label>
                            <textarea name="alamat" class="form-control" id="alamat" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm mt-2">Simpan Data</button>
                    </div>
                </form>
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