<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Pemesanan Tiket</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-4 px-lg-5">
            <a style="font-family:Roboto Slab ;" class="navbar-brand" href="#!">Wisata Kota Bogor</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a style="font-family:Roboto Slab ;" class="nav-link" href="tmpln.php">Home</a></li>
                    <li class="nav-item"><a style="font-family:Roboto Slab ;" class="nav-link" href="index.php">Daftar Harga Tiket</a></li>
                    <li class="nav-item"><a style="font-family:Roboto Slab ;" class="nav-link active" aria-current="page">Pesan Tiket</a></li>
                    <li class="nav-item"><a style="font-family:Roboto Slab ;" class="nav-link" href="dtpsn.php">Data Pengunjung</a></li>
                </ul>
                <!-- <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form> -->
            </div>
        </div>
    </nav>

    <body>
        <section class="page-section" id="contact">
            <div class="container">
                <br>
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Pesan Tiket</h2>
                <br>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST" action="prosestambah.php" enctype="multipart/form-data">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="nl" name="nl" type="text" placeholder="Masukkan Nama Lengkap Anda" data-sb-validations="required" autofocus="" />
                                <label for="name">Nama Lengkap</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Nama Lengkap harus diisi.
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="ni" name="ni" type="text" placeholder="Masukkan Nama Lengkap Anda" data-sb-validations="required" />
                                <label for="name">Nomor Identitas</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Nama Lengkap harus diisi.
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="nh" name="nh" type="text" placeholder="Masukkan Nama Lengkap Anda" data-sb-validations="required" />
                                <label for="name">Nomor Telfon</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Nama Lengkap harus diisi.
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="tw" name="tw" type="text" placeholder="Masukkan Nama Lengkap Anda" data-sb-validations="required" autofocus="" />
                                <label for="name">Tempat Wisata</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Nama Lengkap harus diisi.
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="tk" name="tk" type="date" placeholder="Masukkan Nama Lengkap Anda" data-sb-validations="required" />
                                <label for="name">Tanggal Kunjungan</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Nama Lengkap harus diisi.
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="jp" name="jp" type="text" placeholder="Masukkan Nama Lengkap Anda" data-sb-validations="required" />
                                <label for="name">Jumlah Pengunjung</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Nama Lengkap harus diisi.
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="pa" name="pa" type="text" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Pengunjung Anak-Anak</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Email harus diisi.</div>
                                <!-- <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div> -->
                            </div>

                            <br>
                            <button type="submit" class="btn btn-primary btn-xl" name="submit" value="simpan">Submit</button>
                            <!-- <button class="btn btn-primary btn-xl" id="submit" type="submit">Kirim</button> -->
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>

</html>