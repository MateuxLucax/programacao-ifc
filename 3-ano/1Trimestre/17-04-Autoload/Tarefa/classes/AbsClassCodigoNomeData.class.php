<?php

include_once "autoload.php";

abstract class AbsClassCodigoNomeData extends AbsClassCodigo {
    
    private $nome, $dataNascimento;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }
    
    public function calculaIdade() {
        list($dia, $mes, $ano) = explode('/', parent::getDataNascimento());
        $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
        $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
        return floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
    }

    public function __toString() {
        return parent::__toString(). " | Nome: ". $this->nome.
                                     " | Data de nascimento: ". $this->dataNascimento.
                                     " | Idade: ". $this->calculaIdade();
    }

}

?>
