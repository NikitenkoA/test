<script type="text/javascript">
		$(document).ready(function(){
			var touch = $('#touch-menu');
		    var menu = $('.menu-box');
		 
		    $(touch).on('click', function(e) {
		        e.preventDefault();
		        menu.slideToggle();
		    });
		    $(window).resize(function(){
		        var wid = $(window).width();
		        if(wid > 760 && menu.is(':hidden')) {
		            menu.removeAttr('style');
		        }
		    });
		});
		
		$(document).ready(function(){
			var touch2 = $('#touch-menu2');
		    var menu2 = $('.hdr');
		 
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

<div id="header">

    	<div class="hdr">
        <div class='topmenu'>
        <? $a2=" id='act2'";?>
        <ul class="clearfix">         
        <li> 
        	<a <? if($lvl1=="contacts") { echo $a2; } ?> href="/contacts">Контакты</a> 
            
        </li>
        <li> 
        	<a <? if($lvl1=="about") { echo $a2; } ?> href="/about">О нас</a>             
        </li> 
        <li> 
        	<a <? if($lvl1=="articles") { echo $a2; } ?> href="/articles">Статьи</a>             
        </li> 
        <li> 
        	<a <? if($lvl1=="news") { echo $a2; } ?> href="/news">Новости</a>             
        </li>
        <li>
        <a class="various2" id='gbuy2' href="#inline" onClick="ga('send', 'event', 'button', 'buy2', 'click');">ЗАКАЗ ОНЛАЙН</a>
        </li>
        </ul>
        </div>
        <div class="lpa ">
        	<div class="logo"><div class='inner'><a href="/"><img src="/images/mebel-prestig.png" width="181" height="43" alt="Mebel Prestig" /></a></div>
            </div>
            <div class='adress-wrapper'>
            <div class="adress">
            <p><img src="/images/marker.png" width="14" height="19" alt="marker" /> <a href="/contacts">г. Киев, бульвар Ивана Лепсе, 16</a></p>
      
            </div>
            </div>
            </div>
            
            <div class='phones-wrapper'>
            <div class="phones">     
				<? echo $hf['header'];?>
            </div>
            </div>
            
            
            <div class='bb'></div>
        </div>


<div class="mob-but clearfix" id="touch-menu">

<div class="icon-menu">
				<span class="divide"></span>
				<span class="divide"></span>
				<span class="divide"></span>
                
			</div>
            <div class="mob-menu">
            Меню
            </div>
</div>

<div class="menu-container">
<div class="menu">      
    <?
$u = $lvl1;

$rem = mysql_query("SELECT * FROM menu WHERE lvl='1' ORDER BY `order`");
$rm = mysql_fetch_assoc($rem);
if($rm==true) {
echo "<ul>";
do {
	if($u==$rm['link']) { $a = "id='act'"; } else { $a = ""; }
	echo "<li><a $a href='/$l2$rm[link]'>$rm[name]</a>";
	
		$rem2 = mysql_query("SELECT * FROM menu WHERE rel='$rm[id]' ORDER BY `order`");
		$rm2 = mysql_fetch_assoc($rem2);
		
		if($rm2==true) {		
			echo "<ul>";
			do {
				if($rm2['link']!=="") { $lk="/$rm2[link]"; } else { $lk=""; }
			echo "<li><a href='/$l2$rm[link]$lk'>$rm2[name]</a></li>";
			}
			while($rm2 = mysql_fetch_assoc($rem2));
			echo "</ul>";
		}
	echo "</li>";
}
while($rm = mysql_fetch_assoc($rem));
echo "</ul>";
}
?>

 <script src="/js/megamenu.js"></script>
    
    </div>
  </div>
</div>

  <div class='aff'>
  	<span>Скидка 25%</span> на все виды мебели!
  </div>