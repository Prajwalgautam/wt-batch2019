<?php
class DbConfig
{
	public $host="localhost";
	public $uname="root";
	public $pass="";
	public $dbname="clipboard";

	protected $connection;
	function __construct()
	{
		if (!isset($this->connection))
		{
			$this->connection=new mysqli($this->host,$this->uname,$this->pass,$this->dbname);
			if (!$this->connection) 
			{
				echo "error db connection";
			}
        }
		return $this->connection;
	}
}
