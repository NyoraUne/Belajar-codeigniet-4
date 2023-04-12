<body class="bg-gradient-primary">
    <?php

    $session = session();
    $login = $session->getFlashdata('login');
    $nama = $session->getFlashdata('nama');
    $password = $session->getFlashdata('password');
    ?>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-6 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login Form</h1>
                                    </div>
                                    <form class="user" action="/auth/valid_login" method="post">
                                        <div class="form-group">
                                            <input type="text" name="nama" class="form-control form-control-user" id="exampleInputEmail" placeholder="Username...">
                                            <?php if ($nama) { ?>
                                                <p style="color:red"><?php echo $nama ?></p>
                                            <?php } ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                            <?php if ($password) { ?>
                                                <p style="color:red"><?php echo $password ?></p>
                                            <?php } ?>
                                        </div>
                                        <div class="form-group">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <?php if ($login) { ?>
                                            <p style="color:green"><?php echo $login ?></p>
                                        <?php } ?>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/register') ?>">Buat Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>