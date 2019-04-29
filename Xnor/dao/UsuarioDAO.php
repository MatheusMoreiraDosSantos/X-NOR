<?php
    include_once("../factory/factory.php");
    include_once("../domain/usuario.php"); 


    class DAO{
        
        public function salvarUsuario($usuario){
          $query = "INSERT INTO usuario
          (usuario_nome,usuario_email,usuario_rua,usuario_bairro,usuario_cidade,usuario_numero,usuario_cep, usuario_telefone, usuario_senha) 
          VALUES 
          (:usuario_nome,:usuario_email,:usuario_rua,:usuario_bairro,:usuario_cidade,:usuario_numero,:usuario_cep,:usuario_telefone,:usuario_senha);";
            
            $statement = Connection::getConexao()->prepare($query);
            
            $statement->bindValue(":usuario_nome",$usuario->getNome());
            $statement->bindValue(":usuario_email",$usuario->getEmail());
            $statement->bindValue(":usuario_rua",$usuario->getRua());
            $statement->bindValue(":usuario_bairro",$usuario->getBairro());
            $statement->bindValue(":usuario_cidade",$usuario->getCidade());
            $statement->bindValue(":usuario_numero",$usuario->getNumero());
            $statement->bindValue(":usuario_cep",$usuario->getCep());
            $statement->bindValue(":usuario_telefone",$usuario->getTelefone());
            $statement->bindValue(":usuario_senha", $usuario->getSenha());
            
            if($statement->execute()){
                return true;
            }else{
                return false; 
            }  
        }
        
    public function listarUsuario(){
        $query = "SELECT * FROM usuario";
        $statement = Connection::getConexao()->prepare($query);
        
        if($statement->execute()){
            if($statement->rowCount() > 0){
                while($linha = $statement->fetch(PDO::FETCH_OBJ)){
                    $tabela[] =array(
                        "usuario_id" => $linha->usuario_id,
                        "usuario_nome" => $linha->usuario_nome,
                        "usuario_email" => $linha->usuario_email,
                        "usuario_rua" => $linha->usuario_rua,
                        "usuario_bairro" => $linha->usuario_bairro,
                        "usuario_cidade" => $linha->usuario_cidade,
                        "usuario_numero" => $linha->usuario_numero,
                        "usuario_cep" => $linha->usuario_cep,
                        "usuario_telefone" => $linha->usuario_telefone,
                        "usuario_senha" => $linha->usuario_senha,
						"opcao" => "<button class='btn btn-danger'onclick='deleteClick(" . $linha->usuario_id . ")'>Excluir</button>"
                    );
                }
                return $tabela;
            }
        }
    }    
    
	public function listarUsuarioPorID($id){
        $query = "SELECT * FROM usuario WHERE " . $id;
        $statement = Connection::getConexao()->prepare($query);
        
        if($statement->execute()){
            if($statement->rowCount() > 0){
                if($linha = $statement->fetch(PDO::FETCH_OBJ)){
                    $tabela[] =array(
                        "usuario_id" => $linha->usuario_id,
                        "usuario_nome" => $linha->usuario_nome,
                        "usuario_email" => $linha->usuario_email,
                        "usuario_rua" => $linha->usuario_rua,
                        "usuario_bairro" => $linha->usuario_bairro,
                        "usuario_cidade" => $linha->usuario_cidade,
                        "usuario_numero" => $linha->usuario_numero,
                        "usuario_cep" => $linha->usuario_cep,
                        "usuario_telefone" => $linha->usuario_telefone,
                        "usuario_senha" => $linha->usuario_senha,
						"opcao" => "<button class='btn btn-danger'onclick='deleteClick(" . $linha->usuario_id . ")'>Excluir</button>"
                    );
                }
                return $tabela;
            }
        }
    }    
	
    public function deleteUsuario($idUsuario){
        $query = "DELETE FROM usuario WHERE usuario_id=:usuario_id";
        $statement = Connection::getConexao()->prepare($query);
        $statement->bindValue(":usuario_id",$idUsuario);
        
        return $statement->execute();
    }
            
    public function atualizaUsuario($usuario){
        $query = "UPDATE usuario SET usuario_nome = :usuario_nome, usuario_email=:usuario_email,usuario_rua=:usuario_rua,usuario_bairro=:usuario_bairro,usuario_cidade=:usuario_cidade,usuario_numero=:usuario_numero, usuario_cep=:usuario_cep;usuario_telefone=:usuario_telefone, usuario_senha=:usuario_senha WHERE usuario_id=:usuario_id";
        
        $statement = Connection::getConexao()->prepare($query);
        
        $statement->bindValue(":usuario_nome",$usuario->getNome());
            $statement->bindValue(":usuario_email",$usuario->getEmail());
            $statement->bindValue(":usuario_rua",$usuario->getRua());
            $statement->bindValue(":usuario_bairro",$usuario->getBairro());
            $statement->bindValue(":usuario_cidade",$usuario->getCidade());
            $statement->bindValue(":usuario_numero",$usuario->getNumero());
            $statement->bindValue(":usuario_cep",$usuario->getCep());
            $statement->bindValue(":usuario_telefone",$usuario->getTelefone());
            $statement->bindValue(":usuario_senha",$usuario->getSenha());
    
        return $statement->execute();
    }

    public function consultaUsuario($usuario){

        $query = "SELECT * FROM usuario WHERE usuario_email = :usuario_email AND usuario_senha = :usuario_senha LIMIT 1";

        $statement = Connection::getConexao()->prepare($query);

        $statement->bindValue(":usuario_email",$usuario_email);
        $statement->bindValue(":usuario_id",$usuario_senha);

        return $statement->execute();
    }
    
    
    }



?>