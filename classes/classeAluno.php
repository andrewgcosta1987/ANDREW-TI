<?php

class Aluno extends Pessoa{
    protected $matricula;

    public function setMatricula($matricula){
        $this -> matricula = $matricula;
    }
    public function getMatricula(){
        return $this -> matricula;
    }

    public function tirarCopia($qtdCopias){
        this.$precoCopia = 0.10;
        $total;
        $total = $qtdCopias * this.$precoCopia; 
        return $total;
    }
}

$aluno = new Aluno();
$aluno.setNome ('Emerson Victor');
$aluno.setMatricula('1010');
$total = $aluno.tirarCopia(10);
echo "O nome do aluno é: " + $aluno.getNome();
echo "O valor das cópias ficou: R$ " + $total;

?>