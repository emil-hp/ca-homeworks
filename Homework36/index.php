<?php

include 'Emil/Select/Aselect.php';
include 'Emil/Select/BootstrapSelect.php';
include 'Emil/Select/HtmlSelect.php';

use Emil\Select\HtmlSelect;
use Emil\Select\BootstrapSelect;

$browsers = [
    "Firefox",
    "Chrome",
    "Internet Explorer",
    "Safari",
    "Opera",
];

$htmlSelect = new htmlSelect();
$htmlSelect -> setName('browserWork');
$htmlSelect -> setValue($browsers);
$htmlSelect -> makeSelect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class select - $browsers</title>
</head>
<body>
<?php

$browsers = [
    "Firefox",
    "Chrome",
    "Internet Explorer",
    "Safari",
    "Opera",
];

$bootstrapSelect = new BootstrapSelect();
$bootstrapSelect -> setName('browserWork');
$bootstrapSelect -> setValue($browsers);
$bootstrapSelect -> makeSelect();

?>





