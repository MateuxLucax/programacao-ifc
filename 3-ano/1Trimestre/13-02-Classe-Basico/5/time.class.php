<?php
class time {

    private $codigo;
    private $nome;
    private $numeroTorcedores;
    private $cidade;

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

    public function setNumeroTorcedores($numeroTorcedores) {
        if ($numeroTorcedores > 0) {
            $this->numeroTorcedores = $numeroTorcedores;
        }
    }

    public function getNumeroTorcedores() {
        return $this->numeroTorcedores;
    }

    public function setCidade($cidade) {
        if (strlen($cidade) > 1) {
            $this->cidade = $cidade;
        }
    }

    public function getCidade() {
        return $this->cidade;
    }

}
?>