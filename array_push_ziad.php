<!DOCTYPE html>
<html>
<body>
    <?php
    $tims = ["eren","levi","mikasa","armin"];
    array_push($tims);
    foreach($tims as $person){
        echo $person.'<br/>';
    }
    ?>
</body>
</html>