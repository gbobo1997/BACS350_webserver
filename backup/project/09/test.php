<?php include 'header.php';?>
<?php
   $domain = "https://unco-bacs.org";
   //echo "domain = $domain";
   echo '<br>';

   $page = "$domain/bacs_350/demo/index.php";
   //echo "page = $page";
    
   echo '<br>';
   
   $validator = 'https://validator.w3.org/nu/';
   //echo "validator = $validator";
   echo '<br>';

   //$href = "$validator?doc=$page";
   //echo "href = $href";
    
   echo '<a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Funco-bacs.org%2Fbacs_350%2Fdemo%2Findex.php">HTML Validator</a>';
    
    //echo "<a href="$href">HTML Validator</a>"
?>
This is a test
<?php include 'footer.php';?>