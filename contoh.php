<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        form {
            display: inline-block;
        }
    </style>
</head>
<body>
    <h1>Shopping Cart</h1>
    
    <?php
        // Include file dengan definisi fungsi CRUD shopping cart
        include 'cart_functions.php';
        
        // Cek apakah ada aksi yang dikirimkan
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
            
            if ($action == 'tambah') {
                // Mendapatkan data dari form
                $id = $_POST['id'];
                $nama = $_POST['nama'];
                $harga = $_POST['harga'];
                $jumlah = $_POST['jumlah'];
                
                // Memanggil fungsi tambahItem untuk menambahkan item ke shopping cart
                tambahItem($id, $nama, $harga, $jumlah);
            } elseif ($action == 'update') {
                // Mendapatkan data dari form
                $id = $_POST['id'];
                $jumlah = $_POST['jumlah'];
                
                // Memanggil fungsi updateItem untuk mengupdate jumlah item dalam shopping cart
                updateItem($id, $jumlah);
            } elseif ($action == 'hapus') {
                $id = $_GET['id'];
                
                // Memanggil fungsi hapusItem untuk menghapus item dari shopping cart
                hapusItem($id);
            } elseif ($action == 'hapus_semua') {
                // Memanggil fungsi hapusSemuaItem untuk menghapus seluruh isi shopping cart
                hapusSemuaItem();
            }
        }
        
        // Mendapatkan data shopping cart
        $cart = isset($_COOKIE['cart']) ? unserialize($_COOKIE['cart']) : array();
    ?>
    
    <h2>Daftar Barang</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Barang 1</td>
            <td>10000</td>
            <td>
                <form action="?action=tambah" method="post">
                    <input type="hidden" name="id" value="1">
                    <input type="hidden" name="nama" value="Barang 1">
                    <input type="hidden" name="harga" value="10000">
                    <input type="number" name="jumlah" value="1" min="1">
                    <input type="submit" value="Tambah ke Cart">
                </form>
            </td>
            <td></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Barang 2</td>
            <td>15000</td>
            <td>
                <form action="?action=tambah" method="post">
                    <input type="hidden" name="id" value="2">
                    <input type="hidden" name="nama" value="Barang 2">
                    <input type="hidden" name="harga" value="15000">
                    <input type="number" name="jumlah" value="1" min="1">
                    <input type="submit" value="Tambah ke Cart">
                </form>
            </td>
            <td></td>
        </tr>
    </table>
    
    <h2>Shopping Cart</h2>
    <?php if (!empty($cart)) { ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Subtotal</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($cart as $id => $item) { ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $item['nama']; ?></td>
                    <td><?php echo $item['harga']; ?></td>
                    <td>
                        <form action="?action=update" method="post">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="number" name="jumlah" value="<?php echo $item['jumlah']; ?>" min="1">
                            <input type="submit" value="Update">
                        </form>
                    </td>
                    <td><?php echo $item['harga'] * $item['jumlah']; ?></td>
                    <td><a href="?action=hapus&id=<?php echo $id; ?>">Hapus</a></td>
                </tr>
            <?php } ?>
            <tr>
                <td colspan="4"><strong>Total Harga:</strong></td>
                <td><?php echo getTotalHarga(); ?></td>
                <td><a href="?action=hapus_semua">Hapus Semua</a></td>
            </tr>
        </table>
    <?php } else { ?>
        <p>Shopping Cart kosong.</p>
    <?php } ?>
</body>
</html>
