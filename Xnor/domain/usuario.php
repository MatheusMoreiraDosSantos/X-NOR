<?php
    class Usuario{
        private $id;
        private $nome;
        private $email;
        private $rua;
        private $bairro;
        private $cidade;
        private $numero;
        private $cep;
        private $telefone;
        private $senha;
        
        public function getId(){
            return $this->id;
        }
        
        public function setId($id){
            $this->id = $id;
        }
        
        public function getNome(){
            return $this->nome;
        }
        
        public function setNome($nome){
            $this->nome = $nome;
        }
        
        public function getEmail(){
            return $this->email;
        }
        
        public function setEmail($email){
            $this->email = $email;
        }
        
        public function getRua(){
            return $this->rua;
        }
        
        public function setRua($rua){
            $this->$rua = $rua;
        }
        
        public function getBairro(){
            return $this->bairro;
        }
        
        public function setBairro($bairro){
             $this->bairro = $bairro;
        }
        
        public function getCidade(){
            return $this->cidade;
        }
        
        public function setCidade($cidade){
             $this->cidade = $cidade;
        }
        
        
        public function getNumero(){
            return $this->numero;
        }
        
        public function setNumero($numero){
             $this->numero = $numero;
        }
        
        public function getCep(){
            return $this->cep;
        }
        
        public function setCep($cep){
             $this->cep = $cep;
        }
        public function getTelefone(){
            return $this->telefone;
        }
        
        public function setTelefone($telefone){
             $this->telefone = $telefone;
        }

        public function getSenha(){
            return $this->senha;
        }
        
        public function setSenha($senha){
            $this->senha = $senha;
        }
        
    }

?>