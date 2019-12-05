<?php

include_once "abstractCodigoNome.class.php";

class funcionario extends nomeCodigo {

    private $salario;
    private $dataAdmissao;

    public function getNome() {
        return $this->nome;
    }

    public function setSalario($salario) {
        if ($salario > 0) {
            $this->salario = $salario;
        }
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setDataAdmissao($dataAdmissao) {
        if (strlen($dataAdmissao) >= 10) {
            $this->dataAdmissao = $dataAdmissao;
        }
    }

    public function getDataAdmissao() {
        return $this->dataAdmissao;
    }

    public function __toString() {
        return parent::__toString(). " | Data de Admissão: ". $this->dataAdmissao. " | Salário: ". $this->salario;
    }

}
?>
