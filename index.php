<!-- <?= 'The Elephpent in the Room'; ?> -->
<?php

require('./header.php');

?>
<main class="main">

    <article class="introduction">
        <h2>Choose the cat, or cats, you want to oogle:</h2>

        <p>
            This page is nothing special. But if you are feeling the blues a bit, there's nothing better than watching a couple of cat pictures. Click the links below to have a look at my cats. Enjoy!
        </p>
    </article>

    <nav class="navigation">
        <ul>
            <!-- I länkarna nedan skickas parametern "name" över till cat.php. Den fångas upp som en variabel där-->

            <li><a class="cat-choice" href='./cat.php?name=Måns'>Måns</a></li>
            <li><a class="cat-choice" href='./cat.php?name=Felix'>Felix</a></li>
            <li><a class="cat-choice" href='./cat.php?name=Both'>Both</a></li>
        </ul>
    </nav>

    <article class="no-truer-words">
        <p>How can you just not LOVE cats?</p>
    </article>

</main>

<?php

require('./footer.php');
