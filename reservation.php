<?php
   // Turn off all error reporting
   error_reporting(E_ALL & ~E_NOTICE);
   ?>
<?php
   session_start();
   
   if($_SERVER["HTTPS"] != "on")
   
   {
   
       header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
   
       exit();
   
   }
   
   
   // Loading payment library
   
   require_once './includes/constants.php';
   
   
   
   // Loading payment library
   
   require_once './lib/FirstData.php';
   
   
   
   // Loading Db library
   
   require_once './lib/DbHandler.php';
   
   
   
   // Loading Utility library
   
   require_once './lib/Utility.php';
   
   
   
   $hotels = DbHandler::GetAll('SELECT id, name FROM hotels');
   
   
   
   
   
   switch ($_GET['tour']) {
   
       case 'circle':
   
   	$circle = true;
   
   	$default = false;
   
   	break;
   
       case 'sunset':
   
   	$sunset = true;
   
   	$default = false;
   
   	break;
   
       case 'hilo':
   
   	$hilo = true;
   
   	$default = false;
   
   	break;
       
        case 'vip':
   
   	$vip = true;
   
   	$default = false;
   
   	break;
   
       case 'waterfalls':
   
   	$waterfalls = true;
   
   	$default = false;
   
   	break;
   
       default:
   
   	$default = true;
   
   	break;
   
   }
   
   
   
   $psg_limit = 7;
   ?>
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
      <title>Big Island Air Tour - Volcano and Lava Viewing in Hawaii</title>
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
      <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
	  <style>
		.error {
			border:1px solid red;
		}
	  </style>
   </head>
   <body>
      <div id="fb-root"></div>
      <script>(function(d, s, id) {
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) return;
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
         fjs.parentNode.insertBefore(js, fjs);
         }(document, 'script', 'facebook-jssdk'));
      </script>
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
                     <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo" class="img-responsive" /></a>
                  </div>
               </div>
               <div class="col-sm-10 col-md-9">
                  <div class="header-top">
                     <span class="phone">CALL US: 808.329.4868</span>
                     <ul class="header-social-icons">
                                <li><a href="https://www.facebook.com/pages/Big-Island-Air-Hawaii/162424950451152" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.instagram.com/bigislandair/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.tripadvisor.com/Attraction_Review-g60872-d1798336-Reviews-Big_Island_Air-Kailua_Kona_Island_of_Hawaii_Hawaii.html" target="_blank"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a></li>
                     </ul>
                     <a href="reservation.php?tour=circle" class="btn btn-primary booknowbtn">BOOK NOW <i class="fa fa-arrow-right" aria-hidden="true"></i></a>    
                  </div>
                  <div id="navbar" class="collapse navbar-collapse">
                     <ul class="nav navbar-nav">
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="tours.php">TOURS</a></li>
                        <li><a href="charters.php">CHARTERS</a></li>
                        <li><a href="live-reviews.php">LIVE REVIEWS</a></li>
                        <li><a href="aircraft.php">AIRCRAFT</a></li>
                        <li><a href="pilots.php">PILOTS</a></li>
                        <li><a href="gallery.php">GALLERY</a></li>
                        <li><a href="contact.php">CONTACT US</a></li>
                     </ul>
                  </div>
                  <!--/.nav-collapse -->
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
                  <div class="col-md-12" id="loadReservation">
				  <?php if (!$success) : ?>
                     <h1 class="page-title"><span>Reservation</span></h1>
                     <p><strong>Book your tour directly and SAVE UP TO 25% OFF FROM OUR STANDARD RATES.</strong></p>
                     <p>Call us at 808-329-4868 or fill out the Reservation Request Form below. We will get back to you with flight availability and answers to all of your questions. </p>
                     <p>For groups of 8 or more, please call. Mahalo</p>
                     <p><img src="images/256bitssl.png" alt="256bitssl" /> </p>
                     <p>Your information is safe & secure! Encrypted with 256 bit ssl.</p>
                     <hr />
					 
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
                     <form method="POST" action="ajax/reservation.php?tour=<?=htmlentities($_GET['tour'])?>" name="reservation" id="reservation"32>
                        <div class="row">
                           <div class="col-md-9">
                              <div class="passengers">
                                 <div class="each-form-box passenger-block" style="padding-top:15px;">
                                    <span></span>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="usr">First Name:*</label>
                                             <input type="text" class="form-control required" id="firstName" name="firstName[]">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="usr">Last Name:*</label>
                                             <input type="text" class="form-control required" id="lastName" name="lastName[]">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="usr">Weight:*</label>
                                             <input type="text" class="form-control required" id="weight" name="weight[]">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="usr">Contact Phone Number:*</label>
                                             <input type="text" class="form-control required" id="phone" name="phone[]">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="usr">Email Address:*</label>
                                             <input type="text" class="form-control required" id="email" name="email[]">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="usr">Passenger Type?*</label>
                                             <select class="form-control passenger-type-select" id="exampleSelect1" name="new_passenger_type[]">
                                                <option value="adult">Adult</option>
                                                <!---<option>Child</option>--->
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label for="usr">Remarks & Misc Info</label>
                                             <textarea class="form-control" id="new_reservation_description" name="new_reservation_description[]"></textarea>
                                          </div>
                                       </div>
                                    </div>
									<input type="hidden" class="passenger-type" value="adult"/>
                                 </div>
                              </div>
                              <hr />
                              <div class="each-form-box">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <button class="btn btn-primary" type="button" id="addPassenger">+ Add Additional Passenger</button>
                                    </div>
                                 </div>
                                 <hr />
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label for="usr">Date Arriving on Big Island:*</label>
                                          <input type="text" class="form-control datepicker required" name="dateArriving" id="dateArriving" readonly>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label for="usr">Hotel:</label>
                                          <select class="form-control" id="hotel" name="hotel">
                                             <option value="0">Not Applicable</option>
                                             <?php foreach ($hotels as $hotel) : ?>
                                             <option value='<?= $hotel['id'] ?>'><?= $hotel['name'] ?></option>
                                             <?php endforeach; ?>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label for="usr">Date Desired for Flight:*</label>
                                          <input type="text" class="form-control datepicker required" name="dateDesired" id="dateDesired" value="" readonly>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <div><label for="usr">Select the tour:*</label></div>
                                          <label class="form-check-inline radiobtn" style="font-weight:normal">
                                          <input class="form-check-input" type="radio" name="tour" data-child="<?= CIRCLE_CHILD ?>" data-adult="<?= CIRCLE_ADULT ?>"  value="Circle Island tour" <?= $default || $circle ? 'checked="checked"' : '' ?>> Circle Island 
                                          </label>
                                          <label class="form-check-inline radiobtn" style="font-weight:normal">
                                          <input class="form-check-input" type="radio" name="tour" data-child="<?= SUNSET_CHILD ?>" data-adult="<?= SUNSET_ADULT ?>" value="Sunset Tour" <?= $sunset ? 'checked="checked"' : '' ?>>  Sunset
                                          </label>
                                          <label class="form-check-inline radiobtn" style="font-weight:normal">
                                          <input class="form-check-input" type="radio" name="tour" data-price="<?= VIP ?>" value="VIP Air Adventure" <?= $vip ? 'checked="checked"' : '' ?>>  VIP Air Adventure
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <div><label for="usr">How would like us to contact you?*</label></div>
                                          <label class="form-check-inline radiobtn" style="font-weight:normal">
                                          <input class="form-check-input" type="radio" name="contact" value="Email" checked="checked">  Email
                                          </label>
                                          <label class="form-check-inline radiobtn" style="font-weight:normal">
                                          <input class="form-check-input" type="radio" name="contact" value="Phone">   Phone
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <hr />
                              <div class="each-form-box">
                                 <h2>Payment Details</h2>
                                 <div class="row payment-amount">
                                    <div class="col-md-6">
                                       <div class="adult-price"></div>
                                       <div class="child-price"></div>
                                    </div>
                                    <div class="col-md-6">
                                       <h2>Total: $<span id="totalPrice">0</span></h2>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label for="usr">Credit Card #*</label>
                                          <input type="text" class="form-control required" name="cc" id="credit_card" value="">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label for="usr">Card Holder Name*</label>
                                          <input type="text" class="form-control required" name="cc_name" id="cc_name" value="">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-2">
                                       <div class="form-group">
                                          <label for="usr">Exp (MM) </label>
                                          <select class="form-control required" name="cc_m" id="cc_m">
                                             <option>01</option>
                                             <option>02</option>
                                             <option>03</option>
                                             <option>04</option>
                                             <option>05</option>
                                             <option>06</option>
                                             <option>07</option>
                                             <option>08</option>
                                             <option>09</option>
                                             <option>10</option>
                                             <option>11</option>
                                             <option>12</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-md-2">
                                       <div class="form-group">
                                          <label for="usr">Exp (YY) </label>
                                          <select class="form-control required" name="cc_y" id="cc_y">
                                             <?php for ($i = date('Y'); $i < date(Y) + 7; $i++) : $year = substr($i, 2, 2) ?>
                                             <option value="<?= $year ?>"><?= $year ?></option>
                                             <?php endfor; ?>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-md-2">
                                       <div class="form-group">
                                          <label for="usr">CVV</label>
                                          <input type="text" class="form-control required" name="cvv" id="cvv" maxlength="4" value="">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-4">
                                       <img src="images/cards.png" class="img-responsive cardimg" alt="card" />
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <img src="captcha/captcha.php" id="captcha" /><a href="javascript:void(0)" style="float:right;" id="change-image">Not readable? Change text.</a><br/><br/><br/>
                                          <label for="usr">Prove that you are human</label>
                                          <input type="text" class="form-control required" name="captcha" id="captchavalue" autocomplete="off">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <button class="btn btn-primary book-now-btn" type="button" id="submitReservation">BOOK NOW</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                           </div>
                        </div>
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
         <!-- ./content-area -->
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
               <div class="fb-page" data-href="https://www.facebook.com/bigislandair/?fref=ts" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                  <blockquote cite="https://www.facebook.com/bigislandair/?fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/bigislandair/?fref=ts">Big Island Air, Hawaii</a></blockquote>
               </div>
            </div>
            <div class="col-md-4">
               <h1 class="title">Trip Advisor review</h1>
               <a href="https://www.tripadvisor.com/Attraction_Review-g60872-d1798336-Reviews-Big_Island_Air-Kailua_Kona_Island_of_Hawaii_Hawaii.html" target="_blank"><img src="images/tripadvisor.png" alt="trip advisor" class="img-responsive img-border" /></a>
            </div>
         </div>
      </div>
      <!-- major tour -->
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <a href="index.php"><img src="images/logo.png" alt="logo" class="img-responsive" /></a>
               </div>
               <div class="col-md-4">
                  <ul>
                     <li><a href="index.php">HOME</a></li>
                     <li><a href="tours.php">TOURS</a></li>
                     <li><a href="charters.php">CHARTERS</a></li>
                     <li><a href="live-reviews.php">LIVE REVIEWS</a></li>
                     <li><a href="aircraft.php">AIRCRAFT</a></li>
                     <li><a href="pilots.php">PILOTS</a></li>
                     <li><a href="gallery.php">GALLERY</a></li>
                     <li><a href="contact.php">CONTACT US</a></li>
                  </ul>
               </div>
               <div class="col-md-4">
                  <p>INFO@BIGISLANDAIR.COM<br />
                     PHONE: (808)329-4868<br />
                     FAX: (808)329-0855
                  </p>
                  <hr />
                  <p>Big Island Air Copyright © 2016. Kona, HI<br />
                     <a href="https://www.getleadsfast.com" title="" target="_blank">Website Management provided by Get Leads Fast, LLC</a>
                  </p>
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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js" ></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
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
         	//alert(parseInt(total).toFixed(2));
         
         
         
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
				 
				 console.log(element);
         
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