<?php
    // Connect to the database
    require_once 'db.php';
    echo '<h2>Add Test User</h2>';
    // Add new record
    $date = 'Y-m-d g:i a';
    $text = 'LESSON 11';
    // Add database row
    $query = "INSERT INTO log (date, text) VALUES (:date, :text);";
    $statement = $db->prepare($query);
    $statement->bindValue(':date', $date);
    $statement->bindValue(':text', $text);
    $statement->execute();
    $statement->closeCursor();
    // Display subscriber records
    require 'select.php';
?>