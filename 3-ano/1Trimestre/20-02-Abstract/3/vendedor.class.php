<?php

include_once "abstractCodigoNome.class.php";

class vendedor extends nomeCodigo {

    private $login;
    private $senha;
    private $email;
    private $telefone;

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


    public function __toString() {
        return parent::__toString(). " | Login: ". $this->login. " | Telefone: ". $this->telefone. " | Email: ". $this->email. " | Senha: ". $this->senha;
    }

}
?>
