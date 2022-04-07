<html>

<head>
    <title>DagangYuk!!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <style>
        body {
            background-image: url("https://i.postimg.cc/JhGsGrhx/1.png");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        .navbar {
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 1500;
            border-radius: 20px;
        }

        @media screen and (min-width: 0px) {
            mb-n2 {
                margin-bottom: -0.5rem !important;
            }
        }

        .link {
            color: red;
            text-decoration: none;
        }

        .link:hover {
            color: darkred;
            text-decoration: underline;
        }

        #logo {
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.8);
        }

        #logo:hover {
            border-radius: 10px;
            background-color: white;
        }

        .featurette-heading {
            letter-spacing: -.05rem;
            font-weight: 500;
            line-height: 1.2;
        }

        #event {
            margin-bottom: 100px;
        }

        .events {
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 5px 5px 18px #888888;
        }

        #kategori {
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 5px 5px 18px #888888;
            text-decoration: none;
        }


        #kategoriBox:hover {
            box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
            text-decoration: none;
        }

        .pagination {
            margin-top: -50px;
        }

        .auth:hover {
            margin-top: -3px;
            box-shadow: 10px 10px 5px black;
        }

        #drophover {
            display: none;
        }

        .dropdown:hover #drophover {
            display: block;
        }

        #dropcontent {
            background-color: rgba(255, 255, 255);
        }
    </style>
</head>

<body class="mx-2 my-2">

    <!-- TOP NAVBAR -->
    <header class="sticky-top navbar navbar-expand-md navbar-dark bd-navbar mx-2 mt-2">
        <nav class="container-xxl flex-wrap flex-md-nowrap" aria-label="Main navigation">
            <a class="navbar-brand" href="/" aria-label="Bootstrap">
                <img src="https://i.postimg.cc/W13XkFhB/logo.png" width="30px" height="30px" id="logo" title="Logo DagangYuk!!">
            </a>
            <a class="navbar-brand" href="/" aria-label="Bootstrap" title="DagangYuk!!">
                DAGANGYUK!!
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="true" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="bi" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
                </svg>
            </button>
            <div class="navbar-collapse collapse" id="bdNavbar">
                <ul class="navbar-nav flex-row flex-wrap ms-md-auto justify-content-center">
                    <li class="nav-item col-11 col-md-auto mx-1 d-md-block d-none dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Menu">
                            Menu
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown1" id="drophover">
                            <li><a class="dropdown-item" href="#">Daftar</a></li>
                            <li><a class="dropdown-item" href="#promo">Promo</a></li>
                            <li><a class="dropdown-item" href="#kategori1">Kategori</a></li>
                        </ul>
                    </li>
                    <li class="nav-item col-11 col-md-auto mx-1 d-block d-md-none">
                        <hr class="text-white">
                    </li>
                    <li class="nav-item col-11 col-md-auto mx-1 d-none d-md-block">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2"><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg></a></span>
                        </div>
                    </li>
                    <li class="nav-item col-3 col-md-auto mx-1 text-center dropdown">
                        <a class="nav-link linknav dropdown-toggle" href="#" id="registerDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Masuk">MASUK</a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="registerdropdown2" id="drophover">
                            <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#add_data_Modal">Sebagai Pelanggan</a></li>
                            <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#add_data_seller_Modal">Sebagai Pedagang</a></li>
                        </ul>
                    </li>
                    <li class="nav-item col-3 col-md-auto mx-1 text-center ds-block d-md-none">
                        <a class="nav-link disabled text-white" href="#" tabindex="-1" aria-disabled="true">ATAU</a>
                    </li>
                    <li class="nav-item col-3 col-md-auto mx-1 text-center dropdown">
                        <a class="nav-link linknav dropdown-toggle" href="#" id="registerDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Daftar">DAFTAR</a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="registerdropdown1" id="drophover">
                            <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#register_Modal">Sebagai Pelanggan</a></li>
                            <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#register_seller_Modal">Sebagai Pedagang</a></li>
                        </ul>
                    </li>
                    <li class="nav-item col-11 col-md-auto mx-1 d-block d-md-none">
                        <hr class="text-white">
                    </li>
                    <li class="nav-item col-3 col-md-auto mx-1 text-end">
                        <a class="nav-link" href="" data-toggle="modal" data-target="#add_data_Modal" title="Notifikasi"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-bell-fill" viewBox="0 0 16 16">
                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item col-1 col-md-auto mx-1 text-center dropdown">
                        <a class="nav-link" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Akun"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#add_data_Modal">Masuk</a></li>
                            <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#register_Modal">Daftar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item col-3 col-md-auto mx-1 text-start">
                        <a class="nav-link" href="" title="Pengaturan">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item col-11 col-md-auto mx-1 d-block d-md-none">
                        <hr class="text-white">
                    </li>
                </ul>
            </div>
            <div class="d-block d-md-none w-100 my-3">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2"><a href="" title="Cari"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg></a></span>
                </div>
            </div>
        </nav>
    </header>

    <!-- CONTENT -->
    <div class="container-fluid mt-5">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 justify-content-center">
            <div class="col-lg-3 d-none d-lg-block " style="z-index: 700;">
                <img src="https://i.postimg.cc/W13XkFhB/logo.png" class="sticky-top" style="width:180px; height:180px;" id="logo" title="Logo DagangYuk!!">
            </div>
            <div class="col-lg-8 col-auto text-md-end text-center" style="color:white;">
                <h1 style="font-size:56px;">BELANJA ONLINE DARI TOKO-TOKO FAVORITMU</h1>
                <h2 style="font-size:40px;">KEBUTUHAN RUMAHMU DIPILIH LANGSUNG OLEH PERSONAL SHOPPER KAMI</h2>
                <h3 class="mt-5">DIPERCAYA DAN SUDAH DIDOWNLOAD OLEH LEBIH DARI 10 JUTA ORANG - SEJAK 2019</h3>
                <hr class="mt-4 mb-5" style="border: 5px solid black; opacity: 1; background-color: black;">
                <div class="row justify-content-center mb-5" style="text-align:center;">
                    <div class="col-md-3 col-auto dropdown">
                        <button class="btn btn-danger auth shadow" type="button" id="logindropdown" data-bs-toggle="dropdown" aria-expanded="false" style="font-size:36px;" title="Masuk">MASUK</button>
                        <ul class="dropdown-menu text-white" aria-labelledby="logindropdown" id="dropcontent">
                            <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#add_data_Modal">Sebagai Pelanggan</a></li>
                            <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#add_data_seller_Modal">Sebagai Pedagang</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-auto">
                        <h3 class="my-3">ATAU</h3>
                    </div>
                    <div class="col-md-3 col-auto">
                        <button class="btn btn-danger auth shadow" type="button" id="registerdropdown" data-bs-toggle="dropdown" aria-expanded="false" style="font-size:36px;" title="Daftar">DAFTAR</button>
                        <ul class="dropdown-menu text-white" aria-labelledby="registerdropdown" id="dropcontent">
                            <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#register_Modal">Sebagai Pelanggan</a></li>
                            <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#register_seller_Modal">Sebagai Pedagang</a></li>
                        </ul>
                    </div>
                </div>
                <hr class="" style="border: 5px solid black; opacity: 1; background-color: black;">
            </div>
        </div>
    </div>

    <!-- LOG IN CUSTOMER MODAL -->
    <div style="z-index: 9999;" class="modal fade" id="add_data_Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Yuk masuk untuk melanjutkan</h4>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-signin" method="post" action="Auth">
                    <div class="modal-body justify-content-center" style="text-align: center;">
                        <h5 class="text-muted mb-2" style="font-size: 16px;">Masuk sebagai Pelanggan</h5>
                        <div class="form-floating mb-2 mx-auto">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Alamat Email" required autofocus>
                            <label for="email">Alamat email</label>
                        </div>
                        <div class="form-floating mb-2 mx-auto">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            <label for="password">Password</label>
                        </div>
                        <a href="" class="link">Lupa kata sandi?</a>
                        <input type="submit" class="btn btn-danger my-3 mx-auto" name="submit" value="MASUK" style="width:80%;" />
                        <p>Belum punya akun? <a href="" class="link" data-toggle="modal" data-target="#register_Modal" data-dismiss="modal">DAFTAR</a><br>
                            <hr>
                            <a href="" class="link" data-toggle="modal" data-target="#add_data_seller_Modal" data-dismiss="modal">Masuk sebagai pedagang</a>
                        </p>
                    </div>
                </form>
                <div class="modal-footer" style="text-align:center;">
                    <button type="submit" class="btn btn-primary my-3 mx-auto" name="submit" style="width:80%;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg>&nbspLanjut dengan Facebook</button>
                </div>
            </div>
        </div>
    </div>

    <!-- REGISTER CUSTOMER MODAL -->
    <div style="z-index: 9999;" class="modal fade" id="register_Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Yuk daftar untuk melanjutkan</h4>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-signup" method="post" action="register">
                    <div class="modal-body justify-content-center" style="text-align: center;">
                        <h5 class="text-muted mb-2" style="font-size: 16px;">Daftar sebagai Pelanggan</h5>
                        <div class="form-floating mb-2 mx-auto">
                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nama Lengkap" required autofocus>
                            <label for="fullname">Nama Lengkap</label>
                        </div>
                        <div class="form-floating mb-2 mx-auto">
                            <input type="text" class="form-control" id="userbane" name="username" placeholder="Username" required autofocus>
                            <label for="username">Username</label>
                        </div>
                        <div class="form-floating mb-2 mx-auto">
                            <input type="text" class="form-control" id="telepon" name="telepon" placeholder="No. Telepon" required>
                            <label for="telepon">No. Telepon</label>
                        </div>
                        <div class="form-floating mb-2 mx-auto">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Alamat Email" required>
                            <label for="email">Alamat email</label>
                        </div>
                        <div class="form-floating mb-2 mx-auto">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            <label for="password">Password</label>
                        </div>
                        <input type="submit" class="btn btn-danger my-3 mx-auto" name="submit" value="DAFTAR" style="width:80%;" />
                        <p>Sudah punya akun? <a href="" class="link" data-toggle="modal" data-target="#add_data_Modal" data-dismiss="modal">MASUK</a><br>
                            <hr>
                            <a href="" class="link" data-toggle="modal" data-target="#add_data_seller_Modal" data-dismiss="modal">Masuk sebagai pedagang</a>
                        </p>
                    </div>
                    <div class="modal-footer" style="text-align:center;">
                        <button type="submit" class="btn btn-primary my-3 mx-auto" name="submit" style="width:80%;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg>&nbspLanjut dengan Facebook</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- LOG IN SELLER MODAL -->
    <div style="z-index: 9999;" class="modal fade" id="add_data_seller_Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Yuk masuk untuk melanjutkan</h4>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-signin" method="post" action="authsell">
                    <div class="modal-body justify-content-center" style="text-align: center;">
                        <h5 class="text-muted mb-2" style="font-size: 16px;">Masuk sebagai Pedagang</h5>
                        <div class="form-floating mb-2 mx-auto">
                            <input type="email" class="form-control" id="emailSeller" name="emailSeller" placeholder="Alamat Email" required autofocus>
                            <label for="email">Alamat email</label>
                        </div>
                        <div class="form-floating mb-2 mx-auto">
                            <input type="password" class="form-control" id="passwordSeller" name="passwordSeller" placeholder="Password" required>
                            <label for="password">Password</label>
                        </div>
                        <a href="" class="link">Lupa kata sandi?</a>
                        <input type="submit" class="btn btn-danger my-3 mx-auto" name="submitSeller" value="MASUK" style="width:80%;" />
                        <p>Belum punya akun? <a href="" class="link" data-toggle="modal" data-target="#register_seller_Modal" data-dismiss="modal">DAFTAR</a><br>
                            <hr>
                            <a href="" class="link" data-toggle="modal" data-target="#add_data_Modal" data-dismiss="modal">Masuk sebagai pelanggan</a>
                        </p>
                    </div>
                </form>
                <div class="modal-footer" style="text-align:center;">
                    <button type="submit" class="btn btn-primary my-3 mx-auto" name="submit" style="width:80%;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg>&nbspLanjut dengan Facebook</button>
                </div>
            </div>
        </div>
    </div>

    <!-- REGISTER SELLER MODAL -->
    <div style="z-index: 9999;" class="modal fade" id="register_seller_Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Yuk daftar untuk melanjutkan</h4>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form-signup" method="post" action="registerseller">
                    <div class="modal-body justify-content-center" style="text-align: center;">
                        <h5 class="text-muted mb-2" style="font-size: 16px;">Daftar sebagai Pedagang</h5>
                        <div class="form-floating mb-2 mx-auto">
                            <input type="text" class="form-control" id="namalengkapSeller" name="namalengkapSeller" placeholder="Nama Lengkap" required autofocus>
                            <label for="namalengkap">Nama Lengkap</label>
                        </div>
                        <div class="form-floating mb-2 mx-auto">
                            <input type="text" class="form-control" id="namatoko" name="namatoko" placeholder="Nama Toko" required autofocus>
                            <label for="namalengkap">Nama Toko/Lapak</label>
                        </div>
                        <div class="form-floating mb-2 mx-auto">
                            <input type="text" class="form-control" id="teleponSeller" name="teleponSeller" placeholder="No. Telepon" required>
                            <label for="telepon">No. Telepon</label>
                        </div>
                        <div class="form-floating mb-2 mx-auto">
                            <input type="email" class="form-control" id="emailSeller" name="emailSeller" placeholder="Alamat Email" required>
                            <label for="email">Alamat email</label>
                        </div>
                        <div class="form-floating mb-2 mx-auto">
                            <input type="password" class="form-control" id="passwordSeller" name="passwordSeller" placeholder="Password" required>
                            <label for="password">Password</label>
                        </div>
                        <div class="form-floating mb-2 mx-auto">
                            <input type="text" class="form-control" id="city" name="city" placeholder="Domisili" required>
                            <label for="provinsi">Domisili</label>
                        </div>
                        <div class="form-floating mb-2 mx-auto">
                            <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Provinsi" required>
                            <label for="provinsi">Provinsi</label>
                        </div>
                        <input type="submit" class="btn btn-danger my-3 mx-auto" name="submitSeller" value="DAFTAR" style="width:80%;" />
                        <p>Sudah punya akun? <a href="" class="link" data-toggle="modal" data-target="#add_data_seller_Modal" data-dismiss="modal">MASUK</a><br>
                            <hr>
                            <a href="" class="link" data-toggle="modal" data-target="#add_data_Modal" data-dismiss="modal">Masuk sebagai pelanggan</a>
                        </p>
                    </div>
                    <div class="modal-footer" style="text-align:center;">
                        <button type="submit" class="btn btn-primary my-3 mx-auto" name="submit" style="width:80%;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg>&nbspLanjut dengan Facebook</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- PROMO -->
    <div class="row d-flex flex-warp justify-content-center text-dark mx-5 promo mt-5">
        <section id="promo">
            <div class="container w-100">
                <div id="carouselEvent" class="carousel slide carousel-fade" style="height: 700px;">
                    <div class="carousel-inner">
                        <div class="carousel-item active overflow-auto">
                            <div class="events row-md-6">
                                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-2 shadow-sm h-md-250">
                                    <div class="col p-4 d-flex flex-column position-static">
                                        <strong class="d-inline-block mb-2 text-primary">
                                            DISKON
                                        </strong>
                                        <h1 class="mb-0">DISKON AKHIR BULAN</h3>
                                            <div class="mb-1 text-muted">
                                                Khusus Daging
                                            </div>
                                            <p class="card-text mb-auto" align="justify">DISKON AKHIR BULAN 50%. SEGERA AMBIL DISKONMU SEBELUM TERLAMBAT</p>
                                            <a href="comingsoon.html" class="link" title="Selengkapnya...">Selengkapnya...</a>
                                    </div>
                                    <div class="col-auto d-none d-lg-block">
                                        <img src="https://images.unsplash.com/photo-1529692236671-f1f6cf9683ba?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" title="Diskon Akhir Bulan" width="auto" height="300">
                                    </div>
                                </div>
                            </div>
                            <div class="events row-md-6">
                                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-2 shadow-sm h-md-250">
                                    <div class="col-auto d-none d-lg-block">
                                        <img src="https://images.unsplash.com/photo-1584385002340-d886f3a0f097?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" title="Friendship discount" width="auto" height="300">
                                    </div>
                                    <div class="col p-4 d-flex flex-column position-static">
                                        <strong class="d-inline-block mb-2 text-primary">
                                            DISKON
                                        </strong>
                                        <h3 class="mb-0">FRIENDSHIP DISKON</h3>
                                        <div class="mb-1 text-muted">

                                        </div>
                                        <p class="card-text mb-auto" align="justify">AJAK TEMANMU DAN MENANGKAN HADIAH DISKON SEBESAR 5% SETIAP 1 ORANG. DISKON MAKSIMAL 100%, JADI AJAK SEMUA TEMANMU UNTUK REGISTER KE DAGANGYUK!!</p>
                                        <a href="comingsoon.html" class="link" title="Selengkapnya...">Selengkapnya...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item overflow-auto">
                            <div class="events row-md-6">
                                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-2 shadow-sm h-md-250">
                                    <div class="col-auto d-none d-lg-block">
                                        <img src="https://images.unsplash.com/photo-1584385002340-d886f3a0f097?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" title="Pendatang Baru" width="auto" height="300">
                                    </div>
                                    <div class="col p-4 d-flex flex-column position-static">
                                        <strong class="d-inline-block mb-2 text-primary">
                                            PROMO
                                        </strong>
                                        <h3 class="mb-0">PROMO PENDATANG BARU</h3>
                                        <div class="mb-1 text-muted">

                                        </div>
                                        <p class="card-text mb-auto" align="justify">DAPATKAN PROMO BELI 1 GRATIS 10 UNTUK PERTAMA KALI DAFTAR KE DAGANGYUK!!</p>
                                        <a href="comingsoon.html" class="link" title="Selengkapnya...">Selengkapnya...</a>
                                    </div>
                                </div>
                            </div>
                            <div class="events row-md-6">
                                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-2 shadow-sm h-md-250 position-relative">
                                    <div class="col p-4 d-flex flex-column position-static">
                                        <strong class="d-inline-block mb-2 text-primary">
                                            PROMO
                                        </strong>
                                        <h3 class="mb-0">WAGYU A5 HALAL ASLI KOBE</h3>
                                        <div class="mb-1 text-muted">
                                        </div>
                                        <p class="card-text mb-auto" align="justify">DAPATKAN DISKON 50% UNTUK PEMBELIAN MINIMAL 2 WAGYU A5</p>
                                        <a href="comingsoon.html" title="link" title="Selengkapnya...">Selengkapnya...</a>
                                    </div>
                                    <div class="col-auto d-none d-lg-block">
                                        <img src="https://images.tokopedia.net/img/cache/700/product-1/2019/4/22/9023715/9023715_60f5160f-cfa0-474a-a450-1636d0d821f1_1024_1024.jpg" title="Wagyu A5 Halal Asli Kobe" width="auto" height="300">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ol class="pagination justify-content-center mb-5">
                    <li class="page-item">
                        <a class="page-link" href="#carouselEvent" tabindex="-1" data-bs-slide="prev">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#carouselEvent" data-bs-slide-to="0">DISKON</a></li>
                    <li class="page-item"><a class="page-link" href="#carouselEvent" data-bs-slide-to="1">PROMO</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#carouselEvent" data-bs-slide="next">Next</a>
                    </li>
                </ol>
            </div>
        </section>
    </div>

    <!-- KATEGORI -->
    <div id="kategori1" class="row-cols-1 d-flex flex-warp justify-content-md-end justify-content-center text-dark mx-5 mt-5">
        <div class="col-10 text-center col-md-9">
            <div class="row row-cols-1 row-cols-md-3 g-4 mx-2 my-2 justify-content-center" id="kategori">
                <div class="col-12 text-center">
                    <h2>DAGING</h2>
                </div>
                <div class="w-100">
                    <hr>
                </div>
                <div class="col mb-3">
                    <div class="card h-100 shadow">
                        <a href="" class="link">
                            <img src="data:image/jpeg;base64,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" class="card-img-top" alt="Frozen Bluefin Tuna">
                            <div class="card-body">
                                <h5 class="card-title">Frozen Bluefin Tuna @400gr</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card h-100 shadow">
                        <a href="" class="link">
                            <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//106/MTA-9909258/blibli_japanese_wagyu_beef_picanha_a5_steak_200gr_full01_90qgmu7.jpg" class="card-img-top" alt="Wagyu a5">
                            <div class="card-body">
                                <h5 class="card-title">Wagyu a5 Halal Asli Kobe @500gr</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card h-100 shadow">
                        <a href="" class="link">
                            <img src="data:image/jpeg;base64,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" class="card-img-top" alt="daging">
                            <div class="card-body">
                                <h5 class="card-title">Daging Sapi @500gr</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BOTTOM NAVBAR -->
    <footer class="sticky-bottom navbar navbar-expand-md navbar-dark bd-navbar mx-2 d-block">
        <nav class="container-xxl flex-wrap flex-md-nowrap" aria-label="Main navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
            </svg>
            <a class="navbar-brand ms-3" href="/" aria-label="Bootstrap">
                ABOUT US
            </a>
            <ul class="navbar-nav flex-row flex-wrap ms-md-auto justify-content-center">
                <li class="nav-item col-2 col-md-auto mx-1">
                    <a class="nav-link active" aria-current="page" href="#" title="Discord"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#7289d9" class="bi bi-discord" viewBox="0 0 16 16">
                            <path d="M6.552 6.712c-.456 0-.816.4-.816.888s.368.888.816.888c.456 0 .816-.4.816-.888.008-.488-.36-.888-.816-.888zm2.92 0c-.456 0-.816.4-.816.888s.368.888.816.888c.456 0 .816-.4.816-.888s-.36-.888-.816-.888z" />
                            <path d="M13.36 0H2.64C1.736 0 1 .736 1 1.648v10.816c0 .912.736 1.648 1.64 1.648h9.072l-.424-1.48 1.024.952.968.896L15 16V1.648C15 .736 14.264 0 13.36 0zm-3.088 10.448s-.288-.344-.528-.648c1.048-.296 1.448-.952 1.448-.952-.328.216-.64.368-.92.472-.4.168-.784.28-1.16.344a5.604 5.604 0 0 1-2.072-.008 6.716 6.716 0 0 1-1.176-.344 4.688 4.688 0 0 1-.584-.272c-.024-.016-.048-.024-.072-.04-.016-.008-.024-.016-.032-.024-.144-.08-.224-.136-.224-.136s.384.64 1.4.944c-.24.304-.536.664-.536.664-1.768-.056-2.44-1.216-2.44-1.216 0-2.576 1.152-4.664 1.152-4.664 1.152-.864 2.248-.84 2.248-.84l.08.096c-1.44.416-2.104 1.048-2.104 1.048s.176-.096.472-.232c.856-.376 1.536-.48 1.816-.504.048-.008.088-.016.136-.016a6.521 6.521 0 0 1 4.024.752s-.632-.6-1.992-1.016l.112-.128s1.096-.024 2.248.84c0 0 1.152 2.088 1.152 4.664 0 0-.68 1.16-2.448 1.216z" />
                        </svg></a>
                </li>
                <li class="nav-item col-2 col-md-auto mx-1">
                    <a class="nav-link" href="#" title="LinkedIn"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-linkedin" viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                        </svg></a>
                </li>
                <li class="nav-item col-2 col-md-auto mx-1">
                    <a class="nav-link" href="#" title="Youtube"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="red" class="bi bi-youtube" viewBox="0 0 16 16">
                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                        </svg></a>
                </li>
                <li class="nav-item col-2 col-md-auto mx-1">
                    <a class="nav-link" href="" title="Facebook"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#1877f2" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg></a>
                </li>
                <li class="nav-item col-2 col-md-auto mx-auto">
                    <a class="nav-link" href="" title="Twitter"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#00acee" class="bi bi-twitter" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                        </svg>
                    </a>
                </li>
                <li class="border text-center nav-item col-12 col-md-auto mx-auto">
                    <a class="nav-link" href="#">Back to Top
                    </a>
                </li>
            </ul>
        </nav>
    </footer>
</body>

</html>