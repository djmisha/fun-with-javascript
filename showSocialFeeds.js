
/* Load Social Feeds */

function showSocialFeeds() {

	var socialMedia = {
		twitter: {
			link: 'feed-twitter.html',
			btnclass: 'fa-twitter'
		},
		facebook: {
			link: 'feed-facebook.html',
			btnclass: 'fa-facebook'
		},
		instagram: {
			link: 'feed-instagram.html',
			btnclass: 'fa-instagram'
		},
	};	

	var feedURL = 'https://sandiegohousemusic.com/wordpress/wp-content/themes/sandiegohousemusic/';
	var socialButtons = document.querySelectorAll('.get-social a i');
	var feedWrapper = document.querySelector('.social-feed');
	var feedFrame = document.querySelector('.social-feed .the-feed iframe'); 
	var feedClose = document.querySelector('.close-feed');

	for ( let i = 0; socialButtons.length > i ; i++) {
		socialButtons[i].addEventListener('click', function(event) {
			showFeed(event.target);
		})
	}

	function showFeed(icon){
		var activeIcon = document.querySelector('i.active');
		if(activeIcon) {
			activeIcon.classList.remove('active');
		}
		icon.classList.add('active');
		var iconName = icon.dataset.name;
		feedFrame.src = feedURL + socialMedia[iconName].link;
		feedWrapper.classList.add('active');
	}


	function closeFeed(icon) {
		feedWrapper.classList.remove('active');
		icon.classList.remove('active');
	}
	
	feedClose.addEventListener('click', function(event) {
		event.preventDefault;
		feedWrapper.classList.remove('active');
		var activeIcon = document.querySelector('i.active');
		closeFeed(activeIcon);
	})

};

showSocialFeeds();
