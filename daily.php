<?php include 'includes/config.php';?>
<?php 

//initialize arrays with data

$dayOfWeek = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");  // day of the week

$weekDescription = array("Sunday is named after the Sun.","Monday is named after the Moon.","Tuesday is named after Mars.","Wednesday is named after Mercury.","Thursday is named after Jupiter.","Friday is named for Venus.","Saturday is named for Saturn.");	// friend's name for that day

$weekName = array("Dominic","Lucy","Marty","Hermes","Zeus","Aphrodite","Kronos");  // And what they have to say
  if(isset($_GET['day']))
  {
	  $myDay = $_GET['day'];
	  echo "day = " . $_GET['day'];

  }else{
	  $myDay = date(w);
  }

?>
<?php include 'includes/header.php';?>
					<h1><?=$pageID?></h1>
  

      <img src="images/<?=strtolower($weekName[$myDay])?>.jpg" alt="A picture of <?=$weekName[$myDay]?>" />



    <h1 class="logo"><?=$weekName[$myDay]?></h1>

    <p>Hi, My name is <?=$weekName[$myDay]?>. I am your secret friend for <?=$dayOfWeek[$myDay]?>.</p>

    <p><?=$weekDescription[$myDay]?></p>  <!-- displaying day specific content using an array -->

	<p> Oh, by the way, did I mention that today is 	<!-- displaying day specific content using conditionals -->

		<?php 

		switch ($myDay){

		case 0: echo "Sunday"; Break;

		case 1: echo "Monday"; Break;

		case 2: echo "Tuesday"; Break;

		case 3: echo "Wednesday"; Break;

		case 4: echo "Thursday"; Break;

		case 5: echo "Friday"; Break;

		case 6: echo "Saturday"; Break;

		default : echo "Uhhh .. Never mind."; Break;

		}

		?>.</p>
<p><a href="daily.php?day=0">Sunday</a></p>
<p><a href="daily.php?day=1">Monday</a></p>
<p><a href="daily.php?day=2">Tuesday</a></p>
<p><a href="daily.php?day=3">Wednesday</a></p>
<p><a href="daily.php?day=4">Thursday</a></p>
<p><a href="daily.php?day=5">Friday</a></p>
<p><a href="daily.php?day=6">Saturday</a></p>

 
<?php include 'includes/footer.php';?>