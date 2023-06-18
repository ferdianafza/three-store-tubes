<?php
$htmlCode = '
    <tr>
        <td>
            <div class="img">
                <a href="#"><img src="img/Produk list 11.jpg" alt="Image"></a>
                <p>Ventela Ethnic Low</p>
            </div>
        </td>
        <td class="harga11">Rp 209.900</td>
        <td>
            <div class="qty">
                <button class="btn-minus"><i class="fa fa-minus"></i></button>
                <input type="text" class="jumlah11" onchange="velTotal()" value="1">
                <button class="btn-plus"><i class="fa fa-plus"></i></button>
            </div>
        </td>
        <td class="totalR total11">Rp 209.900</td>
        <td><button><i class="fa fa-trash"></i></button></td>
    </tr>
';

echo $htmlCode;
?>