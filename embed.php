<?php
if (isset($_GET['url'])) {
    $url = $_GET['url'];
    $headers = [
        "ngrok-skip-browser-warning: any-value",  // Set and send the ngrok-skip-browser-warning header
        // or
        // "User-Agent: Your-Custom-User-Agent",  // Set and send a custom/non-standard browser User-Agent header
    ];

    // Initialize a cURL session
    $ch = curl_init($url);

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    // Execute cURL session and get the result
    $response = curl_exec($ch);

    // Close cURL session
    curl_close($ch);

    // Output the result
    echo $response;
}
?>
