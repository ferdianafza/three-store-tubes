<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Three Store</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Shoes Store" name="keywords">
        <meta content="Shoes Store" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body> 
        <!-- Nav Bar Start -->
        <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
            <div class="container d-flex justify-content-between align-items-center">
                <img class="navbar-brand h1" src="img/LOGO KITA.PNG" alt="Logo" style="width: 100px;"> 
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                    <div class="flex-fill mx-xl-5 mb-2">
                        <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                            <li class="nav-item">
                                <a class="nav-link btn-outline-primary rounded-pill px-3 " href="index.html">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-outline-primary rounded-pill px-3" href="product-list.html">Produk</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-outline-primary rounded-pill px-3" href="product-list.html">Detail</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-outline-primary rounded-pill px-3" href="checkout.html">Checkout</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-outline-primary rounded-pill px-3" href="login.html">Login/Register</a>
                            </li>
                        </ul>
                    </div>
                    <div class="navbar-container">
                    <div class="navbar align-self-center d-flex">
                        <a class="nav-link" href="#" id="searchIcon"><i class='fa fa-search bx-sm text-primary'></i></a>
                        <a class="nav-link" href="wishlist.html"><i class='fa fa-heart bx-sm text-primary'></i></a>
                        <a class="nav-link" href="cart.php"><i class='fa fa-shopping-cart bx-sm text-primary'></i></a>
                        <a class="nav-link" href="my-account.html"><i class='fa fa-user-circle bx-sm text-primary'></i></a>
                        <i class="fa-solid fa-circle-user"></i>
                    </div>
                    </div>
                </div>
            </div>
        </nav>
        
        <div id="searchBox" style="display: none;">
            <input type="text" placeholder="Search..." id="searchInput">
            <button><i class="fa fa-search"></i></button>
        </div>
        
        <script>
            document.getElementById('searchIcon').addEventListener('click', function() {
                var searchBox = document.getElementById('searchBox');
                searchBox.style.display = (searchBox.style.display === 'none') ? 'block' : 'none';
            });
        
            function performSearch() {
                var searchInput = document.getElementById('searchInput').value;
                console.log('Searching for: ' + searchInput);
            }
        </script>
        <!-- Nav Bar End -->    
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="product-list.html">Produk</a></li>
                    <li class="breadcrumb-item active">Akun Saya</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Akun Saya Start -->
        <div class="my-account">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                            <a class="nav-link" id="account-nav" data-toggle="pill" href="#account-tab" role="tab"><i class="fa fa-user"></i>Profile</a>
                            <a class="nav-link" id="orders-nav" data-toggle="pill" href="#orders-tab" role="tab"><i class="fa fa-shopping-bag"></i>Pesanan</a>
                            <a class="nav-link" id="payment-nav" data-toggle="pill" href="#payment-tab" role="tab"><i class="fa fa-credit-card"></i>Metode Pembayaran</a>
                            <a class="nav-link" id="address-nav" data-toggle="pill" href="#address-tab" role="tab"><i class="fa fa-map-marker-alt"></i>Alamat </a>
                            <a class="nav-link" href="index.html"><i class="fa fa-sign-out-alt"></i>Logout</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade" id="orders-tab" role="tabpanel" aria-labelledby="orders-nav">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Produk</th>
                                                <th>Tanggal</th>
                                                <th>Harga</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Nike Air Jordan 1</td>
                                                <td>01 Jan 2023</td>
                                                <td>Rp. 1.729.500</td>
                                                <td>Approved</td>
                                                <td><button class="btn">View</button></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Big Kid's jordan</td>
                                                <td>01 Jan 2022</td>
                                                <td>Rp.3.399.000</td>
                                                <td>Approved</td>
                                                <td><button class="btn">View</button></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Nike jordan 5</td>
                                                <td>01 Jan 2022</td>
                                                <td>Rp. 4.000.000</td>
                                                <td>Approved</td>
                                                <td><button class="btn">View</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="payment-tab" role="tabpanel" aria-labelledby="payment-nav">
                                <h4>Metode Pembayaran </h4>
                                <p>    
                                </p> 
                            </div>
                            <div class="tab-pane fade" id="address-tab" role="tabpanel" aria-labelledby="address-nav">
                                <h4>Alamat</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Alamat Pembayaran</h5>
                                        <p>Cimahi </p>
                                        <p>Mobile: 62+823-4566-7890</p>
                                        <button class="btn">Ubah Alamat</button>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Alamat Pengiriman</h5>
                                        <p>Baros, 02/03, </p>
                                        <p>Mobile: 62+823-4566-7890</p>
                                        <button class="btn">Ubah Alamat</button>
                                    </div>
                                </div>
                            </div>
                            <div class= "tab-pane show active"" id="account-tab" role="tabpanel" aria-labelledby="account-nav">
                                <h4>Akun Saya</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Nama Depan">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Nama Belakang">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="No Telepon">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Email">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" placeholder="Alamat">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn">Perbarui Alamat</button>
                                        <br><br>
                                    </div>
                                </div>
                                <h4>Ubah Password</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="password" placeholder="Password Saat Ini">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="password" placeholder="Password">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="password" placeholder="Ulangi Password">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn">Simpan Password</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- My Account End -->
        
        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Hubungi Kami</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>Three Store Bandung</p>
                                <p><i class="fa fa-envelope"></i>ThreeStore3@gmail.com</p>
                                <p><i class="fa fa-phone"></i>+62 812 2342 1232</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6"> 
                        <div class="footer-widget"> 
                            <h2>Ikuti Kami</h2> 
                            <div class="contact-info"> 
                                <div class="social"> 
                                    <a href="https://twitter.com/gibran_tweet?s=21&t=t48frxvRldhF-WM-B5Qv9A"><i class="fab fa-twitter"></i></a> 
                                    <a href="https://www.instagram.com/tokyolagii/?igshid=MzRlODBiNWFlZA%3D%3D"><i class="fab fa-instagram"></i></a> 
                                </div> 
                            </div> 
                        </div> 
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Tentang Kami</h2>
                            <ul>
                                <li><a href="#">About Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="row payment align-items-center">
                    <div class="col-md-6">
                        <div class="payment-method">
                            <h2>Jenis Pembayaran:</h2>
                            <img src="img/metode.jpg" alt="Payment Method" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payment-security">
                            <h2>Keamanan:</h2>
                            <img src="img/godaddy.svg" alt="Payment Security" />
                            <img src="img/norton.svg" alt="Payment Security" />
                            <img src="img/ssl.svg" alt="Payment Security" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
