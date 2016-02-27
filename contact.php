<?php 
error_reporting(E_ALL ^ E_NOTICE); // hide all basic notices from PHP

//If the form is submitted
if(isset($_POST['submitted'])) {
	
	// require a name from user
	if(trim($_POST['contactName']) === '') {
		$nameError =  'Forgot your name!'; 
		$hasError = true;
	} else {
		$name = trim($_POST['contactName']);
	}
	
	// need valid email
	if(trim($_POST['email']) === '')  {
		$emailError = 'Forgot your e-mail address.';
		$hasError = true;
	} else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
		$emailError = 'Invalid email address!';
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}
		
	// we need at least some content
	if(trim($_POST['comments']) === '') {
		$commentError = 'You your message!';
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['comments']));
		} else {
			$comments = trim($_POST['comments']);
		}
	}
		
	// upon no failure errors let's email now!
	if(!isset($hasError)) {
		
		$emailTo = 'admin@finglascelticfc.com'; // ADD YOUR EMAIL ADDRESS HERE FOR CONTACT FORM!
		$subject = 'Submitted message from '.$name; // ADD YOUR EMAIL SUBJECT LINE HERE FOR CONTACT FORM!
		$sendCopy = trim($_POST['sendCopy']);
		$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
		$headers = 'From: ' .'<'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
        
        // set our boolean completion value to TRUE
		$emailSent = true;
	}
}
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Finglas Celtic FC</title>
		<link href="css/jquery.bxslider.css" rel="stylesheet" />
		<link href="style.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet"/>
		<link rel="shortcut icon" type="image/png" href="favicon.ico"/> 
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
</head>
<body>
<!--- Start Wrapper -->
	<div id="wrapper">
<!--- Start Header -->
		<header>
			<div id="callout">
				<h2>&#9742; 087.663.4285</h2>
				<p>Kilshane Road, Finglas West, Dublin 11.</p>
			</div>
			<div id="logo">
				<a href="index.html"><img src="img/400x75.png" alt="400x75" title="Finglas Celtic" /></a>
			</div>
		</header>
<!--- End Header -->
	<div class="clearfix"></div>
<!--- Sart Banner Wrapper -->
		<div id="banner-wrapper">
<!--- Start Navigation -->
		<script src="js/jquery-1.11.2.min.js"></script>
		<script src="js/main.js"></script> <!--- For Navigation -->
		<div class="nav-wrap">
			<nav class="navigation">
				<div class='nav' nav-menu-style="yoga">
					<ul class="nav-menu">
						<li><a href="index.html">Home</a></li>
						<li><a href="about-us.html">About Us</a></li>
						<li><a href="services.html">Events</a>
							<ul>
								<li><a href="#">Lotto</a></li>
								<li><a href="#">News</a>
									<ul>
										<li><a href="#">Results</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="testimonials.html">Teams</a></li> 
						<li class="active"><a href="contact.php">Contact</a></li>
					</ul>
				</div>
			</nav>
		</div>
<!--- End Navigation -->
<!--- Start Bread Crumbs -->
			<div id="bread-crumbs">
				<h3>Contact Us</h3>
			</div>
		</div>
<!--- End Bread Crumbs -->
<!--- End Banner Wrapper -->
	
	<section class="one-third">
			<img src="img/chair.png" alt="chair" title="Chairman" />
			<h3>Club Chairman </h3>
			<p>	Jimmy Prendergast<br>
				Email:chairman@finglascelticfc.com<br>
				Phone:087 6634285</p>
		</section>
		<section class="one-third">
			<img src="img/sec.png" alt="sec" title="Secretary"  />
			<h3>Club Secretary </h3>
			<p>	Henry Keeley<br>
				Email:secretary@finglascelticfc.com<br>
				Phone:087 9429614</p>
		</section>
		<section class="one-third">
			<img src="img/asec.png" alt="asec" title="Assitent Secretary" />
			<h3>Club Asst.Sec </h3>
			<p>	Johnny Dalton<br>
				Email:asstsec@finglascelticfc.com<br>
				Phone:087 6203312</p>
		</section>
		<section class="one-third">
			<img src="img/child.png" alt="child" title="Safety" />
			<h3>Club Child Safety </h3>
			<p>	Patsy Purcell<br>
				Email:childsafety@finglascelticfc.com<br>
				Phone:085 1221527</p>
		</section>
		<section class="one-third">
			<img src="img/admin.png" alt="admin" title="Administration" />
			<h3>Club Administrator </h3>
			<p>	Gerry Tyson<br>
				Email:admin@finglascelticfc.com<br>
				Phone:086 3392653</p>
		</section>
		<section class="one-third">
			<img src="img/add.png" alt="add" title="Treasury" />
			<h3>Club Treasury </h3>
			<p>	Commitee<br>
				Email:treasury@finglascelticfc.com</p>
		</section>
		<!--- Start Banner Image -->
		
	<div class="clearfix"></div>
<!--- Start Contact Info -->
		<section class="one-third">
			<h2>Our Contact info:</h2>
				<br>
			<h3>Kilshane Road<br>Finglas West, Dublin 11</h3>
				<br>
			<h3 class"phone"><strong>Phone :</strong>087.663.4285</h3>
				<br>
			<h3><strong>Email :</strong> admin@finglascelticfc.com</h3>
				<br>
			<p>Thank you for visiting our website, we'd be happy to hear from you and start a long lasting relationship if your a new comer!</p>
		</section>
		
<!-- End Contact Info -->
<!-- Start Contact Form -->
	<section class="two-third" class="contact">
	<div id="contact-area">
	<div id="contact" class="section">
		<div class="container content">
	        <?php if(isset($emailSent) && $emailSent == true) { ?>
                <p class="info">Your email was sent. Huzzah!</p>
            <?php } else { ?>		
				</div>	
				<div id="contact-form">
					<?php if(isset($hasError) || isset($captchaError) ) { ?>
                        <p class="alert">Error submitting the form</p>
                    <?php } ?>
				
					<form id="contact-us" action="contact.php" method="post">
						<div class="formblock">
							<label class="screen-reader-text">Name</label>
							<input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="txt requiredField" placeholder="Name:" />
							<?php if($nameError != '') { ?>
								<br /><span class="error"><?php echo $nameError;?></span> 
							<?php } ?>
						</div>
                        <div class="clearfix"></div>
						<div class="formblock">
							<label class="screen-reader-text">Email</label>
							<input type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="txt requiredField email" placeholder="Email:" />
							<?php if($emailError != '') { ?>
								<br /><span class="error"><?php echo $emailError;?></span>
							<?php } ?>
						</div>
                        <div class="clearfix"></div>
						<div class="formblock">
							<label class="screen-reader-text">Message</label>
							 <textarea name="comments" id="commentsText" class="txtarea requiredField" placeholder="Message:"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
							<?php if($commentError != '') { ?>
								<br /><span class="error"><?php echo $commentError;?></span> 
							<?php } ?>
						</div>
                      <div class="clearfix"></div>  
							<button name="submit" type="submit" class="subbutton">Submit</button>
							<input type="hidden" name="submitted" id="submitted" value="true" />
					</form>			
			<?php } ?>
		</div>
    </div>
<script type="text/javascript">
	<!--//--><![CDATA[//><!--
	$(document).ready(function() {
		$('form#contact-us').submit(function() {
			$('form#contact-us .error').remove();
			var hasError = false;
			$('.requiredField').each(function() {
				if($.trim($(this).val()) == '') {
					var labelText = $(this).prev('label').text();
					$(this).parent().append('<span class="error">Forgot your '+labelText+'!</span>');
					$(this).addClass('inputError');
					hasError = true;
				} else if($(this).hasClass('email')) {
					var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
					if(!emailReg.test($.trim($(this).val()))) {
						var labelText = $(this).prev('label').text();
						$(this).parent().append('<span class="error">Sorry! Invalid '+labelText+'!</span>');
						$(this).addClass('inputError');
						hasError = true;
					}
				}
			});
			if(!hasError) {
				var formInput = $(this).serialize();
				$.post($(this).attr('action'),formInput, function(data){
					$('form#contact-us').slideUp("fast", function() {				   
						$(this).before('<p class="tick"><h3>Thanks! Your email has been delivered!</h3></p>');
					});
				});
			}
			
			return false;	
		});
	});
	//-->!]]>
</script>
			</div>
		</section>
<!-- End Contact Form -->
	<div class="clearfix"></div>				
<!--- Start Footer -->
		<footer>
			<section class="one-third">
				<h3>Contact Us</h3>
				<br>
				<p class="footercontact">Finglas Celtic FC<br>
				<b class="phone">087.663.4285</b><br><br>
				Kilshane Road<br>
				Finglas West<br>
				Dublin 11</p>
				
			</section>
			<section class="one-third">
				<h3>Connect With Us</h3>
					</br>
				<ul class="social">
						<li><a href="#" target="_blank" title="Facebook"><img src="img/f.png" alt="f" /></a></li>
						<li><a href="#" target="_blank" title="Google"><img src="img/g.png" alt="g" /></a></li>
						<li><a href="#" target="_blank" title="Twitter"><img src="img/t.png" alt="t" /></a></li>
						<li><a href="#" target="_blank" title="YouTube"><img src="img/u.png" alt="u" /></a></li>
					</ul>
			</section>
			<section class="one-third">
				<img src="img/logo1.png" alt="logo1" />
			</section>
		</footer>
<!--- End Footer -->
		<p>&copy Finglas Celtic FC</p>
	</div>
<!--- End Wrapper -->
<!--- Top Scroll Start -->
	<a href="#0" class="cd-top">Top</a>
		<script src="js/top.js"></script> <!-- Gem jQuery -->
		<script src="js/modernizr.js"></script>
<!--- Top Scroll End -->
</body>
</html>