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
    
    /* Add a row to the db
    $query = "INSERT INTO subscribers (name, email) VALUES(:name,:email);";
    $statement = $db->prepare($query);
    
    $statement->bindValue(':name',$name);
    $statement->bindValue(':email',$email);
    //$statement->execute();*/
    //$statement->closeCursor();
    
    
    // CRUD operations - above is the read now lets insert
    $testSQL = "INSERT INTO subscribers (name, email) VALUES ('John' 'doe@joe.com')";
    $db->exec($testSQL);   
    
    // Lets update a field
    $query ="UPDATE subscribers SET name = :name, email = :email WHERE id = 1";
    $statement = $db -> prepare($query);
    $statement->bindValue(':name', 'Burt');
    $statement->bindValue(':email', 'gator@RIP.com');
    $statement->execute();
    $statement->closeCursor();
    
    // Lets print it out again
    $subscribers = $statement->fetchAll();
    $count = 0;
    echo'<ul>';
    foreach($subscribers as $s)
    {
        echo'<li>' . $s['name'] . ',' . $s['email'] . '</li>';
        $count = $count+1;
    }
    echo'</ul>';

    // Lets delete the last record
    $query = "DELETE from subscribers WHERE id = :num";    
    $statement = $db->prepare($query);
    $statement->bindValue(':num', $count);
    $statement->execute();
    $statement->closeCursor();
    
    // Lets print it out one more time
    $subscribers = $statement->fetchAll();
    echo'<ul>';
    foreach($subscribers as $s)
    {
        echo'<li>' . $s['name'] . ',' . $s['email'] . '</li>';
    }
    echo'</ul>';
    
?>
    <h2>BACS 350 - Project #7</h2>
    <a  href="db.php">Link to db</a>
<?php
    // Include the page end
    include 'footer.php';
?>