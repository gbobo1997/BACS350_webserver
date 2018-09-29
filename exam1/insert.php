<?php
    // Connect to the database
    require_once 'db.php';
    echo '<h2>Contact Added</h2> </br> See new output below: </br>';
    // Add new record
    $name = filter_input(INPUT_POST, 'post_name');
    $address = filter_input(INPUT_POST, 'post_address');
    $phone = filter_input(INPUT_POST, 'post_phone');
    echo "$name . $address . $phone";
    
    //$name = 'Test user A';
    //$address = 'Test Address A';
    //$phone = 98765;
    // Add database row
    $query = "INSERT INTO contacts (name, address, phone) VALUES (:name, :address, :phone);";
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':address', $address);
    $statement->bindValue(':phone', $phone);
    $statement->execute();
    $statement->closeCursor();
    // Display subscriber records
    require 'select.php';
?>