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
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th style="display: none;">id barang</th>
                                <th>No</th>
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
                                    <td style="display: none;"><?= $a->id_barang_jasa; ?></td>
                                    <td><?= $i++; ?></td>
                                    <td><?= $a->nama_barang; ?></td>
                                    <td><?= $a->harga; ?></td>
                                    <td><?= $a->nama_kategori; ?></td>
                                    <td align="center"><button type="button" class="btn btn-danger btn-sm">Hapus Data</button></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th style="display: none;">id barang</th>
                                <th>No</th>
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
                    Tambah Hapus Dan Ubah Data Barang
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
                                    <label for="exampleInputEmail1" class="form-label">ID Barang</label>
                                    <input name="id_barang" type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group-sm mb-1">
                                    <label for="exampleInputPassword1" class="form-label">Nama Barang</label>
                                    <input name="nama_barang" type="text" class="form-control" id="exampleInputPassword1" value="<?= old('nama_barang'); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="input-group-sm mb-1">
                                    <label for="exampleInputEmail1" class="form-label">Harga Barang</label>
                                    <input name="harga" type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= old('harga'); ?>">
                                </div>
                            </div>
                            <div class="col">

                            </div>
                        </div>

                        <label for="exampleInputPassword1" class="form-label">Kategori</label>
                        <div class="input-group mb-3">
                            <select name="kategori" class="custom-select" id="inputGroupSelect01">
                                <?php foreach ($kategori as $a) : ?>
                                    <option value="<?= $a['id_kategori']; ?>"><?= $a['id_kategori']; ?> | <?= $a['nama_kategori']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <!-- form end     -->
                </div>
            </div>
        </div>
        <!-- card input data         -->

    </div>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <!-- card table -->
    <!-- ISI-------------------------------------------------------------------------------- -->
</div>
<!-- /.container-fluid -->