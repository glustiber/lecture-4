<?php
    # Who are our contestants? 
        $contestants["Ethel"] = "";
        $contestants["Leroy"] = "";
        $contestants["Sam"]   = "";
        $contestants["Sandy"] = "";
            
    # Pick a winning number based on how many contestants we have
        $how_many_contestants = count($contestants);
        $winning_number       = rand(1,$how_many_contestants);
        $result               = "";
        
    # Loop through contestants, seeing if any won 
        foreach($contestants as $key => $value) {
            
            # Generate a random number for this contestant
            $random_number = rand(1,$how_many_contestants);
            
            # See if their generated random number mathches the winning number and store the results in the $contestants array
            if($random_number == $winning_number) {
                $contestants[$key] = "Winner!";
                $winners[] = "$key";
            }
            else {
                $contestants[$key] = "Loser :(";            
            }        
        }

        if (count($winners) > 1) {
        	$result = "It's a tie!";
        }
        else if (count($winners) == 1) {
        	$result = "THE WINNER IS: ".$winners[0];
        }
        else if (count($winners) == 0) {
        	$result = "No winners this round :(";
        }


?>