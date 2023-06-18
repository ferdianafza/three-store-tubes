<?php
$htmlCode = '
    <tr>
        <td>
            <div class="img">
                <a href="#"><img src="img/Produk list 10.jpg" alt="Image"></a>
                <p>Geoff Max Timeless</p>
            </div>
        </td>
        <td class="harga10">Rp 220.000</td>
        <td>
            <div class="qty">
                <button class="btn-minus"><i class="fa fa-minus"></i></button>
                <input type="text" class="jumlah10" onchange="gmtTotal()" value="1">
                <button class="btn-plus"><i class="fa fa-plus"></i></button>
            </div>
        </td>
        <td class="totalR total10">Rp 220.000</td>
        <td><button><i class="fa fa-trash"></i></button></td>
    </tr>
';

echo $htmlCode;
?>