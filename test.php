<?php
 $url ='https://api.coindesk.com/v1/bpi/currentprice.json';
 $response = file_get_contents($url); //datanya sederhana
 if ($response == FALSE){
    die ('Error Bro');

 }
 $data = json_decode($response, true);
//  print_r($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitcoin Price</title>
</head>
<body>
    <h1> BITCOIN PRICE </h1>
    <P>USD : <?php echo $data ['bpi'] ['USD'] ['rate']; ?> </p>
    <P>GBP : <?php echo $data ['bpi'] ['GBP'] ['rate']; ?> </p>
    <P>EUR : <?php echo $data ['bpi'] ['EUR'] ['rate']; ?> </p>
    

</body>
</html>