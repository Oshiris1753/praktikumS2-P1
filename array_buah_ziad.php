<?php
    $ar_buah = ["pisang", "salak", "rambutan", "kelapa" ];
    // cetak buah ke index ke 2
    echo $ar_buah[2];
    // cetak jumlah buah
    echo '<br/>jumlah buah ' . count($ar_buah);
    // cetak seluruh buah
    echo '<ol>';
    foreach($ar_buah as $buah) {
        echo '<li>'. '<li/>'; 
    }
    echo '</ol>';
    // tambahkan buah
    $ar_buah[]="durian";
    // hapus buah index ke 1
    unset ($ar_buah[1]);
    //ubah buah index ke 2 menjadi manggis
    $ar_buah[2]="manggis";
    // cetak seluruh buah dengan index nya
    echo '<ul>';
    foreach($ar_buah as $k => $v) {
        echo '<li> buah index - ' . $k .' adalah '. $v .'</li>';
    }
    echo '</ul>'
?>