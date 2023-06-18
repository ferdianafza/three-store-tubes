<?php
$htmlCode = '
    <tr>
        <td>
            <div class="img">
                <a href="#"><img src="img/Produk list 5.jpg" alt="Image"></a>
                <p>MIZUNO SPORTSTYLE Wave</p>
            </div>
        </td>
        <td class="harga5">Rp 5.900.000</td>
        <td>
            <div class="qty">
                <button class="btn-minus"><i class="fa fa-minus"></i></button>
                <input type="text" class="jumlah5" onchange="mswTotal()" value="1">
                <button class="btn-plus"><i class="fa fa-plus"></i></button>
            </div>
        </td>
        <td class="totalR total5">Rp 5.900.000</td>
        <td><button><i class="fa fa-trash"></i></button></td>
    </tr>
';

echo $htmlCode;
?>