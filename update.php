<?php 

include_once('dbconfig.php');
include_once('adminQuestionDAO.php');
include_once('adminQuestionHandler.php');

$id = $_GET['id'];
$handler = new adminQuestionHandler();

$results = $handler->selectQuestion($id);
?>

<form method = "POST" action = "updated.php">
	<?php foreach($results as $value): ?>
	 <input type = 'hidden' name = 'id' value = "<?=$value['question_id']?>">
	 <label>Number:<b><?=$value['question_id']?></b></label><br>
	Question: <input type = 'text' name = 'question' value = "<?=$value['question']?>"><br>
	A: <input type = 'text' name = 'a' value = "<?=$value['a']?>"><br>
	B: <input type = 'text' name = 'b' value = "<?=$value['b']?>"><br>
	C: <input type = 'text' name = 'c' value = "<?=$value['c']?>"><br>
	D: <input type = 'text' name = 'd' value = "<?=$value['d']?>"><br>
	Answer: <input type = 'text' name = 'answer' value = "<?=$value['answer']?>"><br>
	<input type = "submit" value = "Submit">
	<?php endforeach ?>
</form>