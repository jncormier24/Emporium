<?php
	respond('404', function ($request) {
	    $page = $request->uri();
		    echo "Oops, it looks like $page doesn't exist..\n";
	});	
