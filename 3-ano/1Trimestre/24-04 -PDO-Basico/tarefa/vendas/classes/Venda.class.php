<?php

require_once "autoload.php";

class Venda extends AbsClassCodigo {

	private $data, $dataVencimento, $dataPagamento, $cliente;

	public function setVenda($cliente,$vendedor) {
		$this->setCodigo($cliente->getCodigo());
		$this->setNome($cliente->getNome());
		$this->setCPF($cliente->getCPF());
        $this->setRG($cliente->getRG());
        $this->setFone($cliente->getFone());
        $this->setEmail($cliente->getEmail());
        $this->setUsuario($cliente->getUsuario());
        $this->setSenha($cliente->getSenha());
        $this->setEndereco($cliente->getEndereco());
        $this->setNumero($cliente->getNumero());
        $this->setBairro($cliente->getBairro());
        $this->setCidade($cliente->getCidade());
        $this->setEstado($cliente->getEstado());
        $this->setCodigo($vendedor->getCodigo());
		$this->setNome($vendedor->getNome());
        $this->setUsuario($vendedor->getUsuario());
        $this->setSenha($vendedor->getSenha());
    }

	public function getData() {
		return $this->data;
	}
	public function setData($data) {
		$this->data = $data;
	}

	public function getDataVencimento() {
		return $this->dataVencimento;
	}
	public function setDataVencimento($dataVencimento) {
		$this->dataVencimento = $dataVencimento;
	}

	public function getDataPagamento() {
		return $this->dataPagamento;
	}
	public function setDataPagamento($dataPagamento) {
		$this->dataPagamento = $dataPagamento;
	}

	public function getCliente() {
		return $this->cliente;
	}
	public function setCliente($cliente) {
		if ($cliente instanceof Cliente) {
			$this->cliente = $cliente;
		}
    }
    
    public function getVendedor() {
		return $this->vendedor;
	}
	public function setVendedor($vendedor) {
		if ($vendedor instanceof Vendedor) {
			$this->vendedor = $vendedor;
		}
	}

	public function __toString() {
		return parent::__toString()." | Preço: ".$this->data.
									" | Vencimento: ".$this->dataVencimento.
									" | Pagamento: ".$this->dataPagamento.
									" | #Cliente# ".$this->cliente->__toString().
									" | #Vendedor# ".$this->vendedor->__toString();
	}
}




?>
