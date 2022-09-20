
<?php

$nota = 10;
echo "<h1> Aula 05 - 09/09 </h1>";

//Podemos deixar de usar as chaves no if else caso só exista
//uma instrução no bloco de código. Ex:

if ($nota <= 3)
echo "<p>Lamento... Exame!</p>";
else
echo "<p>Parabéns, aprovado!</p>";

//OPERADOR DE MAIOR E MENOR ---------------------------------------------------

//Ex:
$a = (2 > 3); //False
$a = (2 < 3); //True
$a = (2 >= 2); //True
$a = (2 >= 2); //True
$a = (2 < 2); //False

//COMPARAÇÃO ------------------------------------------------------------------

$x = 1 <=> 1; //Retorna 0: Valores iguais (1 == 1)
$x = 3 <=> 2; //Retorna 1: Valor da esquerda maior que a direita (3 > 2)
$x = 2 <=> 3; //Retorna -1: Valor da esquerda menor que a direita (2 > 3)

//OPERADOR LÓGICO DE INVERSÃO DE VALOR ---------------------------------------

$a = false;
!$a; //O NOT inverte o valor booleano;

//STRINGS --------------------------------------------------------------------

$texto = "Ola";
$textomin = "ola";
$textomax = "OLA";

//Alterar pra min ou max
$maisculo = strtoupper($textomin); //Retorna como "OLA"
$maisculo = strtolower($textomax); //Retorna como "ola"

//Substituir letra
$textosub = str_replace('a', 'x', $texto); //Retorna "Ola"

//Pega a quantidade de caracteres
$textocar = strlen ($texto); //Retorna 3

//Mostra até que caractere
$textoprocura = substr($texto, 0, 1); //Retorna "Ol" 

//Mostra a posição do caractere digitado
$textopos = strpos('a', $texto); //Retorna 2
?>