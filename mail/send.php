<?php
if(isset($_POST['button'] )){

$filename = 'first.jpg';
$path = 'C:/wamp64/www/site/imgsty/output';
$file = $path . "/" . $filename;

$mailto = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$content = file_get_contents($file);
$content = chunk_split(base64_encode($content));

// a random hash will be necessary to send mixed content
$separator = md5(time());

// carriage return type (RFC)
$eol = "\r\n";

// main header (multipart mandatory)
$headers = "From: name <test@test.com>" . $eol;
$headers .= "MIME-Version: 1.0" . $eol;
$headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
$headers .= "Content-Transfer-Encoding: 7bit" . $eol;
$headers .= "This is a MIME encoded message." . $eol;

// message
$body = "--" . $separator . $eol;
$body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
$body .= "Content-Transfer-Encoding: 8bit" . $eol;
$body .= $message . $eol;

// attachment
$body .= "--" . $separator . $eol;
$body .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"" . $eol;
$body .= "Content-Transfer-Encoding: base64" . $eol;
$body .= "Content-Disposition: attachment" . $eol;
$body .= $content . $eol;
$body .= "--" . $separator . "--";

//SEND Mail
if (mail($mailto, $subject, $body, $headers)) {
    echo "Mail send ... OK"; // or use booleans here
    unlink("C:/wamp64/www/site/imgsty/image/image.jpg");
    unlink("C:/wamp64/www/site/imgsty/style/style.jpg");
    unlink("C:/wamp64/www/site/imgsty/output/first.jpg");
} else {
    echo "Mail didn't send ... ERROR!";
    print_r( error_get_last() );
}
}
?>
