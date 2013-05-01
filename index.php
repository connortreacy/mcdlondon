<html>
  <head>
  </head>
  <body>
    <h1>Hello London</h1>
    <div id="fb-root"></div>
	<script>
	  window.fbAsyncInit = function() {
	    // init the FB JS SDK
	    FB.init({
	      appId      : '329433190516212',                        // App ID from the app dashboard
	      //channelUrl : '//WWW.YOUR_DOMAIN.COM/channel.html', // Channel file for x-domain comms
	      //status     : true,                                 // Check Facebook Login status
	      //xfbml      : true                                  // Look for social plugins on the page
	    });
	
	    console.log('FB Ready!');
	  };
	
	  // Load the SDK asynchronously
	  (function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = "//connect.facebook.net/en_US/all.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	</script>
  </body>
</html>