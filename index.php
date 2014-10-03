<!--DOCTYPE html-->
<!--Home page of Float -->

<head>
	<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,700" rel="stylesheet" type="text/css">
	<link href="//fonts.googleapis.com/css?family=Didact+Gothic:400" rel="stylesheet" type="text/css">
</head>



<link href="./style.css" rel="stylesheet" type="text/css" media="screen" />



<!--plugin for facebook like box -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<?php include "headerbar.php"; ?>


<div id="background">


	<div id="middlecontent">
		<div id="homelogo">
			<img src="./images/floatlogo2014.png" alt="FloatYale" width = "480px" height = auto>
		</div>

		<div id ="homecontent">
			<h1>Learning to code is frustrating. </h1>

			<h3>That's why Float offers free web development courses and support for all Yale students.
			Through our workshops and programs, we want to encourage more students to give Computer Science a chance. </h3>

			<h3> Learn more: </h3>
			<a href="./classes_page.php"><div class="bar1"> CLASSES & WORKSHOPS > </div> </a>
			<a href="./mentorship_page.php"><div class = "bar2"> MENTORSHIP PROGRAM > </div></a>

			<br><br><br>
			<h2>It's never too late to start.<br><br> To learn more or join our <br>team, please email:
				<div style="color:#B50749;">team@floatyale.com. </div>
			</h2>
		</div>
	</div>
</div>


<div id="rightsidebar">

		<div class="fb-like-box" data-href="https://www.facebook.com/floatyale" data-colorscheme="light" 
		data-show-faces="true" data-header="true" data-stream="false" data-show-border="true" width="140px"></div>

		<div id="mailchimpbox">
			<?php include "mailchimp_signup.php"; ?>
		</div>

</div> 


