<?php
require_once "class/animals.php";
require_once "class/pescado.php";
require_once "class/Simecek.php";
require_once "class/Tira.php";
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

    $animals[0] = new Pescados("Steiner", 0, True);
    $animals[1] = new Simeceks("Simecek", 4, True);
    $animals[2] = new Tiras("Tira", 4, True);

    foreach ($animals as $animal) {
        
        echo $animal->getName() . "<br>";
        echo $animal->getLegs() . "<br>";

    }

?>

</body>
</html>