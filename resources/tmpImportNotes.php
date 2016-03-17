<?php
$pdo = new PDO("mysql:host=gigondas;dbname=godichea;charset=utf8","godichea", "godichea");
$stmt = $pdo->prepare("INSERT INTO notes (id_module, num_etu, annee, note)
values (:id_module, :num_etu, :annee, :note)");

$f = fopen("S1-13-14.csv", "r");
while ($ligne = fgetcsv($f, 512, ";")) {
    print_r($ligne);
}
fclose($f);
?>
