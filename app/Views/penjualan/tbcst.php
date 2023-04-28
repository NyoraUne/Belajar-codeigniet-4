<div class="modal fade" id="pilihcst" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Table costumer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="table" class="table table-striped table-hover table-sm tb-cst" style="width:100%">
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
                <button type="button" class="btn btn-primary" onclick="$('#tambahnota').modal('show');$('#pilihcst').modal('hide'); ">Pilih Data</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.tb-cst').DataTable();
        $('.tb-cst tbody tr').click(function() {
            var row = $(this).closest('tr');
            $('#id_cst').val(row.find('td:eq(0)').text());
            $('.tb-cst tbody tr').removeClass('table-primary');
            $(this).addClass('table-primary');
        });
    });
</script>