  <?php
require 'PHPMailer-master/PHPMailerAutoload.php';


 $name= trim($_POST['name']);
          $email = trim($_POST['email']);
          $comment = trim($_POST['comment']);
          
          $message = "Sender Name: \t\t" . $name . "\nSender Email: \t\t" . $email . "\nComment: \t\t" . $comment;
          
          
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'aoifesayers@gmail.com';
$mail->Password = 'Brandyrusty123';
$mail->setFrom($email);
$mail->addAddress('aoifesayers@gmail.com');
$mail->Subject = 'Portfolio Feedback';
$mail->Body = $message;
//send the message, check for errors
if (!$mail->send()) {
    echo "ERROR: " . $mail->ErrorInfo;
} else {
    echo "SUCCESS";
}
?>