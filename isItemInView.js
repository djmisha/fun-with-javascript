// General function to see if an element is in view.
		function isItemInView(element) {
			const itemsTopPositionInWindow = element.getBoundingClientRect().top;
			const windowHeight = window.innerHeight;

			if (windowHeight >= itemsTopPositionInWindow) {
				return true;
			} else {
				return false;
			}
		}

		// General function to add a class to a provided element.
		function addClass(element, classToAdd) {
			element.classList.add(classToAdd);
		}

		// General function to remove a class to a provided element.
		function removeClass(element, classToRemove) {
			element.classList.remove(classToRemove);
		}
