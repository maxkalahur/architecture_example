<?php

// Simple function to handle PDO prepared statements
function sql($db, $q, $params = [], $return = null) {
  
  // Prepare statement
  $stmt = $db->prepare($q);
  
  // Execute statement
  $res = $stmt->execute($params);
  
  // Decide whether to return the rows themselves, or query status
  if ($return == "rows") {
    return $stmt->fetchAll();
  }
  else {
    return $res;
  }
}

function view($viewname, $data = []){
	
    include "views/header.php";
	if( file_exists( "views/$viewname.view.php" ) ) {
		include "views/$viewname.view.php";
	}
	
	// foreach( $data['categories'] as $category ) {
		// echo $category['title'].'<br/>';
	// }
	
	
}
