<?php

require_once "vendor/autoload.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ur mom</title>
</head>
<body>

<?php 

    $animals[0] = new Pescado("Steiner", 0, True);
    $animals[1] = new Simecek("Simecek", 4, True);
    $animals[2] = new Tira("Tira", 4, True);

    foreach ($animals as $animal) {
        
        echo $animal->getName() . "<br>";
        echo $animal->getLegs() . "<br>";

    }

?>

</body>
</html>