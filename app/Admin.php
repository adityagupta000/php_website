<?php
class Admin extends Main
{
	protected $id;
	public function cud($res,$message){
		try {
			$stmt = $this->conn->prepare($res);
			$stmt->execute();

			$_SESSION['success_message'] = "Successfully ".$message;
			return true;
		} catch (PDOException $e) {
			echo $e->getMessage();
			$_SESSION['error_message'] = "Sorry  still not ".$message;
			return false;
		}
	}
	public function ret($stmt){
		$stmt = $this->conn->prepare($stmt);
		$stmt->execute();
		return $stmt;	
	}
}
?>