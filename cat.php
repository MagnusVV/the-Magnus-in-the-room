<?php

// Här definieras kattens namn som variabel, som sedan används i funktion nedan.

$catName = $_GET['name'];

require('./header.php');

require('./functions.php');

require('./arrays.php');

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

?>

<article>
    <h2><?= $catName ?></h2>
    <p>
        <?php

        //Funktionen aboutCat ropas in.

        aboutCat($catName);

        ?>

    </p>
    <p>

    </p>

    <?php


    ?>
    <div class="picture-box">
        <img src='<?= $catPictures[0][1]; ?>' alt="Cat picture" />
    </div>
</article>
<nav>
    <a href='./index.php'>Back</a>
</nav>

<?php

require('./footer.php');


    /* <?php
$users = ['john', 'dave', 'tim'];

for($i = 0;$i < count($users);$i++)
	echo $users[$i]."\n";
?> */

    /*     $my_array = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow", "e" => "purple");

    shuffle($my_array);
    print_r($my_array); */
