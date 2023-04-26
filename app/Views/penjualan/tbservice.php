<div class="modal fade" id="piliservice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="table" class="table table-striped table-hover table-sm" style="width:100%">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>No Telp </th>
                            <th>Status </th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nocst = 1; ?>
                        <?php foreach ($cst as $cs) : ?>
                            <tr>
                                <td style="width: 10px;"><?= $cs->id_costumer; ?></td>
                                <td><?= $cs->nama_costumer; ?></td>
                                <td><?= $cs->no_telp; ?></td>
                                <td><?= $cs->nama; ?></td>
                                <td><?= substr($cs->alamat, 0, 10) . (strlen($cs->alamat) > 10 ? '...' : '') ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>No Telp </th>
                            <th>Status </th>
                            <th>Alamat</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="$('#tambahnota').modal('show');$('#piliservice').modal('hide'); ">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>