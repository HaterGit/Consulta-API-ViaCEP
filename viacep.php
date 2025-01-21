<?php


//ESSA FUNCAO PEGA O CEP DO POST. O CEP QUE O USUARIO ESCREVEU E FAZ UMA VALIDAÇÃO PARA VER SE ESTÁ CORRETO. SE NÃO É UM CEP INVALIDO
function getendereco (){


if(isset ($_POST['cep']) && !empty(($_POST['cep']))){ // VERIFICA SE FOI criado a variavel e se não está vazia
    
   $cep = $_POST['cep']; 

$endereco = getenderecoviacep($cep); // ESSA VARIAVEL RECEBE OJSON DO VIACEP. 

// ESSE IF VERIFICA SE O CEP NAO VOLTOU COMO ERRO
if (property_exists($endereco,'erro')){
    $endereco = enderecolimpa();
    $endereco->cep = "CEP INVALIDO";
}
      
} else {
 $endereco = enderecolimpa();   
 $endereco->cep = "Digite um CEP";
}
return $endereco;

}

// ESSA FUNCAO PEGA O RETORNO DO JSON DO VIA CEP E RETORNA 
function getenderecoviacep(String $cep){
    $url = "https://viacep.com.br/ws/{$cep}/json/";

    return json_decode(file_get_contents($url));
}

//ESSA FUNCAO LIMPA OS CAMPOS
function enderecolimpa(){
    return (object) [
    'cep' => '',
    'logradouro' => '',
    'complemento' => '',
    'unidade' => '',
    'bairro' => '',
    'localidade' => '',
    'uf' => '',
    'estado' => '',
    'regiao' => '',
    'ibge' => '',
    'gia' => '',
    'ddd' => '',
    'siafi' => ''
    ];
}