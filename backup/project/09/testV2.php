<?php include 'header.php';
    $result = $data1 . ' ' . $data2;

    $domain = 'https://unco-bacs.org';
    $page = $domain . '/bacs_350/demo/index.php';
    $validator = 'https://validator.w3.org/nu/';
    $totalVAR = $validator . '?doc=' . $page;
    
    echo "<a href ='$totalVAR'> Valid Link </a>";
?>
<br>This is a test validation page.<br>
See the link above to go to the validator page. 
<?php include 'footer.php';?>