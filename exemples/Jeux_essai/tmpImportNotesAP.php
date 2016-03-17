<?php
$pdo = new PDO("mysql:host=gigondas;dbname=godichea;charset=utf8","godichea", "godichea");
$stmt = $pdo->prepare("INSERT INTO note (id_module, num_etu, annee, note)
values (:id_module, :num_etu, :annee, :note)");
$stmt2 = $pdo->prepare("INSERT INTO decisionjury (num_etudiant, semestre, annee, decision)
values (:num_etudiant, :semestre, :annee, :decision)");
$stmt3 = $pdo->prepare("INSERT INTO avispoursuitedetude (num_etudiant, id_module, annee, avis)
values (:num_etudiant, :id_module, :annee, :avis)");

$f = fopen("S4-AT-14-15.csv", "r");
$annee = 2014;
$semestre = "S4";
$i = 0;
$array_mod = [];
$count_last_champ = 0;
while ($ligne = fgetcsv($f, 512, ";")) {
    if($i == 0){
        foreach($ligne as $colonne){
            $code_mod = explode(' ', $colonne)[0];
            if(strlen($code_mod) == 8 && substr($code_mod,8) == "0"){
                $array_mod[] = $code_mod;
            }
            $count_last_champ++;
        }
        var_dump($array_mod);
    }else{
        $id_etu = 0;
        for($j = 0; $j < count($ligne); $j++){
            if($j == 0){
                $id_etu = $ligne[$j];
            }else if($j-1 < count($array_mod)){
                $module_name = $array_mod[$j-1]."T";
                $vrai_note = str_replace(",", ".",$ligne[$j]);
                $stmt->bindParam("id_module",$module_name);
                $stmt->bindParam("num_etu",$id_etu);
                $stmt->bindParam("annee",$annee);
                $stmt->bindParam("note", $vrai_note);
                $stmt->execute();
            }else if($j == $count_last_champ-1){

               // $stmt2->execute();
            }else if($j == $count_last_champ-2){
                $stmt2->bindParam("num_etudiant",$id_etu);
                $stmt2->bindParam("semestre",$semestre);
                $stmt2->bindParam("annee",$annee);
                $stmt2->bindParam("decision",$ligne[$j]);
                $stmt2->execute();
            }
        }
    }
    $i++;
}
fclose($f);
?>