<!--addHoroscope.php
sidan ska bara gå att begära via POST,  den ska kolla efter ett födelsedatum i $_POST, räkna ut vilket horoskop födelsedatumet tillhör och spara det i $_SESSION.
Om ett horoskop redan finns sparat ska det inte skrivas över. Om det inte gick att räkna ut horoskopet ska ingenting sparas.
Sidan ska inte använda echo eller skriva någon output förutom true eller false, beroende på om horoskopet sparades.-->

<?php 

require('./listHoroscope.php');

session_start();

if(isset($_SERVER['REQUEST_METHOD'])) {

    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        if(isset($_POST['date']) && !isset($_SESSION["horoscope"])) {

            $horoscope = calcualteHoroscope($_POST['date']); 

            $_SESSION["horoscope"] = serialize($horoscope);

            echo json_encode(true);
            exit;
            
        } else {
            echo json_encode(false);
            exit;
        }

    }else { 
        echo json_encode("not a POST method");
        exit;
    }
    
} else {
    echo json_encode("No valid request");
    exit;
}
?>