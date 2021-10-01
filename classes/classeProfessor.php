<?php

class Professor extends Pessoa{
    protected $salario;
    protected $disciplina;

    public function setSalario($salario){
        $this -> salario = $salario;
    }
    public function setDisciplina($disciplina){
        $this -> disciplina = $disciplina;
    }
    public function getSalario(){
        return $this -> salario;
    }
    public function getDisciplina(){
        return $this -> disciplina;
    }

    public function tirarCopia($qtdCopias){
        this.$precoCopia = 0.08;
        $total;
        $total = $qtdCopias * $this.$precoCopia; 
        return $total;
    }
}

$professor = new Professor();
$professor.setNome ('Andrew Costa');
$professor.setDisciplina('Informática');
$total = $professor.tirarCopia(75);
echo "O professor: " + $professor.getNome();
echo " de " + $professor.getDisciplina();
echo "Tirou: R$ $total em cópias.";

?>