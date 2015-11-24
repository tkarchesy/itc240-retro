<?php
//customer_view.php - shows a list of customer data
?>
<?php include 'includes/config.php';?>
<?php

//process querystring here
if(isset($_GET['id']))
{//process data
	//cast the data to an an interger, for security purposes
	$id = (int)$_GET['id'];
}else(//redirect ot safe page (if data is wrong)
	header('Location:customer_list.php');

)

$sql = "select * from test_Customers";
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn,$sql);

if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {	
		$FirstName = stripslashes($row['FirstName']);
		$LastName = stripslashes($row['LastName']);
		$Email = stripslashes($row['Email']);
		$title = "Title Page for " . $FirstName;
		$pageID = $FirstName;
		$FeedBack =''; //no feedbasck necessary
    }   
}else{//inform there are no records
    echo '<p>There are currently no customers</p>';
}
?>

<?php include 'includes/header.php';?>
<h1><?=$pageID?></h1>
<?php
 


        echo '<p>';
        echo 'FirstName: <b>' . $row['FirstName'] . '</b> ';
        echo 'LastName: <b>' . $row['LastName'] . '</b> ';
        echo 'Email: <b>' . $row['Email'] . '</b> ';
        
		//echo '<a href="customer_view.php?id=' . $row['CustomerID'] . '"'>' . $row['FirstName'] . '</b> '</a>';
		
		echo '</p>';
		
		echo'</p><a href="customer_list.php">Go Back</a></p>';
//Release web server resources
@mysqli_free_result($result);

mysqli_close($iConn);

?>
