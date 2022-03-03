<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ar_buah = ["s"=>"salak","k"=>"kelapa","m"=>"mangga","j"=>"jambu" ];
    echo '<ol>';
    foreach($ar_buah as $k => $v) {
        echo '<li>' . $k .' - '. $v .'</li>';
    }
    echo '</ol>';
    sort($ar_buah);
    echo '<hr/>';
    echo '</ol>';
    foreach($ar_buah as $k =>$v) {
        echo '<li>'.$k.' - '. $v .'</li>';
    }
    echo '</ol>';
?>

<!-- fungsi sort array adalah digunakan untuk menyortir elemen-elemen dari array yang diindeks dalam ascending order (abjad untuk huruf dan angka untuk angka) -->
</body>
</html>