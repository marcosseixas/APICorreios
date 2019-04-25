<?php

class Correios {


 public function geraEtiqueta($tipoDestinatario, $identificador, $idServico, $qtdEtiquetas, $usuario, $senha) {
   try {

       $config = array(
       "trace" => 1, 
       "exception" => 0, 
       "cache_wsdl" => WSDL_CACHE_MEMORY
       );
  
       $address = "https://apphom.correios.com.br/SigepMasterJPA/AtendeClienteService/AtendeCliente?wsdl";
       
       $client = new SoapClient($address, $config);    

       $dados = array(
 
        'tipoDestinatario' => $tipoDestinatario,
        'identificador' => $identificador,
        'idServico' => $idServico,
        'qtdEtiquetas' => $qtdEtiquetas,
        'usuario' => $usuario,
        'senha' => $senha
     
       );
     
       $sigep = $client->solicitaEtiquetas($dados);


       return '<pre>' . print_r($sigep, true) . '</pre>';

   }catch(SoapFault $fault) {

     return $fault->faultstring;

   }
 }




 public function validaEtiqueta($etiquetas, $usuario, $senha) {
   try {

       $config = array(
       "trace" => 1, 
       "exception" => 0, 
       "cache_wsdl" => WSDL_CACHE_MEMORY
       );
  
       $address = "https://apphom.correios.com.br/SigepMasterJPA/AtendeClienteService/AtendeCliente?wsdl";
       
       $client = new SoapClient($address, $config);    

       $dados = array(
 
        'etiquetas' => $etiquetas,
        'usuario' => $usuario,
        'senha' => $senha
     
       );
     
       $sigep = $client->geraDigitoVerificadorEtiquetas($dados);


       return '<pre>' . print_r($sigep, true) . '</pre>';

   }catch(SoapFault $fault) {

     return $fault->faultstring;

   }
 }


 public function verificaServico($codAdministrativo, $numeroServico, $cepOrigem, $cepDestino, $usuario, $senha) {
   try {

       $config = array(
       "trace" => 1, 
       "exception" => 0, 
       "cache_wsdl" => WSDL_CACHE_MEMORY
       );
  
       $address = "https://apphom.correios.com.br/SigepMasterJPA/AtendeClienteService/AtendeCliente?wsdl";
       
       $client = new SoapClient($address, $config);    

       $dados = array(
 
        'codAdministrativo' => $codAdministrativo,
        'numeroServico' => $numeroServico,
        'cepOrigem' => $cepOrigem,
        'cepDestino' => $cepDestino,
        'usuario' => $usuario,
        'senha' => $senha
     
       );
     
       $sigep = $client->verificaDisponibilidadeServico($dados);


       return '<pre>' . print_r($sigep, true) . '</pre>';

   }catch(SoapFault $fault) {

     return $fault->faultstring;

   }
 }



 public function buscaCep($cep) {
   try {

       $config = array(
       "trace" => 1, 
       "exception" => 0, 
       "cache_wsdl" => WSDL_CACHE_MEMORY
       );
  
       $address = "https://apphom.correios.com.br/SigepMasterJPA/AtendeClienteService/AtendeCliente?wsdl";
       
       $client = new SoapClient($address, $config);    

       $dados = array(
 
        'cep' => $cep
     
       );
     
       $sigep = $client->consultaCEP($dados);

       return '<pre>' . print_r($sigep, true) . '</pre>';

   }catch(SoapFault $fault) {

     return $fault->faultstring;

   }
 }

}

