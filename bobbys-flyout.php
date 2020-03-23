
<!-- Setup -->
<script type="text/javascript">

	// POPup ****************************************************************************

	// Set to false if not using popup.
  const usePopUp = true;


	// Cookie setup - required for cookie
	// leave as '' if no cookie is requred.
	// const cookieValue = 'covid';
	const cookieValue = '';

	// Popup markup/content
	// add the class .close-popup to elements to close the popup and add cookie.
	// double check your markup - watch for double calss attributes.
	// if uisng an image use rm_data.siteUrl for the path ex:
	// rm_data.siteUrl/
	const popUpContent = '<h2>Health Notice:</h2><p>Add some words...</p><div><a href="#0" class="close-popup button">Click Here</a></div>';

	// End Popup *************************************************************************

	// Flyout ****************************************************************************

	// Set to false for no flyout
	const addFlyout = true;

	// Flyout Label
	const flyoutLabel = 'Notice test';

	// Flyout markup/content
	// double check your markup - watch for double calss attributes.
	const flyoutContent = 'Adding words and markup';
	// const flyoutContent = '<img alt="test" src="'+ rm_data.tmplDirUri + '/images/test.jpg">';

	// add link ex: https://www.bella-dermamedispa.com/contact-us/
	const flyoutLink = '#0';

	// console.log(rm_data.tmplDirUri + '/images/test.jpg');

	// End Flyout ************************************************************************

</script>



<!-- ================================
=            Styles                 =
================================= -->

<style>

	/*----------  POPup  -------------*/
	.rm-active-popup {
	  position: fixed;
	  top: 0;
	  bottom: 0;
	  left: 0;
	  right: 0;
	  display: -webkit-box;
	  display: -ms-flexbox;
	  display: flex;
	  -webkit-box-pack: center;
	      -ms-flex-pack: center;
	          justify-content: center;
	  -webkit-box-align: center;
	      -ms-flex-align: center;
	          align-items: center;
	  background-color: rgba(0, 0, 0, 0.8);
	  z-index: 99999;
	  overflow-Y: scroll;
	}

	.rm-active-popup .popup-content {
	  background-color: #fff;
	  color: #000;
	  margin: auto;
	  padding: 40px;
	/*   text-transform: uppercase; */
	  max-width: 1000px;
	  position: relative;
	  text-align: left;
	}

	@media only screen and (min-width: 768px) {
	  .rm-active-popup .popup-content {
	    padding: 40px 175px;
	  }
	}

	.rm-active-popup .popup-content button.close-top-right-btn {
	  position: absolute;
	  top: 0;
	  right: 0;
	  background: #000;
	  color: #fff;
	  font-size:  20px;
	  padding: 5px 10px;
	  border: none;
	}

	.rm-active-popup .popup-content h2 {
	  color: #000;
	  margin-top: 0;
	  text-align: center;
	  text-transform: uppercase;
	}

	.rm-active-popup .popup-content button.close-top-right-btn  {
	  margin: 0 auto;
	  display: block;
	}


	.rm-active-popup .popup-content button.close-top-right-btn {
	  position: absolute;
	  top: 0;
	  right: 0;
	  background: #1a1a1a;
	  color: #fff;
	  font-size:  18px;
	  padding: 0;
	  border-radius: 20px;
	  margin: 10px;
	  height: 30px;
	  width: 30px;
	  line-height: 24px;
	}
	/*---------- End POPup  ----------*/


	/*---------  Flyout  -------------*/
	.rm-flyout {
	  position: fixed;
	  bottom: 20%;
	  z-index: 110;
	  right: 0;
	  transition: right .7s cubic-bezier(.68,-0.55,.27,1.55);
	  width: 320px;
	  display: flex;
	  align-items: flex-start;
	}

	.rm-flyout.closed {
	  right: -295px;
	}

	.rm-flyout .flyout-label {
		padding: 10px 0;
		line-height: 100%;
		background-color: blue;
		color: #fff;
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		width: 25px;
		position: relative;
		height: 100%;
	}

	.rm-flyout .flyout-label span {
		display: block;
		min-height: 1em;
	}

	.rm-flyout .flyout-content {
	  position: relative;
	  text-decoration: none;
	  padding: 10px;
	  width: 300px;
	  /* background-image: url(''); *//*  Add bg image if needed */
	  background-color: gray;
	  color: #fff;
	  display: flex;
	  justify-content: center;
	  align-items: center;
	}

	.rm-flyout .fixed-close {
	  position: absolute;
	  top: 0;
	  font-size: 16px;
	  transform: translateY(-50%);
	  right: 5px;
	  border-radius: 50%;
	  width: 30px;
	  height: 30px;
	  display: flex;
	  justify-content: center;
	  align-items: center;
	}

	/*---------- End Flyout  ---------*/

</style>

<!-- =================================
=           Styles End               =
================================== -->


<!-- Beginning of JS Add content/markup -->
<!-- =================================
=            JS Start                =
================================== -->
<script type="text/javascript">

// // Set to false for no flyout ********************************
// const addFlyout = 'true';


const bodyTag = document.querySelector('body');
if(bodyTag) {
	(function() {

	/*----------  Helper Functions  ----------*/

	// Helper get function
	const get = function(selector) {
		// console.log(document.querySelector(selector));
		return document.querySelector(selector);
	}
	// End Helper get function


	// Helper create markup function
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
	// End Helper create markup function

	/*----------  End Helper Functions  ----------*/

	// ============ JS POPup  ============

			// ****************************************************************************
			// Cookie setup - required for cookie
			// leave as '' if no cookie is requred.
			// const cookieValue = 'covid';
			// const cookieValue = 'test2';

			// Popup markup/content
			// add the class .close-popup to elements to close the popup and add cookie.
			// double check your markup - watch for double calss attributes.
			// const popUpContent = '<h2>Health Notice:</h2><p>Add some words...</p><div><a href="#0" class="close-popup button">Click Here</a></div>';
			// End Popup markup/content
			// ****************************************************************************

			if(usePopUp) {

				// Add cookies and close popup
				const onCloseAddCookie = function() {

					// check if cookie is being used
					if(cookieValue !== '') {
						const d = new Date();
						d.setTime(d.getTime() + (1*24*60*60*1000));
						const expires = "expires="+ d.toUTCString();
						document.cookie = 'rmpopup' + "=" + cookieValue + ";" + expires + ";path=/";
					}

					const activePopUp = get('.rm-active-popup');
					if(activePopUp) {
						activePopUp.style.display = 'none';
					}
				}
				// End Add cookies and close popup


				// Create and show popup
				const createAndShowRmPopup = function() {
					const popUpHTML = '<div class="popup-content"><button class="close-popup close-top-right-btn">X</button>'+ popUpContent +'</div>';
					const popup = createMarkUp('div', ['rm-active-popup'], popUpHTML);
					const closeButtons = popup.querySelectorAll('.close-popup');

					if(closeButtons.length > 0) {
						closeButtons.forEach(function(button) {
							button.addEventListener('click', onCloseAddCookie)
						});
					}

					bodyTag.appendChild(popup);
				}
				// End Create and show popup


				// Init/start popup

				// If cookie is in use
				if(cookieValue !== '') {

					const cookiesAsAString = document.cookie;
					if(!cookiesAsAString.includes(cookieValue)) {
						createAndShowRmPopup();
					}

				} else {
					createAndShowRmPopup();
				}
			} // End if usePopup

			// End Init/start popup


		// ========  End of JS POPup  =======
		//  *****************************
		// ==========  JS Flyout  ===========


		if(addFlyout) {

			// ****************************************************************************
			// const flyoutLabel = 'Notice';

			// Flyout markup/content
			// double check your markup - watch for double calss attributes.
			// const flyoutContent = 'Adding words and markup';

			// add link ex: https://www.bella-dermamedispa.com/contact-us/
			// const flyoutLink = '#0';
			// ****************************************************************************


			// Create and show the flyout
			const createAndShowFlyout = function() {
				const flyoutHTML = '<div class="flyout-label close-flyout">'+ flyoutLabel +'</div><a class="flyout-content" href="'+ flyoutLink +'" ><button class="close-flyout fixed-close">X</button>'+ flyoutContent + '</a>';
				const flyout = createMarkUp('div', ['rm-flyout closed'], flyoutHTML);
				const closeFlyoutBtns = flyout.querySelectorAll('.close-flyout');

				if(closeFlyoutBtns.length > 0) {
					closeFlyoutBtns.forEach(function(button) {
						button.addEventListener('click', toggleFlyout)
					});
				}
				bodyTag.appendChild(flyout);
			}
			// Create and show the flyout

			// Label adjustments
			const adjustLabel = function() {
				const flyLabel = document.querySelector('.rm-flyout .flyout-label');
				const flyLabelText = flyLabel.innerText;
				const flyLabelTextArray = flyLabelText.split('');
				const flyLabelMarkup = flyLabelTextArray.map(function(letter) {
					return '<span>'+ letter +'</span>'
				});

				flyLabel.innerHTML = flyLabelMarkup.join('');
			}


			// Toggle Flyout
			const toggleFlyout = function() {
				if(rmFlyout.classList.contains('closed')) {
					rmFlyout.classList.remove('closed');
				} else {
					rmFlyout.classList.add('closed');
				}
			}
			// Toggle Flyout

			// Close Flyout
			const closeFlyout = function() {
				rmFlyout.classList.add('closed');
			}
			// End Close Flyout


			// Init/start
			createAndShowFlyout();

			// Select Flyout
			const rmFlyout = get('.rm-flyout');

			// On load after flyout is attached to DOM Open flyout.

			if(rmFlyout.classList.contains('closed')) {
				setTimeout(function(){rmFlyout.classList.remove('closed'); }, 1000);
			}

			adjustLabel();

			window.addEventListener('scroll', closeFlyout);

			const adjustFlyoutHeight = function() {
				const flyLabel = document.querySelector('.rm-flyout .flyout-label');
				const flyContent = document.querySelector('.rm-flyout .flyout-content');

				if(flyLabel.offsetHeight < flyContent.offsetHeight) {
					flyLabel.style.height = flyContent.offsetHeight + 'px';
				} else {
					flyContent.style.height = flyLabel.offsetHeight + 'px'
				}
			}

			adjustFlyoutHeight();


		} // End addFlyout


		// ======  End of JS Flyout  ========


	})() // end private scope
} // Endif bodyTag

//  ====================================
// =            JS End                 =
// =====================================

</script>
