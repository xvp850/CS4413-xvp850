<?php 
echo "<table width="200" border="1">";
echo "<tr>";
echo "<td width="85">First Name</td>";
echo "<td width="99">Last Name</td>";
echo "</tr>";

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
echo "<a href="Lab10index.html">Index Page</a>";
?>

