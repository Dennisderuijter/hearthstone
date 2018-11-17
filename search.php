<?php

require 'connect.php';

if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $query = $db->prepare("SELECT * FROM all_cards WHERE name LIKE '$search%' ORDER BY player_class, cost, name");
    $query->execute();
    while ($row=$query->fetch(PDO::FETCH_ASSOC)) {
        echo '<img src="'.$row['img'].'">';
    }
}

?>
