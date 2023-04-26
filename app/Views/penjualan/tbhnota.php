<?php $session = session() ?>
<div class="modal fade" id="tambahnota" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Nota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- isi modal -->
                <form action="simpnota" method="post">
                    <div class="row">
                        <div class="col">
                            <label class="mb-0" for="">ID Service</label>
                            <div class="input-group mb-2 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">ID_</span>
                                </div>
                                <input name="id_service" type="text" id="id_service" class="form-control" data-toggle="tooltip" data-placement="top" title="Biarkan Kosong Jika Tidak Ada Service" readonly>
                                <div class="input-group-prepend">
                                    <button type="button" class="btn btn-outline-secondary" onclick="$('#tambahnota').modal('hide');$('#piliservice').modal('show'); "><i class="fa-solid fa-magnifying-glass"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label class="mb-0" for="">ID Costumer</label>
                            <div class="input-group mb-2 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-id-card"></i></span>
                                </div>
                                <input name="id_costumer" type="text" class="form-control" id="id_cst" readonly>
                                <div class="input-group-prepend">
                                    <button type="button" class="btn btn-outline-secondary" onclick="$('#tambahnota').modal('hide');$('#pilihcst').modal('show'); "><i class="fa-solid fa-magnifying-glass"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label class="mb-0" for="">Operator nota</label>
                            <div class="input-group mb-2 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-id-card"></i></span>
                                </div>
                                <input type="text" class="form-control" value="<?php echo $session->get('nama') ?>" readonly>
                                <input type="text" name="id_staff" class="form-control" value="<?php echo $session->get('id_staf') ?>" hidden>
                            </div>
                        </div>
                    </div>
                    <h5 class="card-title mb-0 mt-3 font-weight-bold">Note</h5>
                    <p class="card-text">Kosongkan Kolom Service Jika Tidak Memiliki Service.</p>

                    <!-- isi modal -->
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" onclick="$('#tambahnota').modal('hide'); ">Batal</button>
                <button type="submit" class="btn btn-primary">Buat Nota</button>
            </div>
            </form>
        </div>
    </div>
</div>