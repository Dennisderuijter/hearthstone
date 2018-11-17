<?php

require 'connect.php';

require 'vendor/mashape/unirest-php/src/unirest.php';

$response = Unirest\Request::get("https://omgvamp-hearthstone-v1.p.mashape.com/cards", array( "X-Mashape-Key" => "WrdXSysUWYmsh5Q1N8sowIGDsqfsp1jxS9MjsnypOqPW3M3PjI" ));

$request = $response->body;

// UPDATE

// foreach ($request as $key => $value) {
//     foreach ($value as $key => $value) {
//         if (isset($value->collectible) && substr($value->cardId, 0, 4) != 'HERO') {
//             $id             = $value->cardId;
//             $dbf_id         = $value->dbfId;
//             $name           = $value->name;
//             $card_set       = $value->cardSet;
//             $player_class   = $value->playerClass;
//             $cost           = $value->cost;
//             $img            = $value->img;
//             $img_gold       = $value->imgGold;
//
//             $query = $db->prepare("UPDATE all_cards SET cost=:cost WHERE id=:id");
//             $query->bindParam(':id', $id, PDO::PARAM_STR);
//             $query->bindParam(':cost', $cost, PDO::PARAM_INT);
//         	$query->execute();
//         }
//     }
// }

?>
