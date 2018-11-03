<?php

require 'vendor/mashape/unirest-php/src/unirest.php';

$response = Unirest\Request::get("https://omgvamp-hearthstone-v1.p.mashape.com/cards", array( "X-Mashape-Key" => "WrdXSysUWYmsh5Q1N8sowIGDsqfsp1jxS9MjsnypOqPW3M3PjI" ));

echo '<pre>';
print_r($response->body);
echo '</pre>';

?>
