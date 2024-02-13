<?php

$url_get = $_GET['url'];

  
error_reporting(E_ERROR | E_PARSE);
  
// Initialize a variable into domain name
$domain1 = $url_get;
  
// Function to get HTTP response code 
function get_http_response_code($domain1) {
    $headers = get_headers($domain1);
    return substr($headers[0], 9, 3);
}
  
// Function call 
$get_http_response_code = get_http_response_code($domain1);
  
// Display the HTTP response code
echo $get_http_response_code;
  
// Check HTTP response code is 200 or not
if ( $get_http_response_code == 200 )
    echo "<br>HTTP request successfully";
else
    echo "<br>HTTP request not successfully!";
      
?>