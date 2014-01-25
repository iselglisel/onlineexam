<?php
class ExamDAO {
	public static function getQuestion($id){
		global $db;

		$sql = "SELECT questionnaire FROM question WHERE id ='{$id}'";
		$result = $db->query($sql);
		if ($result->num_rows > 0){
			$question = $result->fetch_assoc();
			$result->free();
			return $question;
		} else {
			return false;
		}
	}

	public static function getOption($id, $option){
		global $db;

		$sql = "SELECT opt1, opt2, opt3, opt4 FROM option where id = '{$id}'";
		$result = $db->query($sql);
		if($result){
			$row = $result->fetch_assoc();
			return $row['$opt1']. " " . $row['$opt2'] . " " . $row['$opt3'] . " " .$row['$opt4'];
		}else{
			return false;
		}
	}
	public static function getUser($email, $password){
		global $db;

		$sql ="SELECT * FROM registration WHERE email = '{$email}' AND pass = '{$password}'";
		$result = $db->query($sql);
		if ($result->num_rows > 0){
			$question = $result->fetch_assoc();
			$result->free();
			return true;
		}else{
			return false;
		}
	}

	public static function insert($fname, $lname, $email, $pass){
		global $db;

		$query = "INSERT INTO registration (fname, lname, email, pass) VALUES ('$fname','$lname','$email','$pass')";
		$result = $db->query($query);
		header('location:signIn.php');
		return $result;
	}























}