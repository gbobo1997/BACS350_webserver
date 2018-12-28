<?php
    include 'header.php';
    require_once 'db.php';
    echo'<h2> Thank you for registering!</h2>';
    
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
?>
<a href="index.php"> Back to home </a><br/>
<a href="subscribers.php"> View our users </a>
<?php
include 'footer.php';
?>