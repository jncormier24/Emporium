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
	$( '.delete' ).click( function () {
			alert( 'Are you sure you want to delete this?' );
		});
});

$(function () {
	$( '#retypeAnswer' ).blur(function(){
		if( $( 'inputAnswer' ).val() != $( 'retypeAnswer' ).val() ){
			alert( 'Answers are not the same' );
		}
	});
});
$(function () {
	$( '#retypePassword' ).blur(function(){
		if( $( 'inputPassword' ).val() != $( 'retypePassword' ).val() ){
			alert( 'Passwords are not the same' );
		}
	});		
});
