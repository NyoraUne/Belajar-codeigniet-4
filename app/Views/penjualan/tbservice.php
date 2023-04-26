<div class="modal fade" id="piliservice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Table Service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="table" class="table table-striped table-hover table-sm tb-service" style="width:100%">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID service</th>
                            <th hidden>ID cst</th>
                            <th>Nama</th>
                            <th>Unit</th>
                            <th>Serial</th>
                            <th>Problem</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nocst = 1; ?>
                        <?php foreach ($service as $sv) : ?>
                            <?php $i = 0;
                            if ($sv->id_status_service == 1) {
                                $i = 'text-primary';
                            } else if ($sv->id_status_service == 2) {
                                $i = 'text-warning';
                            } else if ($sv->id_status_service == 3) {
                                $i = 'text-success';
                            } else if ($sv->id_status_service == 4) {
                                $i = 'text-danger';
                            }
                            ?>
                            <tr>
                                <td class="<?= $i; ?>"><?= $sv->id_service; ?></td>
                                <td hidden><?= $sv->id_costumer; ?></td>
                                <td class="<?= $i; ?>"><?= $sv->nama_costumer; ?></td>
                                <td class="<?= $i; ?>"><?= $sv->nama_unit; ?></td>
                                <td class="<?= $i; ?>"><?= $sv->serial_unit; ?></td>
                                <td class="<?= $i; ?>"><?= substr($sv->problem_service, 0, 10) . (strlen($sv->problem_service) > 10 ? '...' : '') ?></td>
                                <td class="<?= $i; ?>"><?= $sv->nama_status; ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot class="thead-dark">
                        <tr>
                            <th>ID service</th>
                            <th hidden>ID cst</th>
                            <th>Nama</th>
                            <th>Unit</th>
                            <th>Serial</th>
                            <th>Problem</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="$('#tambahnota').modal('show');$('#piliservice').modal('hide'); ">Pilih Data</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.tb-service').DataTable();
        $('.tb-service tbody tr').click(function() {
            var row = $(this).closest('tr');
            var id_costumer = $(this).find('td:hidden').text();
            $('#id_cst').val(id_costumer);
            $('#id_service').val(row.find('td:eq(0)').text());
            $('.tb-service tbody tr').removeClass('table-primary');
            $(this).addClass('table-primary');
        });
    });
</script>