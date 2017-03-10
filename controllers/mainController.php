<?php

if( $_action == 'main' ) {
	
	$categories = getCategories( $_db );

	view('main', ['categories' => $categories] );
}
