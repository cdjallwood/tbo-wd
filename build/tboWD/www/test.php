<?php

$_CONFIG = array(
	"TICKET_URL" => "http://www.eventbrite.co.uk/e/the-business-of-web-design-2014-tickets-8973390653",
	"TWITTER_USERNAME" => "tboWebDesign",

	"SPEAKERS" => array(
		"PAUL_BOAG" => array(
			"TITLE" => "Educating Clients to Say Yes",
		),
		"Joel" => array(
			"TITLE" => "Educating Clients to Say Yes",
		)
	)

);


foreach ($_CONFIG["SPEAKERS"] as $k => $v){
	echo $v["TITLE"];
	exit;
}

?>