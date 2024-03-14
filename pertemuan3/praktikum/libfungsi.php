<?php

    function hitungLuas($alas, $tinggi) {
        $luas= $alas * $tinggi / 2;
        return $luas; 
    }

    function deteksiSegitiga($base, $height) {
        if($base == $height) {
            return "Segitiga sama sisi";
        } elseif ($base == 0.5 * $height || $height == 0.5 *$base) {
            return "Segitiga siku-siku";
        } else {
            return "Segitiga sembarang";
        }
    }
?>


