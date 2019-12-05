<?php
  include 'conf/conf.inc.php';
  include 'connect/connect.php';
  echo "Foi 2";
  $acao = isset($_GET['acao'])?$_GET['acao']:0;
  $tb_tabela = isset($_GET['tabela'])?$_GET['tabela']:0;
  $pagina = isset($_GET['pagina'])?$_GET['pagina']:0;
  $numero = isset($_GET['numero'])?$_GET['numero']:0;
  $parentesa = "(";
  $parentesf = ")";

  if ($acao == 'excluir') {
      $codigo = 0;
      if (isset($_GET['codigo'])) {
          $tb_tabela = isset($_GET['tabela'])?$_GET['tabela']:0;
          $pagina = isset($_GET['pagina'])?$_GET['pagina']:0;
          $numero = isset($_GET['numero'])?$_GET['numero']:0;
          $codigo = $_GET['codigo'];
          $sql = "DELETE FROM $tb_tabela WHERE codigo = $codigo";
          echo "$sql";
          $resultado = mysqli_query($conexao, $sql);
          header("location:$pagina");
      }
  }

  if ($acao == 'salvar') {
      $tb_tabela = isset($_POST['tabela'])?$_POST['tabela']:0;
      $pagina = isset($_POST['pagina'])?$_POST['pagina']:0;
      $numero = isset($_POST['numero'])?$_POST['numero']:0;
      if (isset($_POST['n1'])) {
          for ($i= 1; $i <= $numero ; $i++) {
              $lugares[$i] = isset($_POST['n'.$i])?$_POST['n'.$i]:0;
          }
          $sql = "INSERT INTO $tb_tabela values ".$parentesa."'null'";
          $i=1;
          while ($i <= $numero) {
              $data = DateTime::createfromFormat('d/m/Y', $lugares[$i]);
              if ($data && $data->format('d/m/Y')) {
                  $lugares[$i] = str_replace("/", "-", $lugares[$i]);
                  $sql.= ",'".date("Y-m-d", strtotime($lugares[$i]))."'";
              } else {
                  $sql.= ",'".$lugares[$i]."'";
              }
              $i++;
          }
          $sql.= $parentesf;
          echo "$sql";
          $resultado = mysqli_query($conexao, $sql);
          header("location:".$pagina."?tabela=$tb_tabela");
      }
  }
