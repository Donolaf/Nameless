<?php
include("../__config/connect.php");
/**
 * 
 */
class AdminLogin extends DbConnect
{
	protected $plug;
	protected $username;
	protected $password;
	
	public function __construct($username, $password)
	{
		# code...
		//static::__construct();

		$this->plug = mysqli_connect('localhost', 'root', '', 'wecare');

		$this->username = $username;
		$this->password = $password;
	}

	public function login()
	{

		// validate username
		$validateUsername = "SELECT * FROM admin WHERE username = '".$this->username."'  ";

		$result = mysqli_query($this->plug, $validateUsername);
		
		$output = mysqli_num_rows($result);	

		if ($output < 1) {
			# code...
			echo  "<h2 style='color:red'>Sorry invalid login details</h2>";
		}else{

			$_SESSION['admin'] = $this->username;

			echo "<script>
					window.location.href = 'index.php'
			</script>";
		}
	}

}


?>