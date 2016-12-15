<?php include 'html-header.php' ?>

<!--HEADER START-->

<div id="header">

	<div id="top"><!--TOP-->

    	<div class="wrap">

        	<div class="socials">

            	<p>get social with us:</p>

                <ul>

                <li><a class="fb" href="https://www.facebook.com/pages/Big-Island-Air-Hawaii/162424950451152" title="Find Us on Facebook" target="_blank"></a></li>

                <!--<li><a class="in" href="http://www.linkedin.com/" title="Follow Us on LinkeIn" target="_blank"></a></li>

                <li><a class="tw" href="http://www.twitter.com/" title="Follow Us on Twitter" target="_blank"></a></li>-->

                </ul>

                <div class="clear"></div>

            </div>

            <div class="trans">

            <a href="http://translate.googleusercontent.com/translate_c?depth=1&hl=en&rurl=translate.google.com&sl=en&tl=ja&u=http://glfdev.com/bigislandair/&usg=ALkJrhh2eIHepjgy5uwq20YX0nNxJhxACA"><img src="images/ja.png" alt="Big Island Air" /></a>

            </div>

        	<div class="call">

            	<p>call us: 808<span>_</span>.329<span>_</span>.<span>_</span>4868 | </p>

            </div>

            <div class="clear"></div>

        </div>

    </div><!--TOP-->

<!--Christmas logo-->    
<!--<div id="logo_holder"></div>-->
    <div class="wrap">
        <div id="logo"><!--LOGO-->
    
            <a href="index.php" title="Big Island Air"></a>
  
        </div><!--LOGO-->
        
		
        
    </div>

    

    

    <div id="slider" class="nivoSlider"><!--SLIDER-->

    	<img src="images/slide1.jpg" alt="" title="" />

        <img src="images/slide2.jpg" alt="" title="" />

        <img src="images/slide3.jpg" alt="" title="" />

        <img src="images/slide4.jpg" alt="" title="" />

        <img src="images/slide5.jpg" alt="" title="" />

    </div><!--SLIDER-->

   

   

    <div id="offer-top">
	    <div id="logo_holder"></div>
    </div><!--OFFER TOP-->
    
    <div class="clear"></div>

    

    <div class="wrap"><!--WRAP-->

    <div class="menu-left"></div>

    <div   class="rmm" id="menu-top"><!--MENU TOP-->

    	<ul>

        <li><a href="index.php" <?php if ($page == 'index.php') echo 'class="current"'; ?>>Home</a></li>

        <li><a href="tours.php" <?php if ($page == 'tours.php') echo 'class="current"'; ?>>Tours</a></li>

              <li><a href="charters.php" <?php if ($page == 'charters.php') echo 'class="current"'; ?>>Charters</a></li>

        <li><a href="live-reviews.php" <?php if ($page == 'live-reviews.php') echo 'class="current"'; ?>>Live Reviews</a></li>

        <li><a href="aircraft.php" <?php if ($page == 'aircraft.php') echo 'class="current"'; ?>>Aircraft</a></li>

        <li><a href="pilots.php" <?php if ($page == 'pilots.php') echo 'class="current"'; ?>>Pilots</a></li>

        <li><a href="gallery.php" <?php if ($page == 'gallery.php') echo 'class="current"'; ?>>Gallery</a></li>

        <li><a href="contact.php" <?php if ($page == 'contact.php') echo 'class="current"'; ?>>Contact Us</a></li>

        </ul>

    </div><!--MENU TOP-->

    <div class="menu-right"></div>

    <div class="clear"></div>

    

    <div id="breaking">

        <ul id="ticker01">

        <!--<li><span><?= date('m/d/Y') ?></span><a href="#">Breaking news!! The volcano is now erupting!! Kilauea Volcano has been erupting continously since 1984...</a></li>-->

        <!--<li><a href="#">BREAKING NEWS!! GOVERNMENT SHUT DOWN DOES NOT AFFECT AIR TOURS OVER THE VOLCANO NATIONAL PARK. BOOK YOUR FLIGHT NOW TO SEE THE ACTIVE ERUPTION OF KILAUEA. FLIGHT ARE FILLING UP FAST. VOLCANO TOURS STARTING AT $139.00.</a></li>-->

        <li><a href="#"><?= $marquee['text']?></a></li>

        </ul> 

    </div>

    

    <div id="banner">

    	<img src="images/banner8.jpg" alt="" title="" />

    </div>

    

    

    <div id="tours_holder">

    <!--TOURS-->

    <div class="tour">

    	<div class="left">

    	<img src="images/circle_cover.jpg" alt="" />

        <h3><a href="circle-island-tour.php">Circle Island tour</a></h3>

        <p>Forget spending your whole vacation in a car, when you can experience it all by air. Why fly with any other than Big Island Air - Hawaii's oldest air tour company
touring Hawai'i Island for the last 30 years! Discover the Big Island's beauty and volcanic fury. You'll start from Kona International Air-port
located at the island's most western tip. You'll then venture on to see miles of gorgeous beaches along lava fields, series of nearly inaccessible valleys,
towering sea cliffs, lush rainforest, cascading waterfalls, 11 of the world's 13 climate zones, rugged coastlines and Hilo Town.
You'll also see five volcanoes including the world's largest volcano - Mauna Loa, the million year old volcano - Mauna Kea and the famous active Kilauea Volcano.<a href="circle-island-tour.php">Read more...</a></p>

        </div>

        <div class="right">

        <!--<p><img src="images/offer-logo2.png" alt="" /></p>-->
		<p><img src="images/offer-logo.png" alt="" /></p>
        
		<!--<p class="price">$<?= CIRCLE_ADULT ?>.00 <span class="listed-price">$399.00</span></p>-->
        
        <p class="price">$<?= CIRCLE_ADULT ?>.00 <span class="listed-price">$399.00</span></p>

        <!--<p class="price">$399 <span class="listed-price">$449.00</span></p>-->

        <!--<p class="price"><span class="special">ANNIVERSARY SPECIAL</span><br/>$300.00 <span class="listed-price">$399.00</span></p>-->

        <p><a class="book" href="circle-island-tour.php">Book now</a></p>

        <!--<p><a class="book" href="reservation.php">Book now</a></p>-->

        </div>

        <div class="clear"></div>

    </div>

    <div class="separator"></div>

    <div class="tour">

    	<div class="left">

    	<img src="images/sunset_cover.jpg" alt="" />

        <h3><a href="sunset-tour.php">Sunset Tour</a></h3>

        <!--<p>This new tour offered exclusively by BIG ISLAND AIR. Come join us and explore the 5 Island volcano of Hawaii. A trip that you will remember. Our tour will depart at 7am from the Kona International Airport Commuter Terminal. Meeting at Big Island Air Office at 6:30am. Tour duration: approximately 3 hours. Tour will land at Kalaupapa for R & R. Tour route: Kona through center of the island to Kilauea (eruption site), back over Mauna Kea, Kohala Mountains over the channel to Haleakala, West Maui Mountains, over channel to Molokai, landing at Kalaupapa for refreshments and restroom break (approx. ½ hr), continue flight over Molokai to Lanai, Kahoolawe and return to Kona. <a href="sunset-tour.php">Read more...</a></p>-->

        <p>The perfect way to cap off your day, a fiery eruption of Kilauea at sunset with Big Island Air! Depart from the Kona International airport and join us for a
"Full Circle Island Air Adventure" in our new state of the art Cessna Caravans. You'll see miles of gorgeous beaches along lava fields, series of nearly inaccessible valleys,
five volcanoes including the world's largest volcano - Mauna Loa, the infamous - Mauna Kea and the active - Kilauea Volcano, towering waterfalls, masculine mountains, 11 of the world's 13 climate zones and breathtaking coastlines.
You'll arrive on the east side of the island at the Kilauea Volcano just as the sun is setting in the west behind Mauna Loa. <a href="sunset-tour.php">Read more...</a> </p>

        </div>

        <div class="right">

        <p><img src="images/offer-logo.png" alt="" /></p>

		<p class="price">$<?= SUNSET_ADULT ?>.00 <span class="listed-price">$449.00</span></p>

        <!--<p class="price"><span class="special">ANNIVERSARY SPECIAL</span><br/>$330.00 <span class="listed-price">$449.00</span></p>-->

        <!--<p class="price">$449 <span class="listed-price">$449.00</span></p>-->

        <p><a class="book" href="sunset-tour.php">Book now</a></p>

        <!--<p><a class="book" href="reservation.php">Book now</a></p>-->

        </div>

        <div class="clear"></div>

    </div>
      <div class="separator"></div>
            <div class="tour">

    	<div class="left">

    	<img src="images/vip_cover.jpg" alt="" />

        <h3><a href="vip-air-adventure-tour.php">VIP Air Adventure</a></h3>
        <h5 style="margin: 20px;">Maui to Big Island</h5>

        <p>Your VIP Air Adventure starts and ends in Maui so forget the hassle of checking out of your hotel only to check in to a new one. 
See the best of Maui and the IBg Island with Big Island Air! View Haleakala Crater and the historic Hana town before crossing over the
Aleanuihaha channel to the Big Island. Your exploration of the Big Island includes; views of the world's most active volcano - Kilauea Volcano, the stunning mountains
of Kohala, towering sea cliffs, cascading waterfalls, black sand beaches, knife-edge ridges, luscious rainforest and renown
valleys like Waipio Valley.<a href="vip-air-adventure-tour.php">Read more...</a> </p>

        </div>

        <div class="right">

        <p><img src="images/offer-logo.png" alt="" /></p>

		<p class="price">$<?= VIP ?>.00</p>
        
		<!--<p class="price"><span class="special">ANNIVERSARY SPECIAL</span><br/>$330.00 <span class="listed-price">$449.00</span></p>-->
        <!--<p class="price">$449 <span class="listed-price">$449.00</span></p>-->

        <p><a class="book" href="vip-air-adventure-tour.php">Book now</a></p>

        <!--<p><a class="book" href="reservation.php">Book now</a></p>-->

        </div>

        <div class="clear"></div>

    </div>

    
	<!-- UNCOMMENT HILO TOUR GIVEN BELOW -->
    <!--<div class="separator"></div>

    <div class="tour">

    	<div class="left">

    	<img src="images/offer5.jpg" alt="" />

        <h3><a href="hilo-tour.php">Hilo Tour</a></h3>

        <p>Imagine  yourself soaring above the beautiful tropical rainforest of East Hawaii on your  way to view the fire and majesty of the active Kilauea Volcano. Our volcano and  falls adventure departs from the Hilo International Airport. You can sit back  and relax in the comfortable air conditioned cabin of our jet-prop Cessna 208  Caravan. Every passenger enjoys their very own window seat with a spectacular view. You  will tour the current eruption activity of the Kilauea Volcano, tropical  rainforest of the Puna district, waterfalls of north Hilo, and then return to  the airport... <a href="hilo-tour.php">Read more...</a></p>

        </div>

        <div class="right">

        <p><img src="images/offer-logo2.png" alt="" /></p>

        <p class="price"><span class="special">ANNIVERSARY SPECIAL</span><br/>$169.00 <span class="listed-price">$199.00</span></p>

        <p><a class="book" href="hilo-tour.php">Book now</a></p>

        <!--<p><a class="book" href="reservation.php">Book now</a></p>-->

        </div>

        <div class="clear"></div>

    </div>-->

    

<!--    <div class="separator"></div>

    <div class="tour">

    	<div class="left">

    	<img src="images/offer6.jpg" alt="" />

        <h3><a href="waterfalls-whales.php">Waterfalls and Whales Tour</a></h3>

        <p>Depart from the Kona International Airport on a magical adventure that will leave you wanting more. You will fly north to the Big Islands oldest volcano, Kohala. Thousands of years of erosion have carved deep beautiful valleys into its windward side. As you explore the valleys you will see 1000 foot waterfalls. Along the shoreline of Waipio Valley you will see the longest black sand beach in the state. Then sit back and relax as you prepare yourself for WHALES, WHALES, WHALES. Each year the Humpback whales make their way to the Hawaiian Islands. You will have a spectacular view of these magnificent creatures as you soar above them in the air conditioned comfort of our Cessna 208 Caravan jetprop aircraft. <a href="waterfalls-whales.php">Read more...</a></p>

        </div>

        <div class="right">

        <p><img src="images/offer-logo2.png" alt="" /></p>

        <p class="price">$178<span class="listed-price">$178</span></p>

        <p><a class="book" href="waterfalls-whales.php">Book now</a></p>

        <p><a class="book" href="reservation.php">Book now</a></p>

        </div>

        <div class="clear"></div>

    </div>-->

    <!--TOURS-->

    </div>

    

    </div><!--WRAP END-->



</div><!--HEADER END-->

<div id="offer-bottom"></div>