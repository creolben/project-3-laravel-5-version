<?php
if (isset($_POST["num"])) {
	$prNumber = cint($_POST["num"]);
}

$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs(5);
?>
