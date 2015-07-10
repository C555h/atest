<?php
//exit;
//$totalPedido =  1000;
$totalPedido = 916.35;
$qntParcela = 4;
$juros = 2.8;
$primeiraParcela = 0;
//$parcelaDias = [1, 31, 61, 180, 53, 150, 180, 210];
//$parcelaDias = [1, 31, 61, 53, 150, 180, 210];
$parcelaDias = [30, 60, 90, 120, 150, 180, 210];
//      sabium  [30 => 942.01, 60 => 955.01, 90 => 968.14, 120 => 981.38, 150 => 994,74, 180 => 1008.22, 210 => 1021.81]
//      meu     [30 => 942.00, 60 => 955.01, 90 => 968.13, 120 => 981.38, 150 => 994.74, 180 => 1008.22, 210 => 1021.81]
//      meu 2   [30 => 942.00, 60 => 955.01, 90 => 968.13, 120 => 981.37, 150 => 994.73, 180 => 1008.21, 210 => 1021.81]
//$parcelaDias = [1, 22, 23, 53];
//      sabium  [1 => 917.19, 22 => 926.06, 23 => 929.33, 53 => 937.33]
//      meu     [1 => 917.19, 22 => 926.05, 23 => 929.33, 53 => 937.33]
//      meu 2   [1 => 917.19, 22 => 926.05, 23 => 929.33, 53 => 937.33]
//$parcelaDias = [123, 234, 345];
//      sabium  [123 => 1026,20, 234 => 1078,58, 345 => 1132,66]
//      meu     [123 => 1026.20, 234 => 1078.58, 345 => 1132.65]
//      meu 2   [123 => 1026.20, 234 => 1078.58, 345 => 1132.65]
//$parcelaDias = array_slice($parcelaDias, 0, 2);
//$parcelaDias = [1, 301];  //1043,04 
//echo '$parcelaDias  ===> ', print_r($parcelaDias , 1), '<br>';
//echo parcelamento(2.8, 4, $totalPedido) * 4 , '<br>';
//echo parcelamento(2.8, 34/30, 902.95), '<br>';
//echo inflacionarPorDia($totalPedido, 2.8, 30), "<br>";
//echo inflacionarPorDia(310.32, 2.8, 31), "<br>";
//echo inflacionarPorDia(1000, 0.83, 50), "<br>";
//echo 30, ' $sabiu ===>', 942.01;
//$v = inflacionarValorPorDias(916.35, $juros, [30], 0, 0, 0);
//echo ' ___ ', print_r($v, 1),
//        $v != 942.01 ? ' ---':'', ' <br><br>';
//
//$d = [917.19, 918.04, 918.88, 919.73, 920.58, 921.43, 922.27, 923.12, 923.97, 924.82, 
//        925.68, 926.53, 927.38, 928.24, 929.09, 929.95, 930.8, 931.66, 932.52, 933.38,
//        934.24, 935.1, 935.96, 936.82, 937.68];
//for ($i = 0; $i < 25; $i++) {
////    echo "<br>";
//    echo $i+1, ' $sabiu ===>', $d[$i];
//    $v = inflacionarValorPorDias(916.35, $juros, [$i+1], 0, 0, 0);
//    echo ' ___ ', print_r($v, 1),
//            $v != $d[$i] ? ' ---':'', ' <br><br>';
//}
//exit;
$parcelaDias = [30, 60, 90, 120, 150, 180, 210];
$d = [30 => 942.01, 60 => 955.01, 90 => 968.14, 120 => 981.38, 150 => 994.74, 180 => 1008.22, 210 => 1021.81];
for ($i = 1; $i <= 7; $i++) {
    $parcelas = array_slice($parcelaDias, 0, $i);
    echo "<br>";
    $a = inflacionarValorPorDias($totalPedido, $juros, $parcelas, 0, 00, 0);
    echo '$a ===> ', print_r($a, 1), '<br>';
    inflacionarValorPorDias($totalPedido, $juros, $parcelas, 0, 00, 1);
    echo '$s ===> ', $d[$i*30], "<br>";
}
echo "<br>";
echo "----------------------------------------<br>";
$parcelaDias = [1, 22, 23, 53];
$d = [1 => 917.19, 22 => 926.06, 23 => 929.33, 53 => 937.33];
for ($i = 0; $i < 4; $i++) {
    echo "<br>";
    $parcelas = array_slice($parcelaDias, 0, $i+1);
    $a = inflacionarValorPorDias($totalPedido, $juros, $parcelas, 0, 00, 0);
    echo '$a ===> ', print_r($a, 1), '<br>';

    inflacionarValorPorDias($totalPedido, $juros, $parcelas, 0, 00, 1);
    echo '$s ===> ', $d[$parcelaDias[$i]], "<br>";
}

echo "<br>";
echo "----------------------------------------<br>";
$parcelaDias = [123, 234, 345];
$d = [123 => 1026.20, 234 => 1078.58, 345 => 1132.66];
for ($i = 0; $i < count($parcelaDias); $i++) {
    echo "<br>";
    $parcelas = array_slice($parcelaDias, 0, $i+1);
    $a = inflacionarValorPorDias($totalPedido, $juros, $parcelas, 0, 00, 0);
    echo '$a ===> ', print_r($a, 1), '<br>';
    inflacionarValorPorDias($totalPedido, $juros, $parcelas, 0, 00, 1);
    echo '$s ===> ', $d[$parcelaDias[$i]], "<br>";
}

//echo "<br><br>";
//inflacionarValorPorDias($totalPedido, $juros, $parcelaDias, 0, 00, 0);
//inflacionarValorPorDias($totalPedido, $juros, $parcelaDias, 0, 00, 1);
//echo "//      sabium  [30 => 942.01, 60 => 955.01, 90 => 968.14, 120 => 981.38, 150 => 994,74, 180 => 1008.22, 210 => 1021.81]";
//echo "<br><br>valorSabium = 1043,04 <br> dias = [1, 301]";



function inflacionarValorPorDias($valor, $juros, $dias, $prazoMedioPadrao, $valorPrimeiraParcela = 0, $test = 0) {
    if ($prazoMedioPadrao) {
        $prazoQntParcela = $prazoMedioPadrao / 15 - 1; //  75 / 15 - 1 = 4
        $prazoDia = $prazoQntParcela * 30;
        if ($prazoDia >= end($dias))
            return $valor;

        #subtraindo os dias por $prazoDia
        $map = array_map(function($val) use ($prazoDia) {
            return $val - $prazoDia;
        }, $dias);
        #filtrando dias  maior que 0
        $dias = array_filter($map, function ($val) {
            return $val > 0;
        });
    }

    #tratando dias, subtraindo proximoDia com diaAnterior
    $diaAnterior = 0;
    foreach ($dias as $k => &$d) {
        $diaTemp = $d - $diaAnterior;
        $diaAnterior = $d;
        $d = $diaTemp;
    }

    $parcelas = [];
    $qntParcela = count($dias);
    $lastKey = $qntParcela - 1;
    
    for ($i = 0; $i < $qntParcela + 3; $i++) {
        $total = 0;
        $preco = $valor;
        foreach ($dias as $k => $dia) {
            if ($lastKey == $k) {
                $total += inflacionarPorDia($preco, $juros, $dia);
//                $total = up($total);
                break;
            }
            $PMT = isset($parcelas[$k]) && $parcelas[$k] ? $parcelas[$k] :
                    (parcelamento($juros, $qntParcela - $k, $preco));
            $VF = (inflacionarPorDia($preco, $juros, $dia));
//            if (isset($parcelas[$k]) && $parcelas[$k]) {
//                $PMT = $parcelas[$k];
//            }
            $preco = $VF - $PMT;
            $total += $PMT;

            $total = ($total);
//            $preco = down($preco);
//            echo '$preco ===> ', print_r($preco, 1), '<br>';
//            echo '$preco ===> ', print_r($preco, 1), '<br>';
        }
        bcscale(6);
//        $total = up($total);
//        $valorParcela = $test ? 
//                bcdiv($total, $qntParcela) :
//                up($total/ $qntParcela);
        $valorParcela = bcdiv($total, $qntParcela);
//        $valorParcela = ($total/ $qntParcela);
        $parcelas = array_fill(0, $i +1, $valorParcela);
//        $test AND $parcelas[0] = bcsub($total, bcmul($valorParcela, $qntParcela - 1));
//        $test && $valParcelas[0] = $total - ($valorParcela * ($qntParcela - 1));
  }

//    bcscale(2);
//    echo '$total ===> ', print_r(bcadd($total, 0), 1), '<br>';
//    $temp =  bcmul($valor, pow(1 + $juros/100, $dia/30));
//    return $total * 1000 % 10 < 5 ? down($total) : up($total);

    return ($total);
//    return bcadd($total, 0);
}
//pra aumentar o valor +total, -valorparcela, 

function parcelamento($juros, $periodo, $valor) {
    bcscale(6);
    $juros /= 100;
    $CF = bcdiv($juros, bcsub(1, bcdiv(1, pow(1 + $juros, $periodo))));
    return bcmul($valor, $CF);
//    $CF = $juros / (1 - (1 / pow(1 + $juros, $periodo)));
//    return ($valor * $CF);
}

function inflacionarPorDia($valor, $juros, $dia, $diasIsento = 0) {
    $dia -= $diasIsento;
    if ($dia <= 0)
        return $valor;
    bcscale(6);
    return bcmul($valor, pow(1 + $juros/100, $dia/30));
//    return $valor * pow(1 + $juros/100, $dia/30);
//    $total = $valor * pow(1 + $juros/100, $dia/30);
//    return ceil($total * 100) / 100;

}

function up($val) {
    return ceil($val * 100) / 100;
}

function down($val) {
    return floor($val * 100) / 100;
}