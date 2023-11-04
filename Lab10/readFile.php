<?php
/*
$file = "Lab10Data.txt";

if(file_exists($file)) {
    $fileHandle = fopen($file, "rb");

    while (!feof($fileHandle) ) {
        $line = fgets($fileHandle);
        $nameParts = explode(' ', $line);
        echo "<tr><td height='60'>$nameParts[0]</td><td>$nameParts[1]</td></tr>";
    }
    fclose($fileHandle);
    echo "</table>";
} else {
    echo "No such file exists."
}
echo "<a href="Lab10index.html">Index Page</a>";*/
echo '<head>';
echo '<title>Lab 10 - readFile.php</title>';
echo '<h1>Lab 10 - readFile.php</h1>';
echo '<p>Name: John H. McCann IV (xvp850)</p><br/>';
echo '</head>';

$file = 'Lab10Data.txt';
if(file_exists($file)) {
    $fileData = file($file);
    echo '<table width="250" border="1">';
    echo '<tr><td width="125">First Name</td>';
    echo '<td width="125">Last Name</td></tr>';
    foreach($fileData as $fileLine) {
        $name = explode(' ', $fileLine);
        echo '<tr><td>'.$name[0].'</td>';
        echo '<td>'.$name[1].'</td></tr>';
    }
    echo '</table>';
} else {
    echo 'File does not exist.';
}
echo '<form action="Lab10index.html">';
echo '<input type="submit" value="Go Back to Index"/></form>'
?>



