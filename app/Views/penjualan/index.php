<!-- Begin Page Content -->
<?php $session = session() ?>
<div class="container-fluid">
    <!-- card start -->
    <div class="card">
        <div class="card-header bg-light">
            <div class="row">
                <div class="col-10 " style="text-align: start; ">
                    <span class="align-middle"> Penjualan</span>
                </div>
                <div class="col" style="text-align: right;">
                    <span class="">[&nbsp; <i class="fa-solid fa-user"></i>&nbsp;&nbsp; <?php echo $session->get('nama') ?> &nbsp;&nbsp;]</span>
                </div>
            </div>
        </div>
        <!-- isi card start -->
        <!-- row 1 -->
        <div class="mt-2 mb-2 ml-2 mr-2">
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 800px;">
                        <div class="card-body">
                            <!-- table barang -->
                            <?= $this->include('penjualan/tbbarang'); ?>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="height: auto;">
                        <div class="card-header">
                            <div class="row">
                                <div class="col">
                                    Nota
                                </div>
                                <div class="col" style="text-align: right;">
                                    <div id="clock"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="row">
                                    <div class="col">
                                        <label class="mb-0" for="">ID Nota</label>
                                        <div class="input-group mb-2 ">
                                            <input type="text" class="form-control">
                                            <div class="input-group-prepend">
                                                <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#pilihnota"><i class="fa-solid fa-magnifying-glass"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <br>
                                        <button type="button" class="btn btn-dark btn-block" data-toggle="modal" data-target="#tambahnota">Nota Baru</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- isi modal pilih nota start -->
                    <?= $this->include('penjualan/tbnota'); ?>
                    <!-- isi modal pilih service -->
                    <?= $this->include('penjualan/tbservice'); ?>
                    <!-- isi modal pilih cst -->
                    <?= $this->include('penjualan/tbcst'); ?>
                    <!-- isi modal tambah nota start -->
                    <?= $this->include('penjualan/tbhnota'); ?>
                    <!-- isi detail card -->
                    <div class="card mt-2">
                        <div class="card-body">
                            This is some text within a card body.
                        </div>
                    </div>
                </div>
            </div>
            <!-- row 2 -->
            <div class="row mt-2">
                <div class="col">
                    <?= $this->include('penjualan/tbitem'); ?>
                </div>
            </div>
        </div>
        <!-- isi card end-->
        </ul>
    </div>
    <!-- card end -->
</div>
<!-- /.container-fluid -->
<script>
    // untuk table
    $(document).ready(function() {
        $('#tbbarang').DataTable();
    });
    $(document).ready(function() {
        $('#table').DataTable();
    });
    $(document).ready(function() {
        $('#tbbeli').DataTable();
    });

    // untuk button simpan enable dan disable
    $(document).ready(function() {
        $('#id_barang_jasa').keyup(function() {
            if ($(this).val().length === 0) {
                $('#tbhdata').prop('disabled', true);
            } else {
                $('#tbhdata').prop('disabled', false);
            }
        });
    });

    // waktu realtime
    function showTime() {
        var date = new Date();
        var hours = date.getHours();
        var minutes = date.getMinutes();
        var seconds = date.getSeconds();

        hours = (hours < 10 ? "0" : "") + hours;
        minutes = (minutes < 10 ? "0" : "") + minutes;
        seconds = (seconds < 10 ? "0" : "") + seconds;

        var time = "&nbsp;<i class='fa-solid fa-clock'></i>&nbsp;" + hours + ":" + minutes + ":" + seconds + "&nbsp;&nbsp; ";

        document.getElementById("clock").innerHTML = time;
    }

    setInterval(showTime, 1000);

    //tooltips
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>