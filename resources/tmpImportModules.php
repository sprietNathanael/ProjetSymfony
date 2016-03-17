<?php
$pdo = new PDO("mysql:host=gigondas;dbname=godichea;charset=utf8","godichea", "godichea");
$stmt = $pdo->prepare("INSERT INTO module (id_ue, code_apogee, login_prof, nom_module, coefficient) values (:id_ue, :code_apogee, :login_prof, :nom_module, :coefficient)");

$f = fopen("modules.csv", "r");
while ($ligne = fgetcsv($f, 255, ";")) {
		$id_ue = $ligne[0];
		$code_apogee = $ligne[2];
		$nom_module = $ligne[3];
		$coefficient = $ligne[4];
		$login_prof = $ligne[5];
		$stmt->execute(Array("id_ue"=>$id_ue,"nom_module"=>$nom_module,"code_apogee"=> $code_apogee,"login_prof"=>$login_prof,"coefficient"=> $coefficient));
}

fclose($f);
?>
