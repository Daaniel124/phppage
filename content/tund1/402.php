<!DOCTYPE html>
<html lang="ee">
<head>
    <meta charset="UTF-8">
    <title>402/ Tsüklid</title>
</head>
<body>
<p>Tee tsükliga 20 "checkboxi". Pane neile kõigile oma nimi stiilis box[1], box[2], jne.</p>
<?php
$i = 1;
    while($i<=20){
        echo "<input type = 'checkbox' id = '$i' name = 'box[]' value = '$i'>";
        echo "<label for = '$i'>box ".$i."</label>";
        echo "<br>";
        $i++;
    }
?>
<p>Tee tsükliga 20 "teksti lahtrit". Pane neile kõigile oma nimi stiilis cell[1], cell[2], jne.</p>
<?php
$i = 1;
while($i<=20){
    echo "<input type = 'text' id = 2'$i' name = 'cell[]' value = '$i' placeholder='$i'>";
    echo "<label for = '$i'> cell ".$i."</label>";
    echo "<br>";
    $i++;
}
?>
<p>Tee tsükliga 20 "radio buttonit". Pane neile kõigile üks nimi "radio" ja erinevad väärtused stiilis value1, value2 jne.</p>
<?php
$i = 1;
while($i<=20){
    echo "<input type = 'radio' id = 3'$i' name = 'radio[]' value = '$i'>";
    echo "<label for = '$i'>value ".$i."</label>";
    echo "<br>";
    $i++;
}
?>
</body>
</html>

