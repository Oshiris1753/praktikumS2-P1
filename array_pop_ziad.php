<!DOCTYPE html>
<html>
<body>
    <?php
    $tims = ["eren","levi","mikasa","armin"];
    array_pop($tims);
    foreach($tims as $person){
        echo $person.'<br/>';
    }
    ?>
</body>
</html>