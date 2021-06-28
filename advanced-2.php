<!doctype html>
<html>
<title> 2nd page </title>

<head>
<style>
    body{
        color: <?php echo $_POST['Tekstkleur'] ?>;
        background-color: <?php echo $_POST['Achtergrondkleur'] ?>;
        }
    table,tr,td{
        padding: <?php echo $_POST['Padding'] ?>px;
        border: <?php echo $_POST['Tabel-borderdikte'] ?>px gray;
        }
</style>
</head>
 
<?php
function MaakRij($key, $value){
    echo "<tr><td>$key</td><td>$value</td></tr>";
}
?>
 
<body>
<?php
    if ($_POST['Tekstkleur'] != $_POST['Achtergrondkleur']){
        echo '<h1>Welkom</h1>';
        }
    else{
        echo '<h1 style="color:white">Dat kan niet!</h1>';
    }
?>
 
    <table border='$info'>
        <thead>
            <tr>
                <th>key</th>
                <th>value</th>
            </tr>
            </thead>
            <tbody>
            
                <?php
                $info = array('voornaam'=>'Nicolas', 'achternaam'=>'Gonsalves', 'leeftijd'=>'18', 'woonplaats'=>'Amstelveen');
 
                   foreach ($info as $key => $value) {
                      MaakRij($key, $value);
                   }
 
                ?>
            </tbody>
    </table>
</body>
</html>