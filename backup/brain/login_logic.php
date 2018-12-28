<?php 
	require_once 'login_view.php';
	require_once 'db.php';
	function isLoggedIn($db, $home)
	{
		if ( isset( $_SESSION['user_id'])) 
		{
			if(!$home){logoutUI();}
		} 
		else
		{
			echo 'Please Log In to have access to note/review/slide creation.<br>';
			if(!$home)
			{
				login_form();
			}
			
			loginListener($db);
		}
	}

	function loggedIn()
	{
		if ( isset( $_SESSION['user_id'] ) ) 
		{
			return 'Logout';
		} 
		else 
		{
			return 'Login';
		}
	}

	function loginListener($db)
	{
		//echo 'Login Listener';
		
		$username = filter_input(INPUT_POST, 'username');
		$password = filter_input(INPUT_POST, 'password');
		// Fetch the password hash from db based on username
		// validate the password hashes match

		// For testing hashes
		
		if( password_verify($password, getHash($username, $db)[0]))
		{
			$_SESSION['user_id'] = $username;
			sleep(1);
			//header("Location: loginRedirect.php");
			header("Refresh:0; url=loginRedirect.php");
			// maybe this will work
			exit;
		}

		// for direct string testing
		/*
		if($password == 'test')
		{
			$_SESSION['user_id'] = 123;
			echo 'login success';
			header("Location: index.php");
		}*/
	}

	function signupListener($db)
	{
		//echo 'Signup Listener';
		
		$username = filter_input(INPUT_POST, 'username');
		$password = filter_input(INPUT_POST, 'password');

		$hash = password_hash($password, PASSWORD_DEFAULT);

		insertUser($username, $hash, $db);
	}

	function getHash($u, $db)
	{
		$query = "SELECT password FROM users WHERE username = :u;";
		$statement = $db->prepare($query);
		$statement->bindvalue(':u', $u);
		$statement->execute();
		return $statement->fetch();
	}

?>