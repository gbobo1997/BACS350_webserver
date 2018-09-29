<?php
    // Connect to the database
    require_once 'db.php';
    echo '<h2>Add Test User</h2>';
    // Add new record
    $author = 'Upton Sinclair';
    $title = 'The Jungle';
    $summary = 'Muckraking book that exposed the corrupt practices of the Chicago stockyards.';
    // Add database row
    $query = "INSERT INTO books (author, title, summary) VALUES (:author, :title, :summary);";
    $statement = $db->prepare($query);
    $statement->bindValue(':author',$author);
    $statement->bindValue(':text', $title);
    $statement->bindValue(':summary', $summary);
    $statement->execute();
    $statement->closeCursor();
    // Display subscriber records
    require 'select.php';
?>