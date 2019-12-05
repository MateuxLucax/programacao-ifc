<?php
class esporte {

    private $codigo;
    private $nome;
    private $numeroPraticantes;

    public function setCodigo($codigo) {
        if ($codigo > 0) {
            $this->codigo = $codigo;
        }
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setNome($nome) {
        if (strlen($nome) > 1) {
            $this->nome = $nome;
        }
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNumeroPraticantes($numeroPraticantes) {
        if ($numeroPraticantes > 0) {
            $this->numeroPraticantes = $numeroPraticantes;
        }
    }

    public function getNumeroPraticantes() {
        return $this->numeroPraticantes;
    }


}
?>
