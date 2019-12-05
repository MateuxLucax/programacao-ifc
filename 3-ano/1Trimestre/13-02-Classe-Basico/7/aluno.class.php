<?php
class aluno {

    private $codigo;
    private $nome;
    private $dataNascimento;
    private $curso;

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

    public function setDataNascimento($dataNascimento) {
        if (strlen($dataNascimento) >= 10) {
            $this->dataNascimento = $dataNascimento;
        }
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }

    public function setCurso($curso) {
        if (strlen($curso) > 1) {
            $this->curso = $curso;
        }
    }

    public function getCurso() {
        return $this->curso;
    }

}
?>