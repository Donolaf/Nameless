<?php
include("../__config/connect.php");
/**
 * 
 */
class SaveType extends DbConnect
{
	protected $plug;
	protected $sname;
	
	public function __construct($sname)
	{
		# code...
		//static::__construct();

		$this->plug = mysqli_connect('localhost', 'root', '', 'wecare');

		$this->sname = $sname;
	}

	public function saveSpecialization()
	{

		// insert type
		$SaveType = " INSERT INTO therapist_type(type) VALUES('".$this->sname."') ";

		$saveData = mysqli_query($this->plug, $SaveType);

		if ($saveData) {
			# code...
			echo  "<h5 style='color:green'>Specialization Saved Successfully.</h5>";
		}else{

			echo  "<h4 style='color:red'>Sorry, an error occurred. kindly try again later.</h4>";
		}
	}

}


?>