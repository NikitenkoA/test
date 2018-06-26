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
<div class="mob-but clearfix" id="touch-menu2">

<div class="icon-menu">
				<span class="divide"></span>
				<span class="divide"></span>
				<span class="divide"></span>
                
			</div>
            <div class="mob-menu">
            Контакты
            </div>
</div>
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
        	<a <? if($lvl1=="dostavka") { echo $a2; } ?> href="/dostavka">Доставка и оплата</a>             
        </li> 
        <li> 
        	<a <? if($lvl1=="news") { echo $a2; } ?> href="/news">Статьи</a>             
        </li>
        </ul>
        </div>
        <div class="lpa ">
        	<div class="logo"><div class='inner'><a href="/"><img src="/images/mebel-prestig.png" width="190" height="39" alt="Mebel Prestig" /></a></div>
            </div>
            <div class='adress-wrapper'>
              <div class="adress">
                    <img src="/images/marker.png" width="14" height="19" alt="marker" /> <a href="/contacts">г. Киев, ул. Ивана Лепсе, 16</a>
              </div>
            </div>
            <div class='phones'>
           	<a href="tel:0442238561">(044) 223-85-61</a> <a href="tel:0950724959">(095) 072-49-59 </a></div>
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
</div>