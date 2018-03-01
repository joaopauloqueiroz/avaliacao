<?php require_once('Config.php');
class Conection
{
	private static $instance;

	public static function getInstance()
	{
		if (!isset(self::$instance)) {
			try {
				self::$instance = new PDO('mysql:host='. HOSTNAME.';dbname='.DATABASE, USERNAME, PASSWORD);
				self::$instance->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				self::$instance->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
			} catch (PDOException $e) {
				echo $e->getMessage();
			}
		}
		return self::$instance;
	}

	public static function prepare($sql)
	{
		return self::getInstance()->prepare($sql);
	}

}

 /*SELECT SUM(apresentacao) + SUM(atendimento) + SUM(limpesa) + SUM(nivel) + SUM(qualidade) from avaliacoes where id = CODIGO END*/
?>