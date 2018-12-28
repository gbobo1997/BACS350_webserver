<?php
     include 'header.php';
    // Connect to the database
    require_once 'db.php';
    echo '<h2>Add Test User</h2>';
    // Add new record
    $name = filter_input(INPUT_POST, 'my_name');
    $email = filter_input(INPUT_POST, 'my_email', FILTER_VALIDATE_EMAIL);
    // Add database row
    $query = "INSERT INTO subscribers (name, email) VALUES (:name, :email);";
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $statement->closeCursor();
    // Display subscriber records
   
    require 'select.php';
?>
<a href="index.php"> Back to home </a>
<?php
    include 'footer.php';
?>