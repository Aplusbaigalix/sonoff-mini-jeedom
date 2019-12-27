<?php
$deviceid = "1000b52986";
$deviceip = "192.168.2.181";
$devicestatus = "on";


$data_string='{"deviceid": "' . $deviceid . '", "data": { "switch": "' . $devicestatus . '" }}';
$ch = curl_init('http://' . $deviceip . ':8081/zeroconf/switch');

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);                                                                                                                   
                                                                                                                     
$result = curl_exec($ch);
?>