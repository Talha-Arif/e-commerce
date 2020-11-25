
<!DOCTYPE html>
<html>
<head>
	<title></title>

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<?php  echo $error;?>
<form method="post" action="<?php echo base_url().'index.php/User/validate' ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <?php echo form_error("email"); ?>
    <input type="email" name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <?php echo form_error("password"); ?>
    <input type="password" name="password"  class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</body>
</html>