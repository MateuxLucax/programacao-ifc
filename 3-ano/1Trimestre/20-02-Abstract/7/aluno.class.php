<?php

include_once "abstractCodigoNome.class.php";

class aluno extends nomeCodigo {

    private $dataNascimento;
    private $curso;

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

    public function __toString() {
        return parent::__toString(). " | Data de Nascimento: ". $this->dataNascimento. " | Curso: ". $this->curso;
    }

}
?>
