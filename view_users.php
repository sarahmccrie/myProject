<!DOCTYPE html>
<html lang="en">
<head>
    <Title>View Users</Title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Sarah McCrie">
    <meta name="description" content="this is my users page">
    <!-- Author:      Sarah McCrie
        Program:      myProject
        Date:         [03-16-2023]
        Updated:      [04-09-2023] 
        Version:      1.0     
        Description:  This is my users page
    -->
<link rel="stylesheet" href="css/loginpages.css">
</head>
<body>
    <?php include('includes/header.php'); ?>
    <div id="viewusersboxarea" class="boxarea"> 
        <h1>Registered Users</h1>
        <?php
        //connect to db
        require('../../mysqli_connect.php');
        $display = 15;

        if (isset($_GET['p']) && is_numeric($_GET['p'])){ 
            $pages = $_GET['p'];
        } 
        else {
            $q = "SELECT COUNT(user_id) FROM users";
            $r = @mysqli_query($dbc, $q);
            $row = @mysqli_fetch_array($r, MYSQLI_NUM);
            $records = $row[0];
        if ($records > $display) { 
            $pages = ceil ($records/$display);
        } 
            else {
            $pages = 1;
        }
    }
    if (isset($_GET['s']) && is_numeric($_GET['s'])) {
        $start = $_GET['s'];
    } 
    else {
	   $start = 0;
    }

    $sort = (isset($_GET['sort'])) ? $_GET['sort'] : 'rd';

    switch ($sort) {
	   case 'ln':
		  $order_by = 'last_name ASC';
		  break;
	   case 'fn':
		  $order_by = 'first_name ASC';
		  break;
	   case 'rd':
		  $order_by = 'registration_date ASC';
		  break;
	   default:
		  $order_by = 'registration_date ASC';
		  $sort = 'rd';
		  break;
    }
        
    $q = "SELECT last_name, first_name, DATE_FORMAT(registration_date, '%M %d, %Y') AS dr, DATE_FORMAT(birthday, '%M %d, %Y') AS bd, user_id FROM users ORDER BY $order_by LIMIT $start, $display";
    $r = @mysqli_query($dbc, $q);

    //display table with last name, first name, date registered and birthday
    echo '<table class="userlisttable" width="100%">
        <thead>
        <tr>
	       <th align="center"><strong><a href="view_users.php?sort=ln">Last Name</a></strong></th>
	       <th align="center"><strong><a href="view_users.php?sort=fn">First Name</a></strong></th>
	       <th align="center"><strong><a href="view_users.php?sort=rd">Date Registered</a></strong></th>
           <th align="center"><strong><a href="view_users.php?sort=bd">Birthday</a></strong></th>
        </tr>
        </thead>
        <tbody>
    ';

    $bg = '#eeeeee';
    while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
        $bg = ($bg=='#eeeeee' ? '#ffffff' : '#eeeeee');
        echo '<tr bgcolor="' . $bg . '">
            <td align="center">' . $row['last_name'] . '</td>
            <td align="center">' . $row['first_name'] . '</td>
            <td align="center">' . $row['dr'] . '</td> 
            <td align="center">' . $row['bd'] . '</td>
        </tr>';
    } 

    echo '</tbody></table>';
    mysqli_free_result($r);
        
    //close db connection
    mysqli_close($dbc);

    if ($pages > 1) {

	   echo '<br><p>';
	   $current_page = ($start/$display) + 1;

	   if ($current_page != 1) {
		  echo '<a href="view_users.php?s=' . ($start - $display) . '&p=' . $pages . '&sort=' . $sort . '">Previous</a> ';
	   }

	   for ($i = 1; $i <= $pages; $i++) {
		  if ($i != $current_page) {
			 echo '<a href="view_users.php?s=' . (($display * ($i - 1))) . '&p=' . $pages . '&sort=' . $sort . '">' . $i . '</a> ';
		  } else {
			 echo $i . ' ';
		  }
	   } 

	   if ($current_page != $pages) {
		  echo '<a href="view_users.php?s=' . ($start + $display) . '&p=' . $pages . '&sort=' . $sort . '">Next</a>';
	   }

	   echo '</p>'; 
    }
    
    include('includes/footer.html');
    ?>
    </div>
</body>
</html>
    