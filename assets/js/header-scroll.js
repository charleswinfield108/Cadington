(function () {
	var header = document.querySelector( 'header' );
	if ( ! header ) {
		return;
	}

	function onScroll() {
		if ( window.scrollY > 40 ) {
			header.classList.add( 'is-scrolled' );
		} else {
			header.classList.remove( 'is-scrolled' );
		}
	}

	window.addEventListener( 'scroll', onScroll, { passive: true } );
	onScroll();

	var toggle = document.querySelector( '.mobile-nav-toggle' );
	var nav = document.getElementById( 'primary-nav' );

	if ( toggle && nav ) {
		toggle.addEventListener( 'click', function () {
			var isOpen = nav.classList.toggle( 'is-open' );
			toggle.setAttribute( 'aria-expanded', isOpen ? 'true' : 'false' );
		} );

		nav.querySelectorAll( 'a' ).forEach( function ( link ) {
			link.addEventListener( 'click', function () {
				nav.classList.remove( 'is-open' );
				toggle.setAttribute( 'aria-expanded', 'false' );
			} );
		} );
	}
})();
