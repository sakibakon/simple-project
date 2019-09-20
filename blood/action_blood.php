<?php 
$connect = mysqli_connect( "localhost", "sakib", "sakib", "blood" );
if(mysqli_connect_errno()){
	die("Database connection failed");
	}
?>
<?php
$group = $_POST['group'];
if($_POST['name']){$name = $_POST['name']; $name = mysqli_real_escape_string($connect, $name); }else{ header("Location: form.php?p=f"); exit; }
if($_POST['phone']){$phone = $_POST['phone']; $phone = mysqli_real_escape_string($connect, $phone);} else{ header("Location: form.php?p=f"); exit; }
if($_POST['roll']){
	$roll = $_POST['roll'];
	$s="$roll[3]$roll[4]";
	$batch= $s-5;
	$s="$roll[5]$roll[6]";
	if($s==01){$dept = "CSTE";}
	else if($s==02){$dept = "FIMS";}
	else if($s==03){$dept = "Pharmacy";}
	else if($s==04){$dept = "ACCE";}
	else if($s==05){$dept = "MBG";}
	else if($s==06){$dept = "MASTH";}
	else if($s==07){$dept = "English";}
	else if($s==08){$dept = "FTNS";}
	else if($s==09){$dept = "ESDM";}
	else if($s==10){$dept = "BA";}
	else if($s==11){$dept = "ICE";}
	else if($s==12){$dept = "BGE";}
	else if($s==13){$dept = "Economics";}
	else if($s==14){$dept = "AG";}
	else if($s==15){$dept = "Statistics";}
	else if($s==16){$dept = "EEE";}
	else if($s==17){$dept = "BLWS";}
	else if($s==18){$dept = "Bangla";}
	
	 }else{ header("Location: form.php?p=f"); exit; }

//if($_POST['dept']){$dept = $_POST['dept']; } else{ header("Location: form.php?p=f"); exit; }
//if($_POST['batch']){$batch = $_POST['batch'];} else{ header("Location: form.php?p=f"); exit; }
if($group=="none"){ header("Location: form.php?p=f"); exit; }

?>
<?php
$query = "SELECT * FROM blood_table ORDER BY batch DESC ";
$result = mysqli_query($connect, $query);
while( $row = mysqli_fetch_array($result) ){
	if($row["roll"] == $roll){
		mysqli_free_result($result); 
		mysqli_close($connect);
		header("Location: form.php?p=alr"); exit;
		}
	}
?>

<?php
$query = "INSERT INTO blood_table(name, phone, grou, dept, batch, roll) VALUES ('$name','$phone', '$group', '$dept', $batch, '$roll' )";
$result = mysqli_query($connect, $query);
	if($result){ echo ('success');}
	else{
		die("failed".mysqli_error($connect));}
?>
<?php 
mysqli_free_result($result); 
mysqli_close($connect);
header("Location: form.php?p=s");

?>
?>