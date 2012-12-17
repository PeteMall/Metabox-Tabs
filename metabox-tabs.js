jQuery( document ).ready( function( $ ) {
	context = $( '#test' );
	$( '.wp-tab-bar', context ).show();
	$( '.wp-tab-bar li:first-child', context ).addClass( 'wp-tab-active' );
	$( '.wp-panel-heading', context ).remove();
	$( '.wp-tab-panel', context ).hide();
	$( '.wp-tab-panel', context ).first().show();
	$( '.wp-tab-bar a', context ).click( function( event ){
		event.preventDefault();
		$( '.wp-tab-active', context ).removeClass( 'wp-tab-active' );
		$( this ).parent().addClass( 'wp-tab-active' );
		$( '.wp-tab-panel', context ).hide();
		$( $( this ).attr( 'href' ) ).show();
	});
});