<?php 
<table width="200" border-width="1">
    <tr>
        <td width="85">First Name</td>
        <td width="99">Last Name</td>
    </tr>
//class readWriteModel {
//    $file_handle = fopen("newfile.txt", "r");
//    while (!feof($file_handle)) {
//       $line = fgets($file_handle);
//        echo $line;
//        echo '<br>';
//    }
//    fclose($file_handle); 
//}
//readFile();
$fileHandle = fopen("../Lab10Data.txt", "rb");

while (!feof($fileHandle) ) {
    $line = fgets($fileHandle);
    $nameParts = explode(' ', $line);
    echo "<tr><td height='60'>$nameParts[0]</td><td>$nameParts[1]</td></tr>";
}
fclose($fileHandle);

echo <a href="Lab10index.html">Index Page</a>;
</table>
?>

