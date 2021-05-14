
<?php
include ('connect.php');
//include ('error.php');
 /** Sign out user control .. */
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	unset($_SESSION['id']);
	header("location: ../index.php");
}

elseif (isset($_POST['sign-up'])) {
    
    $username = mysqli_real_escape_string($connect, $_POST['username']);
	$email = mysqli_real_escape_string($connect, $_POST['email']);
	$pass1 = mysqli_real_escape_string($connect, $_POST['password_1']);
	$pass2 = mysqli_real_escape_string($connect, $_POST['password_2']);
	$if_user_exist = "SELECT * FROM users WHERE username='$username'";
	$if_exist_result = mysqli_query($connect, $if_user_exist);

	if (empty($username)) {
		array_push($errors, "Please enter Username..!");
	}
	if (mysqli_num_rows($if_exist_result) > 0) {
		array_push($errors, "Sorry.. Username already exist!");
	}
	if (empty($email)) {
		array_push($errors, "enter Email..!");
	}
	if (empty($pass1)) {
		array_push($errors, "Enter Password..!");
	}
	if ($pass1 != $pass2) {
		array_push($errors, "Different Password, Did't match..!");
	}
    else {
        if (count($errors) == 0) {
		$password = md5($pass1);
		$query = "INSERT INTO users (username, email, password, regdate) 
					  VALUES('$username', '$email', '$password', NOW())";
		mysqli_query($connect, $query);
		$_SESSION['username'] = $username;
		$_SESSION['id'] = mysqli_insert_id($connect);
		setcookie('user', $username, time() + (86400 * 2), "/");
		header('location: ../index.php?Signup=Successful..');
	}

    }
    
}
//login user

elseif (isset($_POST['login'])) {
    # code...
    
    $email = mysqli_real_escape_string($connect, $_POST['username']);
	$password = mysqli_real_escape_string($connect, $_POST['password_1']);
	if (empty($email)) {
		array_push($errors, "Enter Your Email Pliz..");
	}
	if (empty($password)) {
		array_push($errors, "User Password Required..");
	}
	if (count($errors) == 0) {
		$password = md5($password);
		$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
		$results = mysqli_query($connect, $query);
		
		//compare results from table users with actual user inputs
		if (mysqli_num_rows($results) == 1) {
			$row = mysqli_fetch_assoc($results);
			$username = $row['username'];
			$uid = $row['id'];

			$_SESSION['username'] = $username;
			$_SESSION['id'] = $uid;
			setcookie('user', $username, time() + (86400 * 2), "/");
			header('location: ../index.php?Login Successful..');
		} else {
			header("Location: ../login.php?Error=Wrong User mail or password..!");
		}
	}

}

