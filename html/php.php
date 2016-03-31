<!DOCTYPE html>
<html>
<body>

<?php
echo "my first php";
?> 


<?php
$file = "dictionnaire.txt";
// Open the file to get existing content
?>


<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
   echo "$value <br>";
}
?>



<?php
for ($x = 0; $x <= 10; $x++) {
   echo "The number is: $x <br>";
}
?>  

<?php
echo str_word_count("dictionnaire.txt");
?> 
   



</body>
</html>
