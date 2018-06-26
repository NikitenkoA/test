<div class="content-holder">
<? include("header.php"); ?>
<div id="content">
    <div class='data'>
    <div class='p10'>
		<? echo $navi.$navi2; ?>

                <h1><? echo $h1.$pp; ?></h1>   
                        <?
if($type1=='1' OR $type2=='1' OR $type1=='3' OR $type2=='2' OR $type2=='3') { ?>

<div class='topm clearfix'>

<div class='tp1'>
	<div>
        <span>бесплатное</span>
         составление проекта
	</div>
</div>
<div class='tp1'>
    <div>
        <span>от 1 до 3 недель</span>
        срок изготовления
    </div>
</div>
<div class='tp1'>
	 <div>
        <span>9</span>
        лет опыта
	</div>
</div>
<div class='tp1'>
	<div>
        <a class="various2" href="#inline"><span>ЗАКАЗ</span>
        онлайн
	    </a></div>
</div>

</div> 
<? if($r['data'] !== "" AND $r['txtbf'] == 0 AND !isset($_GET['page'])) { echo "<div class='txt p102'>".$r['data']."</div>"; } ?>
<div class='ss clearfix'>		  
	<div class='dropdown'> 	<a class='account' >
	<span><? echo $or_name; ?></span>
	</a>
	<div class='submenu' style='display: none; '>
	  <ul class='root'>
	  	<li>
	      <a href='<? echo $gurl; ?>'>по дате добавления</a>
	    </li>
		<li>
	      <a href='?order=pricemin'>от дешевых к дорогим</a>
	    </li>
		<li>
		<a href='?order=pricemax'>от дорогих к дешевым</a>
		</li>
	  </ul>
	</div>
	</div>	
	<div class='sort'>Сортировка: </div>
</div>
	
<script type="text/javascript" >
$(document).ready(function()
{
$(".account").click(function()
{
var X=$(this).attr('id');

if(X==1)
{
$(".submenu").hide();
$(this).attr('id', '0');	
}
else
{

$(".submenu").show();
$(this).attr('id', '1');
}
	
});

//Mouseup textarea false
$(".submenu").mouseup(function()
{
return false
});
$(".account").mouseup(function()
{
return false
});


//Textarea without editing.
$(document).mouseup(function()
{
$(".submenu").hide();
$(".account").attr('id', '');
});
	
});
	
	</script>
    
<? } ?>
	  
      
       <? if( ($_GET['lvl2']=="modern" OR $_GET['lvl2']=="classic") AND !isset($_GET['lvl3'])) { 
	   $dn = '1';
	   
        $rec = mysql_query("SELECT url,name,title,img,credo FROM catalog WHERE srel='$r2[id]'");
        $rc = mysql_fetch_assoc($rec);
        if($rc==true) {
        echo "<div class='grid clearfix'>";
        do {
            if($rc['credo'] !== "") { $credo = "<p>$r[credo]</p>"; } 
            else { $credo = ""; }
            echo "
                            <figure class='effect-lily'>
                                <img src='/images/catalog/$rc[img]' alt='$rc[title]'/>
                                <figcaption>
                                    <div>
                                        <h2><span>$rc[name]</span></h2>
                                        $credo
                                    </div>
                                    <a href='/$r1[url]/$lvl2/$rc[url]'>$rc[title]</a>
                                </figcaption>			
                            </figure>";
        }
        while($rc = mysql_fetch_assoc($rec));
        echo " </div>";
        }	
        
            
        }
        ?>
        
        
        <? if($type=='2' AND !isset($_GET['lvl2'])) { 
        $rec = mysql_query("SELECT url,name,title,img,credo FROM catalog WHERE rel='$r1[id]' AND srel='0' AND sh='0'");
        $rc = mysql_fetch_assoc($rec);
		
        if($rc==true) {
        echo "<div class='grid clearfix'>";
        do {
            if($rc['credo'] !== "") { $credo = "<p>$r[credo]</p>"; } 
            else { $credo = ""; }
            echo "
                            <figure class='effect-lily'>
                                <img src='/images/catalog/$rc[img]' alt='$rc[title]'/>
                                <figcaption>
                                    <div>
                                        <h2><span>$rc[name]</span></h2>
                                        $credo
                                    </div>
                                    <a href='/$r1[url]/$rc[url]'>$rc[title]</a>
                                </figcaption>			
                            </figure>";
        }
        while($rc = mysql_fetch_assoc($rec));
        echo " </div>";
        }	
        
            
        }
        ?>
    </div>
    
     <div class='items clearfix'>           

<? 

if( ($dn !== '1') AND ($type1=='2' AND isset($_GET['lvl2'])) OR ($type1=='3')   ) {
	
	
	$wm="rel='$r1[id]' AND srel='$r2[id]'";
	if($type1=='3') {   $wm="rel='$r1[id]'";}
	
$resm = mysql_query("SELECT name,menu,url,id FROM catalog WHERE $wm");
$sm = mysql_fetch_assoc($resm);
if($sm==true) {
?>
<script type="text/javascript">
		
		$(document).ready(function(){
			var touch2 = $('#touch-menu2');
		    var menu2 = $('.sw');
		 
		    $(touch2).on('click', function(e) {
		        e.preventDefault();
		        menu2.slideToggle();
		    });
		    $(window).resize(function(){
		        var wid = $(window).width();
		        if(wid > 760 && menu2.is(':hidden')) {
		            menu2.removeAttr('style');
		        }
		    });
		});
		
</script>



<a href="#" class='menu-mobile2' id='touch-menu2'>Подкатегории и фильтры</a>
<?	
	
	if($type1==2) { $url2="/$lvl2"; if($r2['menu']=="") {   $menu = $r2['name']; }	else { $menu = $r2['menu']; } }
	if($type1==3) { $url2=""; if($r1['menu']=="") { $menu = $r1['name']; }	else { $menu = $r1['menu']; } }
	
	
	echo "<div class='sw'>
                   <div class='sc'>
                         <ul>";
						 
	if(!isset($_GET['lvl3']) AND $type1=='2') { $b = " id='cact'"; }
	if(!isset($_GET['lvl2']) AND $type1=='3') { $b = " id='cact'"; }
	
	echo "<li><a$b href='/$lvl1$url2'>$menu</a></li>";
do {
	
	if($sm['id'] == $r3['id']) { $a = " id='cact'"; }
	elseif($sm['id'] == $r2['id']) { $a = " id='cact'"; }
	else { $a=""; }	
	
	$menu = $sm['menu']; if($menu =="") { $menu = $sm['name']; }
	
	echo "<li><a$a href='/$lvl1$url2/$sm[url]'>$menu</a></li>";
	
	
}
while($sm = mysql_fetch_assoc($resm));
	echo "</ul>
                    </div>
                </div>";
}

 }
 
 
 
if(($dn !== '1') AND ( $type1=='1' OR $type2=='1' OR $type1=='3' OR $type2=='2' OR $type2=='3')) {
	

	
	$num = 72;
@$page = $_GET['page'];
$result00 = mysql_query("SELECT COUNT(*) FROM items WHERE $wi $or");
$temp = mysql_fetch_array($result00);
$posts = $temp[0];
$total = (($posts - 1) / $num) + 1;
$total =  intval($total);
$page = intval($page);
if(empty($page) or $page < 0) $page = 1;
if($page > $total) $page = $total;
$start = $page * $num - $num;

$reqi = mysql_query("SELECT * FROM items WHERE $wi $or LIMIT $start, $num");
$ri = mysql_fetch_array($reqi);


	if($type=='2') { 
		$resb = mysql_query("SELECT id,name,url FROM catalog WHERE rel='$r1[id]' AND srel='$r2[id]'");
		$rb = mysql_fetch_assoc($resb);
		do{
			$brand[$rb['id']] = $rb['name'];
			$cat_url[$rb['id']] = $rb['url'];
			
		}
		while($rb = mysql_fetch_assoc($resb));
	}
	
		
		
	if($ri==true) {
		
$urlp = "$gurl?";	
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
if($r['data'] !== "" AND $r['txtbf'] == 1 AND !isset($_GET['page'])) { echo "<div class='txt p101 clearfix'>".$r['data']."</div>"; }
echo "<div class='clearfix'>";

	do {
		$name = $ri['name']; 
		if($ri['name'] == "") { 
		$id=sprintf("%03d", $ri['id']);
		$name ="Пример №$id"; 
		}
		
		if($ri['price']!=="0") { 
		
		$price = $ri['price'];
		if(strlen($price) == 4) { $p1 = substr($price, 0,1); $p2 = substr($price, -3); $price = "$p1 $p2"; }
		if(strlen($price) == 5) { $p1 = substr($price, 0,2); $p2 = substr($price, -3); $price = "$p1 $p2"; }
		if(strlen($price) == 6) { $p1 = substr($price, 0,3); $p2 = substr($price, -3); $price = "$p1 $p2"; }
		$pc = $price;
		
		
		if($type == '2' AND $ri['ssrel'] !== '0') { 
			$iurl = $cat_url[$ri['ssrel']]."/";
		}
		
		
		if($lvl1=='kuhni-na-zakaz') { $cu = ""; $uah = " грн за п/м"; $ot= "от ";
		$i_title = "title='Пример №$ri[id] - $ot$price$uah'"; }
		else { $cu = "<p class='pf'>цена с установкой</p>"; $uah = " грн"; $ot = ""; 
		$i_title = "title='Пример №$ri[id] - $pc грн'"; }
		
		$price = "<p class='price' >$ot$price$uah</p>$cu"; $name="<a href='$gurl/".$iurl."item-$ri[id]'>$name</a>"; } 
		else { $price = ""; $i_title ="title='Пример №$ri[id]'"; }
		
		if($type=='2') { $br = "<span class='ssrel'>".$brand[$ri['ssrel']]."</span>"; }
		
		
		if($ri['data'] !== "") { $data = "<div class='tech'>
				   $br
				   $ri[data] 
				  </div>    ";
		}
		else { $data ="";}
		
		
		
		
		echo "<div class='item'>
			<div>				
                <div class='item_img'>
					<a class='fancybox' rel='fancybox' $i_title href='/images/items/$ri[img]'><img src='/images/items/thumbs/$ri[img]' alt='$tname'/></a>
                </div>
                <div class='i_right'>
                <p class='item_name'>$name</p>
                  $price				  
                  $data             			  
                </div>
			</div>
		</div>";
	}
	while($ri = mysql_fetch_array($reqi	));
	echo "</div>";
if ($total > 1)
{
Error_Reporting(E_ALL & ~E_NOTICE);
echo "<div class='pgs'><p>Страницы:</p>";
echo $pervpage.$page5left.$page4left.$page3left.$page2left.$page1left.'<strong>'.$page.'</strong>'.$page1right.$page2right.$page3right.$page4right.$page5right.$nextpage;
echo "</div>";
}


	}
}
?>
           		
                     
		

		
				
                    
                    
       </div>    
       
	  <div class="txt">        
	  <? if(!isset($_GET['page'])) { echo $r['seo']; } ?>
	  </div>
	</div><!-- data !-->   
   <? include("nblock.php"); ?>


</div>
</div>
<? include("footer.php"); ?>

</body>
</html>
<? die();  ?>