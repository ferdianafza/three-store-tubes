<?php
$htmlCode = '
    <tr>
        <td>
            <div class="img">
                <a href="#"><img src="img/Produk list 9.jpg" alt="Image"></a>
                <p>Kodachi Maxx</p>
            </div>
        </td>
        <td class="harga9">Rp 210.000</td>
        <td>
            <div class="qty">
                <button class="btn-minus"><i class="fa fa-minus"></i></button>
                <input type="text" class="jumlah9" onchange="kdmTotal()" value="1">
                <button class="btn-plus"><i class="fa fa-plus"></i></button>
            </div>
        </td>
        <td class="totalR total8">Rp 210.000</td>
        <td><button><i class="fa fa-trash"></i></button></td>
    </tr>
';

echo $htmlCode;
?>