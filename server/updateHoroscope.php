<!--updateHoroscope.php
sidan ska bara gå att begära via POST (PUT finns ej i php som standard så vi använder POST istället),
 den ska kolla efter ett födelsedatum i POST datan.
räkna ut vilket horoskop födelsedatumet tillhör och uppdaterade det sparade horoskopet som finns i $_SESSION och skriva ut true.
Om inget horoskop finns i $_SESSION ska sidan inte uppdatera något och skriva ut false-->


<?php 

require('./listHoroscope.php');
session_start();

if(isset($_SERVER['REQUEST_METHOD'])) {

    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        if(isset($_POST['date']) && isset($_SESSION["horoscope"])) {

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
