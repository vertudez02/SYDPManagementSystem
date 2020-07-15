<?php


	include('../../../dbcon.php');
	include ( "../../../src/NexmoMessage.php" );


if(isset($_POST['text'])){

	$app_personal_mobileno = $_POST['app_personal_mobileno'];
	$message = $_POST['message'];
	/**
	 * To send a text message.
	 *
	 */

	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('e2c65175', 'XdSdwIV6uBMw43ug');

	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	$info = $nexmo_sms->sendText( "$app_personal_mobileno", 'Jao', "$message" );

	// Step 3: Display an overview of the message
	echo $nexmo_sms->displayOverview($info);

	// Done!

	echo "<script>setTimeout(\"location.href = '../views/v_listofapplicantstep3interview.php';\",0);</script>";
}

if(isset($_POST['textinterviewpass'])){

	$app_personal_mobileno = $_POST['app_personal_mobileno'];
	$message = $_POST['message'];
	/**
	 * To send a text message.
	 *
	 */

	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('e2c65175', 'XdSdwIV6uBMw43ug');

	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	$info = $nexmo_sms->sendText( "$app_personal_mobileno", 'Jao', "$message" );

	// Step 3: Display an overview of the message
	echo $nexmo_sms->displayOverview($info);

	// Done!

	echo "<script>setTimeout(\"location.href = '../views/v_listofapplicantstep3passed.php';\",0);</script>";
}

?>