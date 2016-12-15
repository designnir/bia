<?php
session_start();
    if (isset($_POST['submit'])) {
    $error = "";

    if (!empty($_POST['name'])) {
    $name = $_POST['name'];
    } else {
    $error .= "You didn't type in your name. <br />";
    }

    if (!empty($_POST['email'])) {
    $email = $_POST['email'];
      if (!preg_match("/^[_a-z0-9]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email)){
      $error .= "The e-mail address you entered is not valid. <br/>";
      }
    } else {
    $error .= "You didn't type in an e-mail address. <br />";
    }

    if (!empty($_POST['message'])) {
    $message = $_POST['message'];
    } else {
    $error .= "You didn't type in a message. <br />";
    }

     if (empty($_SESSION['captcha']) || trim(strtolower($_REQUEST['captcha'])) != $_SESSION['captcha']) {
        
        $error .= "The captcha code you entered does not match. Please try again. <br />";  
        
    }  else {
         $code = $_REQUEST['captcha'];
    }
     /*
    if(($_POST['code']) == $_SESSION['code']) {
    $code = $_POST['code'];
    } else {
    $error .= "The captcha code you entered does not match. Please try again. <br />";    
    }
    */

    if (empty($error)) {
     //$from = 'From: ' . $name . ' <' . $email . '>';
        $from_email = "info@bigislandair.com";
        $from_name = "BigIslandAir.com";
        $to = "info@bigislandair.com";
        //$to = "vladimir@getleadsfast.com";
        //$cc = "slupkey@charter.net";
        $bcc = "dmarriott@getleadsfast.com";
		//$bcc = 'miladin@getleadsfast.com';
        $subject = "New contact form message";
        $content = $name . " has sent you a message, please see below: \n" . $message;
        $success = "<div class=\"alert alert-success\" class=\"success\">Thank you! Your message has been sent!</div>";
        
        require_once 'swift/swift_required.php';


                try {
                    // Create the Transport the call setUsername() and setPassword()
                    $transporter = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                            ->setUsername('system@getleadsfast.com')
                            ->setPassword("system101");
  


    // Create the Mailer using your created Transport
    $mailer = Swift_Mailer::newInstance($transporter);


    $message = Swift_Message::newInstance()
      ->setSubject($subject)
      ->setFrom(array($from_email => $from_name))
      ->setReplyTo(array($email => $name))
      ->setTo($to)//      ->setCc($cc)
      ->setBcc($bcc)
      ->setBody($content)
      ;

      // Pass a variable name to the send() method
      $result = $mailer->send($message, $failures);
                        } catch(Exception $e) {
                    
                }
		
     
    }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="Contact Big Island Air to book your experential volcano air tours or any type of air tours in Kona Hawaii.">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">

        <title>Contact Big Island Air - Volcano Air Tours Kona Hawaii</title>

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
        <script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-38930344-12', 'bigislandair.com');

  ga('send', 'pageview');



</script>
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
                                <li class="active"><a href="contact.php">CONTACT US</a></li>
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
                        
                        <div class="row">
                            
                            <div class="col-md-4">
                                <p><strong>Big Island Air Office</strong></p>
                                <p>Kona International Airport<br />
                                Commuter Air Terminal<br />
                                73-103 U'u Street<br />
                                Kailua-Kona, HI 96740</p>
                            </div>
                            
                            <div class="col-md-4">
                                <p><strong>Mailing address:</strong></p>
                                <p>Kailua-Kona, HI 96745</p>  
                            </div>
                            
                            <div class="col-md-4">
                                <p><strong>Phone:</strong> 808 329 4868<br />
                                <strong>FAX:</strong> 808 329 0855<br />
                                <strong>E-mail:</strong> info@bigislandair.com<br />
                                <strong>Tours:</strong> tours@bigislandair.com<br />
                                <strong>Charters:</strong> charters@bigislandair.com</p>
                            </div>
                            
                        </div>
                        
                        <hr />
                        
                        <div class="row">
							<div class="col-md-12">
							<?php
      if (!empty($error)) {
      echo '<div class="alert alert-danger"><strong>Your message was NOT sent<br/> The following error(s) returned:</strong><br/>' . $error . '</div>';
      } elseif (!empty($success)) {
      echo $success;
      }
    ?>
							</div>
                            <form method="post" action="contact.php">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="usr">Name:*</label>
                                            <input type="text" class="form-control" id="usr" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="usr">E-mail:*</label>
                                            <input type="text" class="form-control" id="email" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="usr">E-mail:*</label>
                                            <textarea class="form-control" id="message" name="message"></textarea>
                                        </div>
                                    </div>
                                </div>
								<div class="row">
									<div class="col-md-12">
										<img src="captcha/captcha.php" id="captcha" /><br /><a href="javascript:void(0)" style="float:left;" id="change-image">Not readable? Change text.</a><br/><br/>

										<div class="form-group">
											<label for="captcha">Prove that you are human</label>
											<input type="text" class="form-control required" name="captcha" id="captchavalue" autocomplete="off">
										</div>
									</div>
								</div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-primary submit-contact-btn" name="submit" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                               
                            <div class="col-md-6">
                                <img src="images/contact-map.jpg" alt="map" class="img-responsive" />
                            </div>
						   </form>
                        </div>
                        
                        <hr />
                        
                        <div class="row bottom-row-top-margin">
                            <div class="col-md-12">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120179.18552829803!2d-156.11177763968763!3d19.729666136226996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x79540d7f5fa86fc5%3A0x7d3d5bd37ad4bc1a!2sBig+Island+Air!5e0!3m2!1sen!2s!4v1480444382171" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
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
                        FAX: (808)329-0855</p>
                        
                        <hr />
                        
                        <p>Big Island Air Copyright © 2016. Kona, HI<br />
                        <a href="https://www.getleadsfast.com" title="" target="_blank">Website Management provided by Get Leads Fast, LLC</a></p>
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
	<script>
		$('body').on('click', '#change-image', function() {
         	$('#captcha').attr('src', 'captcha/captcha.php?' + Math.random());
         	$('#captchavalue').focus();
		 });
	</script>
    
  </body>
</html>