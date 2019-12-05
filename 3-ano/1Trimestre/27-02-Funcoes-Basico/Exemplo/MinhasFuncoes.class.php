<?php

class MinhasFuncoes {

    private static $tam = 5;

    public static function getTam() {
        return self::$tam;
    }

    public static function setTam($tam) {
        return self::$tam = $tam;
    }

    public static function loopN($tam) {
        echo '<ul style="list-style-type: circle;">';
        for ($i = 1; $i <= $tam; $i++) {
            echo "<li>";
            for ($j = 0; $j <= $i; $j++) {
                echo $i. " ";
            }
            echo "</li>";
        }
        echo "</ul>";
    }

    public static function loopM($tam) {
        echo '<ul style="list-style-type: circle;">';
        for ($i = 1; $i <= $tam; $i++) {
            echo "<li>";
            for ($j = 1; $j <= $i; $j++) {
                echo $j. " ";
            }
            echo "</li>";
        }
        echo "</ul>";
    }

    public static function dataExtenso($tam) {
        $data = explode("/", $tam);
        $dia = (int) $data[0];
        $mes = (int) $data[1];
        $ano = (int) $data[2];
        if ($dia >= 1 && $dia <= 31) {
           if ($mes >= 1 && $mes <= 12) {
              if ($ano > 0) {
                switch ($mes) {
                  case 1:
                      $mes = "Janeiro";
                      break;
                  case 2:
                      $mes = "Fevereiro";
                      break;
                  case 3:
                      $mes = "Março";
                      break;
                  case 4:
                      $mes = "Abril";
                      break;
                  case 5:
                      $mes = "Maio";
                      break;
                  case 6:
                      $mes = "Junho";
                      break;
                  case 7:
                      $mes = "Julho";
                      break;
                  case 8:
                      $mes = "Agosto";
                      break;
                  case 9:
                      $mes = "Setembro";
                      break;
                  case 10:
                      $mes = "Outubro";
                      break;
                  case 11:
                      $mes = "Novembro";
                      break;
                  case 12:
                      $mes = "Dezembro";
                      break;
                }
                echo $dia . " de ". $mes. " de ". $ano;
              } else {
                echo "NULL";
              }
           } else {
              echo "NULL";
           }
        } else {
          echo "NULL";
        }
    }

    public static function add2($n1, $n2) {
        return $n1 + $n2;
    }

    public static function sub2($n1, $n2) {
        return $n1 - $n2;
    }

}

?>
