<?php
abstract class usuario {

     private $usuario;
     private $senha;

    public function setUsuario($usuario) {
        if (strlen($usuario) > 8) {
            $this->usuario = $usuario;
         }
     }

    public function getUsuario() {
        return $this->usuario;
     }

    public function setSenha($senha) {
        if (strlen($senha) > 8 && $senha != $this->usuario) {
            $this->senha = sha1($senha);
         }
     }

    public function getSenha() {
        return $this->senha;
     }

    public function __toString() {
        return "[Usuario] usuario: ". $this->usuario. " | senha: ". $this->senha;
    }

}
?>
