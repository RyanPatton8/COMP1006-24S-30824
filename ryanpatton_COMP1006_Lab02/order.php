<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // if(!preg_match("/^[0-9]{3}$/", $_POST["order-id"]))
    // {
    //     print("<p>bad order id</p>");
    //     die();
    // }
    if(!preg_match("/^[a-zA-Z0-9]+@[a-zA-Z0-9]+.com$/", $_POST["email"]))
    {
        print("<p>bad email</p>");
        die();
    }
    // else if(!preg_match("/^[0-9]{3}$/", $_POST["phone"]))
    // {
    //     print("<p>bad phone number</p>");
    //     die();
    // }
    else
    {
        print("<p>GOOD</p>");
    }
    ?>
</body>
</html>