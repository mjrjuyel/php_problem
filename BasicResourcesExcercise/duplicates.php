<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>duplicates</title>
</head>
<body style="text-align:center; height:100vh; background:#384963; color:#eef0ff; ">
    <?php
    function remove_duplicate($array){
        $sortList = array_unique($array);
        print_r($sortList);
    }

    remove_duplicate(array('a','orrange','orrange',5,6,5,6,2,3));
    ?>
    <h3>
    
    </h3>

    
</body>
</html>