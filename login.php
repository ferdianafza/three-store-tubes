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

        <!-- Stylesheet -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
          integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                                <a class="nav-link btn-outline-primary rounded-pill px-3" href="index.html">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-outline-primary rounded-pill px-3" href="product-list.html">Produk</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-outline-primary rounded-pill px-3" href="product-detail.html">Detail</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-outline-primary rounded-pill px-3" href="checkout.html">Checkout</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-outline-primary rounded-pill px-3 active" href="login.html">Login/Register</a>
                            </li>
                        </ul>
                    </div>
                    <div class="navbar-container">
                    <div class="navbar align-self-center d-flex">
                        <a class="nav-link" href="#" id="searchIcon"><i class='fa fa-search bx-sm text-primary'></i></a>
                        <a class="nav-link" href="wishlist.html"><i class='fa fa-heart bx-sm text-primary'></i></a>
                        <a class="nav-link" href="cart.php"><i class='fa fa-shopping-cart bx-sm text-primary'></i></a>
                        <a class="nav-link" href="my-account.html"><i class='fa fa-user-circle bx-sm text-primary'></i></a>
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
        
        <!-- Login Start -->
        <div class="login-page">
            <div class="form">
                <form class="register-form" id="register-form" method="POST">
                    <h2><i class="fas fa-lock"></i> Register</h2>
                    <input type="text" placeholder="Nama Lengkap" required/>
                    <input type="text" placeholder="Username" required/>
                    <input type="email" placeholder="Email" required/>
                    <input type="password" placeholder="Password" required/>
                    <button type="submit">Buat</button>
                    <p class="message">Sudah Terdaftar? <a href="#login-form">Login</a></p>
                </form>
                <form class="login-form" id="register-form" method="post">
                    <h2><i class="fas fa-lock"></i> Login</h2>
                    <input type="text" placeholder="Username" required />
                    <input type="password" placeholder="Password" required/>
                    <button type="submit" name="send2">login</button>
                    <p class="message">Tidak Punya Akun? <a href="#register-form">Buat Akun</a></p>
                </form>
            </div>
        </div>
        <script>
            // Ambil elemen-elemen form login dan form register
            var loginForm = document.querySelector('.login-form');
            var registerForm = document.querySelector('.register-form');

            // Ambil elemen tautan "Buat Akun" dan "Login"
            var createAccountLink = document.querySelector('.message a[href="#register-form"]');
            var loginLink = document.querySelector('.message a[href="#login-form"]');

            // Fungsi untuk menampilkan form register dan menyembunyikan form login
            function showRegisterForm() {
                loginForm.style.display = 'none';
                registerForm.style.display = 'block';
            }
        
            // Fungsi untuk menampilkan form login dan menyembunyikan form register
            function showLoginForm() {
                loginForm.style.display = 'block';
                registerForm.style.display = 'none';
            }
        
            // Tambahkan event listener untuk tautan "Buat Akun" dan "Login"
            createAccountLink.addEventListener('click', showRegisterForm);
            loginLink.addEventListener('click', showLoginForm);
            
        </script>
        <!-- Login End -->
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
