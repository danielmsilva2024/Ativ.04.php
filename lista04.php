<?php
$numero=1;
if (is_numeric($numero)) {
           
            if ($numero > 0) {
                echo "O número $numero é positivo.";
            } elseif ($numero < 0) {
                echo "O número $numero é negativo.";
            } else {
                echo "O número digitado é zero.";
            }
        } else {
            echo "Por favor, digite um valor numérico válido.";
        }
    ?>

<?php 
    $genero = "F"; 

    if ($genero == "M" or "m") {
        echo "O gênero é masculino.";
    } elseif ($genero == "F" or "f") {
        echo "O gênero é feminino.";
    } else {
        echo "Por favor, digite um gênero válido.";
    }
?>


<?php
        $num1 = 16;
        $num2 = 16;

        if ($num1 > $num2) {
            echo "O maior número é: $num1";
        } elseif ($num2 > $num1) {
            echo "O maior número é: $num2";
        } else {
            echo "Os números são iguais.";
        }
    
    ?>

    <?php 
    $letra="S";
    IF($letra=="A"."a"."E"."e"."I"."i"."O"."U"."u"){
        echo "A letra é vogal";
    }else{
        echo "A letra é consoante";
    }
    ?>
    
    <?php 
    $nota1=5;
    $nota2=7;

    $media=( ($nota1+$nota2)/2);
    echo "Sua média é: ".$media. PHP_EOL;

    if($media >=7){
        echo "Você foi Aprovado". PHP_EOL;
    }elseif($media>=5){
        echo "Você está na média". PHP_EOL;
    }elseif ($media <=4){
        echo "Você foi reprovado". PHP_EOL;
    }
    ?>

    <?php
    $number1=13;
    $number2=21;
    $number3=15;

    if($number1>$number2 or $number1>$number3){
        echo "O maior número é: $number1";
    }
     elseif($number2>$number1 or $number2>$number3){
        echo "O maior número é: $number2";
        }elseif($number3>$number1 or $number3>$number2){
            echo "O maior número é: $number3";
        }
        ?> 

        <?php
        $numero=43;
        $numero1=24;
        $numero2=19;

        if($numero>$numero1 or $numero>$numero2){
            echo "O maior número é: $numero";
        }elseif($numero1>$numero or $numero1>$numero2){
            echo "O maior número é: $numero1";
        }elseif($numero2>$numero or $numero2>$numero1){
            echo "O maior número é: $numero2";
        }
        ?>

<?php 
$ft=82;
$fp=96;
$ff=87;

if($ft>$fp or $ft>$ff){
    echo "O carro mais caro é o Fiat Toro, que custa R$ $ft";
}elseif ($fp>$ft or $fp>$ff){
    echo "O carro mais caro é o Fiat Pulse, que custa R$ $fp";
}
elseif ($ff>$ft or $ff>$fp){
    echo "O carro mais caro é o Fiat Fastback, que custa R$ $ff";
}
 
?>

<?php

$turno = 'V';
if ($turno == 'M') {
    echo "Bom dia!";
} elseif ($turno == 'V') {
    echo "Boa tarde!";
} elseif ($turno == 'N') {
    echo "Boa noite!";
} else {
    echo "Valor inválido.";
}
?>

<?php
$num1 = 10;
$num2 = 5;
$num3 = 8;

$numeros = array($num1, $num2, $num3);

rsort($numeros);


echo "Números em ordem decrescente: ";
foreach ($numeros as $numero) {
    echo $numero . " ";
}
?>

<?php
$salario = 1200;
if ($salario <= 280) {
    $percentual = 20;
} elseif ($salario > 280 && $salario <= 700) {
    $percentual = 15;
} elseif ($salario > 700 && $salario <= 1500) {
    $percentual = 10;
} else {
    $percentual = 5;
}

$aumento = $salario * ($percentual / 100);
$novo_salario = $salario + $aumento;

echo "Salário antes do reajuste: R$ " . $salario . "<br>";
echo "Percentual de aumento aplicado: " . $percentual . "%<br>";
echo "Valor do aumento: R$ " . $aumento . "<br>";
echo "Novo salário após o aumento: R$ " . $novo_salario;
?>

<?php

$peso = 70;
$altura = 1.75;

$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    $categoria = "abaixo do peso";
} elseif ($imc >= 18.5 && $imc < 25) {
    $categoria = "com peso normal";
} elseif ($imc >= 25 && $imc < 30) {
    $categoria = "com sobrepeso";
} else {
    $categoria = "obeso";
}

echo "Seu IMC é: " . number_format($imc, 2) . "<br>";
echo "Você está " . $categoria . ".";
?>

<?php

$numero = 17;

$primo = true;
if ($numero <= 1) {
    $primo = false;
} else {
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            $primo = false;
            break;
        }
    }
}

if ($primo) {
    echo $numero . " é um número primo.";
} else {
    echo $numero . " não é um número primo.";
}
?>

<?php

$tempCelsius = 25;
$tempFahrenheit = ($tempCelsius * 9/5) + 32;

echo $tempCelsius . "°C equivalem a " . $tempFahrenheit . "°F.";
?>

<?php

$numero = 10;

if ($numero > 0) {
    
    for ($i = $numero; $i >= 0; $i--) {
        echo $i . "<br>";
    }
} else {
    echo "Por favor, insira um número positivo.";
}
?>