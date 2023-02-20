<?php
$ename="";
if ($_SERVER["REQUEST_METHOD"] == "GET")
{
    if(empty($_GET['name']))
    {
        $ename="";
        echo "Empty";
    }
    else
        $ename= $_GET['name'];
		echo "Welcome";

}
?>
<!Doctype html>   
<head>
  <title> REGISTRATION</title>
</head>
<body>
  <h3>Registration</h3>
  <form action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"method="get">

    <fieldset>
      <legend>REGISTRATION</legend>
    <label for=name> Name: </label>
    <input type="text" name="name" placeholder=""><hr>

    <label for=email> Email: </label>
    <input type="text" name="email" placeholder=""><hr>
    

    <label for=password> Password: </label>
    <input type="password" name="password" placeholder=""><hr>

    
	<label for=email> Image: </label><hr>
	<!Doctype html>
	<html>
		<body 
		<form action="welcome.php" method="get" enctype= multipart/form-data>
		<input type="file" name="fileToUpload" id "fileupload">
		<input type=submit> 
</form>
</body>
</html>
	<?php 
	$target_dir= "uploads/";
	$target_file = $target_dir . basename($_FILES["fileupload"]["name"]);
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file))
{
echo "The file". basename($_FILES["fileToUpload"]["name"]). "has been uploaded.";}
else {

	echo "Sorry";
}
?><hr>

   <?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open");
$txt ="aaaaa\n";
fwrite($myfile, $txt);
$txt = "Hello";
fwrite($myfile, $txt);
fclose($myfile);
?>


<button type="submit">Submit</button>


</fieldset>

</form>


</body>

</html>