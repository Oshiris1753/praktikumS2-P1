<?php
    // definisikan konstanta
    define('PHI',3.14);
    define('DBNAME','inventori');
    define('DBSERVER','localhost');

    $jari = 10;
    $luas = PHI * $jari * $jari;
    $kll = 2 * PHI * $jari;

    echo 'luas lingkaran dengan jari ' .$jari. ' ; '.$luas;
    echo '<br/>kelilingnya : ' .$kll
?>
<hr/>
<?php
echo 'nama databasenya : ' .DBNAME;
echo '<br/>lokasi databasenya ada di ' .DBSERVER;
?>