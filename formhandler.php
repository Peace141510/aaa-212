<? php
$name = $_POST['name']
$visitor_email = $_POST['email']
$course = $_POST['course']
$message = $_POST['message']



$email_form = "file:///C:/Users/geral/OneDrive/Desktop/My%20Website/index.html"

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
				"User Email: $visitor_email.\n".
					"Subject: $subject.\n".
						"User Message: $message.\n".;


$to = 'jannickholee07@gmail.com'

$headers = "From $email_from \r\n";

$headers .="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body, $headers);

header("Location: contact.html");
?>