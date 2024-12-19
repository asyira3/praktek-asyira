<?php
// Membuat fungsi untuk menghitung luas persegi panjang
function luasPersegiPanjang($panjang, $lebar) {
    $luas = $panjang * $lebar;
    return $luas;
}

// Memanggil fungsi dan menampilkan hasilnya
$panjang = 10;
$lebar = 5;
echo "Luas persegi panjang dengan panjang $panjang dan lebar $lebar adalah: " . luasPersegiPanjang ($panjang, $lebar);
?>
