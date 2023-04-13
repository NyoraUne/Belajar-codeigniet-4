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
                                <th>Aksi</th>
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
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit<?= $cst->id_costumer; ?>">Ubah</button>
                                        <a class="btn btn-danger btn-sm" href="<?php echo base_url('/costumer/hapuscst/' . $cst->id_costumer); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="edit<?= $cst->id_costumer; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- isi modal -->

                                                <form action="editcst" method="post">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="input-group-sm mb-1">
                                                                <label for="exampleInputPassword1" class="form-label">ID Costumer</label>
                                                                <input id="id_costumer" name="id_costumer" type="text" class="form-control" id="exampleInputPassword1" value="<?= $cst->id_costumer; ?>" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group-sm mb-1">
                                                                <label for="exampleInputPassword1" class="form-label">Bergabung</label>
                                                                <input id="no_telp" name="no_telp" type="text" class="form-control" id="exampleInputPassword1" value="<?= $cst->create_at; ?>" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="input-group-sm mb-1">
                                                                <label for="exampleInputPassword1" class="form-label">Nama Costumer</label>
                                                                <input id="nama_costumer" name="nama_costumer" type="text" class="form-control" id="exampleInputPassword1" value="<?= $cst->nama_costumer; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group-sm mb-1">
                                                                <label for="exampleInputPassword1" class="form-label">No Telp</label>
                                                                <input id="no_telp" name="no_telp" type="text" class="form-control" id="exampleInputPassword1" value="<?= $cst->no_telp; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="input-group-sm mb-1">
                                                        <label for="exampleInputPassword1" class="form-label">Alamat</label>
                                                        <textarea name="alamat" class="form-control" id="alamat" rows="3"><?= $cst->alamat; ?></textarea>
                                                    </div>
                                                    <!-- isi modal -->
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Save changes</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- modal end -->
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>No Telphone</th>
                                <th>Alamat</th>
                                <th>Status</th>
                                <th>Aksi</th>
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