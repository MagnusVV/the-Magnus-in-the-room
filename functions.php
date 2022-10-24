<?php

declare(strict_types=1);

//Funktion för att skriva ut lite fakta om katten. Variabeln $catName matas in som $theCatName i funktionen, och styr vilken del av arrayen $catFacts som skrivs ut med hjälp av en foreach-loop.

function aboutCat(string $theCatName)
{
    //if-sats för att ta fram en index-key att använda i arrayen $catFacts.

    if ($theCatName === "Måns") {
        $catFactsKey = 0;
    } else if ($theCatName === "Felix") {
        $catFactsKey = 1;
    } else {
        $catFactsKey = 2; // = "Both"
    }

    require('./arrays.php');

    //Foreach-loop för skriva ut vad som står i arrayen $catFacts. "Overweight är ignorerat p g a att det är lite känsligt.

    foreach ($catFacts[$catFactsKey] as $cat => $catFact) {

        if ($cat === "Overweight: ") {
            continue;
        } elseif ($cat === "Other cat facts: ") {
            echo "</br>";
        }

        echo $cat . $catFact . "</br>";
    }
};
