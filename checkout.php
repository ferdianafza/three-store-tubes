<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Three Store</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Three Store" name="keywords">
        <meta content="Three Store" name="description">

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
                                <a class="nav-link btn-outline-primary rounded-pill px-3" href="product-detail.html">Detail</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-outline-primary rounded-pill px-3 active" href="checkout.html">Checkout</a>
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
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="product-list.html">Produk</a></li>
                    <li class="breadcrumb-item active">Checkout</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Checkout Start -->
        <div class="checkout">
            <div class="container-fluid"> 
                <div class="row">
                    <div class="col-lg-8">
                        <div class="checkout-inner">
                            <div class="billing-address">
                                <h2>Alamat Tagihan</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nama Depan</label>
                                        <input class="form-control" type="text" placeholder="Nama Depan">
                                    </div>
                                    <div class="col-md-6">
                                        <label> Nama Belakang</label>
                                        <input class="form-control" type="text" placeholder="Nama Belakang">
                                    </div>
                                    <div class="col-md-6">
                                        <label>E-mail</label>
                                        <input class="form-control" type="email" placeholder="E-mail">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Nomber Telepon</label>
                                        <input class="form-control" type="tel" maxlength="12" placeholder="Nomor Telepon">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Alamat</label>
                                        <input class="form-control" type="text" placeholder="Alamat">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Provisi</label>
                                        <select class="custom-select">
                                            <option selected>Jawa Barat</option>
                                            <option>Banten</option>
                                            <option>Dki Jakarta</option>
                                            <option>Solo</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Kota</label>
                                        <input class="form-control" type="text" placeholder="Kota">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Kecamatan</label>
                                        <input class="form-control" type="text" placeholder="Kecamatan">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Kode Pos</label>
                                        <input class="form-control" type="tel" placeholder="Kode Pos">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="newaccount">
                                            <label class="custom-control-label" for="newaccount">Buat Akun</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="shipto">
                                            <label class="custom-control-label" for="shipto">Pengiriman Beda Alamat</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="shipping-address">
                                <h2>Pengiriman Beda Alamat </h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nama Depan</label>
                                        <input class="form-control" type="text" placeholder="Nama Depan">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Nama Belakang</label>
                                        <input class="form-control" type="text" placeholder="Nama Belakang">
                                    </div>
                                    <div class="col-md-6">
                                        <label>E-mail</label>
                                        <input class="form-control" type="email" placeholder="E-mail">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Nomor Telepon</label>
                                        <input class="form-control" type="tel" maxlength="12" placeholder="nomor telepon">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Alamat</label>
                                        <input class="form-control" type="text" placeholder="Alamat">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Provinsi</label>
                                        <select class="custom-select">
                                            <option selected>Jawa Barat</option>
                                            <option>Banten</option>
                                            <option>Dki Jakarta</option>
                                            <option>Solo</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Kota</label>
                                        <input class="form-control" type="text" placeholder="Kota">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Kecamatan</label>
                                        <input class="form-control" type="text" placeholder="Kecamatan">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Kode Pos</label>
                                        <input class="form-control" type="tel" placeholder="Kode Pos">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="checkout-inner">
                            <div class="checkout-summary">
                                <h1>Keranjang</h1>
                                <p>Puma Select Mirage Sport<span>Rp 1.700.000</span></p>
                                <p>Kodachi Maxx<span>Rp 210.000</span></p>
                                <p>MIZUNO SPORTSTYLE Wave<span>Rp 5.900.000</span></p>
                                <p class="sub-total">Total<span>Rp 7.810.000</span></p>
                                <p class="ship-cost">Pajak<span>Rp 150.000</span></p>
                                <h2>Total<span>Rp 7.960.000</span></h2>
                            </div>

                            <div class="checkout-payment">
                                <div class="payment-methods">
                                    <h1>Metode Pembayaran</h1>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-1" name="payment">
                                            <label class="custom-control-label" for="payment-1">Dana</label>
                                        </div>
                                        <div class="payment-content" id="payment-1-show">
                                            <p>
                                                Bebas Biaya Penanganan
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-2" name="payment">
                                            <label class="custom-control-label" for="payment-2">Gopay</label>
                                        </div>
                                        <div class="payment-content" id="payment-2-show">
                                            <p>
                                                Biaya Penanganan Rp1.000
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-3" name="payment">
                                            <label class="custom-control-label" for="payment-3">BCA</label>
                                        </div>
                                        <div class="payment-content" id="payment-3-show">
                                            <p>
                                                Biaya Penanganan Rp1.000
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-4" name="payment">
                                            <label class="custom-control-label" for="payment-4">BNI</label>
                                        </div>
                                        <div class="payment-content" id="payment-4-show">
                                            <p>
                                                Biaya Penanganan Rp1.000
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-5" name="payment">
                                            <label class="custom-control-label" for="payment-5">BSI</label>
                                        </div>
                                        <div class="payment-content" id="payment-5-show">
                                            <p>
                                                Biaya Penanganan Rp1.000
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-btn">
                                    <button>Buatkan Pesanan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Checkout End -->
        
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
