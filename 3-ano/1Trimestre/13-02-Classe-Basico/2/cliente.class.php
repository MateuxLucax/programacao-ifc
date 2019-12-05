<?php

class cliente {
    private $codigo;
    private $nome;
    private $email;
    private $telefone;

    public function setCodigo($codigo) {
        if ($codigo >= 0) {
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

    public function setEmail($email) {
        if (strlen($email) > 1) {
            $this->email = $email;
        }
    }

    public function getEmail() {
        return $this->email;
    }

    public function setTelefone($telefone) {
        if (strlen($telefone) > 1) {
            $this->telefone = $telefone;
        }
    }

    public function getTelefone() {
        return $this->telefone;
    }

}

?>