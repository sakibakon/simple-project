<?php include("head.php") ?>
<?php
if($type=$_GET["type"]){}
$query = "SELECT * FROM blog WHERE type='$type' ORDER BY id DESC ";
$result = mysqli_query($connect, $query);
	if($result){}
	else{
		die("failed".mysqli_error($connect));}
	$count=1;
?>

<div id="body">
	
	<?php while( $row = mysqli_fetch_array($result) ){ ?>
	<div id="sironam" align="left"> 
		<b><a href="one_blog.php?id=<?php echo $row["id"] ?>" > <?php echo $count; echo ("."); echo $row["head"]; ?> </a></b>
	</div>
	<p align="center" style="color:#CC3333" id="date">Writter: <?php echo $row["name"] ?> --&&--  Date: <?php echo $row["date"] ?> --&&--Type: <?php echo $row["type"] ?></p> 
	<div id="blog">
		<!--<p><?php echo $row["artical"]; ?><p> -->
	</div>
	<?php $count++; if($count==11){break; } } ?>
</div>

<?php include("footer.php") ?>