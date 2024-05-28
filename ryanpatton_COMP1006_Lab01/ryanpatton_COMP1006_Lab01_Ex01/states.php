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

        echo"{$statesArray[0]}";
    ?>
</body>
</html>