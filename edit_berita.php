<script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		skin : "o2k7",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example word content CSS (should be your site CSS) this one removes paragraph margins
		content_css : "css/word.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
<!-- /TinyMCE -->

<?php
include("koneksi.php");

$sql="SELECT * FROM `posting` where id_posting='$_GET[id]'";
$query=mysql_query($sql);


while($data=mysql_fetch_array($query)) {
	$id=$data['id_posting'];
	$tanggal=$data['tanggal'];
	$penulis=$data['penulis'];
	$judul=$data['judul'];
	$isi=$data['isi'];
	

echo"<form method='post' action='procupdate.php'>
	<caption> <h1> <strong><i>Form Edit</i></strong></h1></caption>
	<fieldset class='form-group'>
		<label for='formGroupExampleInput'> ID </label>
		<input type='text' class='form-control' id='disabledInput' value='$id' name='id' readonly>
	</fieldset>
	<fieldset class='form-group'>
		<label for='formGroupExampleInput1'> Judul </label>
		<input type='text' class='form-control' id='formGroupExampleInput1' value='$judul' name='judul'>
	</fieldset>
	<fieldset class='form-group'>
		<label for='formGroupExampleInput2'> Penulis </label>
		<input type='text' class='form-control' id='formGroupExampleInput2' value='$penulis' name='penulis'>
	</fieldset>
	<fieldset class='form-group'>
		<label for='formGroupExampleInput'> Isi Berita </label>
		<textarea class='form-control' id='exampleTextarea' rows='5' name='isi' id='elm1'>$isi</textarea>
	</fieldset>
	<fieldset class='form-group'>
		<label for='formGroupExampleInput3'> Kategori </label>
		<select class='form-control' id='exampleSelect'  name='ktgr'>
			<option> kriminal </option>
			<option> olahraga </option>
			<option> teknologi </option>
		</select>
	</fieldset>
	<br>
	<button type='submit' class='btn btn_prmary'> Update </button>

	</form>";

}

?>