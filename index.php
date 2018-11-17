<?php

require 'connect.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Hearthstone</title>

        <!-- jQuery source -->
    	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="style.min.css">
    </head>
    <body>

        <input id="search" type="text" name="search" placeholder="Search for cards...">

        <div class="results"></div>

        <!-- JavaScript -->
    	<script type="text/javascript" src="script.js"></script>

    </body>
</html>
