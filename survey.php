//survey.php
<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>
<?php 
if(isset($_POST['submit']))
{// data submitted
	echo '<h1>Thank You, Survey Completed</h1>
	<h2>You submitted:</h2>
	<p>From: ' . $_POST['Name'] . '<br />
	Email: ' . $_POST['Email'] . '<br />
	You told us your favorite flavor and what you would order.<br />
	Your Comments: ' . $_POST['Comments'] . '</p>
	<p>If you requested a response, we will get back to you soon.</p>';

$to = 'thomas@karchesy.com';
$from = $_POST['Name'];
$message = $_POST['Comments'];
$replyto = $_POST['Email'];
$subject = 'Survey';


}else{//show form
	echo '
	<h1>' . $pageID . '</h1>
	<form method="post" action="' . THIS_PAGE . '">
	Name: <input type="text" name="Name" required="required" /><br />
	Email: <input type="email" name="Email" required="required" /></p> 
	<p>What is  your favorite flavor?:<br />
	<input type="radio" name="flavor" value="Chocolate"> Chocolate<br>
	<input type="radio" name="flavor" value="Vanilla"> Vanilla<br>
	<input type="radio" name="flavor" value="Strawberry"> Strawberry</p>
	<p>Check what you would order today:<br />
	<input type="checkbox" name="order1" value="Hamburger"> Hamburger<br>
	<input type="checkbox" name="order2" value="Fries"> Fries<br>
	<input type="checkbox" name="order3" value="Shake"> Shake<br>
	<input type="checkbox" name="order4" value="Salad"> Salad</p>
	<p>What do you think of our survey:<br /><textarea name="Comments"></textarea><br />
	<input type="submit" value="Send" name="submit" />
	</form>
	';
	

}

?>
<?php include 'includes/footer.php';?>