<?php
include_once "./lib/php-markdown/markdown.php";
include_once("./lib/phpMobi/MOBIClass/MOBI.php");

if (!isset($_POST["content"])) {
	echo "Error. No content.";
	exit();
}

$html = "<html><body>".Markdown($_POST["content"])."</body></html>";

$options = array(
    "title" => "Local document",
    "author" => "MobiDown",
    "subject" => "Subject"
);

//Create the MOBI object
$mobi = new MOBI();

//Set the data
$mobi->setData($html);
$mobi->setOptions($options);

//Save the mobi file locally
$mobi->download("MobiDown.mobi");
?>
