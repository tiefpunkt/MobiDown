<?php
require_once("./lib/php-markdown/markdown.php");
require_once("./lib/htmlpurifier/library/HTMLPurifier.auto.php");
require_once("./lib/phpMobi/MOBIClass/MOBI.php");

// Without content, abort.
if (!isset($_POST["content"])) {
	echo "Error. No content.";
	exit();
}

// convert Markdown input to html
$dirty_html = Markdown($_POST["content"]);



// sanitize html
$config = HTMLPurifier_Config::createDefault();
$purifier = new HTMLPurifier($config);
$clean_html = $purifier->purify($dirty_html);

$full_html = "<html>\n<body>\n".$clean_html."\n</body>\n</html>";

// eBook options
$options = array(
    "title" => "Local document",
    "author" => "MobiDown",
    "subject" => "Subject"
);

//Create the MOBI object
$mobi = new MOBI();

//Set the data
$mobi->setData($full_html);
$mobi->setOptions($options);

//Save the mobi file locally
$mobi->download("MobiDown.mobi");
?>
