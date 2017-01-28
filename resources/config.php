<?php
/*
 * GuildWeb - A big project with a boring name.
 * I'll probably come up with some story here that will be heart touching.
 *
 * DON'T COPY MY SOURCE CODE WITHOUT MENTIONING MY NAME.
 */

$config = array(
	"db" => array(
		"db_host" => "",
		"db_user" => "",
		"db_pass" => "",
		"db_name" => ""
		)
	);

/* Creating some constant paths for easy usage. */
defined("LIBRARY_PATH")
	or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));

defined("TEMPLATES_PATH")
	or define("TEMPLATE_PATH", realpath(dirname(__FILE__) . '/templates'));

/* Temporary error reporting, change to lower level after development! */
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRICT);

?>