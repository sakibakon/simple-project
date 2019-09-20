<?php include("new.php") ?>
<?php  if(isset($_GET['id'])){ 
		$i=$_GET['id'];
		
		$query = "SELECT * FROM blood_table WHERE id = '$i' ";
		$result = mysqli_query($connect, $query);
		if($result){}
		else{
			die("failed".mysqli_error($connect));}
		} 
		$row = mysqli_fetch_array($result);
?>
<div id="form" align="left">
<form action="update.php?id=<?php echo $i; ?>" method="post" style="margin-left:200px"><br>
	<h2 style="color:#FFFF00">
		<?php 
			if(isset($_GET['p'])){
				$p= $_GET['p'];
				if($p=='f'){ echo('you must fill-up all data');}
				if($p=='d'){ echo('delete succesfully');}
			}
		
		?>
	</h2>
	<h3 style="color:#FF0000">You Name:
	<input id="form_n" name="name" type="text" value="<?php echo $row["name"]; ?>"><br><br />
	Phone:
	<input id="form_n" name="phone" type="text" value="<?php echo $row["phone"]; ?>"><br><br>
	Roll:
	<input id="form_n" name="roll" type="text" value="<?php echo $row["roll"]; ?>"><br><br>
	<!--Dept. :
		<select name="dept" id="form_c">
				<option value="<?php// echo $row["dept"]; ?>"><?php// echo $row["dept"]; ?></option>
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
				<option value="<?php// echo $row["batch"]; ?>"><?php// echo $row["batch"]; ?></option>
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
				<option value="<?php echo $row["grou"]; ?>"><?php echo $row["grou"]; ?></option>
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
	<input name="submit" type="submit" value="submit">
	<input name="submit" type="submit" value="delete">
	</h3>
</form>


</div>
<?php include("footer.php") ?>

