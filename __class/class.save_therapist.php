<?php

/**
 * 
 */
class Therapist
{
		protected $fullname;
		protected $email;
		protected $phone;
		protected $stype;
		protected $password;
		protected $plug;
	
	function __construct($fullname, $email, $phone, $stype, $password)
	{
		# code...
		$this->plug = mysqli_connect('localhost', 'root', '', 'wecare');

		$this->fullname = $fullname;
		$this->email = $email;
		$this->phone = $phone;
		$this->stype = $stype;
		$this->password = $password;
	}


	public function saveTherapistData()
	{
		// save data
		$saveData = "INSERT INTO therapist (fullname, email, phone, therapist_type, password, status) VALUES ('".$this->fullname."', '".$this->email."', '".$this->phone."', '".$this->stype."', '".$this->password."', 'offline')";
		$result = mysqli_query($this->plug, $saveData);
		
		if ($result) {
			# code...
			echo "<h5 style='color:green;'>Registration Successfull.</h5>";
		}else{

			echo "<h5 style='color:red;'>Registration Failed.</h5>";
		}
	}
}

?>