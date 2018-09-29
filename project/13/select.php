<?php
    // Connect to the database
    require_once 'db.php';
    // Query for all subscribers
    $query = "SELECT * FROM books";
    $statement = $db->prepare($query);
    $statement->execute();
    echo '<h2>Subscribers in List</h2>';
    // Loop over all of the subscribers to make a bullet list
    $books = $statement->fetchAll();
    echo '<ul>';
    foreach ($books as $s) {
        echo '<li>' . $s['author'] . ', ' . $s['title'] . '</br>'.$s['summary'].'</li>';
    }
    echo '</ul>';
?>