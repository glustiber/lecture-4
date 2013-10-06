<?php
$boxes = "";
for($i = 0; $i < 10; $i++) {
	$width = rand(25,75);
	$height = rand(25,75);
    $boxes = $boxes."<div class='box' style='width:".$width."px; height:".$height."px;'>".$i."</div>";
}
?>