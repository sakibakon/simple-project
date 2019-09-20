
<?php 
$connect = mysqli_connect( "localhost", "sakib", "sakib", "blood" );
if(mysqli_connect_errno()){
	die("Database connection failed");
	}
?>
<?php
	$id= $_GET['id'];
	$submit = $_POST["submit"];
	if($submit == "delete"){
		$query = "DELETE FROM blood_table WHERE id = '$id' ";
		$result = mysqli_query($connect, $query);
		header("Location: home.php"); exit;
	}
?>

<?php
$group = $_POST['group'];
$id= $_GET['id'];
if($_POST['name']){$name = $_POST['name']; $name = mysqli_real_escape_string($connect, $name); }else{ header("Location: edit.php?p=f && id=$id"); exit; }
if($_POST['phone']){$phone = $_POST['phone']; $phone = mysqli_real_escape_string($connect, $phone);} else{ header("Location: edit.php?p=f&&id=$id"); exit; }
if(isset($_POST['roll']) ){
	$roll = $_POST['roll'];
	$s="$roll[3]$roll[4]";
	$batch= $s-5;
	$s="$roll[5]$roll[6]";
	if($s==01){$dept = "CSTE";}
	else if($s==02){$dept = "FTNS";}
	else if($s==03){$dept = "PHARMACY";}
	else if($s==04){$dept = "ACCE";}
	else if($s==05){$dept = "MBG";}
	else if($s==06){$dept = "MATH";}
	else if($s==07){$dept = "ENG";}
	else if($s==08){$dept = "FTNS";}
	else if($s==09){$dept = "ESDM";}
	else if($s==10){$dept = "BBA";}
	else if($s==11){$dept = "ICE";}
	else if($s==12){$dept = "BGE";}
	else if($s==13){$dept = "ECO";}
	else if($s==14){$dept = "AGR";}
	else if($s==15){$dept = "STATISTIC";}
	else if($s==16){$dept = "EEE";}
	else if($s==17){$dept = "BLWS";}
	
	 }else{ header("Location: edit.php?p=f && id=echo $id"); exit; }

//if($_POST['dept']){$dept = $_POST['dept']; } else{ header("Location: form.php?p=f"); exit; }
//if($_POST['batch']){$batch = $_POST['batch'];} else{ header("Location: form.php?p=f"); exit; }
if($group=="none"){ header("Location: edit.php?p=f&&id=$id "); exit; }

?>


<?php
$query = "UPDATE blood_table SET name='$name',phone='$phone',grou='$group',dept='$dept',batch='$batch',roll='$roll' WHERE id = '$id' ";
//$query = "INSERT INTO blood_table(name, phone, grou, dept, batch) VALUES ('$name','$phone', '$group', '$dept', $batch )";
$result = mysqli_query($connect, $query);
	if($result){ echo ('successU');}
	else{
		die("failed".mysqli_error($connect));}
?>
<?php 
mysqli_free_result($result); 
mysqli_close($connect);
header("Location: home.php");
?>