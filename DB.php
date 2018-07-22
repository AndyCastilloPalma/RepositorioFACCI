<?php
class DB
{
	private $pdo;
	public $result;
	public function __CONSTRUCT()
	{
		try
		{
			//$this->pdo = new PDO('mysql:host=144.217.194.158;dbname=fblearnc_rocke_cantos', 'fblearnc_rocke', 'd+]l67@pNGLx');
			$this->pdo = new PDO('mysql:host=localhost;dbname=repositorio', 'root', '');
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->pdo->exec("set names utf8");     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar($sentencia)
	{
		try
		{
			$this->result=Array();
			$stm = $this->pdo->prepare($sentencia);
			$stm->execute();
			$this->result = $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Ejecutar($sentencia)
	{
	    try
		{
			$stm = $this->pdo->prepare($sentencia);
			$stm->execute();
			return true;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
}