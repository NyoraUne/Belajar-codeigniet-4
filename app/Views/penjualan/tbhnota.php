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
                <form action="">
                    <div class="row">
                        <div class="col">
                            <label class="mb-0" for="">ID Service</label>
                            <div class="input-group mb-2 input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">ID_</span>
                                </div>
                                <input type="text" class="form-control" data-toggle="tooltip" data-placement="top" title="Biarkan Kosong Jika Tidak Ada Service" readonly>
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
                                <input type="text" class="form-control" readonly>
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
                                <input type="text" class="form-control" value="<?php echo $session->get('id_staf') ?>" hidden>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- isi modal -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>