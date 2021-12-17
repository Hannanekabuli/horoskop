<?php 

session_start();

if(isset($_SERVER['REQUEST_METHOD'])) {

    if($_SERVER['REQUEST_METHOD'] === 'DELETE') {

        if(isset($_SESSION["horoscope"])) {

            session_destroy()

            echo json_encode(true);
            exit;
        } else {
            echo json_encode(false);
            exit;
        }

        
    } else {
        throw new Exception("http-request not sent", 404);
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