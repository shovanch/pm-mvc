<!-- requires helpers function to render header and footer-->
<?php require(__DIR__ . "/includes/helpers.php"); ?>
<?php render("header", ["title" => "Journey of Narendra Modi"]); ?>

<ul>
    <li><a href="cm.php">CM of Gujrat</a></li>
    <li><a href="pm.php">PM of India</a></li>
</ul>
<?php render("footer"); ?>