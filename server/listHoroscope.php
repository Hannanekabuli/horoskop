<?php

function listHoroscope($date) {
    $horoscopeArray = array(
        "Aquarius, element är luft"=>"01:21:02:20",
        "Pisces, element är vatten"=>"02:21:03:20",
        "Aries, element är eld"=>"03:21:04:20",
        "Taurus, element är jord"=>"04:21:05:20",
        "Gemini, element är luft"=>"05:21:06:20",
        "Cancer, element är vatten "=>"06:21:07:21",
        "Leo, element är eld"=>"07:22:08:22",
        "Virgo, element är jord"=>"08:23:09:22",
        "Libra, element är luft"=>"09:23:10:22",
        "Scorpio, element är vatten"=>"10:23:11:21",
        "Sagittarius, elemnt är eld"=>"11:22:12:21",
        "Capricorn, element är jord"=>"12:22:01:20",
    );

    $inputDates = explode("-", $date);
    $inputMonth = (int)$inputDates[1];
    $inputDay = (int)$inputDates[2];

    $keys = array_keys($horoscopeArray);

    for ($i=0; $i < count($keys); $i++) { 
       
        $key = $keys[$i];
        $dateString = $horoscopeArray[$key];
        $dateArray = explode(":", $dateString);
        
        $fromMonth = (int)$dateArray[0];
        $fromDay = (int)$dateArray[1];
        $toMonth = (int)$dateArray[2];
        $toDay = (int)$dateArray[3];
            
        if($inputMonth == $fromMonth) {
            if ($inputDay >= $fromDay) {
                return $key;
            } 
        } 
        
        if ($inputMonth == $toMonth) {
            if ($inputDay <= $toDay) {
                return $key;
            }
        }
    }

}

?>