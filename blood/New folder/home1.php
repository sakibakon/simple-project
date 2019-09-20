<?php include("new.php") ?>
<?php
$query = "SELECT * FROM blood_table ORDER BY batch DESC ";
$result = mysqli_query($connect, $query);
	if($result){}
	else{
		die("failed".mysqli_error($connect));}
	$c=1;
?>
<div id="home_body"><br /><br />
	<table width="80%" border="1" cellpadding="1" id="table">
  <tr style="background:#FF0000">
    <td  width="8%">NO</td>
    <td>Name</td>
    <td  width="20%">Phone</td>
    <td width="15%">Group</td>
    <td  width="15%">Dept.</td>
    <td width="8%">Batch</td>
	<td width="5%">Edit</td>
  </tr>
  <?php while( $row = mysqli_fetch_array($result) ){ ?>
  <tr>
    <td id="tds" width="8%"><?php echo $c; ?> </td>
    <td><?php echo $row["name"]; ?> </td>
    <td id="tds" width="20%"><?php echo $row["phone"]; ?> </td>
    <td width="15%"><?php echo $row["grou"]; ?> </td>
    <td id="tds" width="15%"><?php echo $row["dept"]; ?></td>
    <td width="8%"><?php echo $row["batch"]; ?></td>
	<td width="5%"><a style="background:#0000FF" href="edit.php?id= <?php echo $row["id"]; ?>">edit</a></td>
  </tr>
  <?php $c++; if($c==51){break; }  } ?>
</table>


</div>



<?php include("footer.php") ?>
<?php
mysqli_free_result($result); 
mysqli_close($connect);
?>