<!DOCTYPE HTML>
<html>

<head>

	<meta charset="UTF-8">

	<title>Lecture 4 - Raffle v2</title>

	<?php
		require_once('logic.php');
	?>

</head>

<body>

<!-- Our form to accept new contestants -->
        <form method='POST' action='index.php'>
            Enter the contestants<br>
            <input type='text' name='contestant1' autocomplete='off'><br>
            <input type='text' name='contestant2' autocomplete='off'><br>
            <input type='text' name='contestant3' autocomplete='off'><br>
            <input type='text' name='contestant4' autocomplete='off'><br>
            
            <input type='submit' value='Pick a winner!'><br>
        </form>    
    
    
    <!-- Print the results only if we have $_POST. i.e. if the form was submitted -->
        <?php if($_POST): ?>
        
            The winning number is <?=$winning_number?>!<br><br>
                
            <?php foreach($contestants as $index => $value): ?>
                <?=$index?> is a <?=$value?><br>
            <?php endforeach; ?>
    
        <?php endif; ?>
    
</body>

</html>