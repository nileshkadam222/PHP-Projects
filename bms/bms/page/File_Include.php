
<link rel="stylesheet" href="../css/style_menu.css" type="text/css" />
<link rel="stylesheet" href="../css/coin-slider-styles.css" type="text/css" />

<link rel="stylesheet" type="text/css" href="../css/top.css"  />
<script type="text/javascript" src="../js/jquery-1.3.2.js" ></script>
<script type="text/javascript" src="../js/jquery-1.7.2.min.js" ></script>
<script type="text/javascript" src="../js/jquery.min.js" ></script>
<script type="text/javascript" src="../js/coin-slider.min.js" ></script>


<script type="text/javascript" src="../js/jquery.quickflip.js" ></script>
<link rel="stylesheet" type="text/css" href="../css/styles.css" />
<script type="text/javascript" >
	$('document').ready(function(){
		$('#flip-container').quickFlip();
		
		$('#flip-navigation li a').each(function(){
			$(this).click(function(){
				$('#flip-navigation li').each(function(){
					$(this).removeClass('selected');
				});
				$(this).parent().addClass('selected');
				var flipid=$(this).attr('id').substr(4);
				$('#flip-container').quickFlipper({ }, flipid, 1);
				
				return false;
			});
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
	$('#coin-slider').coinslider({ width: 630,height: 300, navigation: true, delay: 2000,spw: 7,sph: 5,sDelay: 30,opacity: 0.7,titleSpeed: 500,effect: 'swirl',links : true,hoverPause: true });
	});		
</script>

<!--slider-->

<link rel="stylesheet" type="text/css" href="side/style.css" />
  <script type="text/javascript" src="side/jquery-1.9.1.js"></script>
 <script type="text/javascript" src="side/logic.js"></script>
 
 
 <link rel="stylesheet" type="text/css" href="slide1/style.css" />
  <script type="text/javascript" src="slide1/jquery-1.9.1.js"></script>
 <script type="text/javascript" src="slide1/logic.js"></script>
 
 
 
 <!--end-->
 
 
 
 <link rel="stylesheet" type="text/css" media="screen" href="../page/CSS3-Slider/res/css/style.css"/>
<link rel="stylesheet" type="text/css" media="screen" href="../page/CSS3-Slider/res/css/animation.css"/>
<link rel="stylesheet" type="text/css" media="screen" href="../page/CSS3-Slider/res/css/reset.css"/>
 
 