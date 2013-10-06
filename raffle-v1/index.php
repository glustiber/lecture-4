<!DOCTYPE HTML>
<html>

<head>

	<meta charset="UTF-8">

	<title>Lecture 4 - Raffle v1</title>

	<?php
		require_once('logic.php');
	?>

</head>

<body>

	Refresh to play again <br><br>
    
    The winning number is <?=$winning_number?>!<br><br>
        
    <?php foreach($contestants as $key => $value): ?>
        <?=$key?> is a <?=$value?><br>
    <?php endforeach; ?>
    
</body>

</html>