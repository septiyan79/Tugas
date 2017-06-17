<?php
include ("koneksi.php");


echo"<form method='post' action='proc_tambah_user.php'>
	<caption> <h1> <strong><i>Form Tambah User</i></strong></h1></caption>
	<fieldset class='form-group'>
		<label for='formGroupExampleInput'> User Name </label>
		<input type='text' class='form-control' id='formGroupExampleInput' placeholder='Username' name='username'>
	</fieldset>

	<fieldset class='form-group'>
		<label for='formGroupExampleInput2'> Password </label>
		<input type='text' class='form-control' id='formGroupExampleInput2' placeholder='Password' name='password'>
	</fieldset>
	
	<fieldset class='form-group'>
		<label for='formGroupExampleInput3'> Level User </label>
		<select class='form-control' id='exampleSelect'  name='lvl'>
			<option> admin </option>
		</select>
	</fieldset>
	
	<br>
	<button type='submit' class='btn btn_prmary'> Submit </button>

	</form>";
?>