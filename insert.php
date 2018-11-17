<?php

require 'connect.php';

require 'vendor/mashape/unirest-php/src/unirest.php';

$response = Unirest\Request::get("https://omgvamp-hearthstone-v1.p.mashape.com/cards", array( "X-Mashape-Key" => "WrdXSysUWYmsh5Q1N8sowIGDsqfsp1jxS9MjsnypOqPW3M3PjI" ));

$request = $response->body;

// INSERT

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
//             $query = $db->prepare("INSERT INTO all_cards (id, dbf_id, name, card_set, player_class, cost, img, img_gold) VALUES (:id, :dbf_id, :name, :card_set, :player_class, :cost, :img, :img_gold)");
//             $query->bindParam(':id', $id, PDO::PARAM_STR);
//     		   $query->bindParam(':dbf_id', $dbf_id, PDO::PARAM_INT);
//             $query->bindParam(':name', $name, PDO::PARAM_STR);
//             $query->bindParam(':card_set', $card_set, PDO::PARAM_STR);
//             $query->bindParam(':player_class', $player_class, PDO::PARAM_STR);
//             $query->bindParam(':cost', $cost, PDO::PARAM_INT);
//             $query->bindParam(':img', $img, PDO::PARAM_STR);
//             $query->bindParam(':img_gold', $img_gold, PDO::PARAM_STR);
//         	   $query->execute();
//         }
//     }
// }

?>
