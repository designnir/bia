<div id="footer">
            	<ul>
                <li><a href="index.php">Home</a> |</li>
                <li><a href="tours.php">Tours</a> |</li>
                <li><a href="charters.php">Charters</a> |</li>
                <li><a href="live-reviews.php">Live Reviews</a> |</li>
                <li><a href="aircraft.php">Aircraft</a> |</li>
                <li><a href="pilots.php">Pilots</a> |</li>
                <li><a href="gallery.php">Gallery</a> |</li>
                <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
        
        <div id="copyright">
        	<div class="left"><p>Big island air Copyright © <?php echo date('Y'); ?>. Kona, HI <br /><a href="https://www.getleadsfast.com/products/web_management/">Website Management</a> provided by GetLeadsFast, LLC</p></div>
            <div class="right"><p><a href="mailto:info@bigislandair.com">info@bigislandair.com</a> || Phone: (808)329-4868 || Fax: (808)329-0855</p></div>
            <div class="clear"></div>
        </div>
        
        <div class="shade-bottom"></div>
    </div>
</div>
<!--MAIN CONTENT END-->


<script type="text/javascript" src="js/nivo/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/bxslider/4.1.1/jquery.bxslider.min.js"></script>
<script type="text/javascript">
//$.noConflict();
jQuery(document).ready(function($) {
        $('#slider').nivoSlider({
		effect: 'fade',
		animSpeed: 500,
        pauseTime: 5000,
		directionNav: false,
		directionNavHide: true,
		pauseOnHover: false, 
		controlNav: false
		});
		$('#slider2').nivoSlider({
		effect: 'fade',
		animSpeed: 500,
        pauseTime: 3000,
		directionNav: true,
		directionNavHide: true,
		pauseOnHover: false, 
		controlNav: false
	
        
       });
       
       
});

$(function(){
   $('.bxslider').bxSlider({controls: false, mode: 'fade'}); 
});
</script>

<?php if ($page == 'index.php') echo'
<link rel="stylesheet" href="js/li-scroller.css" type="text/css" media="screen" /> 
<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="js/jquery.li-scroller.1.0.js"></script>
<script type="text/javascript">
$.noConflict();
jQuery(document).ready(function($) {
	$(function(){
    $("ul#ticker01").liScroll();
		});
});
</script>';
?>
</body>
</html>
