<!doctype html>
<html>
<title> 1st page </title>

<head>
</head>
 

<body>
    <form name='Form1' action='advanced-2.php' method='post'>
    Background colour: <select name = 'Achtergrondkleur'>
    <?php
    $kleuren = array('red', 'blue', 'green', 'black', 'brown');
    foreach($kleuren as $option){
        echo "<option value=$option>$option</option>";
    }
    ?>
    </select>
        Text colour: <select name = 'Tekstkleur'>
    <?php
    $kleuren = array('red', 'blue', 'green', 'black', 'brown');
    foreach($kleuren as $option){
        echo "<option value=$option>$option</option>";
    }
    ?>
    </select>
        Border: <input type='text' name='Tabel-borderdikte'>
        Padding: <input type='text' name='Padding'>
        <input type='submit' name='Submit'>
    </form>
</body>
</html>