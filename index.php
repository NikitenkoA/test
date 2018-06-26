<?
include("inc/dbconnect.php");
//echo $_GET['lang'];
//echo $lang; echo "<br />";
//echo $_GET['lvl1'];
$page = $_GET['page'];
$page=intval($page);
$lvl3=$_GET['lvl3'];
$lvl2= $_GET['lvl2'];
$lvl1= $_GET['lvl1'];
secure($lvl1);  secure($lvl2);  secure($lvl3); 


include("inc/case.php");

if($inc == "404") { header("HTTP/1.0 404 Not Found"); }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-WJM88L4');</script>
	<!-- End Google Tag Manager -->
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title><? echo $tt; ?></title>
<meta name="description" content="<? echo $dd; ?>" />
<meta name="keywords" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link href="/style.css" rel="stylesheet" type="text/css" />
<? include("inc/scripts.php"); ?>
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WJM88L4"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NB36VF5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<? if(!empty($inc)) { include("inc/$inc.php"); } ?>
<div class="content-holder">
<? include("inc/header.php"); ?>
<div id="content" class='clearfix'>	
        <? echo $data;  if(strlen($data) <= 25) { echo "Страница в разработке"; } ?>
        
<? include("inc/nblock.php"); ?>
  	</div>
</div>
<? include("inc/footer.php");  ?>

</body>
</html>
