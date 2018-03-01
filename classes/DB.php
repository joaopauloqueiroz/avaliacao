<?php 
require_once('Conection.php');
class DB
{
	protected $table = 'ps_assessments';

	private $id;
	private $ps_first;
	private $ps_second;
	private $ps_third;
	private $ps_fourth;
	private $ps_fifth;
	private $ps_desc;
	private $ps_ped;
	private $ps_data;
	private $ps_installer;
	private $ps_soma;


		//getters e setters
	public function getPs_soma()
	{
		return $this->ps_soma;
	}

	public function setPs_soma($ps_soma)
	{
		return $this->ps_soma = $ps_soma;
	}


	public function getPs_installer()
	{
		return $this->ps_installer;
	}

	public function setPs_installer($ps_installer)
	{
		return $this->ps_installer = $ps_installer;
	}

	public function getPs_data()
	{
		return $this->ps_data;
	}

	public function setPs_data($ps_data)
	{
		return $this->ps_data = $ps_data;
	}

	public function getPs_ped()
	{
		return $this->ps_ped;
	}

	public function setPs_ped($ps_ped)
	{
		return $this->ps_ped = $ps_ped;
	}

	public function getPs_desc()
	{
		return $this->ps_desc;
	}

	public function setPs_desc($ps_desc)
	{
		return $this->ps_desc = $ps_desc;
	}

	public function getPs_fifth()
	{
		return $this->ps_fifth;
	}

	public function setPs_fifth($ps_fifth)
	{
		return $this->ps_fifth = $ps_fifth;
	}

	public function getPs_fourth()
	{
		return $this->ps_fourth;
	}

	public function setPs_fourth($ps_fourth)
	{
		return $this->ps_fourth = $ps_fourth;
	}

	public function getPs_third()
	{
		return $this->ps_third;
	}

	public function setPs_third($ps_third)
	{
		return $this->ps_third = $ps_third;
	}

	public function getPs_second()
	{
		return $this->ps_second;
	}

	public function setPs_second($ps_second)
	{
		return $this->ps_second = $ps_second;
	}
	public function getPs_first()
	{
		return $this->ps_first;
	}

	public function setPs_first($ps_first)
	{
		return $this->ps_first = $ps_first;
	}

		//function chama procedure para calculo de media;
	function medias($ids)
	{
		$sql = "CALL medias($ids)";
		$stmt = Conection::prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll();
	}

		//select teste no banco
	function findAll()
	{
		$sql = "SELECT * FROM $this->table";
		$stmt = Conection::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

		//inserir
	function insert()
	{
		$sql = "INSERT INTO $this->table (ps_first, ps_second, ps_third, ps_fourth, ps_fifth, 
		ps_desc, ps_ped, ps_data, ps_installer, ps_soma) VALUES (:ps_first, :ps_second,
		:ps_third, :ps_fourth, :ps_fifth, :ps_desc, :ps_ped, :ps_data, :ps_installer, :ps_soma)";
		$stmt = Conection::prepare($sql);
		$stmt->bindParam(':ps_first', $this->ps_first);
		$stmt->bindParam(':ps_second', $this->ps_second);
		$stmt->bindParam(':ps_third', $this->ps_third);
		$stmt->bindParam(':ps_fourth', $this->ps_fourth);
		$stmt->bindParam(':ps_fifth', $this->ps_fifth);
		$stmt->bindParam(':ps_desc', $this->ps_desc);
		$stmt->bindParam(':ps_ped', $this->ps_ped);
		$stmt->bindParam(':ps_data', $this->ps_data);
		$stmt->bindParam(':ps_installer', $this->ps_installer);
		$stmt->bindParam(':ps_soma', $this->ps_soma);

		return $stmt->execute();
	}
}
?>