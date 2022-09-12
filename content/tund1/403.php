<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>403/ Massiv + Tsükl</title>
</head>
<body>
<h2>Lisa massiivi 15 HTML erinevat värvi.<br>
    Leia ilusad värvi nimed siit: http://www.w3schools.com/colors/colors_names.asp<br>
    Kuva tsükliga välja värvuste nimed ja värvi need sama värvi nt. <br>
    &#60; span style='color: cyan' &#62; cyan - sinine taevas &#60; /span &#62;</h2>
<?php
$color = array('Gold', 'BlueViolet', 'Chartreuse', 'Chocolate', 'CadetBlue', 'DarkGreen', 'DarkGray', 'DarkMagenta', 'DarkSeaGreen', 'DeepPink', 'DodgerBlue', 'Green', 'Fuchsia', 'LavenderBlush', 'LightGoldenRodYellow');

//tsüklid kuvame värvid massiivist

for ($i = 0; $i < 15; $i++){
    echo "<span style = 'color: $color[$i]'>$color[$i]</span>";
    echo "<br>";
}
?>

</body>
</html>

