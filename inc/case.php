<?
$red = "/404"; 
		
$navi = "<div class='navi clearfix'>    
    <ol itemscope itemtype='http://schema.org/BreadcrumbList'>
  <li itemprop='itemListElement' itemscope
      itemtype='http://schema.org/ListItem'>
       <a itemscope itemtype='http://schema.org/Thing' itemprop='item'  title='Мебель-Престиж' href='/'> <span itemprop='name'>Мебель на заказ</span></a>
    <meta itemprop='position' content='1' /> 
  ›
  </li>";

$navi2= "
  </ol>
</div>";


$case = $lvl1;

$res = mysql_query("SELECT url FROM catalog");
$r = mysql_fetch_assoc($res);
do {
	$a[] = $r['url'];
}
while($r = mysql_fetch_assoc($res));
print_r($r);
if (in_array("$case", $a) AND !empty($_GET['lvl1'])) {  $case="catalog"; }



switch ($case) {
		
	case "404": 
		$name = $tt;
		$inc="404";
		
	break;
	
	case "news": 
		
		if(isset($_GET['id'])) {
			
		$type = $_GET['type'];
		$id = $_GET['id'];
		
if($_GET['type'] == 1) { $u2 = "news"; $h1 = "Новости"; }
if($_GET['type'] == 2) { $u2 = "articles"; $h1 = "Статьи"; }
if($_GET['type'] == 3) { $u2 = "materials"; $h1 = "Материалы и фурнитура"; }


		$id = secure($id);
		
		$req = mysql_query("SELECT * FROM news WHERE type='$type' AND url='$id'", $db);
		$r = mysql_fetch_array($req);

		$navi.= "  <li itemprop='itemListElement' itemscope
      itemtype='http://schema.org/ListItem'>
       <a itemscope itemtype='http://schema.org/Thing' itemprop='item'  href='/$u2'> <span itemprop='name'>$h1</span></a>
   		 <meta itemprop='position' content='2' /> 
 		 ›
		  </li>";
		  
		  		
		$name = $r['name'];
		if($r['tt'] == "") { $tt = "$name"; } else { $tt = "$r[tt]"; }
		$dd =  $r['dd'];
		$data = $r['data'];
		$inc = "news";
			
		}
		
		else {
			
		
		$type = $_GET['type'];
		if($_GET['type'] == 1) { $u2 = "news"; $h1 = "Новости"; }
		if($_GET['type'] == 2) { $u2 = "articles"; $h1 = "Статьи"; }
		if($_GET['type'] == 3) { $u2 = "materials"; $h1 = "Материалы и фурнитура"; }

		$name = $h1;
		$tt = "$h1 Мебель-Престиж";
		$inc = "news";

		}
	break;
	
	
	case "catalog": 
		
	
	if($_GET['order']=='pricemin') { $or = " ORDER BY price"; $or_name = "от дешевых к дорогим";}
	elseif($_GET['order']=='pricemax') { $or = " ORDER BY price DESC"; $or_name = "от дорогих к дешевым"; }
	else { $or = " ORDER BY `ord`"; $or_name = "по дате добавления"; }
		
		
		$url = $lvl1; $w = "url='$url'";
		
		$res1 = mysql_query("SELECT id,url,name,title,type,menu FROM catalog WHERE url='$lvl1' AND srel='0'");
		$r1 = mysql_fetch_assoc($res1);
		if($r1==false)  { $inc="404"; }
		
		$wi = "rel='$r1[id]' AND srel='0'";
		$type1=$r1['type'];
		$gurl = "/$lvl1";
		$brand2=$r1['name'];
		
		
		
		if(isset($_GET['lvl2']) OR $_GET['li'] == 1) { 
		
		$res2 = mysql_query("SELECT id,url,name,menu,title,type FROM catalog WHERE rel='$r1[id]' AND url='$lvl2'");
		$r2 = mysql_fetch_assoc($res2);
		if($r2==false)  { $inc="404"; }
		
		echo $type;
		$url = $lvl2; $w = "url='$url'"; $wi = "rel='$r1[id]' AND srel='$r2[id]' AND ssrel='0'";
		
		if($r1['type']=='2' AND !isset($_GET['lvl3'])	) { $wi = "rel='$r1[id]' AND srel='$r2[id]'"; }
		
		if($r1['type']=='0') { $type2 = '1'; } else { $type2=$r1['type'];}
		
		$navi.= "  <li itemprop='itemListElement' itemscope
      itemtype='http://schema.org/ListItem'>
       <a itemscope itemtype='http://schema.org/Thing' itemprop='item'  title='$r1[title]' href='/$r1[url]'> <span itemprop='name'>$r1[name]</span></a>
   		 <meta itemprop='position' content='2' /> 
 		 ›
		  </li>";
		$gurl.= "/$lvl2";
		$brand2=$r2['name'];
  
		}
		
		
		
		if (isset($_GET['lvl3']) OR $_GET['li2'] == 1) { 
		$res3 = mysql_query("SELECT id,url,name,title,menu FROM catalog WHERE rel='$r1[id]' AND srel='$r2[id]' AND url='$lvl3'");
		$r3 = mysql_fetch_assoc($res3);
		if($r3==false)  { $inc="404"; }	
			
		
		$url = $lvl3; $w = "url='$url'"; $wi = "rel='$r1[id]' AND srel='$r2[id]' AND ssrel='$r3[id]'";
		$brand2=$r3['name'];
		
				$navi.= "  <li itemprop='itemListElement' itemscope
      itemtype='http://schema.org/ListItem'>
       <a itemscope itemtype='http://schema.org/Thing' itemprop='item'  title='$r2[title]' href='/$r1[url]/$r2[url]'> <span itemprop='name'>$r2[name]</span></a>
   		 <meta itemprop='position' content='3' /> 
 		 ›
		  </li>";
		$gurl.= "/$lvl3";
		  
		 if($_GET['li3'] == 1) {
			$navi.= "  <li itemprop='itemListElement' itemscope
      itemtype='http://schema.org/ListItem'>
       <a itemscope itemtype='http://schema.org/Thing' itemprop='item'  title='$r3[title]' href='/$r1[url]/$r2[url]/$r3[url]'> <span itemprop='name'>$r3[name]</span></a>
   		 <meta itemprop='position' content='4' /> 
 		 ›
		  </li>"; 
		 }
		}	
		
		if(isset($_GET['page'])) { $pp = " - Страница $page"; } else { $pp = ""; }
				
		if(isset($_GET['id'])) { 
		$id= $_GET['id'];
		$req = mysql_query("SELECT * FROM items WHERE $wi AND id='$id'", $db);
		$r = mysql_fetch_array($req);
		
		
		if($r==true) {
				
		if($r['tt'] == "") { $tt = "Пример №$r[id] - Мебель-Престиж"; } else { $tt = $r['tt']; }
		if($r['name'] == "") { $name = "Пример №$r[id]"; } else { $name = $r['name']; }
		
		$price = $r['price'];
		if(strlen($price) == 4) { $p1 = substr($price, 0,1); $p2 = substr($price, -3); $price = "$p1 $p2"; }
		if(strlen($price) == 5) { $p1 = substr($price, 0,2); $p2 = substr($price, -3); $price = "$p1 $p2"; }
		if(strlen($price) == 6) { $p1 = substr($price, 0,3); $p2 = substr($price, -3); $price = "$p1 $p2"; }
		
		$data = $r['data'];
		$inc="item";
		}
		else { 
 		$tt="Страницу не найдено";
		$inc= "404"; 
		}
		
		
		}
		else {
		$req = mysql_query("SELECT * FROM catalog WHERE $w", $db);
		$r = mysql_fetch_array($req);
		
		if($r==true) {
				
		$name = $r['name'];		
		$h1 = $r['title']; if($h1=="") { $h1 = $r['name']; }
		if($r['type'] == 0) { $type == 1; } else { $type = $r['type']; }
		if($r['tt'] == "") { $tt = "$name на заказ в Киеве - Мебель-Престиж".$pp; } else { $tt = "$r[tt]".$pp; }
		$dd = $r['dd'];
		$data = $r['data'];
		$inc="cat";
		}
		else { 
 		$tt="Страницу не найдено";
		$inc= "404"; 
		}
		
		}
		
		
	break;

default: 

		if(isset($_GET['lvl3'])) {
		$olvl = "3";
		$url=$lvl3; $w = "url='$url' AND rel='$lvl1' AND rel2='$lvl2' AND lvl='3'"; 
		}
		elseif (isset($_GET['lvl2'])) { 
		$olvl = "2";
		$url=$lvl2; $w = "url='$url' AND rel='$lvl1' AND lvl='2'"; 
		}
		elseif (isset($_GET['lvl1'])) { 
		 $url=$lvl1; $w= "url='$url' AND lvl='1'"; 
		}
		else {
			$w = "url='i'"; $inc = "i"; $olvl = "0";
		}
	
		
		$req = mysql_query("SELECT * FROM pages WHERE $w", $db);
		$r = mysql_fetch_array($req);
		if($r==true) {
		
$name = $r['name'];
$tt = $r['tt'];
$dd = $r['dd'];
$data = "<div class='data'>$navi$navi2<div class='txt'>".$r['data']."</div></div>";
		}
		else { 
 		$tt="Страницу не найдено";
		$inc= "404"; 
		}
	}
?>