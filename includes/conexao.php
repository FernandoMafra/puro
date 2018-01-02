<?php

ob_start();

class conexao
{
	var $host;
	var $user;
	var $senha;
	var $banco;
	function conecta_banco()
	{
		mysql_connect($this->host, $this->user, $this->senha) or die (mysql_error());
		mysql_select_db($this->banco) or die (mysql_error());
		mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
	}
}

 $objeto=new conexao;
 $objeto-> host="bd.srv.br";
 $objeto-> user="bdsrv_racio";
 $objeto-> senha="rtacs12#$";
 $objeto-> banco="bdsrv_racionalize";
 $objeto->conecta_banco(); 
 
 
$URLSite = "http://www.racionalize.com.br";


?>
