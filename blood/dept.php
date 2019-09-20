<?php include("new.php") ?>
<?php
if(isset($_GET['de'])){ 
	$i=$_GET['de'];
	echo $i;
	$query = "SELECT * FROM dept WHERE dept ='$i' ";
	$result = mysqli_query($connect, $query);
	if($result){}
	else{
		die("failed".mysqli_error($connect));}
	$c=1;	
		
}
?>
<div id="home_body"><br /><br />
	<table width="80%" border="1" cellpadding="1" id="table">
  <tr style="background:#FF0000">
  <td  width="8%">NO</td>
    <td  width="25%">DEPT.</td>
	<td width="50%">Admn</td>
	<td width="20%">Phone</td>
  </tr>
  <?php while( $row = mysqli_fetch_array($result) ){ ?>
  <tr>
    <td id="tds" width="8%"><?php echo $c; ?> </td>
    <td><?php echo $row["dept"]; ?> </td>
    <td id="tds" width="14%"><?php echo $row["Admin"]; ?> </td>
	<td><?php echo $row["phone"]; ?> </td>
  </tr>
  <?php $c++; if($c==51){break; }  } ?>
</table>


</div>



<?php include("footer.php") ?>
<?php
mysqli_free_result($result); 
mysqli_close($connect);
?>