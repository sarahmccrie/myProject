<!DOCTYPE html>
<html lang="en">
<head>
    <title>Change Your Password</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Sarah McCrie">
    <meta name="description" content="this is my password page">
    <!-- Author:      Sarah McCrie
        Program:      myProject
        Date:         [03-16-2023]
        Updated:      [04-09-2023] 
        Version:      1.0     
        Description:  This is my password page
    -->
    <link rel="stylesheet" href="css/loginpages.css">
</head>
<body>

<?php
    $page_title = 'Change Password';
    include('includes/header.php');

    // Check for form submission:
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //open db connection
        require('../../mysqli_connect.php');
	   $errors = []; 

	// Check for email address:
	if (empty($_POST['email'])) {
		$errors[] = 'Please enter your email address.';
	} else {
		$e = mysqli_real_escape_string($dbc, trim($_POST['email']));
	}

	// Check current password:
	if (empty($_POST['pass'])) {
		$errors[] = 'Please enter your current password.';
	} else {
		$p = mysqli_real_escape_string($dbc, trim($_POST['pass']));
	}

	// Check for a new password and match against confirmed password:
	if (!empty($_POST['pass1'])) {
		if ($_POST['pass1'] != $_POST['pass2']) {
			$errors[] = 'The passwords did not match! Please try again.';
		} else {
			$np = mysqli_real_escape_string($dbc, trim($_POST['pass1']));
		}
	} else {
		$errors[] = 'Please enter your new password.';
	}

	if (empty($errors)) {
		// Make sure email address and password are in db:
		$q = "SELECT user_id FROM users WHERE (email='$e' AND pass=SHA2('$p', 512) )";
		$r = @mysqli_query($dbc, $q);
		$num = @mysqli_num_rows($r);
		if ($num == 1) { // Match was made.

			// Get user_id:
			$row = mysqli_fetch_array($r, MYSQLI_NUM);

			// Make the UPDATE query:
			$q = "UPDATE users SET pass=SHA2('$np', 512) WHERE user_id=$row[0]";
			$r = @mysqli_query($dbc, $q);

            //if able to change pass
			if (mysqli_affected_rows($dbc) == 1) {
				echo '<h1 class="messageheader">Thank you!</h1>
				<p class="messagetext">Your password has been updated. In next lesson, you will actually be able to log in!</p><p><br></p>';

            } else { 
				echo '<div class="boxarea"><h1>System Error</h1>
				<p class="error">Your password could not be changed due to a system error. We apologize for any inconvenience.</p><hr></div>';

				// echo error type
				echo '<div class="boxarea"><p class="error">' . mysqli_error($dbc) . '<br><br>Query: ' . $q . '</p></div>';
			}

            //close db connection
			mysqli_close($dbc); 

			include('includes/footer.html');
			exit();
		} 
        
        else { // Invalid email address/password combination.
			echo '<h1 class="messageheader">Error!</h1>
			<p class="error">The email address and password do not match those on file.</p>';
		}

    } else { 
        //display errors
        echo '<h1 class="messageheader">Error!</h1>
        <p class="error">Please alter your submission based on the following:<br>';
        foreach ($errors as $msg) {
            echo " - $msg<br>\n";
        }
        echo '</p><p>Thank you!</p><p><br></p>';
        } 

        //close db connection
        mysqli_close($dbc);
    }
    ?>
    <div class="boxarea">
        <h1>Change Password</h1>
        <hr>
        <form action="password.php" method="post">
            <p><b>Email Address:</b> <input class="userinfo" type="email" name="email" size="20" maxlength="60" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" required> </p>
            <p><b>Current Password:</b> <input class="userinfo" type="password" name="pass" size="10" maxlength="20" value="<?php if (isset($_POST['pass'])) echo $_POST['pass']; ?>" ></p>
            <p><b>New Password:</b> <input class="userinfo" type="password" name="pass1" size="10" maxlength="20" value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1']; ?>" ></p>
            <p><b>Confirm New Password:</b> <input class="userinfo"type="password" name="pass2" size="10" maxlength="20" value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2']; ?>" ></p>
	       <p><input class="usersubmit" type="submit" name="submit" value="Change Password"></p>
        </form>
    </div>
    <?php include('includes/footer.html'); ?>
</body>
</html>
