
<?php



?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form method="post" action="<?php echo base_url().'index.php/User/added'; ?>">
        <label>question</label>
        <input type="text" name="question" value="<?php echo $data['question'] ;?>">
        <input type="hidden" name="id" value="<?php echo $data['id'] ; ?>">
        <button> submit </button>

    </form>

</body>
</html>

