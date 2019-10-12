
/* Attach Video on Homepage*/

function attachVideo() {
  var myVideoWrap = document.querySelector('.welcome .home-video');
      
  if(myVideoWrap) {
	  var theme_path = rm_data.tmplDirUri;
	  var mobileVideo ='video-mobile.mp4';
	  var desktopVideo ='video-desktop.mp4';
	  let thevid = "";

    if(window.innerWidth > 768) {
       thevid = desktopVideo;
    }
    else {
       thevid = mobileVideo;
    }

	myVideoWrap.innerHTML = createVideoMarkup(thevid);

  	function createVideoMarkup(item) {
  		let videoMarkup = '<video playsinline autoplay muted loop poster=\"' + theme_path + '/images/slide-1.jpg\" class=\"bgvid\"><source src=\"' + theme_path + '/images/' + item +'\" type=\"video/mp4\"></video>';
  		return videoMarkup;
  	}
  }
}
