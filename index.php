<!-- <?= 'The Elephpent in the Room'; ?> -->
<?php

require('./header.php');

?>

<h2>Choose the cat, or cats, you want to oogle:</h2>

<nav>
    <ul>
        <!-- I länkarna nedan skickas parametern "name" över till cat.php. Den fångas upp som en variabel där-->

        <li><a href='./cat.php?name=Måns'>Måns</a></li>
        <li><a href='./cat.php?name=Felix'>Felix</a></li>
        <li><a href='./cat.php?name=Both'>Both</a></li>
    </ul>
</nav>

<p>How can you <i>just not</i> love cats?</p>

<?php

require('./footer.php');
