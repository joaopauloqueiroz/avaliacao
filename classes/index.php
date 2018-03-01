<?php
require_once('DB.php');
$db = new DB();
$soma  = ($_POST['pergunta1'] + $_POST['pergunta2'] + $_POST['pergunta3'] + $_POST['pergunta4'] + $_POST['pergunta5']);
date_default_timezone_set('America/Sao_Paulo');
$db->setPs_first($_POST['pergunta1']);
$db->setPs_second($_POST['pergunta2']);
$db->setPs_third($_POST['pergunta3']);
$db->setPs_fourth($_POST['pergunta4']);
$db->setPs_fifth($_POST['pergunta5']);
$db->setPs_desc($_POST['pergunta6']);
$db->setPs_ped($_POST['npedido']);
$db->setPs_data(date('d-m-Y H:i:s'));
$db->setPs_installer('');
$db->setPs_soma($soma);
$db->insert();
//redirect para pagina de agradecimento
header('location: ../done');
