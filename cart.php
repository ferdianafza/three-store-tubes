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
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
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
                                <a class="nav-link btn-outline-primary rounded-pill px-3  " href="index.html">Beranda</a>
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
                    <li class="breadcrumb-item active">Keranjang</li>
                </ul>
            </div>
        </div>
        <iframe id="cartFrame" src="product_list.php" style="display: none;"></iframe>
        <!-- Breadcrumb End -->
        <div hidden="">
            
        <button id="buttonCartA" onclick="buttonCartAClick()">Cart A</button>
        <button id="buttonCartB" onclick="buttonCartBClick()">Cart B</button>
        <button id="buttonCartC" onclick="buttonCartCClick()">Cart B</button>
        <button id="buttonCartD" onclick="buttonCartDClick()">Cart B</button>
        <button id="buttonCartE" onclick="buttonCartEClick()">Cart B</button>
        <button id="buttonCartF" onclick="buttonCartFClick()">Cart B</button>
        <button id="buttonCartG" onclick="buttonCartGClick()">Cart B</button>
        <button id="buttonCartH" onclick="buttonCartHClick()">Cart B</button>
        <button id="buttonCartI" onclick="buttonCartIClick()">Cart B</button>
        <button id="buttonCartJ" onclick="buttonCartJClick()">Cart B</button>
        <button id="buttonCartK" onclick="buttonCartKClick()">Cart B</button>
        <button id="buttonCartL" onclick="buttonCartLClick()">Cart B</button>
        </div>
        <script>

          function gbaHapus() {
  var row = event.target.closest('.gbaRow');
  row.remove();
}
          function setTotal() {
            var totalElements = document.querySelectorAll('.totalR');
var sum = 0;

for (var i = 0; i < totalElements.length; i++) {
  var text = totalElements[i].innerText;
  var number = parseFloat(text.replace(/[^\d]/g, '')); // Menghapus semua karakter non-angka

  if (!isNaN(number)) {
    sum += number;
  }
}
var totalSpan = document.getElementById("tempTotal");
totalSpan.innerText = sum.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
var pajak = document.getElementById("pajak");
var estPajak = sum * 0.1;
pajak.innerText = estPajak.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });;
var totalFix = sum + estPajak;
var totaltagihan = document.getElementById("TOTAL");
totaltagihan.innerText = totalFix.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
          }
    function buttonCartAClick() {
        // Kode aksi saat tombol "Cart A" diklik
        fetch("gba.php")
    .then(response => response.text())
    .then(htmlCode => {
      // Create a new table row element
      var newRow = document.createElement("tr");

      // Set the HTML code as the content of the new row
      newRow.innerHTML = htmlCode;

      // Append the new row to the table
      var table = document.getElementById("tabel");
      table.appendChild(newRow);
      var totalElements = document.querySelectorAll('.totalR');
var sum = 0;

for (var i = 0; i < totalElements.length; i++) {
  var text = totalElements[i].innerText;
  var number = parseFloat(text.replace(/[^\d]/g, '')); // Menghapus semua karakter non-angka

  if (!isNaN(number)) {
    sum += number;
  }
}
var totalSpan = document.getElementById("tempTotal");
totalSpan.innerText = sum.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
var pajak = document.getElementById("pajak");
var estPajak = sum * 0.1;
pajak.innerText = estPajak.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });;
var totalFix = sum + estPajak;
var totaltagihan = document.getElementById("TOTAL");
totaltagihan.innerText = totalFix.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
    })
    .catch(error => {
      // Handle any errors that occur during the request
      console.error("Error:", error);
    });
        
    }

    function buttonCartBClick() {
        // Kode aksi saat tombol "Cart B" diklik
        // alert("Cart B clicked!");
        fetch("ajd.php")
    .then(response => response.text())
    .then(htmlCode => {
      // Create a new table row element
      var newRow = document.createElement("tr");

      // Set the HTML code as the content of the new row
      newRow.innerHTML = htmlCode;

      // Append the new row to the table
      var table = document.getElementById("tabel");
      table.appendChild(newRow);
      var totalElements = document.querySelectorAll('.totalR');
var sum = 0;

for (var i = 0; i < totalElements.length; i++) {
  var text = totalElements[i].innerText;
  var number = parseFloat(text.replace(/[^\d]/g, '')); // Menghapus semua karakter non-angka

  if (!isNaN(number)) {
    sum += number;
  }
}
var totalSpan = document.getElementById("tempTotal");
totalSpan.innerText = sum.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
var pajak = document.getElementById("pajak");
var estPajak = sum * 0.1;
pajak.innerText = estPajak.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });;
var totalFix = sum + estPajak;
var totaltagihan = document.getElementById("TOTAL");
totaltagihan.innerText = totalFix.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });

    })
    .catch(error => {
      // Handle any errors that occur during the request
      console.error("Error:", error);
    });
    }

    function buttonCartCClick() {
        // Kode aksi saat tombol "Cart B" diklik
        // alert("Cart B clicked!");
        fetch("nam.php")
    .then(response => response.text())
    .then(htmlCode => {
      // Create a new table row element
      var newRow = document.createElement("tr");

      // Set the HTML code as the content of the new row
      newRow.innerHTML = htmlCode;

      // Append the new row to the table
      var table = document.getElementById("tabel");
      table.appendChild(newRow);
      var totalElements = document.querySelectorAll('.totalR');
var sum = 0;

for (var i = 0; i < totalElements.length; i++) {
  var text = totalElements[i].innerText;
  var number = parseFloat(text.replace(/[^\d]/g, '')); // Menghapus semua karakter non-angka

  if (!isNaN(number)) {
    sum += number;
  }
}
var totalSpan = document.getElementById("tempTotal");
totalSpan.innerText = sum.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
var pajak = document.getElementById("pajak");
var estPajak = sum * 0.1;
pajak.innerText = estPajak.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });;
var totalFix = sum + estPajak;
var totaltagihan = document.getElementById("TOTAL");
totaltagihan.innerText = totalFix.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
    })
    .catch(error => {
      // Handle any errors that occur during the request
      console.error("Error:", error);
    });
    }
    function buttonCartDClick() {
        fetch("psms.php")
    .then(response => response.text())
    .then(htmlCode => {
      // Create a new table row element
      var newRow = document.createElement("tr");

      // Set the HTML code as the content of the new row
      newRow.innerHTML = htmlCode;

      // Append the new row to the table
      var table = document.getElementById("tabel");
      table.appendChild(newRow);
      var totalElements = document.querySelectorAll('.totalR');
var sum = 0;

for (var i = 0; i < totalElements.length; i++) {
  var text = totalElements[i].innerText;
  var number = parseFloat(text.replace(/[^\d]/g, '')); // Menghapus semua karakter non-angka

  if (!isNaN(number)) {
    sum += number;
  }
}
var totalSpan = document.getElementById("tempTotal");
totalSpan.innerText = sum.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
var pajak = document.getElementById("pajak");
var estPajak = sum * 0.1;
pajak.innerText = estPajak.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });;
var totalFix = sum + estPajak;
var totaltagihan = document.getElementById("TOTAL");
totaltagihan.innerText = totalFix.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
    })
    .catch(error => {
      // Handle any errors that occur during the request
      console.error("Error:", error);
    });
    }

    function buttonCartEClick() {
        fetch("msw.php")
    .then(response => response.text())
    .then(htmlCode => {
      // Create a new table row element
      var newRow = document.createElement("tr");

      // Set the HTML code as the content of the new row
      newRow.innerHTML = htmlCode;

      // Append the new row to the table
      var table = document.getElementById("tabel");
      table.appendChild(newRow);
      setTotal();
    })
    .catch(error => {
      // Handle any errors that occur during the request
      console.error("Error:", error);
    });
    }

    function buttonCartFClick() {
        fetch("owlt.php")
    .then(response => response.text())
    .then(htmlCode => {
      // Create a new table row element
      var newRow = document.createElement("tr");

      // Set the HTML code as the content of the new row
      newRow.innerHTML = htmlCode;

      // Append the new row to the table
      var table = document.getElementById("tabel");
      table.appendChild(newRow);
      setTotal();
    })
    .catch(error => {
      // Handle any errors that occur during the request
      console.error("Error:", error);
    });
    }
    function buttonCartGClick() {
        fetch("ra.php")
    .then(response => response.text())
    .then(htmlCode => {
      // Create a new table row element
      var newRow = document.createElement("tr");

      // Set the HTML code as the content of the new row
      newRow.innerHTML = htmlCode;

      // Append the new row to the table
      var table = document.getElementById("tabel");
      table.appendChild(newRow);
      setTotal();
    })
    .catch(error => {
      // Handle any errors that occur during the request
      console.error("Error:", error);
    });
    }
    function buttonCartHClick() {
        fetch("fcb.php")
    .then(response => response.text())
    .then(htmlCode => {
      // Create a new table row element
      var newRow = document.createElement("tr");

      // Set the HTML code as the content of the new row
      newRow.innerHTML = htmlCode;

      // Append the new row to the table
      var table = document.getElementById("tabel");
      table.appendChild(newRow);
      setTotal();
    })
    .catch(error => {
      // Handle any errors that occur during the request
      console.error("Error:", error);
    });
    }
    function buttonCartIClick() {
        fetch("kdm.php")
    .then(response => response.text())
    .then(htmlCode => {
      // Create a new table row element
      var newRow = document.createElement("tr");

      // Set the HTML code as the content of the new row
      newRow.innerHTML = htmlCode;

      // Append the new row to the table
      var table = document.getElementById("tabel");
      table.appendChild(newRow);
      setTotal();
    })
    .catch(error => {
      // Handle any errors that occur during the request
      console.error("Error:", error);
    });
    }
    function buttonCartJClick() {
        fetch("gmt.php")
    .then(response => response.text())
    .then(htmlCode => {
      // Create a new table row element
      var newRow = document.createElement("tr");

      // Set the HTML code as the content of the new row
      newRow.innerHTML = htmlCode;

      // Append the new row to the table
      var table = document.getElementById("tabel");
      table.appendChild(newRow);
      setTotal();
    })
    .catch(error => {
      // Handle any errors that occur during the request
      console.error("Error:", error);
    });
    }
    function buttonCartKClick() {
        fetch("vel.php")
    .then(response => response.text())
    .then(htmlCode => {
      // Create a new table row element
      var newRow = document.createElement("tr");

      // Set the HTML code as the content of the new row
      newRow.innerHTML = htmlCode;

      // Append the new row to the table
      var table = document.getElementById("tabel");
      table.appendChild(newRow);
      setTotal();
    })
    .catch(error => {
      // Handle any errors that occur during the request
      console.error("Error:", error);
    });
    }
    function buttonCartLClick() {
        fetch("ucb.php")
    .then(response => response.text())
    .then(htmlCode => {
      // Create a new table row element
      var newRow = document.createElement("tr");

      // Set the HTML code as the content of the new row
      newRow.innerHTML = htmlCode;

      // Append the new row to the table
      var table = document.getElementById("tabel");
      table.appendChild(newRow);
      setTotal();
    })
    .catch(error => {
      // Handle any errors that occur during the request
      console.error("Error:", error);
    });
    }



    // Ambil nilai parameter productId dari URL
    const urlParams = new URLSearchParams(window.location.search);
    const productId = urlParams.get('productId');

    // Autoclick tombol sesuai dengan nilai parameter productId
    if (productId === 'A') {
        window.onload = function() {
            var buttonCartA = document.getElementById("buttonCartA");
            buttonCartA.click();
        }
    } else if (productId === 'B') {
        window.onload = function() {
            var buttonCartB = document.getElementById("buttonCartB");
            buttonCartB.click();
        }
    }
    else if (productId === 'C') {
        window.onload = function() {
            var buttonCartC = document.getElementById("buttonCartC");
            buttonCartC.click();
        }
    }
    else if (productId === 'D') {
        window.onload = function() {
            var buttonCartD = document.getElementById("buttonCartD");
            buttonCartD.click();
        }
    }
    else if (productId === 'E') {
        window.onload = function() {
            var buttonCartE = document.getElementById("buttonCartE");
            buttonCartE.click();
        }
    }
    else if (productId === 'F') {
        window.onload = function() {
            var buttonCartF = document.getElementById("buttonCartF");
            buttonCartF.click();
        }
    }
    else if (productId === 'G') {
        window.onload = function() {
            var buttonCartG = document.getElementById("buttonCartG");
            buttonCartG.click();
        }
    }
    else if (productId === 'H') {
        window.onload = function() {
            var buttonCartH = document.getElementById("buttonCartH");
            buttonCartH.click();
        }
    }
    else if (productId === 'I') {
        window.onload = function() {
            var buttonCartI = document.getElementById("buttonCartI");
            buttonCartI.click();
        }
    }
    else if (productId === 'J') {
        window.onload = function() {
            var buttonCartJ = document.getElementById("buttonCartJ");
            buttonCartJ.click();
        }
    }
    else if (productId === 'K') {
        window.onload = function() {
            var buttonCartK = document.getElementById("buttonCartK");
            buttonCartK.click();
        }
    }
    else if (productId === 'L') {
        window.onload = function() {
            var buttonCartL = document.getElementById("buttonCartL");
            buttonCartL.click();
        }
    }
    </script>
        <!-- <button onclick="cba()">Append Table Row</button> -->

<script>
function cba() {
  fetch("gba.php")
    .then(response => response.text())
    .then(htmlCode => {
      var newRow = document.createElement("tr");
      newRow.innerHTML = htmlCode;
      var table = document.getElementById("tabel");
      table.appendChild(newRow);
      setTotal();
    })
    .catch(error => {
      console.error("Error:", error);
    });
}
function ajd() {
  fetch("ajd.php")
    .then(response => response.text())
    .then(htmlCode => {
      var newRow = document.createElement("tr");
      newRow.innerHTML = htmlCode;
      var table = document.getElementById("tabel");
      table.appendChild(newRow);
      setTotal();
    })
    .catch(error => {
      console.error("Error:", error);
    });
}
function nam() {
  fetch("nam.php")
    .then(response => response.text())
    .then(htmlCode => {
      var newRow = document.createElement("tr");
      newRow.innerHTML = htmlCode;
      var table = document.getElementById("tabel");
      table.appendChild(newRow);
      setTotal();
    })
    .catch(error => {
      console.error("Error:", error);
    });
}
function psms() {
  fetch("psms.php")
    .then(response => response.text())
    .then(htmlCode => {
      var newRow = document.createElement("tr");
      newRow.innerHTML = htmlCode;
      var table = document.getElementById("tabel");
      table.appendChild(newRow);
      setTotal();
    })
    .catch(error => {
      console.error("Error:", error);
    });
}
function msw() {
  fetch("msw.php")
    .then(response => response.text())
    .then(htmlCode => {
      var newRow = document.createElement("tr");
      newRow.innerHTML = htmlCode;
      var table = document.getElementById("tabel");
      table.appendChild(newRow);
      setTotal();
    })
    .catch(error => {
      console.error("Error:", error);
    });
}
function owlt() {
  fetch("owlt.php")
    .then(response => response.text())
    .then(htmlCode => {
      var newRow = document.createElement("tr");
      newRow.innerHTML = htmlCode;
      var table = document.getElementById("tabel");
      table.appendChild(newRow);
      setTotal();
    })
    .catch(error => {
      console.error("Error:", error);
    });
}
function ra() {
  fetch("ra.php")
    .then(response => response.text())
    .then(htmlCode => {
      var newRow = document.createElement("tr");
      newRow.innerHTML = htmlCode;
      var table = document.getElementById("tabel");
      table.appendChild(newRow);
      setTotal();
    })
    .catch(error => {
      console.error("Error:", error);
    });
}
function fcb() {
  fetch("fcb.php")
    .then(response => response.text())
    .then(htmlCode => {
      var newRow = document.createElement("tr");
      newRow.innerHTML = htmlCode;
      var table = document.getElementById("tabel");
      table.appendChild(newRow);
      setTotal();
    })
    .catch(error => {
      console.error("Error:", error);
    });
}function kdm() {
  fetch("kdm.php")
    .then(response => response.text())
    .then(htmlCode => {
      var newRow = document.createElement("tr");
      newRow.innerHTML = htmlCode;
      var table = document.getElementById("tabel");
      table.appendChild(newRow);
      setTotal();
    })
    .catch(error => {
      console.error("Error:", error);
    });
}function gmt() {
  fetch("gmt.php")
    .then(response => response.text())
    .then(htmlCode => {
      var newRow = document.createElement("tr");
      newRow.innerHTML = htmlCode;
      var table = document.getElementById("tabel");
      table.appendChild(newRow);
      setTotal();
    })
    .catch(error => {
      console.error("Error:", error);
    });
}function vel() {
  fetch("vel.php")
    .then(response => response.text())
    .then(htmlCode => {
      var newRow = document.createElement("tr");
      newRow.innerHTML = htmlCode;
      var table = document.getElementById("tabel");
      table.appendChild(newRow);
      setTotal();
    })
    .catch(error => {
      console.error("Error:", error);
    });
}function ucb() {
  fetch("ucb.php")
    .then(response => response.text())
    .then(htmlCode => {
      var newRow = document.createElement("tr");
      newRow.innerHTML = htmlCode;
      var table = document.getElementById("tabel");
      table.appendChild(newRow);
      setTotal();
    })
    .catch(error => {
      console.error("Error:", error);
    });
}
</script>
<script>
  function gbaTotal() {
      var jumlahInput = $('.jumlah1');
      var hargaElement = $('.harga1');
      var totalElement = $('.total1');
  
      var jumlahAwal = parseInt(jumlahInput.val());
      var harga = parseInt(hargaElement.text().replace('Rp ', '').replace('.', '').replace('.', ''));

      var totalAwal = jumlahAwal * harga;
      totalElement.text('Rp ' + formatRupiah(totalAwal));

      jumlahInput.change(function() {
        var jumlah = parseInt(jumlahInput.val());
        var total = jumlah * harga;
        totalElement.text('Rp ' + formatRupiah(total));
      });

      function formatRupiah(angka) {
        var numberString = angka.toString();
        var split = numberString.split(',');
        var sisa = split[0].length % 3;
        var rupiah = split[0].substr(0, sisa);
        var ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
          var separator = sisa ? '.' : '';
          rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
        return rupiah;
  } setTotal();
  };
</script>

<script>
  function ajdTotal() {
      var jumlahInput = $('.jumlah2');
      var hargaElement = $('.harga2');
      var totalElement = $('.total2');
  
      var jumlahAwal = parseInt(jumlahInput.val());
      var harga = parseInt(hargaElement.text().replace('Rp ', '').replace('.', '').replace('.', ''));

      var totalAwal = jumlahAwal * harga;
      totalElement.text('Rp ' + formatRupiah(totalAwal));

      jumlahInput.change(function() {
        var jumlah = parseInt(jumlahInput.val());
        var total = jumlah * harga;
        totalElement.text('Rp ' + formatRupiah(total));
      });

      function formatRupiah(angka) {
        var numberString = angka.toString();
        var split = numberString.split(',');
        var sisa = split[0].length % 3;
        var rupiah = split[0].substr(0, sisa);
        var ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
          var separator = sisa ? '.' : '';
          rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
        return rupiah;
  } setTotal();
  };
</script>
<script>
  function namTotal() {
      var jumlahInput = $('.jumlah3');
      var hargaElement = $('.harga3');
      var totalElement = $('.total3');
  
      var jumlahAwal = parseInt(jumlahInput.val());
      var harga = parseInt(hargaElement.text().replace('Rp ', '').replace('.', '').replace('.', ''));

      var totalAwal = jumlahAwal * harga;
      totalElement.text('Rp ' + formatRupiah(totalAwal));

      jumlahInput.change(function() {
        var jumlah = parseInt(jumlahInput.val());
        var total = jumlah * harga;
        totalElement.text('Rp ' + formatRupiah(total));
      });

      function formatRupiah(angka) {
        var numberString = angka.toString();
        var split = numberString.split(',');
        var sisa = split[0].length % 3;
        var rupiah = split[0].substr(0, sisa);
        var ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
          var separator = sisa ? '.' : '';
          rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
        return rupiah;
  } setTotal();
  };
</script>
<script>
  function psmsTotal() {
      var jumlahInput = $('.jumlah4');
      var hargaElement = $('.harga4');
      var totalElement = $('.total4');
  
      var jumlahAwal = parseInt(jumlahInput.val());
      var harga = parseInt(hargaElement.text().replace('Rp ', '').replace('.', '').replace('.', ''));

      var totalAwal = jumlahAwal * harga;
      totalElement.text('Rp ' + formatRupiah(totalAwal));

      jumlahInput.change(function() {
        var jumlah = parseInt(jumlahInput.val());
        var total = jumlah * harga;
        totalElement.text('Rp ' + formatRupiah(total));
      });

      function formatRupiah(angka) {
        var numberString = angka.toString();
        var split = numberString.split(',');
        var sisa = split[0].length % 3;
        var rupiah = split[0].substr(0, sisa);
        var ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
          var separator = sisa ? '.' : '';
          rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
        return rupiah;
  } setTotal();
  };
</script>
<script>
  function mswTotal() {
      var jumlahInput = $('.jumlah5');
      var hargaElement = $('.harga5');
      var totalElement = $('.total5');
  
      var jumlahAwal = parseInt(jumlahInput.val());
      var harga = parseInt(hargaElement.text().replace('Rp ', '').replace('.', '').replace('.', ''));

      var totalAwal = jumlahAwal * harga;
      totalElement.text('Rp ' + formatRupiah(totalAwal));

      jumlahInput.change(function() {
        var jumlah = parseInt(jumlahInput.val());
        var total = jumlah * harga;
        totalElement.text('Rp ' + formatRupiah(total));
      });

      function formatRupiah(angka) {
        var numberString = angka.toString();
        var split = numberString.split(',');
        var sisa = split[0].length % 3;
        var rupiah = split[0].substr(0, sisa);
        var ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
          var separator = sisa ? '.' : '';
          rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
        return rupiah;
  } setTotal();
  };
</script>
<script>
  function owltTotal() {
      var jumlahInput = $('.jumlah6');
      var hargaElement = $('.harga6');
      var totalElement = $('.total6');
  
      var jumlahAwal = parseInt(jumlahInput.val());
      var harga = parseInt(hargaElement.text().replace('Rp ', '').replace('.', '').replace('.', ''));

      var totalAwal = jumlahAwal * harga;
      totalElement.text('Rp ' + formatRupiah(totalAwal));

      jumlahInput.change(function() {
        var jumlah = parseInt(jumlahInput.val());
        var total = jumlah * harga;
        totalElement.text('Rp ' + formatRupiah(total));
      });

      function formatRupiah(angka) {
        var numberString = angka.toString();
        var split = numberString.split(',');
        var sisa = split[0].length % 3;
        var rupiah = split[0].substr(0, sisa);
        var ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
          var separator = sisa ? '.' : '';
          rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
        return rupiah;
  } setTotal();
  };
</script>
  <script>
  function raTotal() {
      var jumlahInput = $('.jumlah7');
      var hargaElement = $('.harga7');
      var totalElement = $('.total');
  
      var jumlahAwal = parseInt(jumlahInput.val());
      var harga = parseInt(hargaElement.text().replace('Rp ', '').replace('.', '').replace('.', ''));

      var totalAwal = jumlahAwal * harga;
      totalElement.text('Rp ' + formatRupiah(totalAwal));

      jumlahInput.change(function() {
        var jumlah = parseInt(jumlahInput.val());
        var total = jumlah * harga;
        totalElement.text('Rp ' + formatRupiah(total));
      });

      function formatRupiah(angka) {
        var numberString = angka.toString();
        var split = numberString.split(',');
        var sisa = split[0].length % 3;
        var rupiah = split[0].substr(0, sisa);
        var ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
          var separator = sisa ? '.' : '';
          rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
        return rupiah;
  } setTotal();
  };
</script>
<script>
  function fcbTotal() {
      var jumlahInput = $('.jumlah8');
      var hargaElement = $('.harga8');
      var totalElement = $('.total8');
  
      var jumlahAwal = parseInt(jumlahInput.val());
      var harga = parseInt(hargaElement.text().replace('Rp ', '').replace('.', '').replace('.', ''));

      var totalAwal = jumlahAwal * harga;
      totalElement.text('Rp ' + formatRupiah(totalAwal));

      jumlahInput.change(function() {
        var jumlah = parseInt(jumlahInput.val());
        var total = jumlah * harga;
        totalElement.text('Rp ' + formatRupiah(total));
      });

      function formatRupiah(angka) {
        var numberString = angka.toString();
        var split = numberString.split(',');
        var sisa = split[0].length % 3;
        var rupiah = split[0].substr(0, sisa);
        var ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
          var separator = sisa ? '.' : '';
          rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
        return rupiah;
  } setTotal();
  };
</script>
<script>
  function kdmTotal() {
      var jumlahInput = $('.jumlah9');
      var hargaElement = $('.harga9');
      var totalElement = $('.total9');
  
      var jumlahAwal = parseInt(jumlahInput.val());
      var harga = parseInt(hargaElement.text().replace('Rp ', '').replace('.', '').replace('.', ''));

      var totalAwal = jumlahAwal * harga;
      totalElement.text('Rp ' + formatRupiah(totalAwal));

      jumlahInput.change(function() {
        var jumlah = parseInt(jumlahInput.val());
        var total = jumlah * harga;
        totalElement.text('Rp ' + formatRupiah(total));
      });

      function formatRupiah(angka) {
        var numberString = angka.toString();
        var split = numberString.split(',');
        var sisa = split[0].length % 3;
        var rupiah = split[0].substr(0, sisa);
        var ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
          var separator = sisa ? '.' : '';
          rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
        return rupiah;
  } setTotal();
  };
</script>
<script>
  function gmtTotal() {
      var jumlahInput = $('.jumlah10');
      var hargaElement = $('.harga10');
      var totalElement = $('.total10');
  
      var jumlahAwal = parseInt(jumlahInput.val());
      var harga = parseInt(hargaElement.text().replace('Rp ', '').replace('.', '').replace('.', ''));

      var totalAwal = jumlahAwal * harga;
      totalElement.text('Rp ' + formatRupiah(totalAwal));

      jumlahInput.change(function() {
        var jumlah = parseInt(jumlahInput.val());
        var total = jumlah * harga;
        totalElement.text('Rp ' + formatRupiah(total));
      });

      function formatRupiah(angka) {
        var numberString = angka.toString();
        var split = numberString.split(',');
        var sisa = split[0].length % 3;
        var rupiah = split[0].substr(0, sisa);
        var ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
          var separator = sisa ? '.' : '';
          rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
        return rupiah;
  } setTotal();
  };
</script>
<script>
  function velTotal() {
      var jumlahInput = $('.jumlah11');
      var hargaElement = $('.harga11');
      var totalElement = $('.total11');
  
      var jumlahAwal = parseInt(jumlahInput.val());
      var harga = parseInt(hargaElement.text().replace('Rp ', '').replace('.', '').replace('.', ''));

      var totalAwal = jumlahAwal * harga;
      totalElement.text('Rp ' + formatRupiah(totalAwal));

      jumlahInput.change(function() {
        var jumlah = parseInt(jumlahInput.val());
        var total = jumlah * harga;
        totalElement.text('Rp ' + formatRupiah(total));
      });

      function formatRupiah(angka) {
        var numberString = angka.toString();
        var split = numberString.split(',');
        var sisa = split[0].length % 3;
        var rupiah = split[0].substr(0, sisa);
        var ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
          var separator = sisa ? '.' : '';
          rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
        return rupiah;
  } setTotal();
  };
</script>
<script>
  function ucbTotal() {
      var jumlahInput = $('.jumlah12');
      var hargaElement = $('.harga12');
      var totalElement = $('.total12');
  
      var jumlahAwal = parseInt(jumlahInput.val());
      var harga = parseInt(hargaElement.text().replace('Rp ', '').replace('.', '').replace('.', ''));

      var totalAwal = jumlahAwal * harga;
      totalElement.text('Rp ' + formatRupiah(totalAwal));

      jumlahInput.change(function() {
        var jumlah = parseInt(jumlahInput.val());
        var total = jumlah * harga;
        totalElement.text('Rp ' + formatRupiah(total));
      });

      function formatRupiah(angka) {
        var numberString = angka.toString();
        var split = numberString.split(',');
        var sisa = split[0].length % 3;
        var rupiah = split[0].substr(0, sisa);
        var ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
          var separator = sisa ? '.' : '';
          rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
        return rupiah;
  } setTotal();
  };
</script>
<!-- Produk -->
<!-- Product Start -->
    <div class="product-view">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-md-3">
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
                      <a onclick="cba()" ><i class="fa fa-cart-plus"></i></a>
                      <a href="#"><i class="fa fa-heart"></i></a>
                    </div>
                  </div>
                  <div class="product-price">
                    <h3><span>Rp</span> 7.560.800</h3>
                    <a class="btn" href=""
                      ><i class="fa fa-shopping-cart"></i>Beli Sekarang</a
                    >
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="product-item">
                  <div class="product-title">
                    <a href="#">Air Jordan 1 Mid</a>
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
                      <img src="img/Produk list 2.jpg" alt="Product Image" />
                    </a>
                    <div class="product-action">
                      <a onclick="ajd()" ><i class="fa fa-cart-plus"></i></a>
                      <a href="#"><i class="fa fa-heart"></i></a>
                    </div>
                  </div>
                  <div class="product-price">
                    <h3><span>Rp</span> 2.899.000</h3>
                    <a class="btn" href=""
                      ><i class="fa fa-shopping-cart"></i>Beli Sekarang</a
                    >
                  </div>
                </div>
              </div>
              
              <div class="col-md-3">
                <div class="product-item">
                  <div class="product-title">
                    <a href="#">Nike Air Max 97</a>
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
                      <img src="img/Produk list 3.jpg" alt="Product Image" />
                    </a>
                    <div class="product-action">
                      <a onclick="nam()" ><i class="fa fa-cart-plus"></i></a>
                      <a href="#"><i class="fa fa-heart"></i></a>
                    </div>
                  </div>
                  <div class="product-price">
                    <h3><span>Rp</span> 3.800.800</h3>
                    <a class="btn" href=""
                      ><i class="fa fa-shopping-cart"></i>Beli Sekarang</a
                    >
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="product-item">
                  <div class="product-title">
                    <a href="#">Puma Select Mirage Sport</a>
                    <div class="ratting">
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
                      <a onclick="psms()" ><i class="fa fa-cart-plus"></i></a>
                      <a href="#"><i class="fa fa-heart"></i></a>
                    </div>
                  </div>
                  <div class="product-price">
                    <h3><span>Rp</span> 1.700.000</h3>
                    <a class="btn" href=""
                      ><i class="fa fa-shopping-cart"></i>Beli Sekarang</a
                    >
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="product-item">
                  <div class="product-title">
                    <a href="#">MIZUNO SPORTSTYLE Wave </a>
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
                      <img src="img/Produk list 5.jpg" alt="Product Image" />
                    </a>
                    <div class="product-action">
                      <a onclick="msw()" ><i class="fa fa-cart-plus"></i></a>
                      <a href="#"><i class="fa fa-heart"></i></a>
                    </div>
                  </div>
                  <div class="product-price">
                    <h3><span>Rp</span> 5.900.000</h3>
                    <a class="btn" href=""
                      ><i class="fa fa-shopping-cart"></i>Beli Sekarang</a
                    >
                  </div>
                </div>
              </div>

              <div class="col-md-3">
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
                      <a onclick="owlt()" ><i class="fa fa-cart-plus"></i></a>
                      <a href="#"><i class="fa fa-heart"></i></a>
                    </div>
                  </div>
                  <div class="product-price">
                    <h3><span>Rp</span> 4.580.000</h3>
                    <a class="btn" href=""
                      ><i class="fa fa-shopping-cart"></i>Beli Sekarang</a
                    >
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="product-item">
                  <div class="product-title">
                    <a href="#">Riku Aerostreet</a>
                    <div class="ratting">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <div class="product-image">
                    <a href="product-detail.html">
                      <img src="img/Produk list 7.jpg" alt="Product Image" />
                    </a>
                    <div class="product-action">
                      <a onclick="ra()" ><i class="fa fa-cart-plus"></i></a>
                      <a href="#"><i class="fa fa-heart"></i></a>
                    </div>
                  </div>
                  <div class="product-price">
                    <h3><span>Rp</span> 149.000</h3>
                    <a class="btn" href=""
                      ><i class="fa fa-shopping-cart"></i>Beli Sekarang</a
                    >
                  </div>
                </div>
              </div>

              <div class="col-md-3">
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
                      <img src="img/Produk list 8.jpg" alt="Product Image" />
                    </a>
                    <div class="product-action">
                      <a onclick="fcb()" ><i class="fa fa-cart-plus"></i></a>
                      <a href="#"><i class="fa fa-heart"></i></a>
                    </div>
                  </div>
                  <div class="product-price">
                    <h3><span>Rp</span> 650.000</h3>
                    <a class="btn" href=""
                      ><i class="fa fa-shopping-cart"></i>Beli Sekarang</a
                    >
                  </div>
                </div>
              </div>

              <div class="col-md-3">
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
                      <img src="img/Produk list 9.jpg" alt="Product Image" />
                    </a>
                    <div class="product-action">
                      <a onclick="kdm()" ><i class="fa fa-cart-plus"></i></a>
                      <a href="#"><i class="fa fa-heart"></i></a>
                    </div>
                  </div>
                  <div class="product-price">
                    <h3><span>Rp</span> 210.000</h3>
                    <a class="btn" href=""
                      ><i class="fa fa-shopping-cart"></i>Beli Sekarang</a
                    >
                  </div>
                </div>
              </div>

              <div class="col-md-3">
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
                      <img src="img/Produk list 10.jpg" alt="Product Image" />
                    </a>
                    <div class="product-action">
                      <a onclick="gmt()" ><i class="fa fa-cart-plus"></i></a>
                      <a href="#"><i class="fa fa-heart"></i></a>
                    </div>
                  </div>
                  <div class="product-price">
                    <h3><span>Rp</span> 220.000</h3>
                    <a class="btn" href=""
                      ><i class="fa fa-shopping-cart"></i>Beli Sekarang</a
                    >
                  </div>
                </div>
              </div>

              <div class="col-md-3">
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
                      <img src="img/Produk list 11.jpg" alt="Product Image" />
                    </a>
                    <div class="product-action">
                      <a onclick="vel()" ><i class="fa fa-cart-plus"></i></a>
                      <a href="#"><i class="fa fa-heart"></i></a>
                    </div>
                  </div>
                  <div class="product-price">
                    <h3><span>Rp</span> 209.900</h3>
                    <a class="btn" href=""
                      ><i class="fa fa-shopping-cart"></i>Beli Sekarang</a
                    >
                  </div>
                </div>
              </div>

              <div class="col-md-3">
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
                      <a onclick="ucb()" ><i class="fa fa-cart-plus"></i></a>
                      <a href="#"><i class="fa fa-heart"></i></a>
                    </div>
                  </div>
                  <div class="product-price">
                    <h3><span>Rp</span> 299.000</h3>
                    <a class="btn" href=""
                      ><i class="fa fa-shopping-cart"></i>Beli Sekarang</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- Produk end -->
        <!-- Cart Start -->
        <div class="cart-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart-page-inner">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="tabel">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Produk</th>
                                            <th>Harga</th>
                                            <th>Banyak Barang</th>
                                            <th>Total</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">
                                       
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart-page-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="coupon">
                                        <input type="text" placeholder="Masukan Kupon">
                                        <button>Terapkan</button>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="cart-summary">
                                        <div class="cart-content">
                                            <h1>Keranjang</h1>
                                            <p>Total<span id="tempTotal">Rp 7.810.000</span></p>
                                            <p>Pajak<span id="pajak">Rp 150.000</span></p>
                                            <h2>Total <span id="TOTAL">Rp 7.960.000</span></h2>
                                        </div>
                                        <div class="cart-btn">
                                            <button>Tambahkan </button>
                                            <button>Checkout</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart End -->
        
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
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        <script>
          var elements = document.querySelectorAll('.nama-class');

// Variabel untuk menyimpan total jumlah
var total = 0;

// Loop melalui setiap elemen dan menjumlahkannya
for (var i = 0; i < elements.length; i++) {
  // Mengambil nilai dari elemen
  var nilai = elements[i].innerText;

  // Mengonversi nilai ke tipe numerik
  var jumlah = parseInt(nilai);

  // Menambahkan jumlah ke total
  total += jumlah;
}

// Menggunakan total sesuai kebutuhan
console.log('Total: ' + total);
        </script>
    </body>
</html>
