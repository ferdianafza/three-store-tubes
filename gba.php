<?php
$htmlCode = '
    <tr class="gbaRow">
        <td>
            <div class="img">
                <a href="#"><img src="img/lokal 1.jpg" alt="Image"></a>
                <p>CloudBust Air Prada</p>
            </div>
        </td>
        <td class="harga1">Rp 7.560.800</td>
        <td>
            <div class="qty">
                <button class="btn-minus"><i class="fa fa-minus"></i></button>
                <input type="text" class="jumlah1" onchange="gbaTotal()" value="1">
                <button class="btn-plus"><i class="fa fa-plus"></i></button>
            </div>
        </td>
        <td class="totalR total1">Rp 7.560.800</td>
        <td><button onclick="gbaHapus()"><i class="fa fa-trash"></i></button></td>
    </tr>
';

echo $htmlCode;
?>
