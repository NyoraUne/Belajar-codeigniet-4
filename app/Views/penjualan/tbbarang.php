<table id="tbbarang" class="table table-striped table-hover table-sm" style="width:100%">
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($listbarang as $a) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= substr($a->nama_barang, 0, 20) . (strlen($a->nama_barang) > 20 ? '...' : '') ?></td>
                <td><?= $a->nama_kategori; ?></td>
                <td><?= $a->harga; ?></td>
                <td><button type="button" class="btn btn-primary btn-sm mr-2">Detail</button></td>
            </tr>
        <?php endforeach ?>
    </tbody>
    <tfoot class="thead-dark">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </tfoot>
</table>