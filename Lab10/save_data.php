<?php
$myfile = fopen("Lab10Data.txt", "w") or die("Unable to open file!");

if(isset($_POST['saveName'])){
    $fullName = $_POST['fname']." ".$_POST[‘lname’]."\n";
    fwrite($myfile, $fullName);
    echo 'Data saved successfully.';
} else {
    echo 'Data did not save successfully.'
}

fclose($myfile);
echo '<form action="Lab10index.html">';
echo '<input type="submit" value="Go Back to Index"/></form>'
echo '<form action="readFile.php">';
echo '<input type="submit" value="Read File"/></form>'
//echo '<a href="Lab10index.html">Index Page</a>';
//echo '<a href="readFile.php">Display file</a>';
?> 
