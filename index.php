<?php 
include 'inc/header.php';
include "config.php";
include "Database.php";

?>

<?php
$db = new Database();
$query = "SELECT * FROM tbl_user";
$read = $db->select($query);

?>

<table class="tbleone">
	<tr>
		<th width="35%">Name</th>
		<th width="15%">Email</th>
		<th width="15%">Skill</th>
		<th width="15%">Action</th>
	</tr>
	<?php if($read){?>
	<?php while($row = $read->fetch_assoc()){?>
	<tr>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['skill']; ?></td>
		<td><a href="update.php?id=<?php echo $row['id']; ?>">Edit</a></td>
	</tr>
<?php }?>
<?php } else { ?>
	<p>Data is Not Available!!</p>
<?php } ?>

</table>
<a href="create.php">Create</a>





<?php include 'inc/footer.php';?>