<?php
// Fungsi untuk menambahkan item ke shopping cart
function tambahItem($id, $nama, $harga, $jumlah) {
    $cart = isset($_COOKIE['cart']) ? unserialize($_COOKIE['cart']) : array();
    
    // Jika item sudah ada dalam shopping cart, tambahkan jumlahnya
    if (array_key_exists($id, $cart)) {
        $cart[$id]['jumlah'] += $jumlah;
    } else {
        // Jika item belum ada dalam shopping cart, tambahkan item baru
        $cart[$id] = array(
            'nama' => $nama,
            'harga' => $harga,
            'jumlah' => $jumlah
        );
    }
    
    // setcookie('cart', serialize($cart), time() + (86400 * 30), '/'); // Simpan shopping cart ke cookie selama 30 hari
}

// Fungsi untuk mengupdate jumlah item dalam shopping cart
function updateItem($id, $jumlah) {
    $cart = isset($_COOKIE['cart']) ? unserialize($_COOKIE['cart']) : array();
    
    if (array_key_exists($id, $cart)) {
        $cart[$id]['jumlah'] = $jumlah;
        
        setcookie('cart', serialize($cart), time() + (86400 * 30), '/'); // Simpan shopping cart ke cookie selama 30 hari
    }
}

// Fungsi untuk menghapus item dari shopping cart
function hapusItem($id) {
    $cart = isset($_COOKIE['cart']) ? unserialize($_COOKIE['cart']) : array();
    
    if (array_key_exists($id, $cart)) {
        unset($cart[$id]);
        
        setcookie('cart', serialize($cart), time() + (86400 * 30), '/'); // Simpan shopping cart ke cookie selama 30 hari
    }
}

// Fungsi untuk menghapus seluruh isi shopping cart
function hapusSemuaItem() {
    setcookie('cart', '', time() - 3600, '/'); // Hapus cookie shopping cart
}

// Fungsi untuk mendapatkan total harga dari semua item dalam shopping cart
function getTotalHarga() {
    $cart = isset($_COOKIE['cart']) ? unserialize($_COOKIE['cart']) : array();
    
    $totalHarga = 0;
    
    foreach ($cart as $item) {
        $totalHarga += $item['harga'] * $item['jumlah'];
    }
    
    return $totalHarga;
}
?>
