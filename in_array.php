<?php
$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
	echo "Got Irix";
}
if (in_array("mac", $os)) {
	echo "Got mac";
}
?>
<?php
$a = array('1.10', 12.4, 1.13);
 
if (in_array('12.4', $a, true)) {
	echo "'12.4' est trouvé avec le mode strict\n";
}
 
if (in_array(1.13, $a, true)) {
	echo "1.13 est trouvé avec le mode strict\n";
}
?>
<?php
$a = array(array('p', 'h'), array('p', 'r'), 'o');
 
if (in_array(array('p', 'h'), $a)) {
	echo "'ph' a été trouvé\n";
}
 
if (in_array(array('f', 'i'), $a)) {
	echo "'fi' was found\n";
}
 
if (in_array('o', $a)) {
	echo "'o' a été trouvé\n";
}
?>