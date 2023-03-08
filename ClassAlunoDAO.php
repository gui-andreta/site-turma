<?php
    //incluindo o objeto aluno
    include_once("./ClassAluno.php");
    
    //criando classalunoDAO
    class alunoDAO{
        private $conn; 
	    private $msg; 
        
        /*public function construct(){
            try{
                $this-> conn = new PDO('mysql:host=localhost;port=3308;dbname=alunos', 'root', '');
            }catch(PDOException $e){
			 echo "Ocorreu um erro ao conectar no Banco de Dados:".$e->getMessage();
            }catch(Exception $e){
            echo "Erro generico: ".$e->getMessage();
            }
        }*/
            
        public function inserir(aluno $aluno){
            try{
                // prepare: monta a instrução passada ao banco de dados (alteração)
                /*$comandoSQL = $this->conn->prepare('INSERT into aluno(nome, nascimento, email, facebook, linkedin, whatsapp, description) VALUES (:nome, :data_nasc, :email, :facebook, :linkedin, :whatsapp, :description)');

                $comandoSQL->bindValue(':nome', $aluno->getnome());
                $comandoSQL->bindValue(':data_nasc', $aluno->getdata_nasc());
                $comandoSQL->bindValue(':email',$aluno->getemail());
                $comandoSQL->bindValue(':facebook',$aluno->getfacebook());
                $comandoSQL->bindValue(':linkedin',$aluno->getlinkedin());
                $comandoSQL->bindValue(':whatsapp',$aluno->getwhatsapp());
                $comandoSQL->bindValue(':description',$aluno->getdescription());
                if($comandoSQL->execute()){
                    $this-> msg = "Aluno Cadastrado com Sucesso!!!!";
                    }*/
                $con = new PDO("mysql:host=localhost;port=3308;dbname=alunos", 'root', '');
                $comandoSQL = $con->prepare('INSERT into aluno(nome, nascimento, email, facebook, linkedin, whatsapp, description, password, avatar, foto_perfil) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

                $nome= $aluno->getnome(); 
                $data_nasc= $aluno->getdata_nasc();
                $email= $aluno->getemail();
                $facebook= $aluno->getfacebook();
                $linkedin= $aluno->getlinkedin();
                $whatsapp= $aluno->getwhatsapp();
                $description= $aluno->getdescription();
                $password= $aluno->getpassword();
                $avatar= $aluno->getavatar();
                $foto_perfil= $aluno->getfoto_perfil();
                
                $comandoSQL->bindParam(1,$nome);
                $comandoSQL->bindParam(2,$data_nasc);
                $comandoSQL->bindParam(3,$email);
                $comandoSQL->bindParam(4,$facebook);
                $comandoSQL->bindParam(5,$linkedin);
                $comandoSQL->bindParam(6,$whatsapp);
                $comandoSQL->bindParam(7,$description);
                $comandoSQL->bindParam(8,$password);
                $comandoSQL->bindParam(9,$avatar);
                $comandoSQL->bindParam(10,$foto_perfil);
                if($comandoSQL->execute()){
                    $this-> msg = "<img src='img/correct.png'/><br><p style='font-size:20px; color:var(--cor-verde);'>Aluno cadastrado com sucesso!!<br>Clique <a href='./Login.php' style='text-decoration:none; color:var(--cor-amarelo);'>aqui</a> e faça seu login.</p>";
                    }
                
                /*echo $aluno -> getnome();
                echo $aluno -> getdata_nasc();
                echo $aluno -> getemail();
                echo $aluno -> getfacebook();
                echo $aluno -> getlinkedin();
                echo $aluno -> getwhatsapp();
                echo $aluno -> getdescription();*/
                
                }catch(Exception $e){
                    $this -> msg = "<img src='img/wrong.png'/><br><p style='font-size:20px; color:var(--cor-vermelho);'>Ocorreu um erro ao cadastrar o aluno.<br>Clique <a href='./FormsCadastro.php' style='text-decoration:none; color:var(--cor-azul);'>aqui</a> e tente novamente.</p></p>";
                }
                return $this->msg;
            }

            public function listar(){
                //query -> utilizado em buscas
                $con = new PDO("mysql:host=localhost;port=3308;dbname=alunos", 'root', '');
                $comandoSQL = $con->query('Select * from aluno');
                $resultados = array();
                if($comandoSQL){
                    //fetch: pega o resultado da consulta e separa em linhas
                    while($linha = $comandoSQL->fetch(PDO::FETCH_OBJ)){
                        // criando um novo objeto da classe aluno
                        $aluno = new aluno();

                        // setid (vem da classealuno) // id, nome... (vem do banco)
                        $aluno->setid($linha->id);
                        $aluno->setnome($linha->nome);
                        $aluno->setdata_nasc($linha->nascimento);
                        $aluno->setemail($linha->email);
                        $aluno->setfacebook($linha->facebook);
                        $aluno->setlinkedin($linha->linkedin);
                        $aluno->setwhatsapp($linha->whatsapp);
                        $aluno->setdescription($linha->description);
                        $aluno->setpassword($linha->password);
                        $aluno->setavatar($linha->avatar);
                        $aluno->setfoto_perfil($linha->foto_perfil);
                        $resultados[] = $aluno;
                    }
                }
                return $resultados;
            }
        
                
                public function selecionaAluno($idAluno){
                    $con = new PDO("mysql:host=localhost;port=3308;dbname=alunos", 'root', '');
                    $comandoSQL = $con->prepare('Select * from aluno where id= :id');
                    $comandoSQL->bindValue(':id',$idAluno);
                    $comandoSQL->execute();

                    if($comandoSQL){
                        $linha = $comandoSQL->fetch(PDO::FETCH_OBJ);
                        $aluno = new aluno();
                        // setid (vem da classealuno) // id, nome... (vem do banco)
                        $aluno->setid($linha->id);
                        $aluno->setnome($linha->nome);
                        $aluno->setdata_nasc($linha->nascimento);
                        $aluno->setemail($linha->email);
                        $aluno->setfacebook($linha->facebook);
                        $aluno->setlinkedin($linha->linkedin);
                        $aluno->setwhatsapp($linha->whatsapp);
                        $aluno->setdescription($linha->description);
                        $aluno->setavatar($linha->avatar);
                        $aluno->setfoto_perfil($linha->foto_perfil);
                    }
                    return $aluno;
                    
                }
        
    }
?>