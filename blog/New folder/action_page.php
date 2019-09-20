<?php 
$connect = mysqli_connect( "localhost", "sakib", "sakib", "blog" );
if(mysqli_connect_errno()){
	die("Database connection failed");
	}
else{ echo("success");}
?>
<?php
if($_POST['type']){ $type = $_POST['type']; $type = mysqli_real_escape_string($connect, $type); }
if($_POST['head']){$head = $_POST['head']; $head = mysqli_real_escape_string($connect, $head);} 
	else{ header("Location: blog.php?p=head"); exit; }
if($_POST['blog']){$blog = $_POST['blog']; $blog = mysqli_real_escape_string($connect, $blog);} 
	else{ header("Location: blog.php?p=artical"); exit; }
if($_POST['name']){$name = $_POST['name']; $name = mysqli_real_escape_string($connect, $name);} else{ $name= "No Name"; } 

echo $date;
?>


<?php
$query = "INSERT INTO blog (type, head, artical, name) VALUES ( '{$type}', '{$head}', '{$blog}', '{$name}')";
$result = mysqli_query($connect, $query);
	if($result){}
	else{
		die("failed".mysqli_error($connect));}
?>
<?php 
mysqli_free_result($result); 
mysqli_close($connect);
header("Location: blog.php?p=success");
?>