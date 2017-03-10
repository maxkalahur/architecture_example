<?php

function getCategories( $_db ) {
	
	$res = sql( $_db, 'SELECT * FROM `categories`', [], 'rows' );
	
	return $res;
}