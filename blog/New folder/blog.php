<?php include("head.php") ?>
<div id="body">
	
	<div id="form">
		<?php $p = $_GET["p"]; ?>
		<?php if($p=="success"){ echo $p;} ?>
		<form action="action_page.php" method="post" ><br>
		You Name:<br>
		<input id="form_n" name="name" type="text" placeholder="its optional"><br><br>
		Catagory:<br>
		<select name="type" id="form_c">
		<option value="Mobile_sim">Mobile/sim</option>
		<option value="Computer">Computer</option>
		<option value="Techonology">Techonology</option>
		<option value="Project">Project</option>
		<option value="Carier">Carier</option>
		<option value="Polatics">Polatics</option>
		<option value="Islamic">Islamic</option>
		<option value="Other">Other</option>
		</select><br><br>
		Headding:<?php if($p=="head"){ echo ("must fill-up this");} ?><br />
		<input name="head" type="text" id="form_h"><br><br>
		write your blog:<?php if($p=="artical"){ echo ("must fill-up this");} ?><br />
		<textarea name="blog" id="form_a"></textarea><br><br>
		<input type="submit" value="submit">
		</form>
	</div>
</div>
<?php include("footer.php") ?>