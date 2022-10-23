<?php

// Arrays är definierade i sektionen nedan.
//---
// Array för bilder som slumpas fram:

$catPictures = [
    //Måns bilder
    ['./images/mans/IMG-20180330-WA0001.png', './images/mans/IMG-20180618-WA0003.png', './images/mans/IMG-20180714-WA0001.png', './images/mans/IMG-20190725-WA0000.png', './images/mans/IMG-20191027-WA0000.png', './images/mans/IMG-20200227-WA0003.png', './images/mans/IMG-20200813-WA0000.png', './images/mans/IMG-20200914-WA0000.png', './images/mans/IMG-20210119-WA0000.png', './images/mans/IMG-20210716-WA0002-min 2.png', './images/mans/IMG-20210825-WA0001.png', './images/mans/IMG-20211103-WA0001.png',],
    //Felix bilder
    ['./images/felix/20190913_071810-min.png', './images/felix/20191207_144045-min.png', './images/felix/IMG-20180804-WA0001-min.png', './images/felix/IMG-20181111-WA0001-min.png', './images/felix/IMG-20190120-WA0001-min.png', './images/felix/IMG-20190519-WA0000-min.png', './images/felix/IMG-20200227-WA0004-min.png', './images/felix/IMG-20200405-WA0000-min.png', './images/felix/IMG-20200505-WA0000-min.png', './images/felix/IMG-20200607-WA0002-min.png', './images/felix/IMG-20210203-WA0000-min.png', './images/felix/IMG-20210716-WA0000-min.png',],
    //Bilder för "both"
    ['./images/both/IMAGE150913024392893832-min.png', './images/both/IMG-20170527-WA0000-min.png', './images/both/IMG-20180103-WA0000-min.png', './images/both/IMG-20180803-WA0048-min.png', './images/both/IMG-20181001-WA0001-min.png', './images/both/IMG-20190722-WA0000-min.png', './images/both/IMG-20190730-WA0000-min.png', './images/both/IMG-20191130-WA0000-min.png', './images/both/IMG-20200326-WA0000-min.png', './images/both/IMG-20200402-WA0000-min.png', './images/both/IMG-20210307-WA0000-min.png', './images/both/IMG-20210419-WA0000-min.png',]
];

// Array med lite kattfakta, såsom pälsfärg, ålder, eventuell övervikt och lite övrig fakta:

$catFacts = [
    //Fakta om Måns
    ["furColor" => "Large-spotted grey and white", "age" => 15, "weight" => 7, "overWeight" => true, "otherCatFacts" => "Måns is a heavyset housecat with a wide chest. He is an excellent food thief and a great rattan basket ruiner. He is more my wife Kim's cat than mine, and his cat brother's name is Felix."],
    //Fakta om Felix
    ["furColor" => "Light brown, white and with dark stripes", "age" => 15, "weight" => 6, "overWeight" => false, "otherCatFacts" => "Felix is a cute, but slightly daft, housescat. He is an excellent toy hunter and midnight howler. He is more my cat than Kim's, and his cat brother's name is Måns."],
    //Fakta om "both"
    ["furColor" => "Grey and white", "age" => 30,  "weight" => 13, "overWeight" => true, "otherCatFacts" => "Although they are brothers, they are really not that fond of each other. But sometimes they team up, ususally during dinner time."]
];
