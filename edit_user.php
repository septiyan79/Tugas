<?php
include ("koneksi.php");

$sql="SELECT * FROM `user` where id_user='$_GET[id]'";
$query=mysql_query($sql);


while($data=mysql_fetch_array($query)) {
	$id=$data['id_user'];
	$uname=$data['username'];
	$pwd=$data['password'];
	
	

echo"<form method='post' action='proc_edit_user.php'>
	<caption> <h1> <strong><i>Form Edit User</i></strong></h1></caption>
	<fieldset class='form-group'>
		<label for='formGroupExampleInput'> User Name </label>
		<input type='text' class='form-control' id='formGroupExampleInput' value='$uname' name='username'>
	</fieldset>

	<fieldset class='form-group'>
		<label for='formGroupExampleInput2'> Password </label>
		<input type='password' class='form-control' id='formGroupExampleInput2' value='$pwd' name='password'>
	</fieldset>
	
	<fieldset class='form-group'>
		<label for='formGroupExampleInput3'> Level User </label>
		<select class='form-control' id='exampleSelect'  name='lvl'>
			<option> admin </option>
		</select>
	</fieldset>

	<fieldset class='form-group'>
		<label for='formGroupExampleInput4'> ID User </label>
		<input type='text' class='form-control' id='formGroupExampleInput4' value='$id' name='id' readonly>
	</fieldset>
	
	<br>
	<button type='submit' class='btn btn_prmary'> Update </button>

	</form>";
}
?>