<?php 
include("templates/headerfooter.html"); 

if (!empty($_GET['action'])) { 
    $action = $_GET['action'];  
    $action = basename($action);  
		if (file_exists("templates/$action.html") 
			$action = "index"; 	
		 if ($action == 'headerfooter' ) 
        $action = "index"; 
	include("templates/$action.html");  
} else { 
    include("templates/index.html"); 
} 
