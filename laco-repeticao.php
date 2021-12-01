<?php

/*

while - enquato algo for verdadeiro
while - (condição verdadeira)

for - para uma condição até um resultado faça

*/

$j = 1;

while($j <= 3){
    echo "{$j} - vou arrenbentar no php <br>";
    $j = $j +1;

}

echo "<hr>";
echo "<h2>minha tabuada</h2>";

$i = 1;
$num = 5;
while($i <= 10){

    echo "{$i} x {$num} = ". $i * $num;
    echo "<br>";

    $i++; // $i = $i +1
}