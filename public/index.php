<?php
$wsdl = "http://localhost:8081/service.wsdl"; // Ubicación del archivo WSDL

try {
    $client = new SoapClient($wsdl);
    echo "Sum: " . $client->add(10, 5) . "<br>";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
