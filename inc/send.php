<?
	function smtpmail($to, $subject, $content, $attach=false)
	{
require_once('mail/config.php');
require_once('mail/class.phpmailer.php');
$mail = new PHPMailer(true);

$mail->IsSMTP();

  $mail->Host       = $__smtp['host']; 
  $mail->SMTPDebug  = $__smtp['debug']; 
  $mail->SMTPAuth   = $__smtp['auth'];
  $mail->Host       = $__smtp['host'];
  $mail->Port       = $__smtp['port']; 
  $mail->Username   = $__smtp['username'];
  $mail->Password   = $__smtp['password'];
  $mail->AddReplyTo($__smtp['addreply'], $__smtp['username']);
  $mail->AddAddress($to);
  $mail->SetFrom($__smtp['addreply'], "Сообщение с сайта");
  $mail->AddReplyTo($__smtp['addreply'], $__smtp['username']);
  $mail->Subject = htmlspecialchars($subject);
  $mail->MsgHTML($content);
  if($attach)  $mail->AddAttachment($attach);
  $mail->Send();


	}
	
?>