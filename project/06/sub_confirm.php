<?php
    $name = filter_input(INPUT_POST, 'my_name');
    $email = filter_input(INPUT_POST, 'my_email', FILTER_VALIDATE_EMAIL);
    // Setup a page title variable
    $page_title = "View to Accept Data";
    // Include the page start
    include 'header.php';
?>
    <h2>Thank you <?php echo $name; ?></h2>
    You have been saved to our mailing list as:
    <?php echo $name;?> : <?php echo $email; ?>
<?php
    // Include the page end
    include 'footer.php';
?>