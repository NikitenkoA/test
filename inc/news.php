<div class="content-holder">
<? include("header.php"); ?>
    <div id="content">
		<div class='data'>
          <div class='p10'>
		<? echo $navi.$navi2; ?>
        </div>
        
        <?
		if(isset($_GET['id'])) {
		?>
          <h1><? echo $name; ?></h1>   
           <div class="clearfix">
           		<div class='txt'>
                <? echo $data; ?>
                </div>
               
           </div>
                
          <? } else {
			  
			  echo "<h1>$h1</h1>"; 
			  
$num = 90;
@$page = $_GET['page'];
$result00 = mysql_query("SELECT COUNT(*) FROM news WHERE type='$type'");
$temp = mysql_fetch_array($result00);
$posts = $temp[0];
$total = (($posts - 1) / $num) + 1;
$total =  intval($total);
$page = intval($page);
if(empty($page) or $page < 0) $page = 1;
if($page > $total) $page = $total;
$start = $page * $num - $num;

$res = mysql_query("SELECT * FROM news WHERE type='$type' ORDER BY id DESC LIMIT $start, $num");
$r = mysql_fetch_assoc($res);

$urlp = "/$u2?";
if ($page != 1) $pervpage = '<a href='.$urlp.'page='. ($page - 1) .'>&larr; </a>';
if ($page != $total) $nextpage = '<a href='.$urlp.'page='. ($page + 1) .'> &rarr;</a>';
if($page - 5 > 0) $page5left = ' <a href='.$urlp.'page='. ($page - 5) .'>'. ($page - 5) .'</a>  ';
if($page - 4 > 0) $page4left = ' <a href='.$urlp.'page='. ($page - 4) .'>'. ($page - 4) .'</a>  ';
if($page - 3 > 0) $page3left = ' <a href='.$urlp.'page='. ($page - 3) .'>'. ($page - 3) .'</a>  ';
if($page - 2 > 0) $page2left = ' <a href='.$urlp.'page='. ($page - 2) .'>'. ($page - 2) .'</a>  ';
if($page - 1 > 0) $page1left = '<a href='.$urlp.'page='. ($page - 1) .'>'. ($page - 1) .'</a>  ';
if($page + 5 <= $total) $page5right = '  <a href='.$urlp.'page='. ($page + 5) .'>'. ($page + 5) .'</a> ';
if($page + 4 <= $total) $page4right = '  <a href='.$urlp.'page='. ($page + 4) .'>'. ($page + 4) .'</a> ';
if($page + 3 <= $total) $page3right = '  <a href='.$urlp.'page='. ($page + 3) .'>'. ($page + 3) .'</a> ';
if($page + 2 <= $total) $page2right = '  <a href='.$urlp.'page='. ($page + 2) .'>'. ($page + 2) .'</a> ';
if($page + 1 <= $total) $page1right = '  <a href='.$urlp.'page='. ($page + 1) .'>'. ($page + 1) .'</a> ';

if($r==true) {
	echo "<div class='nblock2'>";
do {
	if($r['hot'] == "1") { $na = "style='color:#ed3823;'";}
	else { $na = ""; }
	echo "<div class='n_one2'>
           		<p><a $na href='/$u2/$r[url]'>$r[name]</a></p>
                <span>$r[date]</span>
             </div>";
}
while($r = mysql_fetch_assoc($res));

echo "</div>";
if ($total > 1)
{
Error_Reporting(E_ALL & ~E_NOTICE);
echo "<div class='pgs'><p>Страницы:</p>";
echo $pervpage.$page5left.$page4left.$page3left.$page2left.$page1left.'<strong>'.$page.'</strong>'.$page1right.$page2right.$page3right.$page4right.$page5right.$nextpage;
echo "</div>";
}
}

			  
			  
			   } ?>
            <div class='bb'></div>  
		</div><!-- data !-->
<? include("inc/nblock.php"); ?>
  </div>
</div>
<? include("footer.php"); die(); ?>

