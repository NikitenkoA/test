        <div class='data clearfix'>
           	<div class='n1'>
    	<div class='nw'>
        <?
		$ren = mysql_query("SELECT url,name FROM news WHERE type='1' ORDER BY id DESC LIMIT 5");
		$rn = mysql_fetch_assoc($ren);
		if($r==true) {
		echo "<h3>Новости</h3>";
		do {			
			echo "<p class='news_1'>
						<p><a href='/news/$rn[url]'>$rn[name]</a></p>						
					 ";
		}
		while($rn = mysql_fetch_assoc($ren));
		}
		?>
        </div>
    </div>
    
   	<div class='n2'>
    	<div class='nw'>
        <?
		$ren = mysql_query("SELECT url,name FROM news WHERE type='2' ORDER BY id DESC LIMIT 5");
		$rn = mysql_fetch_assoc($ren);
		if($r==true) {
		echo "<h3>Статьи</h3>";
		do {			
			echo "<p class='news_1'>
						<p><a href='/articles/$rn[url]'>$rn[name]</a></p>						
					 ";
		}
		while($rn = mysql_fetch_assoc($ren));
		}
		?>
        </div>
    </div>
    
   	<div class='n3'>
    	<div class='nw'>
        <?
		$ren = mysql_query("SELECT url,name FROM news WHERE type='3' ORDER BY id DESC LIMIT 5");
		$rn = mysql_fetch_assoc($ren);
		if($r==true) {
		echo "<h3>Материалы и фурнитура</h3>";
		do {			
			echo "<p class='news_1'>
						<p><a href='/materials/$rn[url]'>$rn[name]</a></p>						
					 ";
		}
		while($rn = mysql_fetch_assoc($ren));
		echo "<p class='news_1'>
						<p><a href='/shkaf-kupe-na-zakaz/napolnenie'>Наполнение Шкафов Купе</a></p>						
					 ";
		}
		?>
        </div>
    </div>
    
   </div>
   </div>