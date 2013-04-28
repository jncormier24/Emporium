$(function () {
	$( '#myTab a:first' ).tab( 'show' );	
})

$(function () {
	$( '#myTab a' ).click( function (e) {
		e.preventDefault();
		$( this ).tab( 'show' );
	})		
})

$(function () {
	$( '.dropdown-toggle' ).dropdown();		
})

$(function () {
	$( '#datepicker' ).datepicker();		
})