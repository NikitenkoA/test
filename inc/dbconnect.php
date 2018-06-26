<?
$dbuser = "maxmax_mp";
$dbpass = "m9w42jhd";
$dbdbase = "maxmax_mp";
$db = mysql_connect("maxmax.mysql.ukraine.com.ua","$dbuser","$dbpass");
mysql_select_db("$dbdbase",$db);


function secure($aim)
{
	$aim = trim($aim); $aim = stripslashes($aim); $aim = htmlspecialchars($aim);
	return $aim;
}


$reqhf = mysql_query("SELECT * FROM data WHERE id='1'", $db);
$hf = mysql_fetch_array($reqhf);
$cours=$hf['cours'];


if($_POST['act'] == "send") {
$name = $_POST['name'];
$phone = $_POST['phone'];
$avto = $_POST['avto'];
$year = $_POST['year'];
$adress = $_POST['adress'];
$url = $_POST['url'];
$comment = $_POST['comment'];

$name = trim($name); $name = stripslashes($name); 
$phone = trim($phone); $phone = stripslashes($phone); 
$avto = trim($avto); $avto = stripslashes($avto); 
$year = trim($year); $year = stripslashes($year); 
$adress = trim($adress); $adress = stripslashes($adress); 
$url = trim($url); $url = stripslashes($url); 
$comment = trim($comment); $comment = stripslashes($comment); 


if($phone !== "") {
$data = "Имя    : " .$name. 
"<br />Телефон : " .$phone. 
"<br />Мебель: " .$avto. 
"<br />Адресс: " .$adress. 
"<br />Текст сообщения:   : " .$comment.
"<br />Ссылка:   : <a href=\"" .$url."\">".$url."</a>";

require_once('/home/maxmax/parts-kiev.com.ua/www/inc/class.phpmailer.php');

$today = date("Y-m-d H:i:s"); 

$subj = "Заказ - $today";
$subj = iconv("cp1251", "cp1251", "$subj");

//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$body             = eregi_replace("[\]",'',$data);

$mail->IsSMTP(); // telling the class to use SMTP
$mail->SMTPDebug  =0;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail->Host       = "mail.kafi.org.ua";      // sets GMAIL as the SMTP server
$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
$mail->Username   = "info@kafi.org.ua";  // GMAIL username
$mail->Password   = "dfxdfxdfx1";            // GMAIL password

$mail->SetFrom('info@kafi.org.ua', 'Mebel-Prestig');

$mail->AddReplyTo("info@kafi.org.ua","Mebel-Prestig");

$mail->Subject    = $subj;

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$address = "mebelprestig@gmail.com";
$mail->AddAddress($address, "");

$mail->Send();
$mail->ClearAddresses();
$mail->ClearAttachments();



$date = date("d.m.Y");
$tm = date("H:i:s");

$req = mysql_query("INSERT INTO zakaz (text,date,contacts,site,tm) VALUES ('$data','$date','$phone','parts','$tm')");


if ($req == true)
{
header("Location: /contacts?status=ok");


}
if ($req==false) {
//echo mysql_error();	die();
header("Location: /contacts?status=fail");	
}


$st=1;
}


}

?>