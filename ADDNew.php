<?php 

include_once('dbconfig.php');
include_once('adminQuestionDAO.php');
include_once('adminQuestionHandler.php');

$handler = new adminQuestionHandler();

$question = $_POST['question'];
$a =  $_POST['a'];
$b =  $_POST['b'];
$c =  $_POST['c'];
$d =  $_POST['d'];
$ans =  $_POST['answer'];
$result = $handler->addQuestions($question, $a, $b, $c, $d ,$ans);

if ($result) {
	echo "<script>alert('Succesfully Added');window.location.href='view.php'</script>";
} else {
	echo "<script>alert('Unsuccesfully Added');window.location.href='view.php'</script>";
}
	
 ?>