
<?php 
	require_once('DB.php');
	$db = new DB();
	$fields = $db->findAll();

	//echo DateTime('d/m/Y H:i:s');
	//echo $data = date("d-m-Y");
	date_default_timezone_set('America/Sao_Paulo');
	echo date('d-m-Y H:i:s');
/*	$db = new DB();
	//pega o retorno da procedure
	$med = $db->medias(2);
	//calcula o valor da porcentagem da media
	echo $med[0]->Valor / 100 ."%";
*/
	/*
	//CRIACAO DE PROCEDURE DE SOMA
	DELIMITER $
	CREATE PROCEDURE media(IN cod INT)
	BEGIN
	SELECT SUM(atendimento) + SUM(apresentacao) + SUM(limpesa) + SUM(nivel) + SUM(qualidade) as Valor from avaliacoes where id = cod;
	END
	$
	*/
	

 ?>