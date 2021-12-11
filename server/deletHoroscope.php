<!--deleteHoroscope.php
sidan ska bara gå att begära via DELETE,  den ska ta bort det sparade horoskopet i
 $_SESSION och echo:a true. Om inget finns sparat ska den echo:a false.-->

 <?php
session_start();

if(isset($_SERVER['REQUEST_METHOD'])) {

    if($_SERVER['REQUEST_METHOD'] === 'DELETE') {

        if (isset($_SESSION["horoscope"])) {
            
            unset($_SESSION['horoscope']);
            echo json_encode(true);


        } else {
                
            echo json_encode(false);
        }
    } else {
        echo json_encode("not a Delete method");
    }
} else {

    echo json_encode("No valid request");
}
?>
 