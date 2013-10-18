<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/style.css"rel="stylesheet" type="text/css" />
</head>

<body>
	<div>
		<?php
			include("config.php");
			$name = $_POST["name"];
			$qnum = $_POST["field_1"];

			$answer_query = "SELECT * FROM answers WHERE qnum='$qnum' ";
			$answer_query_result = mysql_query($answer_query);
			$answer_array = mysql_fetch_array($answer_query_result);
			$correct_answer = $answer_array['answer'];

			$submission = $_POST["field_2"];

			$column_3 = "";
			$column_4 = "";
			$column_5 = "";
			$column_6 = "";

			$insert_query = "INSERT INTO `c_cs147_lao793`.`dill` (`name`, `submission`, `column_3`, `column_4`, `column_5`, `column_6`) 
			           VALUES ('$name', '$submission', '$column_3', '$column_4', '$column_5', '$column_6') ";
			$insert_result = mysql_query($insert_query);

			$count_query = "SELECT * FROM dill WHERE name='$name' ";
			$count = mysql_num_rows(mysql_query($count_query));

		?>
		<p>
			name: <?php echo $name; ?>
			<br>
			<br>
			qnum: <?php echo $qnum; ?>
			<br>
			<br>
			user_answer: <?php echo $submission; ?>
			<br>
			<br>
			correct_answer: <?php echo $correct_answer; ?>
			<br>
			<br>
			num_tries: <?php echo $count; ?><br>
		</p>
   	</div>
</body>
</html>