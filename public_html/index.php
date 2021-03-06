<?php 
	require_once(realpath(dirname(__FILE__) . "/../resources/config.php"));
	require_once(realpath(dirname(__FILE__) . "/../resources/functions.php"));


	require_once(TEMPLATES_PATH . "/header.php");

	// add comment to a database 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		insertCommentIntoDB($_POST["name"], $_POST["comment"]);
	}

	// get comments from a database
	$result = getCommentsFromDB();

	$comments = array();
	for ($i = 0; $i < $result->num_rows; $i++) {
		$comments[$i] = $result->fetch_assoc();
	}

 	render(TEMPLATES_PATH . "/main_page.php", array("commentList" => $comments));

	require_once(TEMPLATES_PATH . "/footer.php");

?>