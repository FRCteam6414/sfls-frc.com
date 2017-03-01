<?php 
    $urls = array(
        'https://www.sfls-frc.com',
        'https://www.sfls-frc.com/blog/index.php',
        'https://www.sfls-frc.com/index.php'
    );
    $api = 'http://data.zz.baidu.com/urls?site=www.sfls-frc.com&token=kfmz4TrLBeiJvGzn';
    $ch = curl_init();
    $options =  array(
        CURLOPT_URL => $api,
        CURLOPT_POST => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POSTFIELDS => implode("\n", $urls),
        CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
    );
    curl_setopt_array($ch, $options);
    $result = curl_exec($ch);
    echo $result; 
?>