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
                                                <button type="button" class="btn btn-outline-secondary"><i class="fa-solid fa-magnifying-glass"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <br>
                                        <button type="button" class="btn btn-dark btn-block">Nota Baru</button>

                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
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
                    <div class="card" style="width: 100%;">
                        <div class="card-header">
                            Penjualan
                        </div>
                        <div class="card-body">
                            <table id="tlbbeli" class="table table-striped table-hover table-sm" style="width:100%">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Harga </th>
                                        <th>Jumlah</th>
                                        <th>Sub Total</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>SSD 128 GB</td>
                                        <td>250.000</td>
                                        <td>2</td>
                                        <td>500.000</td>
                                        <td><button class="btn btn-primary btn-sm">Hapus</button></td>
                                    </tr>
                                </tbody>
                                <tfoot class="thead-dark">
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>

                    </div>
                </div>

            </div>
            <!-- row 3 -->
            <!-- <div class="row">
                <div class="col">
                    1
                </div>
                <div class="col">
                    2
                </div>
                <div class="col">
                    3
                </div>
                <div class="col">
                    4
                </div>
            </div> -->
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
</script>