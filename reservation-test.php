

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">

        <title>Contact</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Bootstrap theme -->
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        
        <!-- style for lightbox -->
        <link rel="stylesheet" href="css/lightbox.min.css">

        <!-- Custom styles for this template -->
        <link href="styles.css" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
        <script src="https://use.fontawesome.com/801fe097e8.js"></script>

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
      
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
               
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2 col-md-3">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo" class="img-responsive" /></a>
                        </div>
                    </div>
                    <div class="col-sm-10 col-md-9">
                        <div class="header-top">
                            <span class="phone">CALL US: 808.329.4868</span>
                            <ul class="header-social-icons">
                                <li><a href="https://www.facebook.com/pages/Big-Island-Air-Hawaii/162424950451152" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                            <a href="reservation.html" class="btn btn-primary booknowbtn">BOOK NOW <i class="fa fa-arrow-right" aria-hidden="true"></i></a>    
                        </div>
                        <div id="navbar" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="index.html">HOME</a></li>
                                <li><a href="tours.html">TOURS</a></li>
                                <li><a href="charters.html">CHARTERS</a></li>
                                <li><a href="live-reviews.html">LIVE REVIEWS</a></li>
                                <li><a href="aircraft.html">AIRCRAFT</a></li>
                                <li><a href="pilots.html">PILOTS</a></li>
                                <li><a href="gallery.html">GALLERY</a></li>
                                <li class="active"><a href="contact.html">CONTACT US</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
            </div>
        </nav>          
        
        <div class="tree-bar">
            <img src="images/tree.png" alt="tree" class="img-responsive" />
        </div>                                     
      
      
        <div class="container-fluid inner-bg">
            <div class="content-area">

            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-title"><span>Contact</span></h1>
                        
                        
                        
                        
                        <div class="content" id="loadReservation">  

		<h2>Reservation</h2>

		<?php if (!$success) : ?>

    		<h3>Book your tour directly and SAVE UP TO 25% OFF FROM OUR STANDARD RATES.</h3>



    		<p>Call us at 808-329-4868 or fill out the Reservation Request Form below. We will get back to you with flight availability and answers to all of your questions. </p>



    		<p>For groups of 8 or more, please call. Mahalo</p>

		<img src="images/256bitssl.png" style="width:140px; height: auto; float:left;" /> <span style="display: block;

    float: left;

    margin-bottom: 35px;

    margin-left: 21px;
    width: 80%;

    margin-top: 21px;">Your information is safe & secure! Encrypted with 256 bit ssl.</span>

		<div style="clear:both;"></div>

		    <?php if (!empty($message)) : ?>

			<div class="<?= $class ?>">

			<?= $message ?>



			<?php if (!empty($errors)) : echo "<ul>";

			    foreach ($errors as $error) : ?>

				    <li>

		<?= $error ?>

				    </li>



			    <?php endforeach;

			    echo "</ul>";

			endif; ?>

			</div>

			<?php endif; ?>



    		<form action="https://bigislandair.com/ajax/reservation.php?tour=<?= $_GET['tour'] ?>" method="post" name="reservation" id="reservation">

    		    <div class="passengers">	

    			<div class="passenger-block">

    			    <span></span>

    			    <p>First Name:</p>

    			    <div class="control-group">

    				<input type="text" name="firstName[]" class="required" id="firstName" value="" />

    			    </div>	

    			    <div class="clear"></div>

    			    <p>Last Name:</p>

    			    <div class="control-group">

    				<input type="text" name="lastName[]" class="required" id="lastName" value="" />

    			    </div>	

    			    <div class="clear"></div>

    			    <p>Weight:</p>

    			    <div class="control-group">	

    				<input type="text" name="weight[]" class="required" id="weight" value="" />

    			    </div>	

    			    <div class="clear"></div>

    			    <p>Contact Phone Number:</p>

    			    <div class="control-group">

    				<input type="text" name="phone[]" class="required" id="phone" value="" />

    			    </div>	

    			    <div class="clear"></div>

    			    <p>Email Address:</p>

    			    <div class="control-group">

    				<input type="text" name="email[]" class="required" id="email" value="" />

    			    </div>	

    			    <div class="clear"></div>

    			    <p>Passenger Type?</p>

    			    <div class="control-group">

    				<select class="required passenger-type-select" name="new_passenger_type[]">

    				    <option value="adult">Adult</option>

    				    <!--<option value="child">Child</option>-->

    				</select>	

    			    </div>    

    			    <div class="clear"></div>

    			    <p>Remarks & Misc Info</p>

    			    <div class="control-group">

    				<textarea id="new_reservation_description" name="new_reservation_description[]" cols="30" rows="4"></textarea>

    			    </div>	

    			    <div style="border-top:1px black dashed; height:10px;" class="clear"></div>

    			    <input type="hidden" class="passenger-type" value="adult"/>

    			</div>  

    		    </div> 

    		    <div> 

    			<p>

    			    <a style="padding:2px; font-size:10px; background-color:#0a9ad0;" class="book btn btn-small btn-primary" href="javascript:void(0)" id="addPassenger"><i class="icon-white icon-plus"></i>+ Add Additional Passenger</a><br /><br />

    			</p>

    		    </div>

    		    <div style="height:10px;" class="clear"></div>

    		    <p>Date Arriving on Big Island:</p>

    		    <div class="control-group">

    			<input type="text" name="dateArriving" class="datepicker required" id="dateArriving" value="" readonly />

    		    </div>	

    		    <p>Hotel:</p>

    		    <div class="control-group">

    			<select name="hotel">

    			    <option value="0">Not Applicable</option>

    <?php foreach ($hotels as $hotel) : ?>

				    <option value='<?= $hotel['id'] ?>'><?= $hotel['name'] ?></option>

    <?php endforeach; ?>

    			</select>

    		    </div>

    		    <div class="clear"></div>

    		    <p>Date Desired for Flight:</p>

    		    <div class="control-group">

    			<input type="text" name="dateDesired" class="datepicker required" id="dateDesired" value="" readonly />

    		    </div>

    		    <div class="clear"></div>

    		    <div id="tour_info">Select the tour:</div>

    		    <style>

    			.hilo-warning {

    			    background: none repeat scroll 0 0 #F5DEB3;

    			    margin-left: 261px;

    			    padding: 6px;

    			    width: 300px;

    			    display: none;

    			}

    		    </style>

    		    <div class="hilo-warning" style="<?= !empty($_GET['tour']) && $_GET['tour'] == 'hilo' ? 'display:block;' : ''?>">

    			<!--Hilo Flights are available every Tuesday, Next Flight on <?= date("F j, Y", strtotime('next Tuesday')) ?>;-->

                        Hilo Flights are available only on specific dates, please check calendar for the exact flight dates.

    		    </div>

    		    <input type="radio" name="tour" data-child="<?= CIRCLE_CHILD ?>" data-adult="<?= CIRCLE_ADULT ?>"  value="Circle Island tour" <?= $default || $circle ? 'checked="checked"' : '' ?> />Circle Island

    		    <input type="radio" name="tour" data-child="<?= SUNSET_CHILD ?>" data-adult="<?= SUNSET_ADULT ?>" value="Sunset Tour" <?= $sunset ? 'checked="checked"' : '' ?> />Sunset
                    
                    <input type="radio" name="tour" data-price="<?= VIP ?>" value="VIP Air Adventure" <?= $vip ? 'checked="checked"' : '' ?> />VIP Air Adventure<br>

    		    <!--<input type="radio" name="tour" data-price="<?= HILO ?>" value="Hilo Tour" <?= $hilo ? 'checked="checked"' : '' ?> />Hilo Tour-->

<!--    		    <input type="radio" name="tour" data-price="<?= WATERFALL ?>" value="Waterfalls and Whales" <?= $waterfalls ? 'checked="checked"' : '' ?> />Waterfalls and Whales<br>-->

    		    <div style="height:20px;" class="clear"></div>

    		    <!--<p>Taxi?</p>

    		    <input type="radio" name="taxi" value="yes" checked="checked" />Yes

    		    <input type="radio" name="taxi" value="no" />No

    		    <div class="clear"></div>-->

    		    <div id="tour_info">How would like us to contact you?</div>

    		    <input type="radio" name="contact" value="Email" checked="checked" />Email

    		    <input type="radio" name="contact" value="Phone" />Phone

    		    <div class="clear"></div>

    		    <br />

    		    <h3>Payment Details</h3>

    		    <div class="tour-payment-total" style="margin-left:260px;padding: 10px 0 20px 0;">



    			<div class="payment-details">

    			    <div class="adult-price"></div>

    			    <div class="child-price"></div>

    			</div>

    			<h1>Total: $<span id="totalPrice">0</span></h1>

    		    </div>

    		    <p>Credit Card #</p>

    		    <div class="control-group">

    			<input type="text" name="cc" class="required" id="credit_card" value="" />

    		    </div>

    		    <p>Card Holder Name</p>

    		    <div class="control-group">

    			<input type="text" name="cc_name" class="required" id="cc_name" value="" />

    		    </div>

    		    <p></p>

    		    <div id="credit_card"class="control-group">

    			Exp (MM/YY) 

    			<select name="cc_m" class="required" id="cc_m" style="width:53px">

    			    <!--				<option value="01">Jan</option>

    							    <option value="02">Feb</option>

    							    <option value="03">Mar</option>

    							    <option value="04">Apr</option>

    							    <option value="05">May</option>

    							    <option value="06">Jun</option>

    							    <option value="07">Jul</option>

    							    <option value="08">Aug</option>

    							    <option value="09">Sep</option>

    							    <option value="10">Oct</option>

    							    <option value="11">Nov</option>

    							    <option value="12">Dec</option>-->

    			    <option value="01">01</option>

    			    <option value="02">02</option>

    			    <option value="03">03</option>

    			    <option value="04">04</option>

    			    <option value="05">05</option>

    			    <option value="06">06</option>

    			    <option value="07">07</option>

    			    <option value="08">08</option>

    			    <option value="09">09</option>

    			    <option value="10">10</option>

    			    <option value="11">11</option>

    			    <option value="12">12</option>



    			</select> /

    			<select name="cc_y" class="required" id="cc_y" style="width: 54px;">

    <?php for ($i = date('Y'); $i < date(Y) + 6; $i++) : $year = substr($i, 2, 2) ?>

				    <option value="<?= $year ?>"><?= $year ?></option>

    <?php endfor; ?>

    			</select>

    			&nbsp;&nbsp;&nbsp;CVV 

    			<input type="text" name="cvv" class="required" id="cvv" style="width: 60px;" maxlength="4" value="" /><br />

    		<div id="cards">	<img src="images/cards.png" style="display: block;height: 20px;margin-left: 261px;width: auto;"  /> </div>

    		    </div>

    		    <br />

    		    <div class="tour-calc">



    		    </div>

    		    <p id="captcha_text">Prove that you are human</p>

    		    <img src="captcha/captcha.php" id="captcha" /><br/>

    		    <a href="javascript:void(0)" style="float:right;" id="change-image">Not readable? Change text.</a><br/><br/>





    		    <input type="text" style="float:right;" class="required" name="captcha" id="captchavalue" autocomplete="off" />

    		    <div class="clear"></div>

        <!--                <input style="padding:10px; font-size:16px;" type="submit" name="submit" id="submit" value="Submit" class="book" />-->



    		    <a href="javascript:void(0)" id="submitReservation" style="padding:10px; font-size:16px;">BOOK NOW</a>



    		    <br />

    		</form>
<?php else : ?>



    <?php if (!empty($message)) : ?>

			<div class="<?= $class ?>">

	<?= $message ?>

			</div>

    <?php endif; ?>



		<?php endif; ?>



            </div>
                        
                        
                        
                        
                        
                        
                        
                        
                    </div>
                </div>

            </div>

        </div><!-- ./content-area -->
        </div>
    
        
        <div class="container news-social">
            <div class="row">
                
                  <div class="col-md-4">
                   <h1 class="title">TripAdvisor Reviews</h1>
                    <ul class="news-home">
                        <li>
                            <h3><a href="https://www.tripadvisor.com/Attraction_Review-g60872-d1798336-Reviews-Big_Island_Air-Kailua_Kona_Island_of_Hawaii_Hawaii.html" target="_blank">“A fantastic experience, even for a nervous flier”</a></h3>
                            <p>Yes, I am a nervous flier, but our Pilot (can't remember his name, sorry) made me feel safe...</p>
                            <p><a href="https://www.tripadvisor.com/Attraction_Review-g60872-d1798336-Reviews-Big_Island_Air-Kailua_Kona_Island_of_Hawaii_Hawaii.html" target="_blank" class="read-more">Read more</a></p>
                        </li>
                        <li>
                            <h3><a href="https://www.tripadvisor.com/Attraction_Review-g60872-d1798336-Reviews-Big_Island_Air-Kailua_Kona_Island_of_Hawaii_Hawaii.html" target="_blank">“Best view of the caldera!!”</a></h3>
                            <p>We took an 11:30am Circle Tour flight today and it was spectacular!! Daryl was a wonderful...</p>
                            <p><a href="https://www.tripadvisor.com/Attraction_Review-g60872-d1798336-Reviews-Big_Island_Air-Kailua_Kona_Island_of_Hawaii_Hawaii.html" target="_blank" class="read-more">Read more</a></p>
                        </li>                       
                    </ul>
                </div>
                
                <div class="col-md-4">
                    <h1 class="title">Follow us on Facebook</h1>
                    <div class="fb-page" data-href="https://www.facebook.com/bigislandair/?fref=ts" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/bigislandair/?fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/bigislandair/?fref=ts">Big Island Air, Hawaii</a></blockquote></div>
                </div>
                
                <div class="col-md-4">
                    <h1 class="title">Trip Advisor review</h1>
                    <a href="https://www.tripadvisor.com/Attraction_Review-g60872-d1798336-Reviews-Big_Island_Air-Kailua_Kona_Island_of_Hawaii_Hawaii.html" target="_blank"><img src="images/tripadvisor.png" alt="trip advisor" class="img-responsive img-border" /></a>
                </div>
                
            </div>
        </div><!-- major tour -->
            
        
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a href="index.html"><img src="images/logo.png" alt="logo" class="img-responsive" /></a>
                    </div>
                    <div class="col-md-4">
                        <ul>
                            <li><a href="index.html">HOME</a></li>
                            <li><a href="tours.html">TOURS</a></li>
                            <li><a href="charters.html">CHARTERS</a></li>
                            <li><a href="live-reviews.html">LIVE REVIEWS</a></li>
                            <li><a href="aircraft.html">AIRCRAFT</a></li>
                            <li><a href="pilots.html">PILOTS</a></li>
                            <li><a href="gallery.html">GALLERY</a></li>
                            <li><a href="contact.html">CONTACT US</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <p>INFO@BIGISLANDAIR.COM<br />
                        PHONE: (808)329-4868<br />
                        FAX: (808)329-0855</p>
                        
                        <hr />
                        
                        <p>Big Island Air Copyright © 2016. Kona, HI<br />
                        <a href="https://www.getleadsfast.com" title="" target="_blank">Website managemtnt provided by Getleadsefast, llc</a></p>
                    </div>
                </div>
            </div>
        </footer>
        

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    
    <!-- js for lightbox -->
    <script src="js/lightbox-plus-jquery.min.js"></script>
    
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.5.5/jquery.validate.min.js" ></script>

	    <script>

		function getTourCalc()

		{

		    var tour = $('input[name=tour]:checked', '#reservation');

		    var adult, child, total = 0, adult_count = 0, child_count = 0, adult_total = 0, child_total = 0;



		    $('.child-price, .adult-price').html('');



		    if (tour.attr('data-adult')) {

			adult = parseInt(tour.attr('data-adult')).toFixed(2);

			child = parseInt(tour.attr('data-child')).toFixed(2);

		    } else if (tour.attr('data-price')) {

			adult = parseInt(tour.attr('data-price')).toFixed(2);

			child = adult;

		    }





		    $('.passenger-type').each(function() {



			var type = $(this).val();



			if (type == 'adult') {

			    total = parseInt(parseInt(total) + parseInt(adult));

			    ++adult_count;

			    adult_total += parseInt(adult);

			} else {

			    total = parseInt(parseInt(total) + parseInt(child));

			    ++child_count;

			    child_total += parseInt(child);

			}



		    });







		    $('#totalPrice').text(parseInt(total).toFixed(2));



		    if (child_total > 0) {

			$('.child-price').html('<p>Children: ' + child_count + ' x $' + child + ' = $' + parseInt(child_total).toFixed(2) + '</p>');



		    }



		    if (adult_total > 0) {

			$('.adult-price').html('<p>Adults: ' + adult_count + ' x $' + adult + ' = $' + parseInt(adult_total).toFixed(2) + '</p>');

		    }

		}



		function markHilo(handler) {

		    if (handler.val() === 'Hilo Tour') {

			    $('.hilo-warning').fadeIn();

//			    $('#dateDesired').val('<?= date('m/d/Y', strtotime('next Tuesday')) ?>');

			   

			 $(".datepicker").datepicker("destroy");

			$(".datepicker").datepicker({dateFormat: 'mm/dd/yy', minDate: 0, onClose: function() {

			    $(this).valid();

			},beforeShowDay: function(date){  

                 				//var array = ["2014-09-26","2014-09-27","2014-09-28","2015-02-23","2015-02-24","2015-02-25"]
								//var array = ["2015-02-21","2015-02-22","2015-02-23","2015-02-24","2015-02-25","2015-02-26"];
								//var array = ["2015-02-24","2015-02-25"];
								var array = generateCalendarLimits();

                                var string = jQuery.datepicker.formatDate('yy-mm-dd', date);

			    //  return [date.getDay() === 2 && array.indexOf(string) == -1, ''];

                                if($.inArray(string, array) != -1) {

                                    return [true];

                                }

                                return [false];

                              

			}});

		} else {

			    $('.hilo-warning').hide();

			    $('#dateDesired').val('');

			    

			    	 $(".datepicker").datepicker("destroy");

			    $(".datepicker").datepicker({dateFormat: 'mm/dd/yy', minDate: 0, onClose: function() {

				$(this).valid();

			    },    

                            beforeShowDay: function(date){

                                        //var array = ["2014-09-26","2014-09-27","2014-09-28","2015-02-23","2015-02-24","2015-02-25"]
										//var array = ["2015-02-24","2015-02-25"];
										var array = generateCalendarLimits();
										
                                        var string = jQuery.datepicker.formatDate('yy-mm-dd', date);

                                        return [ array.indexOf(string) == -1 ]

                            }

                        });

			}

		}



		$(function() {



		    $(".datepicker").datepicker({dateFormat: 'mm/dd/yy', minDate: 0, onClose: function() {

			    $(this).valid();

			}});

			

			

		    var num_psgs = 0;

		    var limit_passengers = <?php echo $psg_limit; ?>;



		    $('body').on('click', '#submitReservation', function() {

			var form = $('#reservation'), data = form.serialize(), action = form.attr('action');

			if (form.valid()) {

			    $('#loadReservation').html('<h2 style="margin-top:150px;">PROCESSING RESERVATION, PLEASE STAND BY</h2><img src="images/loader3.GIF" />');

			    $.post(action, data, function(r) {

				$('#loadReservation').html(r);

				getTourCalc();

			    });

			}

		    });



		    $("#reservation").validate({

			focusCleanup: true,

			submitHandler: function(form) {

			    form.submit();

			    $('#submit').hide();

			    form.append('Working... Please wait...');

			},

			onfocusout: function(element) {

			    if (!this.checkable(element)) {

				this.element(element);

			    }

			},

			errorPlacement: function(error, element) {

			    /*

			     var container = $('<div />');

			     container.addClass('Ntooltip');  // add a class to the wrapper

			     container.find('label').removeClass("checked");

			     error.insertAfter(element);

			     error.wrap(container);

			     $("<div class='errorImage'></div>").insertAfter(error);

			     */

			},

			success: function(element) {

			    $(element).addClass("checked");

			},

			rules: {

			    'firstName[]': {

				required: true,

				minlength: 2

			    },

			    'lastName[]': {

				required: true,

				minlength: 2

			    },

			    'weight[]': {

				required: true,

				number: true

			    },

			    'phone[]': {

				required: true

			    },

			    'email[]': {

				required: true,

				email: true

			    },

			    dateArriving: {

				required: true

			    },

			    dateDesired: {

				required: true

			    }

			}

		    });



		    //Make initial calc

		    getTourCalc();

		    markHilo($('input[name="tour"]:checked'));



		    // On tour change

		    $('body').on('click', 'input[name=tour]', function() {

			markHilo($(this));

			getTourCalc();

		    });



		    $(document.body).on('change', ".passenger-type-select", function() {

			$(this).parents('.passenger-block').find('.passenger-type').val($(this).val());

			getTourCalc();

		    });



		    $('body').on('click', '#addPassenger', function() { //alert("works!");



			if (num_psgs < limit_passengers) {

			    num_psgs += 1;



			    var passenger = $('.passengers').find('.passenger-block').eq(0).clone();

			    passenger.find('span').append('<div><p><a style="padding:2px; font-size:10px;"  class="book btn btn-small btn-danger remove-passenger inline-right-button" href="javascript:void(0)"><i class="icon-white icon-minus"></i>- Remove This Passenger</a></p></div><div style="height:10px;" class="clear"></div>');

			    $('.passengers').append(passenger);

			    getTourCalc();

			    markHilo($('input[name="tour"]:checked'));





			} else {

			    alert("For groups larger than 8 please call at 808-329-4868");

			}



		    });



		    $(document.body).on('click', ".remove-passenger", function() { //alert("works!");



			num_psgs -= 1;

			if (confirm('Are you sure that you want to delete this passenger?')) {

			    $(this).parents('.passenger-block').remove();

			    getTourCalc();

			}

		    });









		    $('body').on('click', '#change-image', function() {

			$('#captcha').attr('src', 'captcha/captcha.php?' + Math.random());

			$('#captchavalue').focus();

		    });



		    $('#reservation').validate();



		});


function generateCalendarLimits() {
	//Add some custom days to remove
	var array = ["2015-02-24","2015-02-25"];
	//Add All thursday to be removed
	var day = 3;
	var date = new Date();
        var date2 = new Date();
        var day2 = 4;
	var nextYear = date.getFullYear() + 1;
	
	while(date.getDay() != day && date2.getDay() != day2)
	{
		date.setDate(date.getDate() + 1);    
		date2.setDate(date.getDate() + 1);   
	}
	while(date.getFullYear() < nextYear && date2.getFullYear() < nextYear)
	{
		var yyyy = date.getFullYear();
		var yyyy2 = date2.getFullYear();
	
		var mm = (date.getMonth() + 1);
		mm = (mm < 10) ? '0' + mm : mm;
                
                var mm2 = (date2.getMonth() + 1);
                mm2 = (mm2 < 10) ? '0' + mm2 : mm2;
	
		var dd = date.getDate();
		dd = (dd < 10) ? '0' + dd : dd;
                
                var dd2 = date2.getDate();
		dd2 = (dd2 < 10) ? '0' + dd2 : dd2;
	
		//console.log(yyyy + '-' + mm + '-' + dd)
		array.push(yyyy + '-' + mm + '-' + dd);
		array.push(yyyy2 + '-' + mm2 + '-' + dd2);
		date.setDate(date.getDate() + 7);
		date2.setDate(date2.getDate() + 7);
	}
	//console.log(array);	
	return array;
}
	    </script>
    
  </body>
</html>