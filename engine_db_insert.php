<?php

include("header.php");  // loo see fail include igas failis ja sinna sisse pane  lingid vormile ja uuele loodavale lehele show_engines.php 
 
include("db_connection.php"); //siin luuakse $pdo variaabel

if (isset($_POST) and $_POST != []  ) {  //andmed on olemas 
    echo  "andmed olemas... <br>";  


    $dataToSave = [
      'name' => $_POST['name'],
      'engine_cm3' => $_POST['engine_cm3'],
      'engine_power' => $_POST['engine_power'],
      'engine_nm' => $_POST['engine_nm'],
      'fuel_type' => $_POST['fuel_type'],
      'fuel_tank' => $_POST['fuel_tank'],
      'fuel_consumption' => $_POST['fuel_consumption'],
      'co2_emission' => $_POST['co2_emission'],
      'co2_normative' => $_POST['co2_normative'],
      'speed' => $_POST['speed'],
      'acceleration' => $_POST['acceleration'],
      'gearbox' => $_POST['gearbox'],
      'drive' => $_POST['drive'],
      'measurements' => $_POST['measurements'],
      'doors' => $_POST['doors'],
      'axle_length' => $_POST['axle_length'],
      'seats' => $_POST['seats'],
      'exterior' => $_POST['exterior'],
      'interior' => $_POST['interior'], 
      'dealer_eur_price_without_vat' => $_POST['dealer_price_eur_without_vat'],
      'client_price_eur_with_vat' => $_POST['client_price_eur_with_vat'],
    ];
    
    
    function saveEngine($pdo, $dataToSave){
                                  //andmebaasi tulba nimed      //datatosave nimed
        $sql = "INSERT INTO CL_Engine (name, engine_cm3, engine_power, engine_nm, fuel_type, fuel_tank, fuel_consumption, co2_emission, co2_normative, speed,
        acceleration, gearbox, drive, measurements, doors, axle_length, seats, exterior, interior, dealer_price_eur_without_vat, client_price_eur_with_vat) 
        VALUES (:name, :engine_cm3, :engine_power, :engine_nm, :fuel_type, :fuel_tank, :fuel_consumption, :co2_emission, :co2_normative, 
        :speed, :acceleration, :gearbox, :drive, :measurements, :doors, :axle_length, :seats, :exterior, :interior, :dealer_price_eur_without_vat, :client_price_eur_with_vat)";
    
        $result = $pdo->prepare($sql)->execute($dataToSave); 
        return $result;
    }
    $engineInsertResult =  saveEngine($pdo, $dataToSave);  //kutsun funksiooni välja(annan db ühenuse kaasa $pdo variaablis)

 
    echo "<pre>";
    print_r($engineInsertResult);
    echo "<br>";
      

    if($engineInsertResult == 1){
      echo "salvestus andmebaasi EDUKAS";
    } else {
      echo "salvestus andmebaasi FAIL";
    }


} else {
    echo "vormiga andmeid ei edastatud...exitin kogu scriptifailist siit maalt";
    exit;
}
 
?>