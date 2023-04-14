<!DOCTYPE html>
<html lang="en">
<head>
    <Title>Register</Title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Sarah McCrie">
    <meta name="description" content="this is my register page">
    <!-- Author:      Sarah McCrie
        Program:      myProject
        Date:         [03-16-2023]
        Updated:      [04-09-2023] 
        Version:      1.0     
        Description:  This is my register page
    -->
    <link rel="stylesheet" href="css/loginpages.css">
</head>
<body>
    <?php 
        include('includes/header.php');

    //check fields are not empty
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        require('../../mysqli_connect.php'); 
        $errors = []; 

	   // Check for first name
        if (empty($_POST['first_name'])) {
            $errors[] = 'You must enter your first name.';
        } else {
            $fn = mysqli_real_escape_string($dbc, trim($_POST['first_name']));
        }

	   // Check for last name
        if (empty($_POST['last_name'])) {
            $errors[] = 'You must enter your last name.';
        } else {
            $ln = mysqli_real_escape_string($dbc, trim($_POST['last_name']));
        }

	   // Check for email
        if (empty($_POST['email'])) {
            $errors[] = 'You must enter your email address.';
        } else {
            $e = mysqli_real_escape_string($dbc, trim($_POST['email']));
        }
        
        //Check for birthday
        if(empty($_POST['birthday'])){
            $errors[] = 'You must enter your birthday.';
        } else {
            $bd = mysqli_real_escape_string($dbc, trim($_POST['birthday']));
        }

        if (!empty($_POST['pass1'])) {
            if ($_POST['pass1'] != $_POST['pass2']) {
                $errors[] = 'Passwords did not match.';
        } else {
			 $p = mysqli_real_escape_string($dbc, trim($_POST['pass1']));
		  }
	   } else {
		  $errors[] = 'You must enter your password.';
	   }

	   if (empty($errors)) { 
           $q = "INSERT INTO users (first_name, last_name, email, pass, registration_date, birthday) VALUES ('$fn', '$ln', '$e', SHA2('$p', 512), NOW(), '$bd')";
           $r = @mysqli_query($dbc, $q);
           if ($r) { 
               echo '<div class="boxarea"><h1 class="messageheader">Thank you!</h1>
               <p class="messagetext">You are now registered as a user!</p><p><br></p></div>';

           } else { 
               echo '<div class="boxarea"><h1>System Error</h1>
               <p class="error">You could not be registered at this time. Please try again later.</p></div>';
               echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $q . '</p>';
           }
           
           //close db connection
           mysqli_close($dbc); 

           include('includes/footer.html');
           exit();

	   } else { 
           echo '<p class="error"><b>The following error(s) occurred:</b><br>';
           foreach ($errors as $msg) { 
               echo " - $msg<br>\n";
           }
           echo 'Please try again.<br></p>';
       } 
        
        //close db connection
        mysqli_close($dbc); 
    } 
    ?>
    <div class="boxarea" id="registerboxarea">
        <h1>Register</h1>
        <h2 class="pleasenote">Please note that other users will be able to see your name and birthday!</h2>
        <hr>
        <form action="register.php" method="post">
            <p><b>Name:</b> <input id="fname" class="userinfo" type="text" placeholder="First" name="first_name" size="15" maxlength="20" value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>" required>

            <input id="lname" class="userinfo" type="text" placeholder="Last" name="last_name" size="15" maxlength="40" value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>" required></p>
            
            <p><b>Email Address:</b> <input id="registeremail" class="userinfo" type="email" name="email" size="20" maxlength="60" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" required> </p>
            
            <p><b>Birthday:</b><input type="date" id="birthday" class="userinfo" name="birthday" size="20" value="<?php if (isset($_POST['birthday'])) echo $_POST['birthday']; ?>" required></p>
            
            <p><b>Password:</b> <input id="registerpass" class="userinfo" type="password" name="pass1" size="10" maxlength="20" value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1']; ?>" required></p>
            
            <p><b>Confirm Password:</b> <input id="registerconfirmpass" class="userinfo" type="password" name="pass2" size="10" maxlength="20" value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2']; ?>" required></p>
            
            <hr>
            
            <p><input class="usersubmit" type="submit" name="submit" value="Register"></p>
        </form>
    </div>
    <?php include('includes/footer.html'); ?>
</body>
</html>