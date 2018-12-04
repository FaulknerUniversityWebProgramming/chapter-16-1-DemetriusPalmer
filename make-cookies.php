<?php
$expiryTime= time()+60+60*24;

$name= "Theme";
$name2= "Philosopher";

setcookie($name, $_POST['philosopher'], $expiryTime, null, setcookie(), null, true);
setcookie($name2, $_POST['philosopher'], 0, null, setcookie(), null, true);

header("Location: chapter-project1.php");

?>