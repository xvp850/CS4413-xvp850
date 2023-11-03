<?php
$myfile = fopen("../Lab10Data.txt", "w") or die("Unable to open file!");

if(isset($_POST['create'])){
    $fullName = $_POST['fname']." ".$_POST[‘lname’]."\n";
    echo "Hello ".$_POST[‘fname’]." ".$_POST[‘lname’]."!\n";
    echo $fullname;
    fwrite($myfile, $fullName);
    echo "Data saved successfully.";
} else {
    echo "Data did not save successfully."
}

fclose($myfile);

//echo <a href="Lab10index.html">Index Page</a>;
//echo <a href="readFile.php">Display file</a>;
?> 
