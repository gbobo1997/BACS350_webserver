<?php
    $page_title = "Exam 1 Home";
    include 'header.php';
    ?>
    <div class="head_img">
            <img src="logo.png" alt="A spider logo" width="200" height="200" >
        </div>
    <?php
    echo'<h1>Database Connection :</h1></br>';
    require 'db.php';
    echo'<h1>Database Output : </h1> </br>';
    require 'select.php';?>
    
    <h1>Enter a new contact below: </h1></br>
    <form action="insert.php" method="post">
        <label>Name: </label>
        <input type="text" name="post_name"><br>
        <label>Address: </label>
        <input type="text" name="post_address"><br>
        <label>Phone Number : </label>
        <input type="text" name="post_phone"><br>
        <input type="submit" value="Submit"/>
    </form>
<?php include 'footer.php';?>
