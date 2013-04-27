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

/*$(function (){
	$( '#register' ).validate({
		rules: {
			inputEmail: {
				required: true,
				email: true
			},
			inputPassword: {
				required: true,
				minlength: 8
			}	
			retypePassword: {
				required: true,
				minlength: 8,
				equalto: #inputPassword
			}
		},
		messages: {
			inputEmail: "Please Enter a valid email.",
			inputPassword: "Please enter a valid email, between 8 and 15 characters.",
			retypePassword: "The passwords you have typed do not match."
		}
	});
});*/