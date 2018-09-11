<?php
    $name = filter_input(INPUT_POST, 'my_name');
    // Setup a page title variable
    $page_title = "View to Accept Data";
    // Include the page start
    include 'header.php';
?>
    <h2>My Name is <?php echo $name; ?></h2>
    <h2>Subscribe to our mailing list:</h2><br>
    
    <form action="sub_confirm.php" method="post">
        <label>What is your name?</label>
        <input type="text" name="my_name"><br>
        <label>What is your email?</label>
        <input type="text" name="my_email"><br>
        <input type="submit" value="Save"/>
    </form>
<?php
    // Include the page end
    include 'footer.php';
?>