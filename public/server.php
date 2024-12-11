<?php
$wsdl = "http://localhost:8081/wsdl/service.wsdl";

class SoapService {
    public function add($a, $b) {
        return $a + $b;
    }
}

$options = [
    'uri' => 'http://localhost/soap' // Debe coincidir con el namespace del WSDL
];

// Crear el servidor SOAP
$server = new SoapServer($wsdl, $options);
$server->setClass('SoapService'); // Vincular la clase con las operaciones
$server->handle(); // Procesar las solicitudes
?>
