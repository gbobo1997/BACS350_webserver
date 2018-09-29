<?php
    // Connect to the database
    require_once 'db.php';
    // Query for all table contents
    $query = "SELECT * FROM contacts";
    $statement = $db->prepare($query);
    $statement->execute();
    echo '<h2>Contacts in Table</h2>';
    // Loop over table entry to output as list
    $contacts = $statement->fetchAll();
    echo '<ul>';
    foreach ($contacts as $s) {
        echo '<li>' . $s['name'] . ', ' . $s['address'] . ', '. $s['phone'].'</li>';
    }
    echo '</ul>';
?>