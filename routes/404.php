<?php
	respond(404, function ($request, $response, $app) {
		die( new dbug( $request ) );
	    $response->layout('404.tpl');
	});	
