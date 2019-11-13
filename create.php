<?php 
include 'inc/header.php';
include "config.php";
include "Database.php";

?>

<?php
$db = new Database();
?>
<form action="create.php" method="post">
<table class="tbleone">
<tr>
		<td>Name</td>
		<td><input type="text" name="name" placeholder="Please Enter Your Name"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email" placeholder="Please Enter Your Email"></td>
	</tr>
	<tr>
		<td>Skill</td>
		<td><input type="text" name="skill" placeholder="Please Enter Your Skill"></td>
	</tr>
	<tr>
		<td></td>
		<td>
			<input type="submit" name="submit" value="submit">
			<input type="reset"  Value="Cancel">
		</td>
	</tr>
</table>
</form>
<a href="index.php">Go back</a>





<?php include 'inc/footer.php';?>