<?php include("new.php") ?>
<div id="form" align="left">
<form action="action_blood.php" method="post" style="margin-left:200px"><br>
	<h2 style="color:#FFFF00"><?php  if(isset($_GET['p'])){ 
		$p=$_GET['p'];
		if($p=='s'){ echo('data insert scessfully');}
		if($p=='f'){ echo('you must fill-up all data');}
		if($p=='alr'){ echo('data already insert');}
		} 
		?></h2>
	<h3 style="color:#FF0000">You Name:
	<input id="form_n" name="name" type="text" placeholder="ex: sakib"><br><br />
	Phone:
	<input id="form_n" name="phone" type="text" placeholder="ex: 01763718934"><br><br>
	Roll:
	<input id="form_n" name="roll" type="text" placeholder="ex: ASH1601041M"><br><br>
	<!--Dept. :
		<select name="dept" id="form_c">
				<option value="none">none</option>
				<option value="CSTE">CSTE</option>
				<option value="PHARMACY">PHARMACR</option>
				<option value="FIMS">FIMS</option>
				<option value="ACCE">ACCE</option>
				<option value="MBG">MBG</option>
				<option value="MATH">MATH</option>
				<option value="ENG">ENG</option>
				<option value="FTNS">FTNS</option>
				<option value="ESDM">ESDM</option>
				<option value="AGR">AGR</option>
				<option value="ICE">ICE</option>
				<option value="BGE">BGE</option>
				<option value="ECO">ECO</option>
				<option value="BBA">BBA</option>
				<option value="STATISTICS">STATISTICS</option>
				<option value="EEE">EEE</option>
				<option value="BLWS">BLWS</option>
				</select><br><br>
	Batch:
		<select name="batch" id="form_c">
				<option value="none">none</option>
				<option value="12">12</option>
				<option value="11">11</option>
				<option value="10">10</option>
				<option value="9">9</option>
				<option value="8">8</option>
				<option value="7">7</option>
				<option value="6">6</option>
				<option value="5">5</option>
				<option value="4">4</option>
				<option value="3">3</option>
				<option value="2">2</option>
				<option value="1">1</option>
				</select>
	<br><br> -->
	Blood Group:
		<select name="group" id="form_c">
				<option value="none">none</option>
				<option value="A+">A+</option>
				<option value="B+">B+</option>
				<option value="AB+">AB+</option>
				<option value="O+">O+</option>
				<option value="A-">A-</option>
				<option value="B-">B-</option>
				<option value="AB-">AB-</option>
				<option value="O-">O-</option>
				</select>
	<br><br>
	<input type="submit" value="submit"></h3>
</form>
</div>
<?php include("footer.php") ?>
