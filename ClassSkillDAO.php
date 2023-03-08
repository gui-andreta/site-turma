<?php
    //incluindo o objeto aluno
    include_once("./ClassSkill.php");
    
    //criando classalunoDAO
    class SkillDAO{
        private $conn; 
	    private $msg; 
               
            
        public function inserir(Skill $skill){
            try{
                
                $con = new PDO("mysql:host=localhost;port=3308;dbname=alunos", 'root', '');
                $comandoSQL = $con->prepare('INSERT into skills(id, descricao, codAluno, tipo) VALUES(?, ?, ?, ?)');
                
                $idSkill = $skill->getid();
                $descricao = $skill->getdescricao();
                $codAluno = $skill->getcodAluno();
                $tipo = $skill->gettipo();
                
                $comandoSQL->bindParam(1,$idSkill);
                $comandoSQL->bindParam(2,$descricao);
                $comandoSQL->bindParam(3,$codAluno);
                $comandoSQL->bindParam(4,$tipo);
                
                if($comandoSQL->execute()){
                    $this-> msg = "<img src='img/correct.png'/><br><p style='font-size:20px;'>Skill cadastrada com sucesso. <br>Clique <a href='./formSkills.php' style='color:#ff8788; text-decoration:none;'> aqui</a> para cadastrar outra.</p>";
                    }
                
                
                
                }catch(Exception $e){
                    $this -> msg = "<img src='img/wrong.png'/><br><p style='font-size:20px;'>Ocorreu um erro ao cadastrar a Skill.<br>Clique <a href='./formSkills.php' style='color:#ff8788; text-decoration:none;'> aqui</a> e tente novamente.</p>";
                }
                return $this->msg;
            }

        
        
        
 
		    
            public function listarFerramentas($codAluno){
                
                $con = new PDO("mysql:host=localhost;port=3308;dbname=alunos", 'root', '');
                $comandoSQL = $con->prepare('Select * from skills where codAluno= :codAluno and tipo = :tipo');
                $comandoSQL -> bindValue(':codAluno',$codAluno);
                $comandoSQL -> bindValue(':tipo','ferramentas');
                $comandoSQL -> execute();
                $resultados = array();
                if($comandoSQL){
                    //fetch: pega o resultado da consulta e separa em linhas
                    while($linha = $comandoSQL->fetch(PDO::FETCH_OBJ)){
                        // criando um novo objeto da classe aluno
                        $skill = new Skill();

                        // setid (vem da classe aluno) // id, nome... (vem do banco)
                        $skill->setid($linha->id);
                        $skill->setdescricao($linha->descricao);
                        $skill->setcodAluno($linha->codAluno);
                        $skill->settipo($linha->tipo);
                        
                        $resultados[] = $skill;
                    }
                }
                return $resultados;
            }
        
            public function listarHobbies($codAluno){
                
                $con = new PDO("mysql:host=localhost;port=3308;dbname=alunos", 'root', '');
                $comandoSQL = $con->prepare('Select * from skills where codAluno= :codAluno and tipo = :tipo');
                $comandoSQL -> bindValue(':codAluno',$codAluno);
                $comandoSQL -> bindValue(':tipo','hobbies');
                $comandoSQL -> execute();
                $resultados = array();
                if($comandoSQL){
                    //fetch: pega o resultado da consulta e separa em linhas
                    while($linha = $comandoSQL->fetch(PDO::FETCH_OBJ)){
                        // criando um novo objeto da classe aluno
                        $skill = new Skill();

                        // setid (vem da classe aluno) // id, nome... (vem do banco)
                        $skill->setid($linha->id);
                        $skill->setdescricao($linha->descricao);
                        $skill->setcodAluno($linha->codAluno);
                        $skill->settipo($linha->tipo);
                        
                        $resultados[] = $skill;
                    }
                }
                return $resultados;
            }
        
            public function listarCursos($codAluno){
                
                $con = new PDO("mysql:host=localhost;port=3308;dbname=alunos", 'root', '');
                $comandoSQL = $con->prepare('Select * from skills where codAluno= :codAluno and tipo = :tipo');
                $comandoSQL -> bindValue(':codAluno',$codAluno);
                $comandoSQL -> bindValue(':tipo','cursos');
                $comandoSQL -> execute();
                $resultados = array();
                if($comandoSQL){
                    //fetch: pega o resultado da consulta e separa em linhas
                    while($linha = $comandoSQL->fetch(PDO::FETCH_OBJ)){
                        // criando um novo objeto da classe aluno
                        $skill = new Skill();

                        // setid (vem da classe aluno) // id, nome... (vem do banco)
                        $skill->setid($linha->id);
                        $skill->setdescricao($linha->descricao);
                        $skill->setcodAluno($linha->codAluno);
                        $skill->settipo($linha->tipo);
                        
                        $resultados[] = $skill;
                    }
                }
                return $resultados;
            }
        
            public function listarAreas($codAluno){
                
                $con = new PDO("mysql:host=localhost;port=3308;dbname=alunos", 'root', '');
                $comandoSQL = $con->prepare('Select * from skills where codAluno= :codAluno and tipo = :tipo');
                $comandoSQL -> bindValue(':codAluno',$codAluno);
                $comandoSQL -> bindValue(':tipo','areas');
                $comandoSQL -> execute();
                $resultados = array();
                if($comandoSQL){
                    //fetch: pega o resultado da consulta e separa em linhas
                    while($linha = $comandoSQL->fetch(PDO::FETCH_OBJ)){
                        // criando um novo objeto da classe aluno
                        $skill = new Skill();

                        // setid (vem da classe aluno) // id, nome... (vem do banco)
                        $skill->setid($linha->id);
                        $skill->setdescricao($linha->descricao);
                        $skill->setcodAluno($linha->codAluno);
                        $skill->settipo($linha->tipo);
                        
                        $resultados[] = $skill;
                    }
                }
                return $resultados;
            }
        
            
        
                /*
                public function selecionaSkill($CodAluno){
                    $con = new PDO("mysql:host=localhost;port=3306;dbname=alunos", 'root', '');
                    $comandoSQL = $con->prepare('Select * from skills where id= :codAluno');
                    $comandoSQL->bindValue(':codAluno',$CodAluno);
                    $comandoSQL->execute();

                    if($comandoSQL){
                        $linha = $comandoSQL->fetch(PDO::FETCH_OBJ);
                        $Skill = new Skill();
                        // setid (vem da classealuno) // id, nome... (vem do banco)
                        $Skill->setdescricao($linha->descricao);
                        $Skill->setcodAluno($linha->codAluno);
                        $Skill->settipo($linha->tipo);
                    }
                    return $Skill;
                    
                }
				*/
        
    }
?>