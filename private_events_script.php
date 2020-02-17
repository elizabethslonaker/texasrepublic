<?php
include ('shared.inc.php');

//--------------------------
// Form Processing Script
// This script is written to work with the crowdsource form in crowdsource.php
//--------------------------

//==========================
// Data validation
//==========================

// check to see if there is a form submission or not
if (array_key_exists("send", $_POST)) {

	// check required fields

	$required = array('firstName', 'lastName', 'email', 'phone', 'date', 'number', 'event');
	$expected = array('firstName', 'lastName', 'email', 'phone', 'date', 'number', 'event', 'room', 'beverage', 'food', 'description');
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

		// deal with multi-line text input on description
		$descriptionStr = nl2br(htmlentities($description));

		$output = "
				<p style='text-align:center; margin-top:20%;'>Thank you $firstName for your interest in hosting an event at Texas Republic!<br> Our Texas Republic Team will be in contact with you shortly.</p>\n
				<p style='text-align:center;'>You submitted the following.</p>\n
				<table style='text-align:left;margin:3% auto 20%; border-collapse:collapse;'>
					<tr style='width:20%;'><th>First Name</th><td>$firstName</td></tr>
					<tr style='width:20%;'><th>Last Name</th><td>$lastName</td><tr>
					<tr style='width:20%;'><th>Email</th><td>$email</td></tr>
					<tr style='width:20%;'><th>Phone Number</th><td>$phone</td></tr>
					<tr style='width:20%;'><th>Date</th><td>$date</td></tr>
					<tr style='width:20%;'><th>Amount</th><td>$number</td></tr>
					<tr style='width:20%;'><th>Event Type</th><td>$event</td></tr>
					<tr style='width:20%;'><th>Room Package</th><td>$room</td></tr>
					<tr style='width:20%;'><th>Beverage Package</th><td>$beverage</td></tr>
					<tr style='width:20%;'><th>Food Package</th><td>$food</td></tr>
					<tr style='width:20%;'><th>Comments</th><td>$descriptionStr</td></tr>
				</table>
		";

		//=================================================================
		// Send email to client notiying them of an event or catering inquiry. Styling html email:
		// 		1. Put html content in $headers
		//		2. $htmlContent is $message
		//		3. For links and images, use full URL NOT images/header.png
		//==================================================================

			$to="elizabeth.slonaker@mavs.uta.edu"; //this should be txrepublic email
			$subject ="Texas Republic Event Booking";
			$htmlContent =
					'
						<html>
						<head></head>
						<body>
							<!-- EMAIL MESSAGE -->
							<p>Hi admin,</p>
							<p>A website visitor has submitted the following details from the event & catering form.</p>
							<table style="margin: 4em 0; border-collapse:collapse; text-align:left;">
								<tr><th>First Name</th><td>'.$firstName.'</td></tr>
								<tr><th>Last Name</th><td>'.$lastName.'</td><tr>
								<tr><th>Email</th><td>'.$email.'</td></tr>
								<tr><th>Phone Number</th><td>'.$phone.'</td></tr>
								<tr><th>Date</th><td>'.$date.'</td></tr>
								<tr><th>Amount</th><td>'.$number.'</td></tr>
								<tr><th>Event Type</th><td>'.$event.'</td></tr>
								<tr><th>Room Package</th><td>'.$room.'</td></tr>
								<tr><th>Beverage Package</th><td>'.$beverage.'</td></tr>
								<tr><th>Food Package</th><td>'.$food.'</td></tr>
								<tr><th>Comments</th><td>'.$descriptionStr.'</td></tr>
							</table>
							<p>Thank you,</p>
							<p>Texas Republic Web Admin</p>
						</body>
						</html>
					';

			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .="From: website@TexasRepublicFW.com";
			$mailSent = mail($to,$subject,$htmlContent,$headers);

	} else {
		// empty($missing) is false --> $missing array is not empty -- prepare a message for the user

		$missingFieldList = implode(", ",$missing);
		$output = "<p style='margin: 20% 0;text-align:center;'>The following fields are missing, please go back and fill them in! <br>
						<b>Missing fields: $missingFieldList </p>
					";
	}

// if there has been no submission, echo message to the user
} else {
	$output = "
	<h2 style='margin-top:20%;'>Do Your Next Event, <br>The Texas Republic Way!</h2>
	<p style='text-align:center; margin-bottom:20%;'>Send us a private event or catering inquiry using <a href='private_events.php' style='color:#B11212;'>this form</a></p>
	";
}
?>

<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE> Private Event & Catering Form - Texas Republic Bar &amp; Kitchen </TITLE>
<link rel="stylesheet" href="CSS/styles.css">
</HEAD>
<BODY>
	<?php
		print $banner;
		print $nav;
		print $output;
		print $footer;
	?>

	<script src="js/app.js"></script>

</BODY>
</HTML>
