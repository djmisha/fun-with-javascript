

//Gallery Popup
const isGallery = document.querySelector('body');
if (isGallery) {
  (function(){
		const get = function(selector) {
			return document.querySelector(selector);
		}

		const createMarkUp = function(elementType, classList, content) {
			const element = document.createElement(elementType);
			if(classList.length > 0) {
				element.classList = classList.join(' ');
			}
			if(content) {
				element.innerHTML = content;
			}
			return element;
		}

		const onCloseAddCookie = function() {
			const d = new Date();
	  	d.setTime(d.getTime() + (1*24*60*60*1000));
	  	const expires = "expires="+ d.toUTCString();
	  	const cookieName = 'rmg';
	  	const cookieValue = 'gallerypop';
	  	document.cookie = cookieName + "=" + cookieValue + ";" + expires + ";path=/";
			const activePopUp = get('.gallery-popup');
			activePopUp.classList.add('hidden');
		}

		const createAndShowGalleryPopup = function() {
			const innerContent = '<div class="popup-content"><h2>Notice</h2><p>Images are Graphic</p><button class="gallery-ok button" class="popupbtn button">OK</button></div>';
			const popup = createMarkUp('div', ['gallery-popup'], innerContent);
			const okBtn = popup.querySelector('.gallery-ok');
			okBtn.addEventListener('click', onCloseAddCookie);
			isGallery.appendChild(popup);
		}

		const cookiesAsAString = document.cookie;
		if(!cookiesAsAString.includes('gallerypop')) {
			createAndShowGalleryPopup();
			const galleryPopUp = get('.gallery-popup');
			galleryPopUp.classList.remove('hidden');
		}
	})();
}
