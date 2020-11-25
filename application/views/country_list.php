<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
            
  <table class="table table-striped">
    <a class="btn btn-primary" href="<?php echo base_url() ?> .index.php/User/add_countries">Add</a>
    <thead>
      <tr>
        <th>No.</th>
        <th>Countries</th>
        
      </tr>
    </thead>
    <tbody>
      <?php  $i =1; ?>
        <?php foreach($data as $d) { ?>
      <tr>
      
        <td><?php echo $i++; ?></td>
        <td><?php echo $d->countries ;?></td>
        <td><a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/User/edit_countries?id=<?php echo $d->id ;?>">Edit</a></td>

        
      </tr>
     <?php } ?>
      
    </tbody>
  </table>
</div>

</body>
</html>
