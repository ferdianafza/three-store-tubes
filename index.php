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
                                <a class="nav-link btn-outline-primary rounded-pill px-3 active" href="index.html">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-outline-primary rounded-pill px-3" href="product-list.php">Produk</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-outline-primary rounded-pill px-3" href="product-detail.html">Detail</a>
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
        
        <!-- Main Slider Start -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-slider normal-slider">
                            <div class="header-slider-item">
                                <img src="img/background slid 1.JPEG" alt="Slider Image" width="1660" height="535"/>
                            </div>
                            <div class="header-slider-item">
                                <img src="img/background slid 2.JPEG" alt="Slider Image" width="1660" height="535" />
                            </div>
                            <div class="header-slider-item">
                                <img src="img/background slid 3.JPEG" alt="Slider Image" width="1660" height="535"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Slider End -->      
        
        <!-- Feature Start-->
        <div class="feature">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fab fa-cc-mastercard"></i>
                            <h2>Secure Payment</h2>
                            <p>
                                Diawasi Oleh OJK
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-truck"></i>
                            <h2>Delivery</h2>
                            <p>
                                Pengiriman Seluruh Indonesia 
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-sync-alt"></i>
                            <h2>30 Days Return</h2>
                            <p>
                                Garansi Sampai 30 Hari
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-comments"></i>
                            <h2>24/7 Support</h2>
                            <p>
                                Siap Melayani 24 Jam
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End-->      
        
        <!-- Category Start-->
        <div class="category">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="img/jordan 13.jpg" />
                            <a class="category-name" href="">
                                <p>Original</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-250">
                            <img src="img/branded 5.jpg" />
                            <a class="category-name" href="">
                                <p>Premium</p>
                            </a>
                        </div>
                        <div class="category-item ch-150">
                            <img src="img/branded 1.JPEG" />
                            <a class="category-name" href="">
                                <p>Branded</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-150">
                            <img src="img/branded 2.jpg" />
                            <a class="category-name" href="">
                                <p>High Quality</p>
                            </a>
                        </div>
                        <div class="category-item ch-250">
                            <img src="img/branded 4.jpg" />
                            <a class="category-name" href="">
                                <p>Best Seller</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="img/lokal 3.jpg" />
                            <a class="category-name" href="">
                                <p>Lokal</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End-->       
        
        <!-- Kontak admin Start -->
        <div class="call-to-action">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1>Kontak Admin</h1>
                    </div>
                    <div class="col-md-6">
                        <a href="tel:0123456789">+62-812-2692-1992</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kontak admin End -->       
        
        <!-- Produk Branded Start -->
        <div class="featured-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>Brand Unggulan</h1>
                </div>
                <div class="row align-items-center product-slider product-slider-4">
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">Cloudbust Air Prada</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="img/branded 1.JPEG" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="wishlist.html"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>Rp</span> 7.560.800</h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">Off white- Low Top</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="img/branded 2.jpg" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="wishlist.html"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>Rp</span> 4.580.000</h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">MIZUNO SPORTSTYLE Wave</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="img/branded 3.jpg" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="wishlist.html"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>Rp</span> 5.900.000</h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#product-detail.html">Air Jordan 1 Mid</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="img/branded 4.jpg" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="wishlist.html"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>Rp</span> 2.899.000</h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">Nike Air Max 97</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="img/branded 5.jpg" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="wishlist.html"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>Rp</span> 3.800.800</h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Produk Branded End -->          
        
        <!-- Local Terbaik start -->
        <div class="recent-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>Local Terbaik</h1>
                </div>
                <div class="row align-items-center product-slider product-slider-4">
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">Riku Aerostreet</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="img/lokal 1.jpg" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="wishlist.html"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>Rp</span> 149.000</h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">Flexknit v3.0 Carbon Black</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="img/lokal 2.jpg" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="wishlist.html"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>Rp</span>650.000</h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">Kodachi Maxx</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="img/lokal 3.jpg" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="wishlist.html"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>Rp</span> 210.000</h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">Geoff Max Timeless</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="img/lokal 4.jpg" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="wishlist.html"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>Rp</span> 220.000</h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">Ventela Ethnic Low</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="img/lokal 5.jpeg" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="cart.php"><i class="fa fa-cart-plus"></i></a>
                                    <a href="wishlist.html"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>Rp</span> 209.900</h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Lokal Terbaik End -->
        
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
