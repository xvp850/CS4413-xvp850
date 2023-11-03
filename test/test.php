<?php
$myfile = fopen("../newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
<table width="200" border-width="1">
    <tr>
        <td width="85">First Name</td>
        <td width="99">Last Name</td>
    </tr>
<?php 
$fileHandle = fopen("../newfile.txt", "rb");

while (!feof($fileHandle) ) {
    $line = fgets($fileHandle);
    $nameParts = explode(' ', $line);
    echo "<tr><td height='60'>$nameParts[0]</td><td>$nameParts[1]</td></tr>";
}
fclose($fileHandle);

echo <a href="Lab10index.html">Index Page</a>;

?>
</table>
