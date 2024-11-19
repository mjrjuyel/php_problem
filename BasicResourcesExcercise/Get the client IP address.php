<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get the client IP address</title>
</head>
<body style="text-align:center; height:100vh; background:#384963; color:#eef0ff; ">
    <?php
    // Check if the IP is from shared internet
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip_address = $_SERVER['HTTP_CLIENT_IP']." (Shared Internet) ";
    }
    // Check if the IP is from a proxy
    elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR']." (PROXY Internet) ";
    }else{
        // If not from shared internet or proxy, consider it as the remote address
        $ip_address = $_SERVER['REMOTE_ADDR']." (PROXY Internet) ";
    }
    ?>
    <h3>
        <?php if($ip_address != null){
        echo $ip_address;
        } ?>
    </h3>

    
</body>
</html>