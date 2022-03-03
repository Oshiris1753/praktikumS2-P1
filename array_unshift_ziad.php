<<!DOCTYPE html>
<html>
<body>
    <?php
    $tims = ["eren","levi","mikasa","armin"];
    array_unshift($tims,"annie","jean");
    foreach($tims as $person){
        echo $person.'<br/>';
    }
    ?>
</body>
</html>