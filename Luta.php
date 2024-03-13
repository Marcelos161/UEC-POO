<?php 
    require_once 'Lutador.php';
    class Luta {
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        private function setDesafiado($desafiado) {
            $this->desafiado = $desafiado;
        }
        private function getDesafiado() {
            return $this->desafiado;
        }

        private function setDesafiante($desafiante) {
            $this->desafiante = $desafiante;
        }
        private function getDesafiante() {
            return $this->desafiante;
        }

        private function setRounds($rounds) {
            $this->rounds = $rounds;
        }
        private function getRounds() {
            return $this->rounds;
        }   

        private function setAprovada($aprovada) {
            $this->aprovada = $aprovada;
        }
        private function getAprovada() {
            return $this->aprovada;
        }

        public function marcarLuta($desafiado, $desafiante) {
            $this->desafiado = $desafiado;
            $this->desafiante = $desafiante;
            echo "Luta marcada";
            if($this->desafiado->getCategoria() === $this->desafiante->getCategoria()) {
                $this->setAprovada(true);
            }
        }

        public function lutar(){
            if($this->getAprovada()) {
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
    
                $vencedor = rand(0, 2);
    
                switch ($vencedor) {
                    case '0':
                        echo"Empate";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                        break;
                    case '1':
                        echo"O desafiado é o vencedor";
                        echo "{$this->getDesafiado()->getNome()}";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                        break;
                    case '2':
                        echo"O desafiante é o vencedor";
                        echo "{$this->getDesafiante()->getNome()}";
                        $this->desafiado->perderLuta();
                        $this->desafiante->ganharLuta();
                        break;
                }
            }


        }
    }

?>