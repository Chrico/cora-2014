/*! init the sly-slider */
( function( $ ){
	$( '.sly' ).each( function() {
		var _self	= $( this ),
			_parent = _self.parent(),
			_prev		= _parent.find( '.sly-nav-lt' ),
			_next		= _parent.find( '.sly-nav-gt' )
		;

		_self.sly( {
			itemSelector: '.category-teaser',
			horizontal: true,
			speed:500,
			dynamicHandle: true,
			clickBar: true,
			mouseDragging: true,
			touchDragging: true,
			smart: true,
			itemNav: 'basic',
			// Buttons
			prevPage: _prev,
			nextPage: _next
		} );
	} );
} )( jQuery  );