<?php
    $cep_o = $_POST["n-cep-o"];
    $cep_d = $_POST["n-cep-d"];
    $serv  = $_POST["n-serv"];
    $peso  = $_POST["n-peso"];
    $comp  = $_POST["n-comp"];
    $larg  = $_POST["n-larg"];
    $alt   = $_POST["n-alt"];
    $val   = $_POST["n-val"];
    
    //tratando os dados
    $cep_o = str_replace(".", "",str_replace("-","", $cep_o));
    $cep_d = str_replace(".", "",str_replace("-","", $cep_d));
    $peso = str_replace(".", ".",str_replace(".","", $peso));
    $comp = str_replace(".", ".",str_replace(".","", $comp));
    $larg = str_replace(".", ".",str_replace(".","", $larg));
    $alt = str_replace(".", ".",str_replace(".","", $alt));
    $val = str_replace(".", ".",str_replace(".",".", $val));
/*
echo $cep_o , "<br>";
echo $cep_d, "<br>";
echo $serv, "<br>";
echo $peso, "<br>";
echo $comp, "<br>";
echo $larg, "<br>";
echo $alt, "<br>";
echo $val, "<br>";
*/
    //função calculaR
    function calcular($cep_o, $cep_d , $serv, $peso, $comp, $larg, $alt, $val){

    };


    //enviando os dados
   $frete = calcular($cep_o, $cep_d , $serv, $peso, $comp, $larg, $alt, $val);
    

   // echo $cep_o,"<br>", $cep_d,"<br>" , $serv,"<br>", $peso,"<br>", $comp,"<br>", $larg,"<br>", $alt,"<br>", $val;

   $api_correios = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?&sCepOrigem="
   .$cep_o."&CepDestino=".$cep_d."&nCdServico=".$serv."&nVlpeso="
   .$peso."&nVlComprimento=".$comp."&nVlLargura=".$larg."&nVlAltura=".$alt."&nVlValorDeclarado="
   .$val."&nCdMaoPropria=n&nVlDiametro=O&nCdEmpresa=&sDSenha=&sCdAvisoRecebimento=n&StrRetorno=xml";
  
 
  /*
   // nova forma de fazer

 $url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?";
    $url .= "nCdEmpresa=";
    $url .= "&sDsSenha=";
    $url .= "&sCepOrigem=" . $cep_o;
    $url .= "&sCepDestino=" . $cep_d;
    $url .= "&nVlPeso=" . $peso;
    $url .= "&nVlLargura=" . $larg;
    $url .= "&nVlAltura=" . $alt;
    $url .= "&nCdFormato=1";
    $url .= "&nVlComprimento=" .  $comp;
    $url .= "&sCdMaoProria=n";
    $url .= "&nVlValorDeclarado=" . $val;
    $url .= "&sCdAvisoRecebimento=n";
    $url .= "&nCdServico=" . $serv;
    $url .= "&nVlDiametro=0";
    $url .= "&StrRetorno=xml";
*/
  $arq_xml = simplexml_load_file($api_correios);
   echo "<pre>";
        print_r($arq_xml);
   echo "</pre>"; 

?>