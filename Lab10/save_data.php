<?php
echo '<head>';
echo '<title>Lab 10 - readFile.php</title>';
echo '<h1>Lab 10 - readFile.php</h1>';
echo '<p>Name: John H. McCann IV (xvp850)</p><br/>';
echo '</head>';

$myfile = 'Lab10Data.txt';

if(($_SERVER['REQUEST_METHOD'] === 'POST') && (file_exists($file))) {
    $fullName = $_POST['fname'] ?? ''.' '.$_POST['lname'] ?? ''.'\n';
    //fwrite($myfile, $fullName);
    //Append
    file_put_contents($myfile, $fullName, FILE_APPEND);
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
