<!DOCTYPE html>
<html lang="pt-br">
    <?php
        include_once("./ClassAlunoDAO.php");
        
    
            function listar(){
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
                        $aluno->setavatar($linha->avatar);
                        $resultados[] = $aluno;
                    }
                }
                return $resultados;
            }
    ?>
    
</html>