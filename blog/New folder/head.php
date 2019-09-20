<?php 
$connect = mysqli_connect( "localhost", "sakib", "sakib", "blog" );
if(mysqli_connect_errno()){
	die("Database connection failed");
	}
?>
<?php
$query = "SELECT * FROM blog ";
$result = mysqli_query($connect, $query);
	if($result){}
	else{
		die("failed".mysqli_error($connect));}


$Mobile=0; $Computer=0; $Techonology=0; $Project=0; $Carier=0; $Polatics=0; $Islamic=0; $Other=0;
while( $row = mysqli_fetch_array($result) ){
	if($row["type"] == "Mobile_sim"){$Mobile++;};
	if($row["type"] == "Computer"){$Computer++;};
	if($row["type"] == "Techonology"){$Techonology++;};
	if($row["type"] == "Project"){$Project++;};
	if($row["type"] == "Carier"){$Carier++;};
	if($row["type"] == "Polatics"){$Polatics++;};
	if($row["type"] == "Islamic"){$Islamic++;};
	if($row["type"] == "Other"){$Other++;};
	
	}



?>


<html>
<head>
<link rel="stylesheet" href="head.css" type="text/css" />
<link rel="stylesheet" href="mobile.css" type="text/css" media="screen and (max-width: 800px)" />
<link rel="stylesheet" href="home.css" type="text/css" />
<link rel="stylesheet" href="blog.css" type="text/css" />
</head>
<body>
<div id="full">
	<div id="head">
		<h1 id="h" align="center"> LEARN   ABOUT   ISLAM</h1>
	</div>
	<div id="menue" align="center">
		<ul id="ul">
			<li> <a href="home1.php"> Home </a></li>
			<li> <a href="blog.php?p=0"> Blog write</a></li>
			<li> <a href="#"> Question </a></li>
			<li> <a href="about.php"> About </a></li>
			<li id="search">
				<form action="search.php" method="post">
					<input name="search" type="text" placeholder="search.....">
					<input name="go" type="submit" value="Go">
				</form>
			</li>
		</ul>
	</div>
	<div id="body2">
	<div id="side">
		<ul>
			<li> <a href="filter_blog.php?type=Mobile_sim"> Mobile/sim(<?php echo $Mobile; ?>)</a></li><br>
			<li> <a href="filter_blog.php?type=Computer"> Computer(<?php echo $Computer; ?>) </a></li><br>
			<li> <a href="filter_blog.php?type=Techonology"> Techonology(<?php echo $Techonology; ?>) </a></li><br>
			<li> <a href="filter_blog.php?type=Project"> Project(<?php echo $Project; ?>) </a></li><br>
			<li> <a href="filter_blog.php?type=Carier"> Carier(<?php echo $Carier; ?>) </a></li><br>
			<li> <a href="filter_blog.php?type=Polatics"> Polatics(<?php echo $Polatics; ?>) </a></li><br>
			<li> <a href="filter_blog.php?type=Islamic"> Islamic(<?php echo $Islamic; ?>) </a></li><br>
			<li> <a href="filter_blog.php?type=Other"> Other(<?php echo $Other; ?>) </a></li><br>
		</ul>
	</div>
	