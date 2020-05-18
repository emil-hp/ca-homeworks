<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function createConditionOptions () {
    $conditions = array('Sunshine', 'Clouds', 'Hail', 'Sleet', 'Snow', 'Wind');
    for($i=0; count($conditions) > $i; $i++) {
        echo '<input type="checkbox" name="weather[]" value=" '.$conditions[$i].' ">';
        echo '<label for=" '.$conditions[$i].' ">' .$conditions[$i]. '</label><br>';
    }
}
createConditionOptions();
?>
</body>
</html>