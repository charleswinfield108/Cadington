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
})();
