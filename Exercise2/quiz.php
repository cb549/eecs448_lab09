<?php
$q1A = "Topeka";
$q2A = "1861";
$q3A = "Sunflower";
$q4A = "Bison";
$q5A = "2.9 Million";
$q1 = $_POST["question1"];
$q2 = $_POST["question2"];
$q3 = $_POST["question3"];
$q4 = $_POST["question4"];
$q5 = $_POST["question5"];
$question1 = $_POST["q1"];
$question2 = $_POST["q2"];
$question3 = $_POST["q3"];
$question4 = $_POST["q4"];
$question5 = $_POST["q5"];

function grade() {
	global $q1A, $q2A, $q3A, $q4A, $q5A, $q1, $q2, $q3, $q4, $q5;
	$g = 0;
	if ($q1A == $q1) {
		$g++;
	}
	if ($q2A == $q2) {
		$g++;
	}
	if ($q3A == $q3) {
		$g++;
	}
	if ($q4A == $q4) {
		$g++;
	}
	if ($q5A == $q5) {
		$g++;
	}
	return $g/5;
}

function results() {
	global $q1A, $q2A, $q3A, $q4A, $q5A, $q1, $q2, $q3, $q4, $q5, $question1, $question2, $question3, $question4, $question5;
	$grade = grade();
	echo "<p>" . $question1 . "<br>&nbsp;You Answered: " . $q1 . "<br>&nbsp;Correct Answer: " . $q1A . "<br>";
	echo "<p>" . $question2 . "<br>&nbsp;You Answered: " . $q2 . "<br>&nbsp;Correct Answer: " . $q2A . "<br>";
	echo "<p>" . $question3 . "<br>&nbsp;You Answered: " . $q3 . "<br>&nbsp;Correct Answer: " . $q3A . "<br>";
	echo "<p>" . $question4 . "<br>&nbsp;You Answered: " . $q4 . "<br>&nbsp;Correct Answer: " . $q4A . "<br>";
	echo "<p>" . $question5 . "<br>&nbsp;You Answered: " . $q5 . "<br>&nbsp;Correct Answer: " . $q5A . "<br>";
	echo "<p>" . $grade*5 . " correct.<br>" . $grade*100 . "%";
}
results();
?>
