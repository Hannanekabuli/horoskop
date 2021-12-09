<?php

$horoskopListhoroskopList = [
    [
        "name" => "Vattumannen",
        "latinName" : "Aquarius",
        "start" : 0121,
        "end" : 0220,
        "symbol" : "water-bearer",
        "elemen"t : "air",
        "planet" : "Uranus"
    ],[
        "name" : "Fiskarna",
        "latinName" : "Pisces",
        "start" : 0221,
        "end" : 0320,
        "symbol" : "Fish",
        "element" : "Water",
        "planet" : "Jupiter - Neptunus"
    ],[
        "name" : "Väduren",
        "latinName" : "Aries",
        "start" : 0321,
        "end" : 0420, 
        "symbol" : "Ram",
        "element" : "fire",
        "planet" : "Pluto - Mars"
    ],[
        "name" : "Oxen",
        "latinName" : "Taurus",
        "start" : 0421,
        "end" : 0520,
        "symbol" : "Ox",
        "element" : "Jord",
        "planet" : "Venus"
    ],[
        "name" : "Tvillingarna",
        "latinName" : "Gemini",
        "start" : 0521,
        "end" : 0620,
        "symbol" : "",
        "element" : "air",
        "planet" : "Markurius"
    ],[
        "name" : "Kräften",
        "latinName" : "Canser",
        "start" : 0621,
        "end" : 0721,
        "symbol" : "crab",
        "element" : "water",
        "planet" : "moon"
    ],[
        "name" : "Lejonet",
        "latinName" : "Leo",
        "start" : 0722,
        "end" : 0822,
        "symbol" : "Lion",
        "element" : "Fire",
        "planet" : "Sun"
    ],[
        "name" : "Jungfrun",
        "latinName" : "Virgo",
        "start" : 0823,
        "end" : 0922,
        "symbol" : "",
        "element" : "",
        "planet" : "Uranus"
    ],[
        "name" : "Vågen",
        "latinName" : "Libra",
        "start" : 0923,
        "end" : 1022,
        "symbol" : "",
        "element" : "",
        "planet" : "Venus"
    ],[
        "name" : "Skorpion",
        "latinName" : "Scorpius",
        "start" : 1023,
        "end" : 1121,
        "symbol" : "",
        "element" : "water",
        "planet" : "Mars"
    ],[
        "name" : "Skytten",
        "latinName" : "Sagittarius",
        "start" : 1122,
        "end" : 1221,
        "symbol" : "",
        "element" : "Fire",
        "planet" : "Jupitor"
    ],[
        "name" : "Stenbocken",
        "latinName" : "Capricornus",
        "start" : 1222,
        "end": 0120,
        "symbol" : "",
        "element" : "",
        "planet" : "Sturnus"
    ],
];

function horoskopList($date) {
    if($date >= 0121 && $date <= 0220){

    return "Vattumannen";
}elseif($date >= 0221 && $date <= 0320){

return "Fiskarna";
}elseif($date >= 0321 && $date <= 0420){

    return "Väduren";
}elseif($date >= 0421 && $date <= 0520){

    return "Oxen";
}elseif($date >= 0521 && $date <= 0620){

    return "Tvillingarna";
}elseif($date >= 0621 && $date <= 0721){

    return "Kräften";
}elseif($date >= 0722 && $date <= 0822){

    return "Lejonet";
}elseif($date >= 0823 && $date <= 0922){

    return "Jungfrun";
}elseif($date >= 0923 && $date <= 1022){

    return "Vågen";
}elseif($date >= 1023 && $date <= 1121){

    return "Skorpion";
}elseif($date >= 1122 && $date <= 1221){

    return "Skytten";
}else($date >= 1222 && $date <= 0120){

    return "Stenbocken";}






?>