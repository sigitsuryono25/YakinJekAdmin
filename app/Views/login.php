<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.adminkit.io/pages-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Aug 2021 14:37:57 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="shortcut icon" href="<?= base_url('assets')?>/img/icons/icon-48x48.png" />

    <link rel="canonical" href="pages-sign-in.html" />

    <title>Sign In | Yakin Jek</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&amp;display=swap" rel="stylesheet">

    <!-- Choose your prefered color scheme -->
    <link href="<?= base_url('assets')?>/css/light.css" rel="stylesheet">
    <!-- <link href="css/dark.css" rel="stylesheet"> -->
</head>

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
    <main class="d-flex w-100 h-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                            <h1 class="h2">Selamat Datang Kembali, Admin</h1>
                            <p class="lead">
                                Yuk Sign in untuk melanjutkan
                            </p>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <div class="text-center">
                                        <img src="<?= base_url('assets')?>/img/avatars/avatar.jpg" alt="Charles Hall" class="img-fluid rounded-circle" width="132" height="132" />
                                    </div>
                                    <form action="<?= site_url('')?>" method="POST">
                                        <div class="mb-3">
                                            <label class="form-label">User ID Kamu</label>
                                            <input class="form-control form-control-lg" type="text" name="user_id" placeholder="Tulis User ID kamu disini" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Password Kamu</label>
                                            <input class="form-control form-control-lg" type="password" name="password" placeholder="Tulis juga passwordnya disini" />
                                        </div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" checked>
                                                <span class="form-check-label">
                                                    Ingat saya selanjutnya
                                                </span>
                                            </label>
                                        </div>
                                        <div class="text-center mt-3">
                                            <button type="submit" class="btn btn-lg btn-primary">Masuk</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="<?= base_url('assets')?>/js/app.js"></script>
</body>

</html>