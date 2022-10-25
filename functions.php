<?php

declare(strict_types=1);

//  är definierade i sektionen nedan.
//---

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

//---


//Funktion för att för slumpa om ordningen på bilderna i arrayen $catPictures, och sedan skriva ut fyra av dem. Det finns bilder specifka för varje katt(er). Det kommer (förhoppningsvis) vara olika bilder på sidan varje gång man går in på den.

function catPhotos(string $theCatName)
{
    //if-sats för att ta fram en index-key att använda i arrayen $catPictures.

    if ($theCatName === "Måns") {
        $catPictureKey = 0;
    } else if ($theCatName === "Felix") {
        $catPictureKey = 1;
    } else {
        $catPictureKey = 2; // = "Both"
    }

    require('./arrays.php');

    //Skapar den temporära arrayen $chosenCatPictures och string-variabeln $catPicture för att kunna blanda om en enskilds katts bilder.

    foreach ($catPictures[$catPictureKey] as $catPicture) {

        $chosenCatPictures[] = $catPicture;
    }

    //För att få fram slumpade indexnycklar som går att använda i en foreachloop, så skapas här arrayen $shuffledPictures som innehåller fyra slumpmässiga indexnycklar (nummer) från arrayen $chosenCatPictures.

    $shuffledPictures = array_rand($chosenCatPictures, 4);

    //Nedan foreach-loop plockar ut de fyra slumpmässiga siffrorna från $shuffledPictures och använder dem för att plocka ur (kopiera) motsvarande bilder från den tidigare skapade arrayen $chosenCatPictures. Ur loopen får vi också arrayen $picture som nu består av fyra slumpmässiga bildsökvägar från $chosenCatPictures.

    foreach ($shuffledPictures as $pictNr) {

        $picture[] = $chosenCatPictures[$pictNr];
    };

    //Arrayen $picture returneras till "open space" för att kunna användas till att ropa in bilder i cat.php.

    return $picture;
};
