<?php

// Declarações / Instruções Condicionais
# Operadores Lógicos

# Exemplo 1

$valor = 20;

if ($valor > 10 && $valor != 30) {
    // executa um código
    echo "o valor é $valor";
    echo "<br>";
} else {
    // executa código SENÃO
}

// Array (Vetor) - O que é?

# É uma matriz (unidimensional) que corresponde a uma coleção de valores.
# Funciona como uma variável que contém muitos valores.
# A localização de um desses valores é designada por um índice do "array".

# Exemplo

$valores1 = array(1, 2, 3, 4); //Array Numérico
$nomes = array('Pedro', 'Paulo', 'Ana'); //Array de Texto

# A partir do PHP 5.x passou-se a representar o array de forma mais simples.

# Array de Índice Numérico

$valores2 = [1, 2, 3, 4]; //Array Numérico
$nomes2 = ['Pedro', 'Paulo', 'Ana']; //Array de Texto

# Os 'arrays' possuem como base o índice 0 (zero)

echo "<br>";
echo $valores2[0]; //Exibe o número 1
echo "<br>";
echo $nomes2[1]; //Exibe o nome 'Paulo'
echo "<br>";


# Exemplo nomeado com números, vamos utilizar um Operador de Atribuição (=>).

$dados = [
    10 => 100,
    20 => 200,
    30 => 300
];

echo "<p>sus</p>";
echo $dados[30]; // Exibe o número 300, porque foi o valor atribuído ao número 30.
echo "<br>";

# Para apresentar o conteúdo do 'array'

echo 'O valor do array [1] = '.$valores1[1]. ' e [2] = '.$valores1[2];
echo "<br>";
# ou
echo "O valor do array [1] = $valores1[1] e [2] = $valores1[2]"; 
echo "<br>";

$valores = [
    'nome' => 'Paulo',
    'email' => '@gmail',
    'telefone' => '(13) 99999-9999'
];

echo "<br>";
echo $valores['nome'];
echo "<br>";
echo $valores['email'];
echo "<br>";

//"Array" Misto - Combinação de arrays número e associativo,
//não são utilizadas com fequência, são difíceis de gerenciar.

$dados = [
    0 => 10,
    'nome' => 'Paulo',
    'sobrenome' => 'Santos',
    10 => 1000,
    11 => 'endereço'
];

//"Array" multidimensional (associativo) com índice string nominal.

$dados = [
    'cliente' => ['Nome', 'Endereco', 'Telefone'],
    'estados' => ['Alagoas', 'Para', 'DF-Brasilia'],
    'frutas' => ['Maçã', 'Banana', 'Laranja']
];

echo "<br>";
echo $dados['cliente'][0]; //Exibe "Nome".
echo "<br>";
echo $dados['frutas'][2]; //Exibe "Laranja".

//O conteúdo da array possui uma índice numérica independente do conteúdo armazenado nela.
//Neste caso possuimos uma array que possui outras associadas dentro dela.
?>