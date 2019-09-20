<?php include("head.php") ?>
<?php
if($id=$_GET["id"]){}
$query = "SELECT * FROM blog WHERE id = $id ";
$result = mysqli_query($connect, $query);
	if($result){}
	else{
		die("failed".mysqli_error($connect));}
?>

<div id="body">
	
	<?php while( $row = mysqli_fetch_array($result) ){ ?>
	<div id="sironam" align="left"> 
		<b><a href="one_blog.php?id=<?php echo $row["id"] ?>" > <?php echo $row["head"]; ?> </a></b>
	</div>
	<p align="center" style="color:#CC3333" id="date">Writter: <?php echo $row["name"] ?> --&&--  Date: <?php echo $row["date"] ?> --&&--Type: <?php echo $row["type"] ?></p> 
	<div id="blog">
		<p id="ar"><?php echo $row["artical"]; ?><p>
	</div>
	<?php } ?>
</div>

<?php include("footer.php") ?>
