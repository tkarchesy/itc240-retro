<?php
//customers.php - shows a list of customer data
?>
<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>
<h1><?=$pageID?></h1>
<?php
$sql = "select * from test_Customers";
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn,$sql);

if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
        echo '<p>';
        echo 'FirstName: <b>' . $row['FirstName'] . '</b> ';
        echo 'LastName: <b>' . $row['LastName'] . '</b> ';
        echo 'Email: <b>' . $row['Email'] . '</b> ';
        
		echo '<a href="customer_view.php?id=1'>' . $row['FirstName'] . '</b> '</a>';"
		
		echo '</p>';
    }    

}else{//inform there are no records
    echo '<p>There are currently no customers</p>';
}
//Release web server resources
@mysqli_free_result($result);

mysqli_close($iConn);

?>
