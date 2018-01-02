<?php 
	function mandaEmail($mensagem,$assunto,$xmail){
			$headers = "MIME-Version: 1.1\n".
			"Content-type: text/html; charset=utf-8\n".
			"From:novocontato@racionalize.com.br \n".
			"Return-Path:israel@racionalize.com.br\n";
			
			mail( $xmail, $assunto, $mensagem, $headers,"-r israel@racionalize.com.br");	
	
	}
	include "includes/conexao.php";
	
	$first_name = addslashes( $_POST['first_name']);
	$email =  addslashes( $_POST['email']);
	$comments =  addslashes( $_POST['comments']);
	$dataH = date('Y-m-d H:i:s');
	$ip = $_SERVER['REMOTE_ADDR'];
	
	$sucesso = mysql_query("INSERT INTO contatos SET nome='$first_name', email='$email', comentario='$comments', dataHora='$dataH', ip='$ip'");
	
	if($sucesso){
		echo 'sim';
		$mensagem = "<p><b>NOME:</b> ".$first_name."</p>";
		$mensagem .= "<p><b>EMAIL:</b> ".$email."</p>";
		$mensagem .= "<p><b>COMENTÁRIO: </b> ".$comments."</p>";
		
		mandaEmail($mensagem,"Novo contato recebido em Racionalize.com.br","comercial@racionalize.com.br");
		mandaEmail($mensagem,"Novo contato recebido em Racionalize.com.br","israel@racionalize.com.br");
		
	}else{
		echo 'nao';
	}

?>