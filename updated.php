<?php 

include_once('dbconfig.php');
include_once('adminQuestionDAO.php');
include_once('adminQuestionHandler.php');

$id = $_POST['id'];
$question = $_POST['question'];
$a =  $_POST['a'];
$b =  $_POST['b'];
$c =  $_POST['c'];
$d =  $_POST['d'];
$ans =  $_POST['answer'];

$handler = new adminQuestionHandler();

$result = $handler->updateQuestion($id, $question, $a, $b, $c, $d ,$ans);

if ($result) {
	echo "<script>alert('Succesfully Updated');window.location.href='view.php'</script>";
} else {
	echo "<script>alert('Unsuccesfully Updated');window.location.href='view.php'</script>";
}