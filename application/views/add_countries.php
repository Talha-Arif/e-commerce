<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="<?php echo base_url() ;?>index.php/User/save_country">
	<label>Country</label>
	<input type="text" name="countries" value="<?php echo $data['countries'] ;?>">
	<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
	<button>Add</button>
	

</form>
</body>
</html>