<?php
    // Setup a page title variable
    $page_title = "DB Test";
    // Include the page start
    include 'header.php';
    // Concatenate the db string 
    $port = '3306';
    $dbname = 'pvwwprmy_bacs350_subscribers';
    $db_connect = "mysql:host=localhost:$port;dbname=$dbname";
    $username = 'pvwwprmy_350DB';
    $password = 'DBTest';
    // print it out on the page
    echo "<h1>DB Connection</h1>" .
    "<p>Connect String: $db_connect, $username, $password</p>";
    
    // Try to open the db
    try
    {
        $db = new PDO($db_connect,$username,$password);
        echo '<p><b>Successful Coonnection</b></p>';        
    }
    catch(PDOException $e)
    {
        $error_message = $e->getMessage();
        echo "<p>Error: $error_message</p>";
    }
    
    // Query subs
    $query = "SELECT * FROM subscribers";
    $statement = $db->prepare($query);
    $statement->execute();
    
    // loop and print subs out
    $subscribers = $statement->fetchAll();
    echo'<ul>';
    foreach($subscribers as $s)
    {
        echo'<li>' . $s['name'] . ',' . $s['email'] . '</li>';        
    }
    echo'</ul>';
    
    $name = 'This is a test';
    $email = 'Email test';
    
    // Add a row to the db
    $query = "INSERT INTO subscribers (name, email) VALUES(:name,:email);";
    $statement = $db->prepare($query);
    
    $statement->bindValue(':name',$name);
    $statement->bindValue(':email',$email);
    //$statement->execute();
    $statement->closeCursor();

?>
    <h2>BACS 350 - Project #6</h2>
<?php
    // Include the page end
    include 'footer.php';
?>