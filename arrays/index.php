<!DOCTYPE HTML>
<html>

<head>

	<meta charset="UTF-8">

	<title>Lecture 4 - Arrays</title>

	<?php
		require_once('logic.php');
	?>

</head>

<body>

	Loop through the array using a foreach loop<br>
    <?php
    foreach($shopping_list as $key => $value) {
        echo $value."<br>";
    }
    ?>
    
    <br><br>
    
    Loop through the array using a regular for loop<br>
    <?php
    for($i = 0; $i < count($shopping_list); $i++) {
        echo $shopping_list[$i]."<br>";
    }
    ?>
    
</body>

</html>