<?php 
  function exercicio1($data) {
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    return strftime('%A, %d de %B de %Y', strtotime($data));
  }

  function exercicio2($data, $dias, $meses, $anos, $operacao){
    if($operacao == 1){
      echo date("d/", strtotime('+'. $dias. ' days', strtotime($data)));
      echo date("m/", strtotime('+'. $meses. 'month', strtotime($data)));
      echo date("Y", strtotime('+'. $anos. ' year', strtotime($data)));
    } elseif($operacao == 2){
      echo date("d/", strtotime('-'. $dias. ' days', strtotime($data)));
      echo date("m/", strtotime('-'. $meses. 'month', strtotime($data)));
      echo date("Y", strtotime('-'. $anos. ' year', strtotime($data)));
    }
  }
  
  function exercicio3($data, $horas, $minutos, $segundos, $operacao){
    echo date("d/m/Y ", strtotime($data));
    if($operacao == 1){
      echo date("H:", strtotime('+'. $horas. ' hour', strtotime($data)));
      echo date("i:", strtotime('+'. $minutos. 'minutes', strtotime($data)));
      echo date("s", strtotime('+'. $segundos. ' seconds', strtotime($data)));
    } elseif($operacao == 2){
      echo date("H:", strtotime('-'. $horas. ' hour', strtotime($data)));
      echo date("i:", strtotime('-'. $minutos. 'minutes', strtotime($data)));
      echo date("s", strtotime('-'. $segundos. ' seconds', strtotime($data)));
    }
  }

  function exercicio4($data, $parcelas){
    $dataC = $data;
    for ($i = 1; $i <= $parcelas ; $i++) { 
      $dataC = date("m/d/Y", strtotime('+1 month', strtotime($dataC)));
      echo "Parcela ". $i. " --> ".date("d/m/Y", strtotime($dataC));
      echo "<br />";
    }
  }

  function exercicio5($data){
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    return strftime('Dia %d de %B de %Y uma %A', strtotime($data));
  }

  function exercicio6($data1, $data2, $sabadoEDomingo){
    if ($sabadoEDomingo == 'true') {
      $conta = (strtotime($data2) - strtotime($data1));
      $conta = floor($conta / (60 * 60 * 24));
      $conta = round(($conta / 7) * 5);
    } else {
      $conta = strtotime($data1) - strtotime($data2);
      $conta = floor($conta / (60 * 60 * 24));
    } 
    return "A diferença entre as datas é ". abs($conta). " dias";
  }

  function exercicio7($dataDeVencimento, $dataDePagamento, $precoDaConta, $valorDaMulta, $jurosDiarios, $sabadoEDomingo){
    if (strtotime($dataDeVencimento) < strtotime($dataDePagamento)) {
      $dias = (strtotime($dataDePagamento) - strtotime($dataDeVencimento));
      $dias = floor($dias / (60 * 60 * 24));
      if ($sabadoEDomingo == 'true') {
        $dias = round(($dias / 7) * 5);
        $novoValor = $precoDaConta + $valorDaMulta;
        for ($i = 1; $i <= $dias ; $i++) {
          $novoValor *= (1 + ($jurosDiarios / 100));
      }
      } else {
        $novoValor = $precoDaConta + $valorDaMulta;
        for ($i = 1; $i <= $dias ; $i++) {
          $novoValor *= (1 + ($jurosDiarios / 100));
        }
      }
      return "Valor Original: ". $precoDaConta. "<br /> Valor da Multa: ". $valorDaMulta. "<br /> Valor de Juros por dia: ". $jurosDiarios. "% <br /> Dias após o vencimento: ". $dias. "<br /> Novo Custo: ". $novoValor;
    } else {
      return "Você não tem multa ou juros então deve pagar: ". $precoDaConta;
    }
  }

  function exercicio8($data1, $data2, $sabadoEDomingo){
    if ($sabadoEDomingo == 'true') {
      $conta = strtotime($data2) - strtotime($data1);
      $conta = floor($conta / (60 * 60 * 24));
      return "Você viveu ". ($conta). " contando finais de semana";
    } else {
      $conta = strtotime($data2) - strtotime($data1);
      $conta = floor($conta / (60 * 60 * 24));
      $conta=round(($conta /7) * 5);
      return "Você viveu ". ($conta). " não contando finais de semana";
    }
  }
?>