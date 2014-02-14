<?php 
include_once('dbconfig.php');
include_once('adminQuestionDAO.php');
include_once('adminQuestionHandler.php');

$handler = new adminQuestionHandler();

$results = $handler->viewListOfQuestion();


?>


<html>
<head>
	<title>Questions</title>
</head>
<body>
	<b><a href="addQuestion.php">Add Question</a></b>
	<table>
		<tr>
			<td>No.</td>
			<td>Question</td>
			<td>Choice A</td>
			<td>Choice B</td>
			<td>Choice C</td>
			<td>Choice D</td>
			<td>Answer</td>
			<td>Actions</td>
		</tr>
		<?php foreach ($results as $value): ?>
			<tr>
				<td><?= $value['question_id']?></td>
				<td><?= $value['question']?></td>
				<td><?= $value['a']?></td>
				<td><?= $value['b']?></td>
				<td><?= $value['c']?></td>
				<td><?= $value['d']?></td>
				<td><?= $value['answer']?></td>
				<td><a href="update.php?id=<?= $value['question_id']?>">Edit</a>
					<a href="delete.php?id=<?= $value['question_id']?>">Delete</a>
					</td>
			</tr>
		<?php endforeach ?>
	</table>
</body>
</html>