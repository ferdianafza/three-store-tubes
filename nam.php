<?php
$htmlCode = '
    <tr>
        <td>
            <div class="img">
                <a href="#"><img src="img/Produk list 3.jpg" alt="Image"></a>
                <p>Nike Air Max 97</p>
            </div>
        </td>
        <td td class="harga3">Rp 3.800.800</td>
        <td>
            <div class="qty">
                <button class="btn-minus"><i class="fa fa-minus"></i></button>
                <input type="text" class="jumlah3" onchange="namTotal()" value="1">
                <button class="btn-plus"><i class="fa fa-plus"></i></button>
            </div>
        </td>
        <td class="totalR total3">Rp 3.800.800</td>
        <td><button><i class="fa fa-trash"></i></button></td>
    </tr>
';

echo $htmlCode;
?>