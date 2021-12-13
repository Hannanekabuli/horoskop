<!--addHoroscope.php
sidan ska bara gå att begära via POST,  den ska kolla efter ett födelsedatum i $_POST, räkna ut vilket horoskop födelsedatumet tillhör och spara det i $_SESSION.
Om ett horoskop redan finns sparat ska det inte skrivas över. Om det inte gick att räkna ut horoskopet ska ingenting sparas.
Sidan ska inte använda echo eller skriva någon output förutom true eller false, beroende på om horoskopet sparades.-->

<?php 

try {
        session_start();

        if($_SERVER['REQUEST_METHOD']) {

                if($_SERVER["REQUEST_METHOD"] == "POST") {

                        if(!isset($_SESSION["horoscope"])){

                                if(isset($_POST["inputDate"])) {

                                        $inputDate =  $_POST["inputDate"]; 

                                        require_once("./listHoroscope.php");
                        
                                        $horoscope = getOutput($_POST["inputDate"], $getHoroscope);
                                        $_SESSION["horoscope"] = $horoscope;
                        
                                        echo json_encode(true);
                                        exit;

                                } else { 
                                        throw new Exception("Check input", 400);
                                }
                                
                        } else {
                                echo json_encode(false);
                                exit;
                        }

                } else {
                        throw new Exception("Endpoint not valid", 405);
                }

        } else {
                throw new Exception("http-request not sent", 404);
        }

} catch(Exception $err) {
        http_response_code($err -> getCode());
        echo json_encode($err -> getMessage()); 
        exit;
}

?>