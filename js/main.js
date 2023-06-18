(function ($) {
    "use strict";
    
    // Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 768) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });
    
    
    // Header slider
    $('.header-slider').slick({
        autoplay: true,
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });
    
    
    // Product Slider 4 Column
    $('.product-slider-4').slick({
        autoplay: true,
        infinite: true,
        dots: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });
    
    
    // Product Slider 3 Column
    $('.product-slider-3').slick({
        autoplay: true,
        infinite: true,
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });
    
    
    // Product Detail Slider
    $('.product-slider-single').slick({
        infinite: true,
        autoplay: true,
        dots: false,
        fade: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.product-slider-single-nav'
    });
    $('.product-slider-single-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        asNavFor: '.product-slider-single'
    });
    
    
    // Brand Slider
    $('.brand-slider').slick({
        speed: 5000,
        autoplay: true,
        autoplaySpeed: 0,
        cssEase: 'linear',
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
        swipeToSlide: true,
        centerMode: true,
        focusOnSelect: false,
        arrows: false,
        dots: false,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 300,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
    
    
    // Review slider
    $('.review-slider').slick({
        autoplay: true,
        dots: false,
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
    
    
    // Widget slider
    $('.sidebar-slider').slick({
        autoplay: true,
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });
    
    
    // Quantity
    $('.qty button').on('click', function () {
        var $button = $(this);
        var oldValue = $button.parent().find('input').val();
        if ($button.hasClass('btn-plus')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find('input').val(newVal);
    });
    
    
    // Shipping address show hide
    $('.checkout #shipto').change(function () {
        if($(this).is(':checked')) {
            $('.checkout .shipping-address').slideDown();
        } else {
            $('.checkout .shipping-address').slideUp();
        }
    });
    
    
    // Payment methods show hide
    $('.checkout .payment-method .custom-control-input').change(function () {
        if ($(this).prop('checked')) {
            var checkbox_id = $(this).attr('id');
            $('.checkout .payment-method .payment-content').slideUp();
            $('#' + checkbox_id + '-show').slideDown();
        }
    });

    //plus min detail product
    // Ambil elemen tombol plus dan minus
  var btnMinus = document.querySelector('.btn-minus');
  var btnPlus = document.querySelector('.btn-plus');

  // Ambil elemen input
  var inputQuantity = document.querySelector('.form-control');

  // Tambahkan event listener untuk tombol minus
  btnMinus.addEventListener('click', function() {
    var currentValue = parseInt(inputQuantity.value); // Ambil nilai input saat ini
    if (currentValue > 1) {
      inputQuantity.value = currentValue - 1; // Kurangi nilai input
    }
  });

  // Tambahkan event listener untuk tombol plus
  btnPlus.addEventListener('click', function() {
    var currentValue = parseInt(inputQuantity.value); // Ambil nilai input saat ini
    inputQuantity.value = currentValue + 1; // Tambahkan nilai input
  });

  /******menambahkan cart****/

// Membaca semua elemen tombol "Trash"
const trashButtons = document.querySelectorAll(".fa-trash");

// Menambahkan event listener ke setiap tombol "Trash"
trashButtons.forEach(button => {
  button.addEventListener("click", function() {
    // Menghapus elemen <tr> yang merupakan induk dari tombol "Trash" yang diklik
    const productRow = this.closest("tr");
    productRow.remove();

    // Menghitung total harga setelah menghapus produk
    calculateTotal();
  });
});

// Fungsi untuk menghitung total harga
function calculateTotal() {
  const productPrices = document.querySelectorAll(".table-bordered tbody tr td:nth-child(2)");
  let total = 0;

  productPrices.forEach(price => {
    const priceValue = parseFloat(price.innerText.replace("Rp", "").replace(".", ""));
    total += priceValue;
  });

  const cartContentTotal = document.querySelector(".cart-content h2 span");
  cartContentTotal.innerText = "Rp" + total.toLocaleString();

  // Jika tidak ada produk, set nilai total menjadi 0
  if (total === 0) {
    cartContentTotal.innerText = "Rp0";
  }
}

 // Fungsi untuk menerapkan kupon
function applyCoupon() {
    const couponInput = document.querySelector(".coupon input");
    const couponCode = couponInput.value;
  
    // Logika untuk memeriksa dan menerapkan kupon
    // ...
    if (couponCode === "Anjay") {
      const totalPrice = parseFloat(
        document.querySelector(".cart-summary p span").innerText.replace("Rp", "").replace(".", "")
      );
  
      const discount = totalPrice * 0.02; // Mengurangi 2%
      const totalWithDiscount = totalPrice - discount;
  
      document.querySelector(".cart-summary p span").innerText = "Rp" + totalWithDiscount.toLocaleString();
      document.querySelector(".cart-summary h2 span").innerText = "Rp" + totalWithDiscount.toLocaleString();
  
      couponInput.value = ""; // Mengosongkan input kupon setelah diterapkan
    }
  }

  // Menambahkan event listener untuk tombol "Terapkan"
  const applyCouponButton = document.querySelector(".coupon button");
  applyCouponButton.addEventListener("click", function () {
    applyCoupon();
  });

     // Menambahkan event listener ke semua tombol plus dan minus
    var buttonsPlus = document.querySelectorAll(".btn-plus");
    var buttonsMinus = document.querySelectorAll(".btn-minus");
    buttonsPlus.forEach(function(button) {
        button.addEventListener("click", incrementQty);
    });
    buttonsMinus.forEach(function(button) {
        button.addEventListener("click", decrementQty);
    });

    function incrementQty(event) {
        var inputField = event.target.parentNode.querySelector("input");
        var priceField = event.target.parentNode.parentNode.previousElementSibling;
        var totalField = event.target.parentNode.parentNode.nextElementSibling;
        var price = parseFloat(priceField.innerText.replace("Rp.", "").replace(".", "").replace(".", ""));
        var quantity = parseInt(inputField.value);
        var total = parseFloat(totalField.innerText.replace("Rp.", "").replace(".", "").replace(".", ""));

        quantity++;
        total += price;
        
        inputField.value = quantity;
        totalField.innerText = "Rp." + formatNumber(total);
        calculateTotal();
    }

    function decrementQty(event) {
        var inputField = event.target.parentNode.querySelector("input");
        var priceField = event.target.parentNode.parentNode.previousElementSibling;
        var totalField = event.target.parentNode.parentNode.nextElementSibling;
        var price = parseFloat(priceField.innerText.replace("Rp.", "").replace(".", "").replace(".", ""));
        var quantity = parseInt(inputField.value);
        var total = parseFloat(totalField.innerText.replace("Rp.", "").replace(".", "").replace(".", ""));

        if (quantity > 1) {
            quantity--;
            total -= price;

            inputField.value = quantity;
            totalField.innerText = "Rp." + formatNumber(total);
            calculateTotal();
        } else {
            // Jika jumlah sudah 1, kembalikan harga semula
            inputField.value = 1;
            totalField.innerText = "Rp." + formatNumber(price);
            calculateTotal();
        }
    }

    function calculateTotal() {
        var totalElements = document.querySelectorAll("tbody tr td:nth-child(4)");
        var subtotal = 0;

        totalElements.forEach(function(element) {
            subtotal += parseFloat(element.innerText.replace("Rp.", "").replace(".", "").replace(".", ""));
        });

        var tax = 150000;
        var total = subtotal + tax;

        var subtotalElement = document.querySelector(".cart-content p:nth-child(2) span");
        var taxElement = document.querySelector(".cart-content p:nth-child(3) span");
        var totalElement = document.querySelector(".cart-content h2 span");

        subtotalElement.innerText = "Rp." + formatNumber(subtotal);
        taxElement.innerText = "Rp." + formatNumber(tax);
        totalElement.innerText = "Rp." + formatNumber(total);
    }

    function formatNumber(number) {
        return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }
/******menambahkan cart end****/

/******menambahkan ke keranjang (detail)****/
    //nambah ke keranjang
    // Mengambil elemen-elemen yang dibutuhkan
    const addToCartButton = document.querySelector('btn .btn-primary');
    const productName = document.querySelector('.product-title').innerText;
    const productPrice = document.querySelector('.product-price').innerText;
    const quantityInput = document.querySelector('.quantity input');
    const cartTableBody = document.querySelector('.table tbody');
    
    // Menambahkan event listener pada tombol "Tambahkan Ke Keranjang"
    addToCartButton.addEventListener('click', () => {
      const quantity = parseInt(quantityInput.value);
      const total = parseInt(productPrice.replace(/[^0-9]/g, '')) * quantity;
    
      // Membuat elemen baris baru untuk produk yang ditambahkan ke keranjang
      const newRow = document.createElement('tr');
      newRow.innerHTML = `
        <td>
          <div class="img">
            <a href="#"><img src="img/Air Jordan 1 Mid 1 .jpg" alt="Image"></a>
            <p>${productName}</p>
          </div>
        </td>
        <td>${productPrice}</td>
        <td>
          <div class="qty">
            <button class="btn-minus"><i class="fa fa-minus"></i></button>
            <input type="text" value="${quantity}">
            <button class="btn-plus"><i class="fa fa-plus"></i></button>
          </div>
        </td>
        <td>Rp.${total.toLocaleString()}</td>
        <td><button><i class="fa fa-trash"></i></button></td>
      `;
    
      // Menambahkan baris produk ke tabel keranjang
      cartTableBody.appendChild(newRow);
    
      // Reset nilai input kuantitas menjadi 1
      quantityInput.value = '1';
    });
      /******menambahkan ke keranjang (detail) end *****/
      
})(jQuery);

