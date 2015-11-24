<?php 
//initialize arrays with data
$dayOfWeek = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");  // day of the week
$weekDescription = array("Sunday is named after the Sun.","Monday is named after the Moon.","Tuesday is named after Mars.","Wednesday is named after Mercury.","Thursday is named after Jupiter.","Friday is named for Venus.","Saturday is named for Saturn.");	// friend's name for that day
$weekName = array("Dominic","Lucy","Marty","Hermes","Zeus","Aphrodite","Kronos");  // And what they have to say
?>
<html lang="en"><head>
  <meta charset="utf-8">
  <title>Your <?=$dayOfWeek[date(w)]?> Secret Friend</title>
  <meta name="description" content="Hi, My name is <?=$weekName[date(w)]?>. I am your secret friend for <?=$dayOfWeek[date(w)]?>.">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="normalize.min.css">
  <link href="http://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="style.min.css">
</head>
<body class="<?=strtolower($dayOfWeek[date(w)])?>">

  <div class="wrapper">
      <img src="<?=strtolower($weekName[date(w)])?>.jpg" alt="A picture of <?=$weekName[date(w)]?>" />

    <h1 class="logo"><?=$weekName[date(w)]?></h1>
    <p>Hi, My name is <?=$weekName[date(w)]?>. I am your secret friend for <?=$dayOfWeek[date(w)]?>.</p>
    <p><?=$weekDescription[date(w)]?></p>  <!-- displaying day specific content using an array -->
	<p> Oh, by the way, did I mention that today is 	<!-- displaying day specific content using conditionals -->
		<?php 
		switch (date(w)){
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
  </div></div>

</body></html>