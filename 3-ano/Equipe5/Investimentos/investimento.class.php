<?php

class Investimento {

    private $valorInicial;
    private $vetSalario = array();
    private $ValorInicial, $DepMensal, $Taxa, $Periodo, $valorDesejado;
    private $TaxaMouA; // Variavel para Mensal ou Anual
    private $PeriodoMouA; // Variavel para Mensal ou Anual
 
    public function getValorInicial() {
        return $this->ValorInicial;
    }
    
    public function setValorInicial($ValorInicial) {
        $this->ValorInicial = $ValorInicial;
    }
 
    public function getDepMensal() {
        return $this->DepMensal;
    }
    
    public function setDepMensal($DepMensal) {
        $this->DepMensal = $DepMensal;
    }
 
    public function getTaxa() {
        return $this->Taxa;
    }
    
    public function setTaxa($Taxa) {
        if ($Taxa >= 0 || $Taxa <= 100) {
            $this->Taxa = $Taxa / 100;
        } else{
            echo "Erro!!! Valor inválido.";
        }
    }
 
    public function getPeriodo(){
        return $this->Periodo;
    }
    
    public function setPeriodo($Periodo) {
        $this->Periodo = $Periodo; 
    }
 
    public function getTaxaMouA() {
        return $this->TaxaMouA;
    }

    public function setValorDesejado($valor) {
        $this->valorDesejado = $valor;
    }
    
    public function getValorDesejado() {
        return $this->valorDesejado;
    }
    
    public function setTaxaMouA($TaxaMouA) {
        $this->TaxaMouA = $TaxaMouA;
    }
 
    public function getPeriodoMouA() {
        return $this->PeriodoMouA;
    }
    
    public function setPeriodoMouA($PeriodoMouA) {
        $this->PeriodoMouA = $PeriodoMouA;
    }
 
    public function CalcTaxa(){
        if ($this->TaxaMouA == "Anual") {
            $this->Taxa /= 12;
        }
    }

    public function CalcPeriodo() {
        if ($this->PeriodoMouA == "Anual") {
            $this->Periodo *= 12;
        }
    }

    /* 
    VERIFICAR SE O 1º MES CONTA JUROS OU SE SÓ CONTA NA APRESENTACAO DO 2
        EX: [0] => 1000 [1] => 1200 [2]...  (print_r($f->CalcSaldos(1000,100,0.1,24));)
            [0] 1100 / [1] 1200             (echo $f->setAddValor(100,24,1000);)

    */
    function CalcSaldos () {
 
        $Saldos = array();
 
        $ValorInicial = $this->ValorInicial;
        $DepMensal = $this->DepMensal;
        $Taxa = $this->Taxa;
        $Periodo = $this->Periodo;
 
        
        $Saldos[0]=$ValorInicial;

        $i=1;
        while ($i < $Periodo) {
           
            
            $MesAnterior = $Saldos[$i - 1];
            
            
            $Saldos[$i] = $MesAnterior + ($MesAnterior * $Taxa) + $DepMensal;
            $i++;
        }
        return $Saldos;
 
    }

    function CalcSaldosMesFinal () {
 
        $Saldos = array();
 
        $ValorInicial = $this->ValorInicial;
        $DepMensal = $this->DepMensal;
        $Taxa = $this->Taxa;
        $Periodo = $this->Periodo;
 
        $Periodo = $Periodo + 1;
        $Saldos[0]=$ValorInicial;

        $i=1;
        while ($i < $Periodo) {
           
            
            $MesAnterior = $Saldos[$i - 1];
            
            
            $Saldos[$i] = $MesAnterior + ($MesAnterior * $Taxa) + $DepMensal;
            $i++;
        }
        return $Saldos;
 
    }


    function CalcSaldoFinal () {
 
        $Saldos = array();
 
        $ValorInicial = $this->ValorInicial;
        $DepMensal = $this->DepMensal;
        $Taxa = $this->Taxa;
        $Periodo = $this->Periodo;
 
        
        $Saldos[0]=$ValorInicial;

        $i=1;
        while ($i < $Periodo) {
           
            
            $MesAnterior = $Saldos[$i - 1];
            
            
            $Saldos[$i] = $MesAnterior + ($MesAnterior * $Taxa) + $DepMensal;
            $i++;
        }
        $Saldo = 0;
        for ($i=0; $i < $Periodo; $i++) { 
            $Saldo = $Saldos[$i];
        }
        return $Saldo;
 
    }


    public function setSaldoFinalAcumulado(){
       
        $txt = '';
        $totalMes = 0;

        $investimentoInicial = $this->ValorInicial;
        
        $taxaMensal = $investimentoInicial;

        $depositoMensal = $this->DepMensal;
        $taxa = $this->Taxa;
        $periodo = $this->Periodo;

        for ($i=0; $i < $periodo; $i++) { 
            if ($i==0) {
                $txt .="  [".$i."]  ";
                $taxaMensal = $investimentoInicial;
                $totalMes = $taxaMensal;
               // $txt .= $totalMes;
            }else{
            $txt .=" / [".$i."]  ";
            $taxaJuros = $taxaMensal * $taxa;

            $taxaMensal = $taxaMensal + $taxaJuros + $depositoMensal;

            $totalMes += $taxaMensal;
           // $txt .= $totalMes;
            //$taxaMensal += $taxaJuros;

            //$Saldo = $MesAnterior + ($MesAnterior * $Taxa) + $DepMensal;
            }
        }
        //$txt .= "<br/>Final: ";
        $txt = $totalMes;
        return $txt;

    }

    
    public function setTotalInvestido(){

        $investimentoInicial = $this->ValorInicial;
        $depositoMensal = $this->DepMensal;
        $periodo = $this->Periodo;

        $valorMensal = $depositoMensal * $periodo + $investimentoInicial;  

        $txt = $valorMensal;    
        return $txt;
    }  


    public function setSaldoFinal () {

        $investimentoInicial = $this->ValorInicial;
        $depositoMensal = $this->DepMensal;
        $taxa = $this->Taxa;
        $periodo = $this->Periodo;
        
        $txt = '';
        $taxaMensal = $investimentoInicial;
        for ($i=0; $i < $periodo; $i++) { 
            if ($i==0) {
                $txt .="  [".$i."]  ";
                $txt .= $investimentoInicial;
            }else{
            $txt .=" / [".$i."]  ";
            $taxaJuros = $taxaMensal * $taxa;

            $taxaMensal = $taxaMensal + $taxaJuros + $depositoMensal;

            $totalMes = $taxaMensal;
            $txt = $totalMes;
            //$taxaMensal += $taxaJuros;

            //$Saldo = $MesAnterior + ($MesAnterior * $Taxa) + $DepMensal;
            }
        }
           
        return $txt;

    }


    public function setPrevisaoInvestimento(){
        
        $DepMensal = $this->DepMensal;
        $Taxa = $this->Taxa;
        $Periodo = $this->Periodo;
        $valorDesejado = $this->valorDesejado;
        $investimentoInicial = $this->ValorInicial;
        
        $periodo = 0;
        $txt = '';
        $totalMes = 0;
        $taxaMensal = $investimentoInicial;
        for ($i=0; $totalMes < $valorDesejado; $i++) { 
            if ($i==0) {
                $txt .="  [".$i."]  ";
                $taxaMensal = $investimentoInicial;
                $totalMes = $taxaMensal;
               // $txt .= $totalMes;
            }else{
            $txt .=" / [".$i."]  ";
            $taxaJuros = $taxaMensal * $Taxa;

            $taxaMensal = $taxaMensal + $taxaJuros + $DepMensal;

            $totalMes += $taxaMensal;
           $periodo = $i + 1;
            }
        }
        //$txt .= "<br/>Final: ";
        $txt = $periodo;
        return $txt;

    }


    public function setAddValor(){
        
        $ValorInicial = $this->ValorInicial;
        $depositoMensal = $this->DepMensal;
        $periodo = $this->Periodo;
       
        $SaldosSemJuros = array();

        $valorMensal = $ValorInicial;

        $SaldosSemJuros[0] = $valorMensal;

        for ($i=1; $i < $periodo; $i++) { 
            $SaldosSemJuros[$i] = $SaldosSemJuros[$i-1] + $depositoMensal;
        }
           
        return $SaldosSemJuros;
    }   

    public function setJuros(){
       
        $taxa = $this->Taxa;
 
        $vetJuros = array();
 
        $Saldos = $this->CalcSaldos();
 
        for ($i=0; $i < count($Saldos); $i++) {
            $vetJuros[$i] = $Saldos[$i] * $taxa;
        }
        return $vetJuros;
    }

    public function setJurosRendimento(){
       
        $taxa = $this->Taxa;
 
        $vetJuros = array();
 
        $Saldos = $this->CalcSaldosMesFinal();
 
        for ($i=0; $i < count($Saldos); $i++) {
            $vetJuros[$i] = $Saldos[$i] * $taxa;
        }
        return $vetJuros;
    }

    public function setJurosAcumulado(){
    
        $Juros = $this->setJuros();

        $RendimentoTotal = 0;
        
        for ($i=0; $i < count($Juros); $i++) { 
            $RendimentoTotal += $Juros[$i];
        }

        return $RendimentoTotal;
    }

    public function setCalculaSaldos () {

        $investimentoInicial = $this->ValorInicial;
        $depositoMensal = $this->DepMensal;
        $taxa = $this->Taxa;
        $periodo = $this->Periodo;

        $txt = '';
        $taxaMensal = $investimentoInicial;
        for ($i=0; $i < $periodo; $i++) { 
            if ($i==0) {
                $txt .="  [".$i."]  ";
                $txt .= $investimentoInicial;
            }else{
            $txt .=" / [".$i."]  ";
            $taxaJuros = $taxaMensal * $taxa;

            $taxaMensal = $taxaMensal + $taxaJuros + $depositoMensal;

            $totalMes = $taxaMensal;
            $txt .= $totalMes;
            //$taxaMensal += $taxaJuros;

            //$Saldo = $MesAnterior + ($MesAnterior * $Taxa) + $DepMensal;
            }
        }
           
        return $txt;

    }

}
?>