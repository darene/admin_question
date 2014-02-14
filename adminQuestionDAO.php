<?php 
class adminQuestionDAO{
	public static function viewListOfQuestion() {
		global $db;
		try{
			$query = "SELECT * FROM questionnaire";
			$result = $db->query($query);
			if ($result->num_rows > 0) {
				$records = array();
				while ($row = $result->fetch_assoc()) {
					$records[] = $row;
				}
				error_log("Successfully Get");
				return $records;
			}else {
				error_log("Unable to get Data");
				return false;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
		}

		return false;

	}

	public static function addQuestions($question, $a, $b, $c, $d ,$ans) {
		global $db;
		try{
			$query = "INSERT INTO questionnaire (question, a ,b, c, d, answer) VALUES ('{$question}', '{$a}','{$b}','{$c}','{$d}','{$ans}')";
			$result = $db->query($query);
			if ($result) {
				error_log("Successfully Added");
				return true;
			} else {
				error_log("Not Added");
				return false;
			}
		} catch (Exeption $e) {
			error_log($e->getMessage());
		}

		return false;
	}

	public static function deleteQuestion($id){
		global $db;
		try{
			$query = "DELETE FROM questionnaire WHERE question_id = '{$id}'";
			$result = $db->query($query);
			if ($result) {
				error_log("Successfully Deleted");
				return true;
			} else {
				error_log("Not Deleted");
				return false;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
		}

		return false;
	}

	public static function selectQuestion($id){
		global $db;
		try{
			$query = "SELECT * FROM questionnaire WHERE question_id = '{$id}'";
			$result = $db->query($query);
			if ($result->num_rows > 0) {
				$records = array();
				while ($row = $result->fetch_assoc()) {
					$records[] = $row;
				}
				error_log("Successfully Get");
				return $records;
			}else {
				error_log("Unable to get Data");
				return false;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
		}

		return false;
	}

	public static function updateQuestion($id, $question, $a, $b, $c, $d ,$ans) {
		global $db;
		try{
			$query = "UPDATE questionnaire SET question = '{$question}', a = '{$a}', b = '{$b}', c = '{$c}', d = '{$d}', answer = '{$ans}' WHERE question_id = '{$id}'";
			$result = $db->query($query);
			if ($result) {
				error_log("Successfully Updated");
				return true;
			} else {
				error_log("Not Updated");
				return false;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
		}

		return false;
	}

}
 ?>