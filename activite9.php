<?php

$suite =[ "carreux","trifle","pique","coeur"];
$carte =[1,2,3,4,5,6,7,8,9,10,11,12,13];
$sdeck = [] ;
for($i = 0 ; $i < 4 ;$i++){
    for($j = 0 ; $j < 13 ;$j++){

        $sdeck[] = $suite[$i]." - ".$carte[$j] ;
       
        
        

    }
 

    
}   


$subdeck1 =[] ;
$subdeck2 =[] ;

for($i = 0 ; $i < 52; $i++){
    if ($i < 26) { 
        $subdeck1[] =   $sdeck[$i]; 
    }else {
        $subdeck2[] =   $sdeck[$i];
    }

}

$shafflet_deckpuch = [];
for($j = 0 ; $j < 51 ;$j+=2){
    $shafflet_deckpuch[$j] = $subdeck1[$j/2];
    $shafflet_deckpuch[$j+ 1] = $subdeck2[$j/2];
}

   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activité 9</title>
    <style>
        td {
            padding: 20px;
            border :5px;
        }
       
    </style>
</head>
<body>
    <table>
        <?php for($i=0; $i<4; $i++) { ?>
            <tr>
            <?php for($j=0; $j<13; $j++) { ?>
                <td> <?php echo $shafflet_deckpuch[$j + $i*13] ?> </td>
            <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>