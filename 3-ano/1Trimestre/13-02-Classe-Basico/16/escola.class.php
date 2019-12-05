<?php
class escola {

    private $codigo;
    private $nome;
    private $cidade;
    private $numeroAlunos;
    private $nomeDiretora;

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

}
?>