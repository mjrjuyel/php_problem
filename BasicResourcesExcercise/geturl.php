<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Url </title>
</head>
<body style="text-align:center; height:100vh; background:#384963; color:#eef0ff;">
    <?php
    $fileName = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $url = 'https://www.facebook.com/mjr.juyel';
    $url = parse_url($url);

    echo "Host Name :" .$url['host'] ."<br>";
    echo "Path Name :" .$url['path']."<br>";
    echo "SCHEME Name :" .$url['scheme'];
   
    ?>
    <h3>
        <?php if($fileName != null){
        echo $fileName;
        } ?>
    </h3>

    
</body>
</html>