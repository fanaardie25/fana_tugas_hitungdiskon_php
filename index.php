<?php
$totalbelanja = 150;
function HitungDiskon()
{
    global $totalbelanja;
    if ($totalbelanja > 100 ) {
        return $totalbelanja - ($totalbelanja * 0.1);
    }else{

        return $totalbelanja;
    }
}

echo "total belanja anda adalah " . $totalbelanja . "<br>";
echo $totalbelanja > 150 ? "Anda mendapatkan diskon 10%!<br>" : "Anda tidak mendapatkan diskon.<br>";
echo "jadi total belanja anda sekarang adalah " . HitungDiskon();
?>