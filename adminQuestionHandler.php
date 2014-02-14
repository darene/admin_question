<?php 
class adminQuestionHandler{

	public function viewListOfQuestion() {
		$result = adminQuestionDAO::viewListOfQuestion();

		if (empty($result)) {
			return false;
		}

		return $result;
			
	}

	public function addQuestions($question, $a, $b, $c, $d ,$ans) {
		if (empty($question)) {
			return false;
		}


		if (empty($a)) {
			return false;
		}
		if (empty($b)) {
			return false;
		}
		if (empty($c)) {
			return false;
		}
		if (empty($d)) {
			return false;
		}
		if (empty($ans)) {
			return false;
		}

		$result = adminQuestionDAO::addQuestions($question, $a, $b, $c, $d ,$ans);

		return $result;
	}

	public function deleteQuestion($id) {
		if (empty($id)) {
			return false;
		}

		$result = adminQuestionDAO::deleteQuestion($id);

		return $result;
	}

	public function selectQuestion($id) {
		if (empty($id)) {
			return false;
		}

		$result = adminQuestionDAO::selectQuestion($id);

		if (empty($result)) {
			return false;
		}

		return $result;
	}

	public function updateQuestion($id, $question, $a, $b, $c, $d ,$ans) {
		if (empty($id)) {
			return false;
		}
		if (empty($question)) {
			return false;
		}

		if (empty($a)) {
			return false;
		}
		if (empty($b)) {
			return false;
		}
		if (empty($c)) {
			return false;
		}
		if (empty($d)) {
			return false;
		}
		if (empty($ans)) {
			return false;
		}

		$result = adminQuestionDAO::updateQuestion($id, $question, $a, $b, $c, $d ,$ans);

		return $result;
	}
}
 ?>