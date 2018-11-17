<?php

require 'vendor/mashape/unirest-php/src/unirest.php';

$response = Unirest\Request::get("https://omgvamp-hearthstone-v1.p.mashape.com/cards", array( "X-Mashape-Key" => "WrdXSysUWYmsh5Q1N8sowIGDsqfsp1jxS9MjsnypOqPW3M3PjI" ));

$request = $response->body;
echo '<pre>';
print_r($request);
echo '</pre>';

// foreach ($request as $key => $value) {
//     foreach ($value as $key => $value) {
//         if (isset($value->collectible) && substr($value->cardId, 0, 4) != 'HERO') {
//             echo '<img src="'. $value->img .'">';
//         }
//     }
// }

?>
