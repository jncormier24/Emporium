$(function () {
	$( '#myTab a:first' ).tab( 'show' );	
});

$(function () {
	$( '#myTab a' ).click( function (e) {
		e.preventDefault();
		$( this ).tab( 'show' );
	})		
});

$(function () {
	$( '.dropdown-toggle' ).dropdown();		
});

$(function () {
	$( '#datepicker' ).datepicker();		
});

$(function () {
	$( '.delete' ).click( function () {
			alert( 'Are you sure you want to delete this?' );
		});
});
