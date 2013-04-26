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

$(function () {
	'use strict';

    $('#fileupload').fileupload({
        dataType: 'json',
        url: 'server/php/',
        add: function (e, data) {
            data.context = $('<button/>').text('Upload')
                .appendTo(document.body)
                .click(function () {
                    data.context = $('<p/>').text('Uploading...').replaceAll($(this));
                    data.submit();
                });
        },
        done: function (e, data) {
            data.context.text('Upload finished.');
        }
        progressall: function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
	        $('#progress .bar').css(
	            'width',
	            progress + '%'
	        );
        }
    });
    $('#fileupload').fileupload('option', {
            maxFileSize: 5000000,
            acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
            process: [
                {
                    action: 'load',
                    fileTypes: /^image\/(gif|jpeg|png)$/,
                    maxFileSize: 20000000 // 20MB
                },
                {
                    action: 'resize',
                    maxWidth: 1440,
                    maxHeight: 900
                },
                {
                    action: 'save'
                }
            ]
        });
});
