<?php
// Assuming you have the necessary logic to process the payment
// ...

// Notify the server about the successful payment
$studID = $_POST['studID'];

// Assuming you have cURL installed and enabled
$url = 'http://yourdomain.com/updateStatus.php'; // Update this with your actual domain
$data = array('studID' => $studID);
$options = array(
    'http' => array(
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($data),
    ),
);
$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);

// Output the result (success or failure) to the client-side
echo $result ? 'success' : 'failure';
?>
