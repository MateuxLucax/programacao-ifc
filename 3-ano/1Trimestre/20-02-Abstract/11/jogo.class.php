<?php
class jogo {

    private $codigo;
    private $anoLancamento;
    private $classificacao;

    public function setCodigo($codigo) {
        if ($codigo > 0) {
            $this->codigo = $codigo;
        }
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setAnoLancamento($anoLancamento) {
        if (strlen($anoLancamento) >= 10) {
            $this->anoLancamento = $anoLancamento;
        }
    }

    public function getAnoLancamento() {
        return $this->anoLancamento;
    }

    public function setClassificacao($classificacao) {
        if (strlen($classificacao) > 1) {
            $this->classificacao = $classificacao;
        }
    }

    public function getClassificacao() {
        return $this->classificacao;
    }

}
?>