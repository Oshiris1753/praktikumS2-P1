<!DOCTYPE html>
<html>
<body>
    <?php
    $tims = ["eren","levi","mikasa","armin"];
    array_shift($tims,"annie","jean");
    foreach($tims as $person){
        echo $person.'<br/>';
    }
    ?>
</body>
</html>