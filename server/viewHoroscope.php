<!--viewHoroscope.php
sidan ska bara gå att begära via GET, den ska kolla om ett horoskop finns sparat i $_SESSION och 
i så fall skriva ut det i output. Annars ska sidan inte skriva ut någonting.-->


<?php

try {
    session_start();

    if ($_SERVER['REQUEST_METHOD']){

        if($_SERVER["REQUEST_METHOD"] == "GET"){

            if(isset($_SESSION["horoscope"])) {
                
                echo json_encode($_SESSION["horoscope"]);
                exit;

            } else {
                echo json_encode(false);
                exit;
            }

        } 
    }

} catch(Exception $err) {
    echo json_encode($err); 
    exit;
}

?>