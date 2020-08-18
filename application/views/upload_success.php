<html>
<head>
	<title>Upload Form</title>

	<!--bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!--font awesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>

	<h3>Your file was successfully uploaded!</h3>

	<img src="<?php echo base_url('uploads/'.$upload_data['file_name']);?>" width="500">
	<br />
	
	<a href="<?php echo base_url('uploads/'.$upload_data['file_name']);?>" download="rahmat.jpeg" class="btn btn-primary"><i class="fas fa-download"></i> Download Image</a>
	<br /><br />

	<table class="table table-striped">
		<?php foreach ($upload_data as $item => $value):?>
		<tr>
			<td><?php echo $item;?></td> 
			<td><?php echo $value;?></td>
		</tr>
		<?php endforeach; ?>
	</table>

</body>
</html>