<?php include('../includes/head.php'); ?>


<div class="apply_left">
	<h1>Apply to join Start Tank</h1>
<p>Now accepting applications to Start Tank.</p>
<p>*Required</p>
<p></p>
<?php include('../includes/applicationform.php'); ?>
<?php /*
*************
SOCIAL
*************
*/?>

    
   <div id="fb-root"></div>
	
	<!-- USE 'Asynchronous Loading' version, for IE8 to work
	http://developers.facebook.com/docs/reference/javascript/FB.init/ -->
	
	<script>
	  window.fbAsyncInit = function() {
		FB.init({
		  appId  : '266142503590514',
		  status : true, // check login status
		  cookie : true, // enable cookies to allow the server to access the session
		  xfbml  : true  // parse XFBML
		});
	  };
	
	  (function() {
		var e = document.createElement('script');
		e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
		e.async = true;
		document.getElementById('fb-root').appendChild(e);
	  }());
	</script>
	
<div id="socialcontainer">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
   <div class="blue"><h2>Share Via Facebook Twitter LinkedIn</h2> </div>
	
    <ul id="social">
    <li>
    
	<img id = "share_button" src="https://where-spotlight.s3.amazonaws.com/start-tank-chennai/facebook-share.png"> 
    
  </li>
  <li>
    <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://chennai.starttank.com/apply" data-text="Start Tank Chennai" data-via="st_chennai" data-size="medium" data-related="st_chennai" data-count="none" data-hashtags="st_chennai">Tweet</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>


</li>
	
<li> 
 <!--
<a href="http://www.linkedin.com/shareArticle?mini=true&url=http://localhost:8085/Chennai/thanks.html&title=Start%20Tank Chennai&summary=Start%20Tank%20Chennai&source=Start%20Tank%20Chennai><img src="i/linkedin.png"></a>

    -->

<script src="//platform.linkedin.com/in.js" type="text/javascript">
  lang: en_US
</script>
<script type="IN/Share" data-url="http://localhost:8085/Chennai/Apply.html"></script>
   <!-- 
    <a href="http://in.linkedin.com/pub/start-tank-chennai/a0/15b/8a6">
      
        <img src="https://static.licdn.com/scds/common/u/img/webpromo/btn_viewmy_120x33.png" width="120" height="33" border="0" alt="View Start Tank Chennai's profile on LinkedIn">
        
    </a>
-->

	</li>
    </ul>
</div><!--/socialcontainer -->	
	
	
</div><!-- /apply_left -->

<div class="apply_right">
</div><!-- /apply_right -->
<div class="clr" style="margin:20px 0;"></div>
<script type="text/javascript">
	$(document).ready(function(){
	$('#share_button').click(function(e){
	e.preventDefault();
	FB.ui(
	{
	method: 'feed',
name: 'Join Start Tank Chennai – PayPal’s Incubation Center.',
link: ' http://chennai.starttank.com/',
picture: 'http://media.indiatimes.in/media/content/2014/Jul/paypal_starttank_chennai2_1405062506_540x540.jpg',
caption: 'Join the Start tank Challenge.',
description: 'PayPal India, in partnership with The Indus Entrepreneurs (TiE) Chennai Chapter, launched Start Tank, the startup incubator, at PayPal’s Chennai development center.The initiative seeks to nurture and support the creation of a new generation of technology companies by offering them not just initial infrastructure and mentorship, direction and encouragement, but also a chance to work alongside some of the best minds in the field.',
message: 'Join the Challenge Apply',
	message: ''
	});
	});
	});
	</script>
	
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42859593-1', 'starttank.com');
  ga('send', 'pageview');

</script>
<!-----recaptcha-->
<!--
Note there is also a recaptcha script within the application form
-->

<style type="text/css">
#social li {
display: inline;
list-style-type: none;
padding-right: 40px;
}

#social li img {cursor: pointer;}

#socialcontainer {display:none;}

.error-message
{
display:none;
}
.required-message
{
display:none;
}
.ss-choice-label{
		font-size: 81.25%;
}


</style>


<?php include('../includes/footer_analytics.php'); ?>

