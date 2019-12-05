<?php

include_once "abstractCodigoNome.class.php";

class escola extends nomeCodigo {

    private $cidade;
    private $numeroAlunos;
    private $nomeDiretora;

    public function setCidade($cidade) {
        if (strlen($cidade) > 1) {
            $this->cidade = $cidade;
        }
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function setNumeroAlunos($numeroAlunos) {
        if ($numeroAlunos > 0) {
            $this->numeroAlunos = $numeroAlunos;
        }
    }

    public function getNumeroAlunos() {
        return $this->numeroAlunos;
    }

    public function setNomeDiretora($nomeDiretora) {
        if (strlen($nomeDiretora) > 1) {
            $this->nomeDiretora = $nomeDiretora;
        }
    }

    public function getNomeDiretora() {
        return $this->nomeDiretora;
    }


    public function __toString() {
        return parent::__toString(). " | Cidade: ". $this->cidade. " | Numero de Alunos: ". $this->numeroAlunos. " | Nome da Diretora: ". $this->nomeDiretora;
    }

}
?>
