<!DOCTYPE html>
<html>
<body>

<?php
$student = array("Voornaam" => "Jan", "Achternaam" => "Janssen", "Klas" => "9A", "Leeftijd" => 17, "Woonplaats" => "Amstelveen");

foreach ($student as $key => $value) {
    echo "$key is $value <br/>";
}

?>

</body>
</html>