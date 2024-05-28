<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excercise 01</title>
</head>
<body>
    <?php 
        $states = array("Mississippi", "Alabama", "Texas", "Massachusetts", "Kansas");

        $statesArray = array();

        foreach($states as $state){
            //create regex pattern \b indicates im looking for whatever ends with xas
            $pattern = "/xas\b/";
            if(preg_match($pattern, $state)){
                $statesArray[0] = $state;
            } else {
                continue;
            }
        }

        foreach($states as $state){
            //create regex pattern \b indicates im looking for whatever begins with xas
            $pattern = "/\bM/";
            if(preg_match($pattern, $state)){
                $statesArray[1] = $state;
                break;
            } else {
                continue;
            }
        }
        //print each variable in new array with a line break
        foreach($statesArray as $newState) {
            echo"{$newState}<br>";
        }
    ?>
</body>
</html>