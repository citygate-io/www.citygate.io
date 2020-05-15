<?php $page_title = "Contact Us"; ?>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function alert($type, $msg) {
	echo("<div class='panel-".$type." mvm'><p>".$msg."</p></div>");
	echo("<br>");
}

function new_send_email($name, $email, $org, $query_type, $msg) {
	$mail = new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host = getenv('CONTACT_SMTP_SERVER');
	$mail->SMTPAuth = false;
	$mail->Port = getenv('CONTACT_SMTP_PORT');
	$mail->setFrom('noreply@citygate.io', 'CityGate');
	$recips = explode(",", getenv('CONTACT_SEND_TO'));
	foreach ($recips as $recip) {
		if (filter_var($recip, FILTER_VALIDATE_EMAIL)) {
			$mail->addCC($recip);
		}
	}
	$mail->addReplyTo($email, $name);
	$mail->isHTML(true);
	$mail->Subject = "Contact Form: " . $query_type;
	$mail->Body = "
<html>
<head>
<style>table th td {border: 1px solid black;}</style>
</head>
<body>
<h2>Contact Form Submission</h2>
<p>Hi,</p>
<p><b>".$name."</b> (".$email.") from <b>".$org."</b> has filled in the contact form on the CityGate website. Please find their submission below:</p>
<p><b>Query Type: </b>".$query_type."<br><b>Message: </b>".$msg."</p>
<p>You can respond to this submission by replying to this email. The sender's email address will automatically be placed in the 'To' field.</p>
<p>Thanks,<br>CityGate</p>
</body>
</html>
";
	try {
		$mail->send();
		return "0";
	} catch (Exception $e) {
		return $mail->ErrorInfo;
	}
}


include_once '../includes/top.php';

?>

<div class="col-row m-page">
    <div class="article pbl left-col size4of4">
        <h1>Contact the Team</h1>

		<?php
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
			if ($_POST['name'] == '' || $_POST['email'] == '' || $_POST['org'] == '' || $_POST['type'] == '' || $_POST['query'] == '') {
				alert("critical", "At least one field was left blank. Please try again.");
			} else {
				$did_msg_send = new_send_email($_POST['name'], $_POST['email'], $_POST['org'], $_POST['type'], $_POST['query']);
				if ($did_msg_send == "0") {
					alert("success", "The form was submitted successfully. We'll be in contact with you shortly!");
				} else {
					alert("critical", "There was an error. Please try again. (Error: " . $return_code . ")");
				}
			};
		}
		?>

        <p class="lead">If you would like to contact the team, please fill in <b>all</b> fields in the form below.</p>

	<form class="bcu-form" action="/contact.php" method="post">
		<fieldset>
			<div class="col-row pal">
				<div class="left size1of4"><label for="name">Full Name</label></div>
				<div class="left size3of4"><input type="text" name="name" id="name" class="width-auto" maxlength="255"></div>
			</div>
			<div class="col-row pal">
				<div class="left size1of4"><label for="email">Email Address</label></div>
				<div class="left size3of4"><input type="email" name="email" id="email" class="width-auto" maxlength="255"></div>
			</div>
			<div class="col-row pal">
				<div class="left size1of4"><label for="org">Organisation</label></div>
				<div class="left size3of4"><input type="text" name="org" id="org" class="width-auto" maxlength="255"></div>
			</div>
			<div class="col-row pal">
				<div class="left size1of4"><label for="type">Query Type</label></div>
				<div class="left size3of4">
					<select class="width-auto" name="type" id="type">
						<option></option>
						<option value="General Question">General Question</option>
						<option value="Projects or Partnerships">Projects or Partnerships</option>
						<option value="Website">Website</option>
						<option value="Other">Other</option>
					</select>
				</div>
			</div>
			<div class="col-row pal">
				<div class="left size1of4"><label for="query">Query</label></div>
				<div class="left size3of4"><textarea name="query" id="query" maxlength="255"></textarea></div>
			</div>
		</fieldset>

		<div class="col-row pal">
			<div class="left size3of4 push1of4">
				<button type="submit">Submit</button>
				<button type="reset">Reset</button>
			</div>
		</div>
	</form>

    </div>
</div>

<?php include_once '../includes/bottom.php'; ?>
