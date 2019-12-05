<?php

include_once "usuario.class.php";

class funcionario extends usuario {

    private $nome, $email, $dataNascimento, $somaSalario, $salarioMes, $mesesTrabalhados, $anosTrabalhados;
    private $horasTrabalhadas = array();
    private $valorHora =  array();

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

      public function setTrabVal($horasTrabalhadas, $valorHora) {
          array_push($this->horasTrabalhadas, $horasTrabalhadas);
          array_push($this->valorHora, $valorHora);
      }

      public function getHorasTrabalhadas() {
          return $this->horasTrabalhadas;
       }

       public function getValorHora() {
           return $this->valorHora;
       }

        public function setDataNascimento($dataNascimento) {
             if (strlen($dataNascimento) > 1) {
                $this->dataNascimento = $dataNascimento;
             }
         }

        public function getDataNascimento() {
            return $this->dataNascimento;
        }

        public function salarioMes() {
           for ($i = 0; $i < count($this->horasTrabalhadas); $i++) {
               $salario = ($this->horasTrabalhadas[$i] * $this->valorHora[$i]);
               $this->salarioMes[] = $salario;
           }
           return $this->salarioMes;
        }

        public function somaSalario() {
            for ($i = 0; $i < count($this->horasTrabalhadas); $i++) {
                $salario = ($this->horasTrabalhadas[$i] * $this->valorHora[$i]);
                $this->somaSalario += $salario;
            }
            return $this->somaSalario;
        }

        public function mediaSalario() {
            return $this->somaSalario / count($this->horasTrabalhadas);
        }

        public function nMaioresSalarios($n) {
            $maioresSalarios = array();
            rsort($this->salarioMes);
            for ($i = 0; $i < $n; $i++) {
                if (isset($this->salarioMes[$i])) {
                    array_push($maioresSalarios, $this->salarioMes[$i]);
                }
            }
            return $maioresSalarios;
        }

        public function nMenoresSalarios($n) {
            $menoresSalarios = array();
            sort($this->salarioMes);
            for ($i = 0; $i < $n; $i++) {
                if (isset($this->salarioMes[$i])) {
                    array_push($menoresSalarios, $this->salarioMes[$i]);
                }
            }
            return $menoresSalarios;
        }

        public function mesesTrabalhados() {
                $this->mesesTrabalhados = count($this->horasTrabalhadas);
                return $this->mesesTrabalhados;
        }

        public function anosTrabalhados() {
            $anosTrabalhados = array();
            $contadorAno = 0;
            for ($i = 1; $i < $this->mesesTrabalhados; $i++) {
                if ($this->mesesTrabalhados > 12) {
                    $somaAno += 1;
                }
            }
            return $contadorAno. "  ano(s) e " . $this->mesesTrabalhados. " mes(es)";
        }

        public function aposentadoria($sexo, $data) {
                
        }

        public function __toString() {
            return parent::__toString(). " | [Funcionário] nome: ". $this->nome. " | email: ". $this->email. " | Data de nascimento: ". $this->DataNascimento;
        }

}
?>
