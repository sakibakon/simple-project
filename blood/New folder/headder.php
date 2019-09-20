<?php 
$connect = mysqli_connect( "localhost", "sakib", "sakib", "blood" );
if(mysqli_connect_errno()){
	die("Database connection failed");
	}
?>
<html>
<head>
<link rel="stylesheet" href="css2.css" type="text/css" />
<link rel="stylesheet" href="mobile.css" type="text/css" media="screen and (max-width: 800px)" />
</head>
<body>
<table id="t">
  <tr>
	  <td id="im"><img src="sakib.jpg"/></td>
	  <td>
		 <table>
			 <tr >
			   <td id="t3"> NSTU Blood Donator Socity</td>
			 </tr>
			 <tr>
			   <td>
				  <table width="100%"  bordercolor="#CC9900">
					  <tr>
						<td width="26%"><a href="home.php">Home</a></td>
						<td width="23%"><a href="form.php">Form</a></td>
						<td width="24%" id="ri"><a href="##">Help</a></td>
						<td width="27%" id="ri"><a href="##" >Admin</a></td>
					  </tr>
				  </table>
				</td>
			  </tr>
		  </table>
	   </td>
 </tr>
 <!-- <tr>
    <td height="27">
	<table width="100%" border="0">
	  <tr>
		<td width="200">Which group do you need:</td>
		<td id="tabl"><a href="group.php?gr=A+">A+</a></td>
		<td><a href="group.php?gr=B++">B+</a></td>
		<td><a href="group.php?gr=AB+">AB+</a></td>
		<td><a href="group.php?gr=A-">A-</a></td>
		<td><a href="group.php?gr=B-">B-</a></td>
		<td><a href="group.php?gr=AB-">AB-</a></td>
		<td><a href="group.php?gr=O+">O+</a></td>
		<td><a href="group.php?gr=O-">O-</a></td>
		<td><a href="group.php?gr=ALL">ALL</a></td>
		<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
		<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
		<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
		<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
		<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
		<form action="group1.php" method="post">
		
		<td>    
		</td>
			<td>
				<select name="dept" id="form_c">
				<option value="all">All_Dept</option>
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
				</select>
			</td>
			<td>
				<select name="batch" id="form_c">
				<option value="all">All_batch</option>
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
			</td>
			<td>
				<input type="submit" value="submit">
			</td>
		
		</form>
	  </tr>
	</table>

	</td>
  </tr>
</table>
  
 -->