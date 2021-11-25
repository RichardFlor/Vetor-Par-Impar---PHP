<?php 
//Criando um array simples 

//Declaração de uma variavel do tipo vetor
$nomes = array("José", "Maria", "João", "André");

//echo($nomes); Não funciona, pois o array é um tipo diferente de variavel (coleção de dados)


//print_r($nomes); //Exibi apenas o conteudo do array

//var_dump($nomes);  //Exibe o conteudo e outras informações, como por exemplo (tipos de dados, quantidade de digitos, etc)

$nomeClientes = array ();

$nomeClientes[0]= "José da Silva";
$nomeClientes[1]= "Maria da Silva";
$nomeClientes[2]= "André da Silva";

//var_dump($nomeClientes);

//Percorrendo um array de 

//echo($nomes[0]);
//echo($nomeClientes[0]);

//echo("----- USANDO O LAÇO WHILE------- <br>");
//
//$cont = 0;
//$quantidadeItens = count($nomes); //Guardando a quantidade de itens do array, atraves da função count()
//while($cont < $quantidadeItens)
//{
//    echo($nomes[$cont]."<br>");
//        $cont +=1;
//}
//
//echo("----- USANDO O LAÇO FOR------- <br>");
//
//for ($cont =0; $cont <$quantidadeItens;$cont++)
//{
//    echo ($nomes[$cont]."<br>");
//}
//
//
//echo("----- USANDO O LAÇO FOREACH------- <br>");
//
//foreach ($nomeClientes as $x )
//{ 
//    echo($x  . "<br>");
//}


//TRABALHANDO COM ARRAY ("CHAVE" - "VALOR")

//Array apenas com um indice e duas chaves com valores 
$clientes = array(
            "nome" => "Maria da Silva",
            "telefone" => "011-4002-8922"
            );

//Exibindo dados de um array ("Chave" - "Valor")
//var_dump($clientes);

//echo($clientes["nome"]."<br>");
//echo($clientes["telefone"]);



//Array com vários indices e várias chaves com valores 
$funcionarios = array(
                    array(  "nome" => "Maria da Silva",
                            "telefone" => "011 99999999",
                          "email" => "maria@teste.com",
                          "salario" => 1350.54,
                          "numeroIdent" => 56897
                         ),
                        array( "nome" => "José da Silva",
                            "telefone" => "011 8888889",
                          "email" => "jose@teste.com",
                          "salario" => 1600.54,
                          "numeroIdent" => 5677
                         ),
                        array( "nome" => "André da Silva",
                            "telefone" => "011 7777889",
                          "email" => "andre@teste.com",
                          "salario" => 1900.54,
                          "numeroIdent" => 56787
                         ),
                        array( "nome" => "tijolinho da Silva",
                            "telefone" => "011 74747889",
                          "email" => "tijolo@teste.com",
                          "salario" => 1999.54,
                          "numeroIdent" => 76787
                         )
    



);
//var_dump($funcionarios);

//for($cont=0;$cont<count($funcionarios);$cont++)
//    {
//echo($funcionarios[$cont]["nome"]."<br>");
//echo($funcionarios[$cont]["telefone"]."<br>");
//echo($funcionarios[$cont]["email"]."<br>");
//    }

//foreach($funcionarios as $array)
//{
//    echo($array["nome"]."<br>");
//    echo($array["telefone"]."<br>");
//    echo($array["email"]."<br>");
//    echo($array["salario"]."<br>"); 
//    
//}


    //MOSTRAR COMO FAZER UMA BUSCA DENTRO DO ARRAY


//$PesquisarNumero = 76787;
//
//foreach($funcionarios as $array)
//{
//    if($PesquisarNumero == $array["numeroIdent"])
//    {
//    echo($array["nome"]."<br>");
//    echo($array["telefone"]."<br>");
//    echo($array["email"]."<br>");
//    echo($array["salario"]."<br>");
//    }
//    
//}

//Permite apagar um elemento (variavel, objeto, array, item de um array)
unset($funcionarios[0]);
unset($funcionarios[2]);

foreach($funcionarios as $array)
{
    echo($array["nome"]."<br>");
    echo($array["telefone"]."<br>");
    echo($array["email"]."<br>");
    echo($array["salario"]."<br>"); 
}

echo("<br> Existem ". count($funcionarios). " itens no array<br>")



?>
