<!-- requires helpers function to render header and footer
    using session_start and superglobal variable SESSION with counter to
    keep track of User visit
-->

<?php require(__DIR__ . "/includes/helpers.php"); ?>
<?php render("header", ["title" => "Narendra Modi"]); ?>
<?php
    session_start();
    
    if (isset($_SESSION["counter"]))
    {
        $counter = $_SESSION["counter"];
    }
    else
    {
        $counter = 1;
        echo "Welcome User, on your first visit to this website.";
    }
    
    $_SESSION["counter"] = $counter + 1;
?>
You have visited this site <?= $counter ?> times.
<ul>
    <li><a href="/public/career.php">Carrer So Far</a></li>
    <li><a href="http://www.narendramodi.in/">Personal Website</a></li>
</ul>
<?php render("footer"); ?>