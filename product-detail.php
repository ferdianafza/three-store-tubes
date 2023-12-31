<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Three Store</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Shoes Store" name="keywords" />
    <meta content="Shoes Store" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap"
      rel="stylesheet"
    />

    <!-- CSS Libraries -->
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link href="lib/slick/slick.css" rel="stylesheet" />
    <link href="lib/slick/slick-theme.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
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
                          <a class="nav-link btn-outline-primary rounded-pill px-3 active" href="product-detail.html">Detail</a>
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


    <!-- Product Detail Start -->
    <div class="container product-container">
      <div class="row">
        <div class="col-lg-4">
          <div id="productCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/Air Jordan 1 Mid 1 .jpg" alt="Product Image 1" class="img-fluid product-image">
              </div>
              <div class="carousel-item">
                <img src="img/Air Jordan 1 Mid 2 .jpg" alt="Product Image 2" class="img-fluid product-image">
              </div>
              <div class="carousel-item">
                <img src="img/Air Jordan 1 Mid 3 .jpg" alt="Product Image 3" class="img-fluid product-image">
              </div>
              <div class="carousel-item">
                <img src="img/Air Jordan 1 Mid 4 .jpg" alt="Product Image 4" class="img-fluid product-image">
              </div>
              <div class="carousel-item">
                <img src="img/Air Jordan 1 Mid 5 .jpg" alt="Product Image 5" class="img-fluid product-image">
              </div>
            </div>
            <a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="col-lg-8">
          <h1 class="product-title">Air Jordan 1 Mid</h1>
          <p class="product-price">Rp 2.899.000</p>
          <div class="product-options">
            <div class="quantity">
              <span class="option-title">Quantitas:</span>
              <div class="input-group input-group-sm"> 
                <div class="input-group-prepend">
                  <button class="btn btn-outline-primary btn-minus" type="button"><i class="fas fa-minus"></i></button>
                </div>
                <input type="text" class="form-control" value="1">
                <div class="input-group-append">
                  <button class="btn btn-outline-primary btn-plus" type="button"><i class="fas fa-plus"></i></button>
                </div>
              </div>
            </div>
            <div class="size-options">
              <span class="option-title">Size:</span>
              <div class="btn-group" role="group" aria-label="Size">
                <button type="button" class="btn btn-outline-primary">28</button>
                <button type="button" class="btn btn-outline-primary">29</button>
                <button type="button" class="btn btn-outline-primary">30</button>
              </div>
            </div>
          </div>
          <button class="btn btn-primary">Tambahkan Ke Keranjang</button>
        </div>
      </div>
      <div class="row product-detail-bottom">
        <div class="col-lg-12">
          <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
              <a
                class="nav-link active"
                data-toggle="pill"
                href="#description"
                >Description</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#specification"
                >Specification</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#reviews"
                >Reviews (1)</a
              >
            </li>
          </ul>
  
          <div class="tab-content product-tab-content">
            <div id="description" class="container tab-pane active">
              <h4>Deskripsi produk</h4>
              <p>
                The Air Jordan 1 Mid brings full-court style and premium comfort to an iconic look. <br>
                Its Air-Sole unit cushions play on the hardwood, while the padded collar gives you a supportive feel.
              </p>
            </div>
            <div id="specification" class="container tab-pane fade">
              <h4>Spesifikasi</h4>
                <li>Premium leather and synthetic upper provides durability, comfort and support</li>
                <li>Air-Sole unit in the heel delivers signature cushioning</li>
                <li>Rubber outsole offers traction on a variety of surfaces</li>
                <li>Country/Region of Origin: Vietnam</li>
              </ul>
            </div>
            <div id="reviews" class="container tab-pane fade">
              <div class="reviews-submitted">
                <div class="reviewer">
                  Very Good Very Well - <span>01 Jan 2023</span>
                </div>
                <div class="ratting">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <p>
                  Mantap Bagus Kak
                </p>
              </div>
              <div class="reviews-submit">
                <h4>Berikan Ulasan Anda</h4>
                <div class="ratting">
                  <i class="far fa-star"></i>
                  <i class="far fa-star"></i>
                  <i class="far fa-star"></i>
                  <i class="far fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
                <div class="row form">
                  <div class="col-sm-6">
                    <input type="text" placeholder="Name" />
                  </div>
                  <div class="col-sm-6">
                    <input type="email" placeholder="Email" />
                  </div>
                  <div class="col-sm-12">
                    <textarea placeholder="Review"></textarea>
                  </div>
                  <div class="col-sm-12">
                    <button>Kirim</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      
      <div class="product col-md-12">
        <div class="section-header">
          <h1>Mungkin Anda Juga Suka</h1>
      </div>
      <div class="row align-items-center product-slider product-slider-3">
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
                <img src="img/Produk list 1.jpg" alt="Product Image" />
              </a>
              <div class="product-action">
                <a href="#"><i class="fa fa-cart-plus"></i></a>
                <a href="#"><i class="fa fa-heart"></i></a>
              </div>
            </div>
            <div class="product-price">
              <h3><span>Rp</span>7.560.800</h3>
              <a class="btn" href=""
                ><i class="fa fa-shopping-cart"></i>Beli Sekarang</a
              >
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="product-item">
            <div class="product-title">
              <a href="#">Puma Select Mirage Sport</a>
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
                <img src="img/Produk list 4.jpg" alt="Product Image" />
              </a>
              <div class="product-action">
                <a href="#"><i class="fa fa-cart-plus"></i></a>
                <a href="#"><i class="fa fa-heart"></i></a>
              </div>
            </div>
            <div class="product-price">
              <h3><span>Rp</span>1.700.000</h3>
              <a class="btn" href=""
                ><i class="fa fa-shopping-cart"></i>Beli Sekarang</a
              >
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
                <img src="img/Produk list 6.jpg" alt="Product Image" />
              </a>
              <div class="product-action">
                <a href="#"><i class="fa fa-cart-plus"></i></a>
                <a href="#"><i class="fa fa-heart"></i></a>
              </div>
            </div>
            <div class="product-price">
              <h3><span>Rp</span>4.580.000</h3>
              <a class="btn" href=""
                ><i class="fa fa-shopping-cart"></i>Beli Sekarang</a
              >
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="product-item">
            <div class="product-title">
              <a href="#">Unerd 219 Crimsone Blue</a>
              <div class="ratting">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
            <div class="product-image">
              <a href="product-detail.html">
                <img src="img/Produk list 12.jpg" alt="Product Image" />
              </a>
              <div class="product-action">
                <a href="#"><i class="fa fa-cart-plus"></i></a>
                <a href="#"><i class="fa fa-heart"></i></a>
              </div>
            </div>
            <div class="product-price">
              <h3><span>Rp</span>299.000</h3>
              <a class="btn" href=""
                ><i class="fa fa-shopping-cart"></i>Beli Sekarang</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Product Detail End -->
    
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
