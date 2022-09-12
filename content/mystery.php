<h2>Mõistatus</h2>
    <p>Arva ära 2 arvu</p>

<?php
$arv1 = 10;
$arv2 = 3;
echo "Kui me liidame 2 arvu kokku, siis tuleb ".($arv1 + $arv2);
echo "<br>";
echo "Kui esimene arv on ruudus = ".pow($arv1, 2);
echo "<br>";
echo "Kui esimene arv jagada teisega = ".($arv1 / $arv2);
?>
<h2>Kontrolli arvud:</h2>
<form name="arvud" action="<?=clearVarsExcept(basename($_SERVER['REQUEST_URI']),"leht")?>" method='post'>
    <input type="number" name="number1" id="number1">
    <label for="number1">Esimene arv</label>
    <br>
    <input type="number" name="number2" id="number2">
    <label for="number2">Teine arv</label>
    <br>
    <input type="submit" value="Kontrolli">
</form>
<?php
function clearVarsExcept($url, $varname){
    return strtok(basename($_SERVER['REQUEST_URI']),"?")."?$varname=".$_REQUEST[$varname];
}

if (isset($_REQUEST["number1"])) {
    if ($_REQUEST["number1"] == $arv1) {
        if ($_REQUEST["number2"] == $arv2) {
            echo "Õige";
        }
        elseif($_REQUEST["number2"] != $arv2){
            echo "Vale teine arv";
        }
    }
    elseif ($_REQUEST["number1"] != $arv1){
        echo "Vale esimene arv";
    }
}
?>
