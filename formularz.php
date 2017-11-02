
<?php

	$errName ="";
	$errMessage ="";
	$errHuman ="";
	$result="";
	$errEmail ="";

	$name = "";
	$email = "";
	$message = "";
	$human = "";
	$from = "";
	$to = "";
	$subject = "";

	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Demo Contact Form';
		$to = 'tomaszparfieniuk@gmail.com';
		$subject = 'LuxTrans web wiadomosc ';

		$body = "From: $name\n E-Mail: $email\n Message:\n $message";

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = '<span class="glyphicon glyphicon-exclamation-sign form_alerts_red"></span> Podaj Imię';

		}

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = '<span class="glyphicon glyphicon-exclamation-sign form_alerts_red"></span> Podaj swój adres email';
		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = '<span class="glyphicon glyphicon-exclamation-sign form_alerts_red"></span> Wpisz wiadomość';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = '<span class="glyphicon glyphicon-exclamation-sign form_alerts_red"></span> Wpisano niepoprawny wynik';
		}

		// If there are no errors, send the email
		if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
			mail($to, $subject, $message, $from);
			$result='<div> <p class="form_alerts">
			<span class="glyphicon glyphicon-info-sign form_alerts"></span>
			Dziękujemy. Wiadomość została wysłana. Odezwiemy się najszybciej jak to możliwe.</p></div>';
			}
		else {
			$result='<div> <p class="form_alerts_red" style="font-size:20px;"><span class="glyphicon glyphicon-info-sign form_alerts_red"></span> Uzupełnij wszystkie pola i wyślij ponownie.</p></div>';
			}

			}
?>


<!-- Reload alert before reload on Submit
https://stackoverflow.com/questions/3279628/checking-the-form-field-values-before-submitting-that-page

 -->
