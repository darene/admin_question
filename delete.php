<?php 

include_once('dbconfig.php');
include_once('adminQuestionDAO.php');
include_once('adminQuestionHandler.php');

$id = $_GET['id'];

$handler = new adminQuestionHandler();

$result = $handler->deleteQuestion($id);

if ($result) {
	echo "<script>alert('Succesfully Deleted');window.location.href='view.php'</script>";
} else {
	echo "<script>alert('Unsuccesfully Deleted');window.location.href='view.php'</script>";
}
	
 ?>