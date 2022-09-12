<!DOCTYPE html>
<html lang="ee">
<head>
    <meta charset="UTF-8">
    <title>Daaniel PHP lehestik</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <script src="js/lego.js"></script>
</head>
<body>
<?php
    include('header.php');
    include('navigation.php');
?>
<main>
    <?php
        if(isset($_GET["leht"])){
            include('content/'.$_GET["leht"].'.php');
        } else {
            echo "siia tuleb sisu";
        }
    ?>
</main>
<?php
include('footer.php');
?>
</body>
</html>

