<?php 
    class Lutador{
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

    public function __construct($nome, $nacionalidade, $idade, $altura, $peso) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->peso = $peso;
            
        if($this->peso <= 80) {
            $this->categoria = "Leve";
        } else if($this->peso <= 90) {
           $this->categoria = "Medio";
        } else {
            $this->categoria = "Pesado";
        }
    }


    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }


    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }


    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }


    public function getAltura() {
        return $this->altura;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }


    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
        if($this->peso <= 80) {
            $this->setCategoria("Leve");
        } else if($this->peso <= 90) {
           $this->setCategoria("Medio");
        } else {
            $this->setCategoria("Pesado");
        }
    }


    public function getCategoria() {
        return $this->categoria;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }


    public function getVitorias() {
        return $this->vitorias;
    }

    public function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }


    public function getDerrotas() {
        return $this->derrotas;
    }

    public function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }


    public function getEmpates() {
        return $this->empates;
    }

    public function setEmpates($empates) {
        $this->empates = $empates;
    }

    public function apresentar() {
        echo"Apresentando lutador {$this->nome}";

    }
    public function status() {
        echo "Status do Lutador";
        echo "<p>Nome{$this->getNome()}</p>";
        echo "<p>Nacionalidade{$this->getNacionalidade()}</p>";
        echo "<p>Idade{$this->getIdade()}</p>";
        echo "<p>altura{$this->getAltura()} m</p>";
        echo "<p>peso{$this->getPeso()} KG</p>";
        echo "<p>Categoria{$this->getCategoria()}</p>";
        echo "<p>N de Vitorias{$this->getVitorias()}</p>";
        echo "<p>N de Derrotas{$this->getDerrotas()}</p>";
        echo "<p>N de Empates{$this->getEmpates()}</p>";
        echo "Fim do Status";
    }
    public function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }
}
        
?>