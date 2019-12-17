var sPosts = document.querySelectorAll('[data-post-date]');

for(var i =0; i < sPosts.length; i++) {
	var post = sPosts[i];
	var postDate = parseInt(post.getAttribute('data-post-date'));
	var currentDate = Math.floor((new Date()).getTime() / 1000);

	if(postDate > currentDate) {
		var parent = post.parentElement
		
		parent.removeChild(post);
	}
}