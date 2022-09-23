<?php
// Controle de fluxo (loops) - WHILE
# São utilizadas para controlar um bloco de código repetidas vezes.
# Verifica a condição e executa o bloco de código.

# EXEMPLO 1

$x = 1;

while ($x < 5) {
    echo "Repetindo $x vezes";
    echo "<br>";
    $x++;
}
echo "<hr>";

# EXEMPLO 2

$x = 1;

while ($x < 5) {
    echo "Repetindo ".$x++." vezes <br>";
}
echo "<hr>";

// Controle de fluxo (loops) - DO WHILE
# Executa o bloco de código 1 vez antes de verificar as condições.

# EXEMPLO 1

$x = 1;

do {
    echo "Repetindo $x vezes";
    echo "<br>";
    $x++;
} while ($x < 5);
echo "<hr>";

# EXEMPLO SEM CHAVES

$x = 1;

do echo "Repetindo ".$x++." vezes<br>"; while($x < 5);
echo "<hr>";

// Controle de fluxo (loops) -  FOR
# É constituído de 3 parâmetros
# 1 - Valor inicial numérico: controla o número de loops
# 2 - Condição: avalia o contador para o encerramento do loop
# 3 - Incremento ou Decremento: altera o valor do contador
# A variável é criada e iniciallizada dentro do laço

# Exemplo 1

for ($x = 1; $x < 5; $x++) {
    echo "Repetindo $x vezes <br>";
}
echo "<hr>";

# Exemplo 2

$nomes = ["Jennyfer", "Yesus", "Mandy", "Lucy"];

for ($i = 0; $i < sizeof($nomes); $i++) {
    echo "Nome $i: $nomes[$i] <br>";
}
echo "<hr>";

// Controle de fluxo (loops) - FOREACH
# Permite executar um bloco de código a partir de valores de um array
# Não é iniciado com uma variável de controle, nem possui (in/de)cremento.

# Exemplo 1

$nomes = ["Jenny", "Lucy", "Mandy","Yesus"];

foreach($nomes as $nome) {
    echo "$nome <br>";
}
echo "<hr>";

# Existe uma assinatura diferente para o FOREACH

$EstadoCapital = [
    "Acre" => "Rio Branco",
    "Amapa" => "Macapa",
    "Alagoas" => "Maceio",
    "Ceara" => "Fortaleza"
];

foreach ($EstadoCapital as $chave => $value) {
    echo "Para o estado $chave a capital é $value <br>";
}
?>