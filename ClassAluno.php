<?php
    class aluno{
        private $id;
        private $nome;
        private $data_nasc;
        private $facebook;
        private $linkedin;
        private $email;
        private $whatsapp;
        private $description;
        private $password;
        private $avatar;
        private $foto_perfil;
        
        /* id */
        public function getid(){
            return $this->id;
        }
        public function setid($id){
            $this->id =$id;
	        return $this;
        }
        
        /* nome */
        public function getnome(){
            return $this->nome;
        }
        public function setnome($nome){
            $this->nome =$nome;
	        return $this;
        }
        
        /* data nasc */
        public function getdata_nasc(){
            return $this->data_nasc;
        }
        public function setdata_nasc($data_nasc){
            $this->data_nasc =$data_nasc;
	        return $this;
        }
        
        /* facebook */
        public function getfacebook(){
            return $this->facebook;
        }
        public function setfacebook($facebook){
            $this->facebook =$facebook;
	        return $this;
        }
        
        /* linkedin */
        public function getlinkedin(){
            return $this->linkedin;
        }
        public function setlinkedin($linkedin){
            $this->linkedin =$linkedin;
	        return $this;
        }
        
        /* email */
        public function getemail(){
            return $this->email;
        }
        public function setemail($email){
            $this->email =$email;
	        return $this;
        }
        
        /* Whatsapp */
        public function getwhatsapp(){
            return $this->whatsapp;
        }
        public function setwhatsapp($whatsapp){
            $this->whatsapp =$whatsapp;
	        return $this;
        }
        
        /* descrição */
        public function getdescription(){
            return $this->description;
        }
        public function setdescription($description){
            $this->description =$description;
	        return $this;
        }
        
        /* Password */
        public function getpassword(){
            return $this->password;
        }
        public function setpassword($password){
            $this->password =$password;
	        return $this;
        }

        /* Avatar */
        public function getavatar(){
            return $this->avatar;
        }
        public function setavatar($avatar){
            $this->avatar =$avatar;
	        return $this;
        }

        /* Foto de Perfil */
        public function getfoto_perfil(){
            return $this->foto_perfil;
        }
        public function setfoto_perfil($foto_perfil){
            $this->foto_perfil =$foto_perfil;
	        return $this;
        }
        
    }
?>