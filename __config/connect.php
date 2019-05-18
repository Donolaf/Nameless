
<?php
/**
* connect  to database 
*/


class DbConnect{

	protected $servername;
	protected $serveruser;
	protected $serverpass;
	protected $dbname;

	public function __construct($servername, $serveruser, $serverpass, $dbname){
		$this->servername = "localhost";
		$this->serveruser = "root";
		$this->serverpass = "";
		$this->dbname = "wecare";

	}

	public function connect()
	{
		$con = mysqli_connect($this->servername, $this->serveruser, $this->serverpass, $this->dbname);

		

		return $con;
	}

}

?>