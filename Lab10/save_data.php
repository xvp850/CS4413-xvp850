<?php
echo '<head><title>Lab 10 - save_data.php</title>';
echo '<h1>Lab 10 - save_data.php</h1>';
echo '<p>Name: John H. McCann IV (xvp850)</p><br/></head>';

$myfile = 'Lab10Data.txt';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['fname'] ?? '';
    $lastName = $_POST['lname'] ?? '';
    $fullName = $firstName.' '.$lastName.'\n';
    //fwrite($myfile, $fullName);
    file_put_contents($myfile, $fullName, FILE_APPEND);
    echo 'Data saved successfully.';
} else {
    echo 'Invalid method. Data did not save successfully.';
}

fclose($myfile);
echo '<form action="Lab10index.html">';
echo '<input type="submit" value="Go Back to Index"/></form>';
echo '<form action="readFile.php">';
echo '<input type="submit" value="Read File"/></form>';
//echo '<a href="Lab10index.html">Index Page</a>';
//echo '<a href="readFile.php">Display file</a>';
?> 
