<?php
class vendedor {

    private $codigo;
    private $login;
    private $senha;
    private $nome;
    private $email;
    private $telefone;

    public function setCodigo($codigo) {
        if ($codigo > 0) {
            $this->codigo = $codigo;
        }
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setLogin($login) {
        if (strlen($login) > 1) {
            $this->login = $login;
        }
    }

    public function getLogin() {
        return $this->login;
    }

    public function setSenha($senha) {
        if (strlen($senha) > 1) {
            $this->senha = $senha;
        }
    }

    public function getSenha() {
        return $this->senha;
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
        if ($telefone > 0) {
            $this->telefone = $telefone;
        }
    }

    public function getTelefone() {
        return $this->telefone;
    }

}
?>