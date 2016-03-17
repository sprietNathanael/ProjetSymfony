<?php
$pdo = new PDO("mysql:host=gigondas;dbname=godichea;charset=utf8","godichea", "godichea");
$stmt = $pdo->prepare("INSERT INTO ue (id, semestre, code_apogee, nom_ue, coefficient) values (:id, :semestre, :code_apogee, :nom_ue, :coefficient)");

$f = fopen("ue.csv", "r");
while ($ligne = fgetcsv($f, 255, ";")) { 
		$semestre = $ligne[0];
		$id = $ligne[1];
		$code_apogee = $ligne[2];
		$nom_ue = $ligne[3];
		$coefficient = $ligne[4];	
		$stmt->execute(Array("id"=> $id,"semestre"=> $semestre,"code_apogee"=> $code_apogee,"nom_ue"=> $nom_ue,"coefficient"=> $coefficient));
}

fclose($f);
?>
