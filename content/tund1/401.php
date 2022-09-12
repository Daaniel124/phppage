<!DOCTYPE html>
<html lang="ee">
<head>
    <meta charset="UTF-8">
    <title>401 exercise</title>
</head>
<body>
<?php
//массив данных
$data = [
    "name" => "Daaniel Loginov",
    "address" => "Sõpruse pst 184, Tallinn",
    "image" => "content/tund1/1.jpg",
    "main_page" => "https://tthk.ee/"
];
?>
<h2>Ülesanne 1 / Andmed massiivist</h2>
<p>
    <strong>
        <?=$data["name"]?>
    </strong>

</p>
<p>
    <i>
        <?=$data["address"]?>
    </i>
</p>
<img src="<?=$data["image"]?>" alt = "tree">
<br>
<a href="<?=$data["main_page"]?>" target="_blank">
    TTHK koduleht
</a>

<h2>Ülesanne 1 massiv array funktsiooniga</h2>
<?php
$array = array("Daaniel Loginov", "Sõpruse pst 184", "content/tund1/1.jpg", "tthk.ee");

echo "<b>$array[0]</b>";
echo "<br>";
echo "<i>$array[1]</i>";
echo "<br>";
echo "<img src='$array[2]' alt='img2'>";
echo "<br>";
echo "<a href='https://$array[3]'>Koduleht</a>";
?>

</body>
</html>

