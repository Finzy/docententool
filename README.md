## Intro

De docententool is een tool die gebruikt kan worden in de klas om een simpele poll aan te maken en dat de leerlingen deze dan kunnen beantwoorden.

## Voorbeeld

Hier word een random code gemaakt die de leerling kan invoeren om als het waren in te loggen om de vraag te beantwoorden.

    <?php

    function Gamepin($length = 6) {

    $validCharacters = "234567890abcdefghijklmnpqrstuxyvwzABCDEFGHIJKLMNPQRSTUXYVWZ";
    
    $validCharNumber = strlen($validCharacters);
 
    $result = "";
 
    for ($i = 0; $i < $length; $i++) {
        $index = mt_rand(0, $validCharNumber - 1);
        $result .= $validCharacters[$index];
    }
 
    return $result;
    }
 
    echo Gamepin();
    ?>
    
## Installatie
    
De .zip zal uitgepakt moeten worden en via een ftp op de server gezet moeten worden.
  
