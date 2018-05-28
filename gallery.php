<?php 
$path=$_SERVER['DOCUMENT_ROOT']."/ids/Room-Booking-Portal";
$pageTitle = "Gallery"  ;session_start();
include_once $path.'/common/header.php';?>
<?php include_once $path.'/common/navbar_w_login.php';?>
    
    <div id="main">
    <?php include_once $path.'/common/login.php';?>
    <?php include_once $path.'/common/signup.php';?>
    </div>
    
    <div>
    		
        <script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>
		<script type="text/javascript" src="js/jquery.gallerax-0.2.js"></script>
		<script type="text/javascript" src="js/filter.js"></script>		
		
		<link rel="stylesheet" type="text/css" href="css/style1.css" />
		
	
		<div id="wrapper">
		
			<div id="logo">
				<h1>photo<span>Gallery</span></h1>
			</div>
			
			<!--<div id="categories">
				<ul id=mar> 
					<li><a href="#" id="Category 1 " class="current">SH-1</a></li>
					<li><a href="#" id="Category 2" class="filter">SH-2</a></li>
					<li><a href="#" id="Category 3" class="filter">H-105</a></li>
					<li><a href="#" id="Category 4" class="filter">H-205</a></li>
					<li><a href="#" id="Category 5" class="filter">CR-1</a></li>
					<li><a href="#" id="Category 6" class="filter">CR-2</a></li>
					<li><a href="#" id="Category 7" class="filter">Saranga Hall</a></li>
					
				</ul>
			</div>			-->

			<div id="gallery">
			
			

					<div id="output">
						<img src="images/1.jpg"  />
					</div>
					
					<div id="captions">
					
						<div id="nav">
							<ul>
								<li><a href="#" class="navFirst">[ &lt;&lt; ]</a></li>
								<li><a href="#" class="navPrevious">[ &lt; ]</a></li>
								<li><a href="#" class="navNext">[ &gt; ]</a></li>
								<li><a href="#" class="navLast">[ &gt;&gt; ]</a></li>
								<li><a href="#" class="navStopAdvance">[ Stop ]</a></li>
								<li><a href="#" class="navPlayAdvance active">[ Play ]</a></li>
							</ul>
						</div>	
						
						<span class="line">Monument Valley</span>
						
						<br class="clear" />
						
						<span class="line2">A scenic shot of Monument Valley in Utah.</span>
						
						
					</div>			

					<ul class="thumbnails category1">
						<li class="first"><img src="images/sh1a.jpeg" title="Monument Valley ; A scenic shot of Monument Valley in Utah." alt="" width="100" height="75" /></li>
						<li><img src="images/sh2a.jpeg" title="Honey Bee ; A honey bee hovering in front of a flower." alt="" width="100" height="75" /></li>
						<li><img src="images/105a.jpeg" title="Cup of Coffee ; An ornate cup of coffee sitting on a matching saucer." alt="" width="100" height="75" /></li>
						<li><img src="images/205a.jpeg" title="Grand Tetons ; The Grand Tetons in Wyoming with a barn in the foreground." alt="" width="100" height="75" /></li>
						<li><img src="images/cr1a.jpeg" title="LA Skyline ; Upwards shot of a small portion of Los Angeles' skyline." alt="" width="100" height="75" /></li>
						<li><img src="images/cr2.jpeg" title="Leaf ; A close up shot of a green leaf." alt="" width="100" height="75" /></li>
						<li><img src="images/sarangaa.jpeg" title="Chinese Bell ; A large bell inscribed with Chinese characters." alt="" width="100" height="75" /></li>
						<li class="last"><img src="images/sh1a.jpeg" title="Ladybird ; A close up shot of a ladybird making its way across a leaf." alt="" width="100" height="75" /></li>
					</ul>

					<br class="clear" />
					
					<script type="text/javascript">

						$.gallerax({
							thumbnailsSelector:		'.thumbnails li img',		
							outputSelector: 		'#output img',				
							captionSelector:		'#captions .line',			
							captionLines:			2,							
							fade: 					'fast',						
							navNextSelector:		'#nav a.navNext',			
							navPreviousSelector:	'#nav a.navPrevious',		
							navFirstSelector:		'#nav a.navFirst',			
							navLastSelector:		'#nav a.navLast',			
							navStopAdvanceSelector:	'#nav a.navStopAdvance',	
							navPlayAdvanceSelector:	'#nav a.navPlayAdvance',	
							advanceFade:			'slow',						
							advanceDelay:			3500,						
							advanceResume:			5000,						
							thumbnailsFunction: 	function(s) {				
							
								return s.replace(/_thumb\.jpg$/, '.jpg');
								
							}
						});

					</script>

			
			
			</div>

					
		</div>

</div>
<?php include_once $path.'/common/footer.php';?>    
