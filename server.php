<?php
//Trasformo il file json in array
$stringa_json = file_get_contents("dischi.json");
$dischi_array = json_decode($stringa_json, true);

//Risposta
$response = [
    "results" => $dischi_array,
    "success" => true,
];

//Dico al browser che tipo di dato è
header('Content-Type: application/json');
echo json_encode($response);
