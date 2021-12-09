<!--addHoroscope.php
sidan ska bara gå att begära via POST,  den ska kolla efter ett födelsedatum i $_POST, räkna ut vilket horoskop födelsedatumet tillhör och spara det i $_SESSION.
Om ett horoskop redan finns sparat ska det inte skrivas över. Om det inte gick att räkna ut horoskopet ska ingenting sparas.
Sidan ska inte använda echo eller skriva någon output förutom true eller false, beroende på om horoskopet sparades.-->

 
<?php

require_once("./listHoroscope.php");

session_start();

try{

    if($_SERVER['REQEST_METHOD']) {

        if($_SERVER["REQUWST_METHOD"] == "POST") {

            if(!isset($_SESSION["horoscope"])){

                if(isset($_POST['date']) && !isset($_SESSION["horoscope"])) {

                    $inputDatet = $_POST["inputData"];
                
                    $horoscope = getOutput($_POST["inputDate"],$getList);

                    $_SESSION["horoscope"] = $horoscope;

                echo json_encode(true);
                exit;

        }else{

              echo json_encode(false);
              exit;
        }
    }else{
        echo json_encode(false);

    }

} catch(Exception $err) {

        error_log($err);
}

?>