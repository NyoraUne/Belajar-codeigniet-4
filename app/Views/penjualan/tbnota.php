<div class="modal fade" id="pilihnota" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="table" class="table table-striped table-hover table-sm tb-nota" style="width:100%">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID Nota</th>
                            <th>Nota Tanggal</th>
                            <th>Nama Costumer</th>
                            <th>Status Pembayaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($nota as $not) : ?>
                            <tr>
                                <th><?= $not->id_nota; ?></th>
                                <th><?= $not->create_at; ?></th>
                                <th><?= $not->nama_costumer; ?></th>
                                <th><?= $not->nama_status_nota; ?></th>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot class="thead-dark">
                        <tr>
                            <th>ID Nota</th>
                            <th>Nota Tanggal</th>
                            <th>Nama Costumer</th>
                            <th>Status Pembayaran</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="$('#pilihnota').modal('hide'); ">Pilih Nota</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.tb-nota').DataTable();
        $('.tb-nota tbody tr').click(function() {
            var row = $(this).closest('tr');
            $('#id_nota').val(row.find('td:eq(0)').text());
            $('.tb-nota tbody tr').removeClass('table-primary');
            $(this).addClass('table-primary');
        });
    });
</script>