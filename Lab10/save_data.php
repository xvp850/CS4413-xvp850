<?php
$myfile = fopen("../Lab10Data.txt", "w") or die("Unable to open file!");

if(isset($_POST['create'])){
    $fullName = $_POST['fname']." ".$_POST[‘lname’]."\n";
    //echo "Hello ".$_POST[‘fname’]." ".$_POST[‘lname’]."!\n";
    //echo $fullname;
}

//echo "Hello ".$_POST[‘fname’]." ".$_POST[‘lname’]."!";

//$txt = .$_POST[‘fname’]." ".$_POST[‘lname’]."\n";
fwrite($myfile, $fullName);
fclose($myfile);

echo <a href="Lab10index.html">Index Page</a>;
echo <a href="readFile.php">Display file</a>;
?> 
