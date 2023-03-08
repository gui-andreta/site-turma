<?php
   class Skill{
       private $id;
       private $descricao;
       private $codAluno;
       private $tipo;
       
       /* MÉTODOS */
       
       /* Id */
       public function getid(){
            return $this->id;
        }
       public function setid($id){
            $this->id =$id;
	        return $this;
        }
       /* descrição */
       public function getdescricao(){
            return $this->descricao;
        }
        public function setdescricao($descricao){
            $this->descricao =$descricao;
	        return $this;
        }
       
       /* CodAluno */
       public function getcodAluno(){
            return $this->codAluno;
        }
        public function setcodAluno($codAluno){
            $this->codAluno =$codAluno;
	        return $this;
        }
       
       /* tipo */
       public function gettipo(){
            return $this->tipo;
        }
        public function settipo($tipo){
            $this->tipo =$tipo;
	        return $this;
        }
   }
?>