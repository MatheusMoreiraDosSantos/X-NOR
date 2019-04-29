<?php
    include_once "../domain/usuario.php";
    include_once "../dao/UsuarioDAO.php";

    if($_POST["operacao"] == "salvar"){
		
		$usuario = new Usuario();
		$usuario->setId(1);
		$usuario->setNome( $_POST['nome']);
		$usuario->setEmail($_POST['email']);
		$usuario->setRua($_POST['rua']);
		$usuario->setBairro($_POST['bairro']);
		$usuario->setCidade($_POST['cidade']);
		$usuario->setNumero($_POST['numero']);
		$usuario->setCep($_POST['cep']);
		$usuario->setTelefone($_POST['telefone']);
		$usuario->setSenha($_POST['senha']);
    
		$dao = new dao();

		$dao->salvarUsuario($usuario);              
		
		echo "ok";
    }else if($_POST["operacao"] == "listar"){
		$dao = new dao();
		$dados = $dao->listarUsuario();
		echo json_encode($dados);
	
	}
// se o usuario clicar em entrar ira entrar nesta condição, executando a função consultaUsuario -> UsuarioDAO.php
	if($_POST["operacao"] == "entrar"){
		
		$usuario = new Usuario();
	//$usuario->setId(1);
		
		$usuario->setEmail($_POST['usuario_email']);
		$usuario->setSenha($_POST['usuario_senha']);
    
		$dao = new dao();

		$dao->consultaUsuario($usuario);              
		
		echo "ok";
    }
		
    


?>
