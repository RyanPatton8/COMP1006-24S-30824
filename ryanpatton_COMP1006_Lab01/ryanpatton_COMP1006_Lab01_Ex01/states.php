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
            $pattern = "/xas\b/";
            if(preg_match($pattern, $state)){
                $statesArray[0] = $state;
            } else {
                continue;
            }
        }

        foreach($states as $state){
            $pattern = "/\bM/";
            if(preg_match($pattern, $state)){
                $statesArray[1] = $state;
                break;
            } else {
                continue;
            }
        }

        foreach($statesArray as $newState) {
            echo"{$newState}<br>";
        }
    ?>
</body>
</html>