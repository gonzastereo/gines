<?php 
$doc = new DomDocument;

// We need to validate our document before refering to the id
$doc->validateOnParse = true;
$doc->Load('clientes.php');
$doc->getElementById('id_cliente_tabla');
echo $doc;
 ?>