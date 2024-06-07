<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* basic styling for errors */
        .invalid{
            color: rgb(253,0,0);
            font-size: 1.5em;
            font-weight: bold;
        }
        .explanation{
            color: rgb(253,0,0);
            font-size: 1em;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    // boolean to make sure we only display errors if any occur
        $badInfo = false;
        //make sure input is valid from start to finish with ^ and $ ensure the input is a number and is 3 long
        if(!preg_match("/^[0-9]{3}$/", $_POST["order-id"]))
        {
            print("<p class = 'invalid'>INVALID ORDER ID!</p><p class = 'explanation'> proper format is 3 numeric characters ex: 123</p>");
            $badInfo = true;
        }
        //make sure input is valid from start to finish with ^ and $ can be any of upper or lower case with any number followed by an '@' symbol followed by same previous condition followed by '.com'
        if(!preg_match("/^[a-zA-Z0-9]+@[a-zA-Z0-9]+.com$/", $_POST["email"]))
        {
            print("<p class = 'invalid'>INVALID EMAIL ADDRESS!</p><p class = 'explanation'> proper format is letters and or numbers followed by '@' more letters and numbers followed by '.com' ex: abc123@abc123.com</p>");
            $badInfo = true;
        }
        //make sure input is valid from start to finish with ^ and $ check if 3 numbers than hyphen 3 numbers than hyphen than 3 numbers
        if(!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{3}$/", $_POST["phone"]))
        {
            print("<p class = 'invalid'>INVALID PHONE NUMBER!</p><p class = 'explanation'>proper format is 3 numbers with a hyphen followed by 3 more numbers followed by another hyphen followed by 3 final numbers ex: 123-123-123</p>");
            $badInfo = true;
        }
        // if any, multiple or all conditions were met print the appropriate closing tags and stop the program
        if($badInfo){
            print("</body></html>");
            die();
        }
    ?>

    <!-- just grab the appropriate info from the form and place it in a sentence -->
    <p>Thank you <?php print($_POST["name"]); ?> for placing the order.</P>
    <p>Your <?php print($_POST["products"]); ?> will be shipped via <?php print($_POST["d-method"]); ?> shipping.</p>
    
    <p>You will soon receive an email sent to <?php print($_POST["email"]); ?></p>

    <p>Order ID: <?php print($_POST["order-id"]) ?></p>
    <p>Name: <?php print($_POST["name"]) ?></p>
    <p>Address: <?php print($_POST["address"]) ?></p>
</body>
</html>