<?php
class funcionario {

    private $codigo;
    private $nome;
    private $salario;
    private $dataAdmissao;

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

}
?>