<?php
session_start();
?>

<?php
require("ClassTemplate.php");
$instanceClass = new ClassTemplate("some text");
echo $instanceClass->main("some more text");
?>
