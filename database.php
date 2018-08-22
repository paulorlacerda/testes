<?php

mysqli_report(MYSQLI_REPORT_STRICT);

function open_database() {
	try {
		$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		return $db;
	} catch (Exception $e) {
		echo $e->getMessage();
		return null;
	}
}

function close_database($db) {
	try {
		mysqli_close($db);
	} catch (Exception $e) {
		echo $e->getMessage();
    }
}    