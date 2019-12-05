<?php

include_once "abstractCodigoNome.class.php";

class cliente extends nomeCodigo {

    private $email;
    private $telefone;

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

    public function __toString() {
        return parent::__toString(). " | Email: ". $this->email. " | Telefone: ". $this->telefone;
    }

}

?>
