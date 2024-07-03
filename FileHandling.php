<?php

echo '<h1>PHP File Handling</h1>';
echo "<br>";


echo '<h3>readfile() Function</h3>';
echo "<br>";
echo readfile("file.txt");

echo "<br>";
echo '<h3>PHP File Open/Read/Close</h3>';
echo "<br>";

$myfile = fopen("file.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("file.txt"));
fclose($myfile);

echo "<br>";
echo '<h4>r	Open a file for read only. File pointer starts at the beginning of the file</h4>';
echo '<h4>w	Open a file for write only. Erases the contents of the file or creates a new file if it doesnot exist. File pointer starts at the beginning of the file</h4>';
echo '<h4>a	Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesnot exist</h4>';
echo '<h4>x	Creates a new file for write only. Returns FALSE and an error if file already exists</h4>';
echo '<h4>r+	Open a file for read/write. File pointer starts at the beginning of the file</h4>';
echo '<h4>w+	Open a file for read/write. Erases the contents of the file or creates a new file if it doesnt exist. File pointer starts at the beginning of the file</h4>';
echo '<h4>a+	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesnt exist</h4>';
echo '<h4>x+	Creates a new file for read/write. Returns FALSE and an error if file already exists</h4>';


echo "<br>";
echo '<h3>PHP Close File - fclose()</h3>';
$myfile = fopen("file.txt", "r");
fclose($myfile);

echo "<br>";
echo '<h3>PHP Read Single Line - fgets()</h3>';
$myfile = fopen("file.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);

echo "<br>";
echo '<h3>PHP Check End-Of-File - feof()</h3>';
$myfile = fopen("file.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);

echo "<br>";
echo '<h3>PHP Read Single Character - fgetc()</h3>';
$myfile = fopen("file.txt", "r") or die("Unable to open file!");

while(!feof($myfile)) {
  echo fgetc($myfile);
}
fclose($myfile);


echo "<br>";
echo '<h3>PHP File Create/Write</h3>';

$myfile = fopen("file2.txt", "w") or die("Unable to open file!");
$txt = "My Name Is Jitendra Prajapati From Ahmadabad";
fwrite($myfile, $txt);
$txt = "I Study In Master Computer Application\n";
fwrite($myfile, $txt);
fclose($myfile);



echo "<br>";
echo '<h3>PHP Overwriting</h3>';
$myfile = fopen("file3.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);
fclose($myfile);

echo "<br>";
echo '<h3>PHP Append Text</h3>';
$myfile = fopen("file4.txt", "a") or die("Unable to open file!");
$txt = "Donald Duck\n";
fwrite($myfile, $txt);
$txt = "Goofy Goof\n";
fwrite($myfile, $txt);
fclose($myfile);


echo "<br>";
echo '<h3>PHP File Upload</h3>';


?>
<!DOCTYPE html>
<html>
<body>

<form action="fileupload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>