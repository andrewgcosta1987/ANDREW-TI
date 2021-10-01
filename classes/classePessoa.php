<?php

    abstract class Pessoa{
        protected $nome;
        protected $cpf;
        protected $data_nascimento;
        protected $precoCopia;

        public function setNome($nome){
            $this -> nome = $nome;
        }
        public function setCPF($cpf){
            $this -> cpf = $cpf;
        }
        public function setDataNascimento($data_nascimento){
            $this -> data_nascimento = $data_nascimento;
        }

        public function getNome(){
            return $this -> nome;
        }
        public function getCPF(){
            return $this -> cpf;
        }
        public function getDataNascimento(){
            return $this -> data_nascimento;
        }

        public function tirarCopia($qtdCopias){
            $total;
            $total = $qtdCopias * this.$precoCopia; 
            return $total;
        }
    }

?>