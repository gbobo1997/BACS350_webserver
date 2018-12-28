<?php 
	require_once 'db.php';

	function listNotes($db)
	{
		if ( isset( $_SESSION['user_id'] ) ) 
		{
			$list = getUserNotes($db, $_SESSION['user_id']);
			//echo $_SESSION['user_id'];
			//echo count($list);
			writeNotes($list);
		} 
		else 
		{
			echo 'Please Log In if you wish to view your notes. <br> If you wish to create public content, please do so using the review app. <br> Notes are for private use. ';
		}
	}
?>