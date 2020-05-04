/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
	var container, button, menu, links, i, len;

	container = document.querySelector('#main .left-nav');
	if ( ! container ) {
		return;
	}
	container.setAttribute( 'aria-expanded', 'false' );

	button = document.getElementById('main_menu_toggle');
	if ( 'undefined' === typeof button ) {
		return;
	}

	button_icon = document.getElementById('main_menu_hamburger_icon');
	if ( 'undefined' === typeof button_icon ) {
		return;
	}

	menu = container.querySelector('#site-navigation ul');

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	menu.setAttribute( 'aria-expanded', 'false' );
	if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
		menu.className += ' nav-menu';
	}

	button.onclick = function() {
		if ( container.getAttribute('aria-expanded') === 'true' ) {
			// container.className = container.className.replace( ' toggled', '' );
			container.setAttribute( 'aria-expanded', 'false' );
			button.setAttribute( 'aria-expanded', 'false' );
			menu.setAttribute( 'aria-expanded', 'false' );
			button_icon.className = button_icon.className.replace( ' fa-close', ' fa-bars' );
		} else {
			// container.className += ' toggled';
			container.setAttribute( 'aria-expanded', 'true' );
			button.setAttribute( 'aria-expanded', 'true' );
			menu.setAttribute( 'aria-expanded', 'true' );
			setTimeout(function(){
				button_icon.className = button_icon.className.replace( ' fa-bars', ' fa-close' );
			}, 0.3 * 1000); // this delay should match the .left-nav transition time in _core.js
		}
	};

	// Register submenu access
	(function(menu) {
		var parent_links = menu.querySelectorAll('.menu-item-has-children > a, .page_item_has_children > a');

		var toggleSubmenu = function(e) {
			// For touch. If the menu is not expanded, don't go to the target href
			if (e.type === 'click') {
				if (!this.classList.contains('focus')) {
					e.stopPropagation();
					e.preventDefault();
				} else {
					return;
				}
			}
			this.classList.toggle('focus');
		};

		for (var i = 0; i < parent_links.length; i++) {
			var parent_link = parent_links[i];
			var submenu_toggle_button = document.createElement('span');

			submenu_toggle_button.classList.add('fa', 'fa-caret-down', 'submenu-toggle-button');
			parent_link.appendChild(submenu_toggle_button);
			['mouseenter' , 'mouseleave', 'click'].forEach(function(e) {
				parent_link.parentNode.addEventListener(e, toggleSubmenu);
			})
		}
	})(menu);

} )();
