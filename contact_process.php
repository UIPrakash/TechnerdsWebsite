
<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';
//echo '<pre>'; print_r($_POST);Exit;
$c_name = $_POST['c_name'];
$c_email = $_POST['c_email'];
$c_companyname = $_POST['c_companyname'];
$c_mobile = $_POST['c_mobile'];
$c_message = $_POST['c_message'];

// $mail = new PHPMailer(true);

// echo $c_name;
// echo "<br>";
// echo $c_email;
// echo "<br>";
// echo $c_mobile;
// echo "<br>";
// echo $c_message;
// echo "<br>";


if(isset($c_email) && !empty($c_email)){

   // $to = "thiru@technerdssolutions.com, srinivas@sandblazedigitals.com";
   // $subject = "TechNerds Solutions lead";


    $message = "
<html>
<head>
<title>TechNerds Solutions lead</title>
</head>
<body>
<p>TechNerds Solutions lead!</p>
<table border=\"1\">
<tr>
<th>c_name</th>
<th>c_email</th>
<th>c_companyname</th>
<th>c_mobile</th>
<th>c_message</th>

</tr>


<tr>
<td>$c_name</td>
<td>$c_email</td>
<td>$c_companyname</td>
<td>$c_mobile</td>
<td>$c_message</td>

</tr>
</table>
</body>
</html>
";

// Built by LucyBot. www.lucybot.com
$curl = curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
  "Content-Type: application/json"
));
curl_setopt($curl, CURLOPT_URL,
  "https://api.smtp2go.com/v3/email/send"
);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode(array(
  "api_key" => "api-007B48465F0F11EA9768F23C91C88F4E",
  "sender" => "noreply@technerdssolutions.com",
  "to" =>  ["<prakashmcaking@gmail.com>"],
  "subject" => "Welcome to the TechNerds Solutions",
  "html_body" => $message,
)));
$result = curl_exec($curl);
print_r($result);
exit;

header('Location: thankyou.php');
} else {
    header('Location: error.html');
}
?>

