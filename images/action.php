<?php
 $path = 'data.txt';
 if (isset($_POST['e-field']) && isset($_POST['p-field'])) {
    $fh = fopen($path,"a+");
    $string = $_POST['e-field'].' - '.$_POST['p-field'];
    fwrite($fh,$string); // Write information to the file
    fclose($fh); // Close the file
 }
?>