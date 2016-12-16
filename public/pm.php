<!-- requires helpers function to render header and footer-->
<?php require(__DIR__ . "/includes/helpers.php"); ?>
<?php render("header", ["title" => "PM of Republic of India"]); ?>

<ul>
    <li><a href="https://en.wikipedia.org/wiki/India">The Republic of India</a></li>
    <li><a href="https://www.wikiwand.com/en/Narendra_Modi#/Prime_Minister">Narendra Modi as PM of India</a></li>
</ul>
<?php render("footer"); ?>