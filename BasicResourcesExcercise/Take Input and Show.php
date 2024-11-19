<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take Input and Show</title>
</head>
<body>
    <?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['name'] )){
        $name = $_POST['name'];
    }

    $fileName = basename($_SERVER['PHP_SELF'])
    ?>
    <form action="" method="post">
        <label >Enter Name</label>
        <input type="text" name="name">
        <input type="submit" value="submit">
    </form>
    <h3><?php if($fileName != null){
        echo $fileName;
    } ?></h3>

    
</body>
</html>