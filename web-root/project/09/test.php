<?php include 'header.php';?>
<?php
   $domain = "https://unco-bacs.org";
    echo "domain = $domain";

    $page = "$domain/bacs_350/demo/index.php";
    echo "page = $page";

    $validator = 'https://validator.w3.org/nu/';
    echo "validator = $validator";

    $href = "$validator?doc=$page";
    echo "href = $href";
    
    echo "<a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Funco-bacs.org%2Fbacs_350%2Fdemo%2Findex.php">HTML Validator</a>";
?>
<?php include 'footer.php';?>