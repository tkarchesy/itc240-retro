<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>
<?php 
if(isset($_POST['submit']))
{// data submitted
	echo '<h1>Message Received</h1>
	<h2>Details of Message:</h2>
	<p>From: ' . $_POST['Name'] . '<br />
	Email: ' . $_POST['Email'] . '<br />
	Message: ' . $_POST['Comments'] . '</p>
	<p>If you requested a response, we will get back to you soon.</p>';

$to = 'twkarchesy@gmail.com';
$from = $_POST['Name'];
$message = $_POST['Comments'];
$replyto = $_POST['Email'];
$subject = 'Comment form Contact Page';


 safeEail($to,$subject,$message, $replyTo);

}else{//show form
	echo '
	<h1>' . $pageID . '</h1>
	<form method="post" action="' . THIS_PAGE . '">
	Name: <input type="text" name="Name" required="required" /><br />
	Email: <input type="email" name="Email" required="required" /><br />
	Comments: <textarea name="Comments"></textarea><br />
	<div class="g-recaptcha" data-sitekey="6LfsBRETAAAAAAXCI3qICGCHCYSI9jFL2d88zrlj"></div>
	<input type="submit" value="Send" name="submit" />
	</form>
	';
	

}

?>
<?php include 'includes/footer.php';?>