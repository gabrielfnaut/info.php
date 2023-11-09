<?php



$dataatual = date ('d/m/Y  H:i:s'); // 22/08/2023  20:06:32

$acrescimos = 5;
$horainicial = '16:00:00';
$horafinal = '17:30:00';


// inicial
$arrhora = explode(":", $horainicial);

$horainicial = $arrhora [0];
$minutosinicial = $arrhora [1];
$segundosinicial = $arrhora [2];

$horainicialemsegundos = $horainicial * 3600;
$minutosinicialemsegundos = $minutosinicial * 60;
$totalinicialemsegundos = $horainicialemsegundos + $minutosinicialemsegundos + $segundosinicial;

// final
$arrhora = explode(":", $horafinal);

$horafinal = $arrhora [0];
$minutosfinal = $arrhora [1];
$segundosfinal = $arrhora [2];

$horafinalemsegundos = $horafinal * 3600;
$minutosfinalemsegundos = $minutosfinal * 60;
$totalfinalemsegundos = $horafinalemsegundos + $minutosfinalemsegundos + $segundosfinal;


// tempo de jogo
$total = ($totalfinalemsegundos - $totalinicialemsegundos) / 60;
echo "o tempo de jogo é de: {$total} minutos";


// acrescimos
$acrescimos = 5;

    echo "<br>";
    echo "<br>";



// Jogo comeca em um dia e termina no outro com var_dump

$dataentrada = new datetime ("2023-11-12 23:00:00");
$datasaida = new datetime ("2023-11-13 00:30:00");
$intervalo = $dataentrada->diff($datasaida);
//var_dump($intervalo);
    echo $intervalo->y . " anos  " . $intervalo->m . " meses " . $intervalo->d . " dias . <br>";
        echo $intervalo->days . " dias . <br>";
            echo $datasaida->gettimestamp() - $dataentrada->gettimestamp() . " segundos. <br>";
                echo ($datasaida->gettimestamp() - $dataentrada->gettimestamp()) / 60 . " minutos. <br>";    
                    echo (($datasaida->gettimestamp() - $dataentrada->gettimestamp()) / 60 ) / 60 . " horas. <br>"; 

// ------------------

    echo "<br>";



// Jogo comeca em um dia e termina no outro 
$dataatual = date ('d/m/Y  H:i:s'); // 22/08/2023  20:06:32

// inicial
$acrescimos = 5;
$horainicial = "23:00:00";
$horafinal = "00:30:00";
$datainicial = "12/11/2023";
$datafinal = "13/11/2023";
$diaemsegundos = 86400;
$horaemsegundos = 3600;
$minutosemsegundos = 60;

$arrhora = explode(":", $horainicial);
$horainicial = $arrhora [0];
$minutosinicial = $arrhora [1];
$segundosinicial = $arrhora [2];

$horainicialemsegundos = $horainicial * 3600;
$minutosinicialemsegundos = $minutosinicial * 60;
$totalinicialemsegundos = $horainicialemsegundos + $minutosinicialemsegundos + $segundosinicial;


// final
$arrhora = explode(":", $horafinal);
$horafinal = $arrhora [0];
$minutosfinal = $arrhora [1];
$segundosfinal = $arrhora [2];

$horafinalemsegundos = $horafinal * 3600;
$minutosfinalemsegundos = $minutosfinal * 60;
$totalfinalemsegundos = $horafinalemsegundos + $minutosfinalemsegundos + $segundosfinal;


// tempo de jogo
$total = ($totalfinalemsegundos - $totalinicialemsegundos) / 60;
if ($total <= 0) {
    $difinicial =  $diaemsegundos - $totalinicialemsegundos;
    $tempodojogo = ($difinicial + $totalfinalemsegundos)/60;
}

echo "o tempo de jogo é de: {$tempodojogo} minutos";

