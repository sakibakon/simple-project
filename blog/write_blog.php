<html>
<head>
<link rel="stylesheet" href="blog2.css" type="text/css" />
<link rel="stylesheet" href="menue.css" type="text/css" />
</head>
<body>
<div id="full" >
	<div id="head">
		<h1 id="h" align="center"> LEARN   ABOUT   ISLAM</h1>
	</div>
	<div id="menue" align="center">
		<ul id="ul">
			<li> <a href="#"> Home </a></li>
			<li> <a href="#"> Blog </a></li>
			<li> <a href="#"> Question </a></li>
			<li> <a href="#"> About </a></li>
			<li id="search">
				<form action="search.php" method="post">
					<input id="src" name="search" type="text" placeholder="search.....">
					<input name="go" type="submit" value="Go">
				</form>
			</li>
		</ul>
	</div>
	<div id="side">
		<ul id="">
			<li> <a href="#"> Namaj</a></li><br>
			<li> <a href="#"> Roja </a></li><br>
			<li> <a href="#"> Jakat </a></li><br>
			<li> <a href="#"> Porda </a></li><br>
			<li> <a href="#"> Masla </a></li><br>
			<li> <a href="#"> Jibon Bebostha </a></li><br>
			<li> <a href="#"> Jakat </a></li><br>
			<li> <a href="#"> Porda </a></li><br>
		</ul>
	
	
	</div>
	<div id="body">
		<div id="form"> 
			<form action="/action_page.php"><br>
			You Name:<br>
			<input name="name" type="text" placeholder="its optional"><br><br>
			Catagory:<br>
			<select name="catagori">
			<option value="Mobile_sim">Mobile/sim</option>
			<option value="Computer">Computer</option>
			<option value="Techonology">Techonology</option>
			<option value="Project">Project</option>
			<option value="Carier">Carier</option>
			<option value="Polatics">Polatics</option>
			<option value="Islamic">Islamic</option>
			<option value="Other">Other</option>
			</select><br><br>
			Headding: <br>
			<input name="headding" type="text" size="80"><br><br>
			write your blog: <br>
			<textarea name="blog" cols="80" rows="13"></textarea><br>
			<input type="submit" value="submit">
			</form>
		</div>
	
	</div>
</div>
<div id="footer">
	e-mail:sakibakon1@gmail.com
</div>
</body>
</html>