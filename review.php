<?php
if ($_POST){

$name = $_POST['name'];
$content = $_POST['commentContent'];


$handle = fopen($file, "r");
while(!feof($handle)){
    $line = fgets($handle);
    $linecount++;
    $currentData .= $line."\n";
}
fwrite ($handle,"<b>" . $name . "</b></br>" . $content . "</br>");
fclose ($handle);}

?>