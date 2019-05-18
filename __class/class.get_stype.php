<?php
include("../__config/connect.php");
/**
 * 
 */
class GetStype extends DbConnect
{
	protected $plug;

	function __construct()
	{
		# code...
		$this->plug = mysqli_connect('localhost', 'root', '', 'wecare');
	}

	public function getTypes()
	{
		# get all the types
		$fetchTypes = "SELECT * FROM therapist_type";

		$result = mysqli_query($this->plug, $fetchTypes);

		if ($result) {
			# code...
			// echo "<select>";
			// echo "<option value=''>-- select --</option>";
			while ($row = mysqli_fetch_array($result)) {
				# code...
				echo "<input type='radio' value='".$row[1]."' name='stype'>";
			}
			// echo "</select>";
		}
	}
}

?>