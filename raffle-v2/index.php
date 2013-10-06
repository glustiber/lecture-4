<!DOCTYPE HTML>
<html>

<head>

	<meta charset="UTF-8">

	<title>Lecture 4 - Raffle v2</title>

	<?php
		require_once('logic.php');
	?>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"> </script>

	<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js"> </script>

	<script type="text/javascript">
	$(document).ready(function(){
    	$("#rafflev2").validate();
	});
</script>

</script>

</head>

<body>

<!-- Our form to accept new contestants -->
        <form method='POST' action='index.php' id='rafflev2'>
            Enter the contestants' e-mail addresses:<br>
            <input type='text' name='contestant1' class='required email' autocomplete='off' type="hidden" value="<?php if(isset($_POST['contestant1'])) { echo htmlentities ($_POST['contestant1']); }?>"><br>
            <input type='text' name='contestant2' class='email' autocomplete='off' type="hidden" value="<?php if(isset($_POST['contestant2'])) { echo htmlentities ($_POST['contestant2']); }?>"><br>
            <input type='text' name='contestant3' class='email' autocomplete='off' type="hidden" value="<?php if(isset($_POST['contestant3'])) { echo htmlentities ($_POST['contestant3']); }?>"><br>
            <input type='text' name='contestant4' class='email' autocomplete='off' type="hidden" value="<?php if(isset($_POST['contestant4'])) { echo htmlentities ($_POST['contestant4']); }?>"><br>
            
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