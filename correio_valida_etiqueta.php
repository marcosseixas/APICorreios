<?php 
 
 $config = array(
 "trace" => 1, 
 "exception" => 0, 
 "cache_wsdl" => WSDL_CACHE_MEMORY
 );
  
 $address = "https://apphom.correios.com.br/SigepMasterJPA/AtendeClienteService/AtendeCliente?wsdl";
  
 try {
  $client = new SoapClient($address, $config);    
  
  $dados = array(
 
   'etiquetas' =>'DL61145929 BR',
   'usuario' => 'sigep',
   'senha' => 'n5f9t8'
   
  );

  $sigep = $client->geraDigitoVerificadorEtiquetas($dados);


  echo '<pre>' . print_r($sigep, true) . '</pre>';

  
 } 
  catch(SoapFault $fault) {

     echo $fault->faultstring;

  }