<?php

// include header and footer
include ('shared.inc.php');

//--------------------------
// Form Processing Script
// This script is written to work with the crowdsource form in crowdsource.php
//--------------------------

//==========================
// Data validation
//==========================

// check to see if there is a form submission or not
if (array_key_exists("submit", $_POST)) {

	// check required fields

	$required = array('firstName', 'lastName', 'email','description');
	$expected = array('firstName', 'lastName','email','description');
	$missing = array();

	// use foreach loop to run through each item in the expected array
	foreach($expected as $thisField) {
		// setup a variable to store user input for this field name
		$thisUserInput = $_POST[$thisField];

		// check if this field is a required field
		if (in_array($thisField, $required)) {
			// check if user input of this field is empty, if yes, add this field to the missing array
			if (empty($thisUserInput)) {
				array_push($missing, $thisField);
			} else {
				// set up a variable to store the user input for this field
				/*
					Say $thisField contains "title", then this line
						${$thisField} = $thisUserInput;
					will effectively turn to
						$title = $thisUserInput;
					In this example, after the foreach loop, we will then have the following variables: $title, $author, $comment, and $tag, all set up and that's why we can use them to compose the $output below (line 66).

					Also note that the names of these new variables match the form field names recorded in the $expected array.
				*/
				${$thisField} = $thisUserInput;
			}
		} else {
			${$thisField} = $thisUserInput;
		}
	}

	// after running through all expected fields, check the $missing array. if there is no required field missing, the $missing array will be empty.
	if (empty($missing)){
		// empty($missing) is true --> no missing field, display a thank you message

		$output = "
				<h2>We've received your submission!</h2>
				<p style='text-align:center;margin-top:20%;'>Thank you $firstName for sharing your idea with the Texas Republic Team.</p>\n
				<p style='text-align:center;margin-bottom:20%;'>A confirmation email has been sent to this address: $email</p>\n
		";

	//=================================================================
	// Send confirmation email to user. Styling html email:
	// 		1. Put html content in $headers
	//		2. $htmlContent is $message
	//		3. For links and images, use full URL NOT images/header.png
	//==================================================================

		$to= "elizabeth.slonaker@mavs.uta.edu"; //this should be $email
		$subject ="Your Texas Republic Idea Submission";
		$htmlContent = /*file_get_contents("email.html");*/
				'
					<html>
					<head></head>
					<body>
						<!-- HEADER IMAGE -->
						<img src="http://ctec4309.egs3925.uta.cloud/txr/images/email-header.jpg" alt="Texas Republic Bar & Kitchen Confirmation Email" width="100%">

						<!-- EMAIL MESSAGE -->
						<p style="font-size:1.2em;">'.$firstName.',</p>
						<p style="font-size:1.2em;">Thank you for sending us your idea! Texas Republic received the following submission from you:</p>
						<p style="font-size:1.2em; color:#970101;">'.$description.'</p>
						<p style="font-size:1.2em; margin-bottom:3em;">The Texas Republic Team</p>

						<!-- LOGO & CONTACT -->
						<a href="ctec4309.egs3925.uta.cloud/txr/index.php">
							<img src="http://ctec4309.egs3925.uta.cloud/txr/images/logo.png" alt="Texas Republic Bar & Kitchen Logo" width="200px">
						</a>
					  <p style="font-size:1em;">Texas Republic Bar & Kitchen<br>945 Foch St Fort Worth, TX 76107<br>(817) 887-9797<br>texasrepublicfw.com</p>

						<!-- CALL TO ACTION -->
					  <div style="text-align:center;margin:5em 0 1em 0;">
							<h3>Submit Another Idea</h3>
							<a href="ctec4309.egs3925.uta.cloud/txr/crowdsource.php">
								<img src="http://ctec4309.egs3925.uta.cloud/txr/images/home-dining.jpg" alt="Submit idea to Texas Republic" width="50%" style="margin:0 .5em;">
							</a>
				      <h3 style="margin-top:1em;">Shop Online Store</h3>
				      <a href="ctec4309.egs3925.uta.cloud/txr/store.php">
								<img src="http://ctec4309.egs3925.uta.cloud/txr/images/store-3.png" alt="Shop Texas Republic online store" width="50%" style="margin:0 .5em;">
							</a>
					  </div>

						<!-- UPCOMING EVENTS -->
					  <div style="text-align:center;">
					    <h3>Upcoming Events</h3>
							<a href="ctec4309.egs3925.uta.cloud/txr/events.php">
								<img src="http://ctec4309.egs3925.uta.cloud/txr/images/home-events.png" alt="Texas Republic Event" width="50%" style="margin:0 .5em;"></a>
					  </div>

						<!-- FOOTER -->
					  <div style="margin-top:4em; padding:2em; background-color:black; color:white; text-align:center;">
					  	<a href="http://ctec4309.egs3925.uta.cloud/txr/index.php" style="color:white;">Website</a>
							<a href="https://www.facebook.com/TexasRepublicFW/" style="color:white;">Facebook</a>
					  	<a href="https://www.instagram.com/texasrepublicfw/" style="color:white;">Instagram</a>
					  </div>
					</body>
					</html>
				';

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .="From: noreply@TexasRepublicFW.com";
		$mailSent = mail($to,$subject,$htmlContent,$headers);

	} else {
		// empty($missing) is false --> $missing array is not empty -- prepare a message for the user

		$missingFieldList = implode(", ",$missing);
		$output = "<p style='margin:20% 0;text-align:center;'>The following fields are missing, please go back and fill them in! <br>
						<b>Missing fields: $missingFieldList </p>
					";
	}

// if there has been no submission, echo a message to the user
} else {
	$output = "
	<h2 style='margin-top:20%;'>We want to hear from you!</h2>
	<p style='text-align:center; margin-bottom:10em;'>Submit your idea for a new drink to add to our menu using <a href='crowdsource.php' style='color:white;'>this form.</a></p>
	";
}
?>

<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE> Texas Republic Bar &amp; Kitchen: Crowdsource Form Message </TITLE>
<link rel="stylesheet" href="CSS/styles.css">
</HEAD>
<BODY>
	<?php
		print $banner;
		print $nav;
		print $output;
		print $footer;
	?>
</BODY>
</HTML>
