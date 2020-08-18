<html>
<head>
	<title>Upload Form</title>
</head>
<body>

<?php echo $error;?>

<form name="upload" action="<?php echo site_url('upload/do_upload');?>"  method="post" enctype="multipart/form-data">

<table class="table table-striped">
	<tr>
		<td><input type="file" name="userfile"/></td>
	</tr>
	<tr>
		<td><input type="submit" value="Insert" /></td>
	</tr>
</table>
</form>

</body>
</html>