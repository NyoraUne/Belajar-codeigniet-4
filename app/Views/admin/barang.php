<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- ISI-------------------------------------------------------------------------------- -->


    <div class="row">
        <!-- card table -->
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Data Barang
                </div>

                <div class="card-body">
                    <table id="table1" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th style="display: none;">id barang</th>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>Kategori</th>
                                <th>Hapus Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($datbar as $a) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td style="display: none;"><?= $a->id_barang_jasa; ?></td>
                                    <td><?= $a->nama_barang; ?></td>
                                    <td><?= $a->harga; ?></td>
                                    <td><?= $a->nama_kategori; ?></td>
                                    <td align="center">
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal<?= $a->id_barang_jasa ?>">
                                            Ubah
                                        </button>
                                        <a class="btn btn-danger btn-sm" href="<?php echo base_url('/admin/hapusbarang/' . $a->id_barang_jasa); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                                    </td>
                                </tr>
                                <!-- modal -->
                                <div class="modal fade" id="modal<?= $a->id_barang_jasa ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="editbar" method="post">
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="input-group-sm mb-1">
                                                                <label for="exampleInputEmail1" class="form-label">ID Barang</label>
                                                                <input value="<?= $a->id_barang_jasa ?>" id="id_barang_jasa" name="id_barang_jasa" type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group-sm mb-1">
                                                                <label for="exampleInputPassword1" class="form-label">Nama Barang</label>
                                                                <input value="<?= $a->nama_barang ?>" id="nama_barang" name="nama_barang" type="text" class="form-control" id="exampleInputPassword1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="input-group-sm mb-1">
                                                                <label for="exampleInputEmail1" class="form-label">Harga Barang</label>
                                                                <input value="<?= $a->harga ?>" id="harga" name="harga" type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
                                                            </div>
                                                        </div>
                                                        <div class="col">

                                                        </div>
                                                    </div>

                                                    <label for="exampleInputPassword1" class="form-label">Kategori</label>
                                                    <div class="input-group mb-3">
                                                        <select name="kategori" id="kategori" class="custom-select" id="inputGroupSelect01">
                                                            <?php foreach ($kategori as $b) : ?>
                                                                <option value="<?= $b['id_kategori']; ?>"><?= $b['id_kategori']; ?> | <?= $b['nama_kategori']; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
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
                                <th style="display: none;">id barang</th>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>Kategori</th>
                                <th>Hapus Data</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <!-- card input data         -->
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    Tambah Data Barang
                </div>
                <div class="card-body">

                    <?php
                    $session = session();
                    $error = $session->getFlashdata('error');
                    ?>

                    <?php if ($error) { ?>
                        <p style="color:red">Terjadi Kesalahan:
                        <ul>
                            <?php foreach ($error as $e) { ?>
                                <li><?php echo $e ?></li>
                            <?php } ?>
                        </ul>
                        </p>
                    <?php } ?>

                    <!-- form start     -->
                    <form action="tbhbarang" method="post">
                        <div class="row">
                            <div class="col">
                                <div class="input-group-sm mb-1">
                                    <label for="exampleInputPassword1" class="form-label">Nama Barang</label>
                                    <input id="nama_barang" name="nama_barang" type="text" class="form-control" id="exampleInputPassword1" value="<?= old('nama_barang'); ?>">
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group-sm mb-1">
                                    <label for="exampleInputEmail1" class="form-label">Harga Barang</label>
                                    <input id="harga" name="harga" type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= old('harga'); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">

                            </div>
                            <div class="col">

                            </div>
                        </div>

                        <label for="exampleInputPassword1" class="form-label">Kategori</label>
                        <div class="input-group mb-3">
                            <select name="kategori" id="kategori" class="custom-select" id="inputGroupSelect01">
                                <?php foreach ($kategori as $a) : ?>
                                    <option value="<?= $a['id_kategori']; ?>"><?= $a['id_kategori']; ?> | <?= $a['nama_kategori']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                    <!-- form end     -->
                </div>
            </div>
        </div>
        <!-- card input data         -->

    </div>
    <script>
        $(document).ready(function() {
            $('#table1').DataTable();
        });


        // var table = document.getElementById('table1');

        // for (var i = 1; i < table.rows.length; i++) {
        //     table.rows[i].onclick = function() {
        //         //rIndex = this.rowIndex;
        //         document.getElementById("id_barang").value = this.cells[1].innerHTML;
        //         document.getElementById("nama_barang").value = this.cells[2].innerHTML;
        //         document.getElementById("harga").value = this.cells[3].innerHTML;
        //         document.getElementById("kategori").value = this.cells[4].innerHTML;
        //     };
        // }
    </script>
    <!-- card table -->
    <!-- ISI-------------------------------------------------------------------------------- -->
</div>
<!-- /.container-fluid -->