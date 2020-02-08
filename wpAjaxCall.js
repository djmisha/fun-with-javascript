

function requestPostsAndAttachtoPage(category, numberofposts) {

	const http = new XMLHttpRequest();
	const url = 'https://sandiegohousemusic.com/wp-json/wp/v2/posts?category=' + category + '&per_page=' + numberofposts;
	http.open('GET', url);
	http.send();

	http.onreadystatechange= function() {
		if(http.readyState === XMLHttpRequest.DONE && http.status === 200) {
			var PostResponce = JSON.parse(http.responseText);
			parseData(PostResponce);
		}
	}
	
	function parseData(data) {
		for ( let i = 0; i < data.length; i++) {
			let postID = data[i].id;
			let postTitle = data[i].title.rendered;
			let postURL = data[i].link;
			let postIMG = data[i].jetpack_featured_media_url;

			var pageElement = document.createElement('div');
			pageElement.classList.add('parsed__post');

			pageElement.innerHTML = '<a class=\"\" href=\"' + postURL + '\"><img src=\"' + postIMG + '\"><span>' + postTitle + '</span></a>';
			
			document.body.appendChild(pageElement);
			setTimeout(function(){
				pageElement.classList.add('active');
			},2000);
		}
	}
}


/*Fire Off Featured Post slide in */
if (document.body.classList.contains('home')) { // only do on homepage
	setTimeout(function() {
		requestPostsAndAttachtoPage('music', 1); // post requested after 30 seconds 
	}, 30000);
}



