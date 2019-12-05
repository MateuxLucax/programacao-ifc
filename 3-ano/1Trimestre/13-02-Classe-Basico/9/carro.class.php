<?php
class carro {

    private $codigo;
    private $anoFabricacao;
    private $dataVenda;
    private $valor;

    public function setCodigo($codigo) {
        if ($codigo > 0) {
            $this->codigo = $codigo;
        }
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setAnoFabricacao($anoFabricacao) {
        if (strlen($anoFabricacao) >= 10) {
            $this->anoFabricacao = $anoFabricacao;
        }
    }

    public function getAnoFabricacao() {
        return $this->anoFabricacao;
    }

    public function setDataVenda($dataVenda) {
        if (strlen($dataVenda) >= 10) {
            $this->dataVenda = $dataVenda;
        }
    }

    public function getDataVenda() {
        return $this->dataVenda;
    }

    public function setValor($valor) {
        if ($valor > 0) {
            $this->valor = $valor;
        }
    }

    public function getValor() {
        return $this->valor;
    }

}
?>