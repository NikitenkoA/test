<div id='inline' style="display:none">
       <form onsubmit="JavaScript:this.zkz.disabled=true;
this.zkz.value='Подождите';" class="zkz" id="formz" name="formz" method="post" action="">
<h3>Заказ онлайн</h3>
<script src="/js/jquery.maskedinput.min.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery(function($){
   $("#phone2").mask("+38 (999) 999-99-99");
   $("#ob").mask("9.9");
});
</script>

<div class='z5'>
<div class='wrapper'>
	<label for="name">Имя: </label><br />
    <input class="zkz_input" type="text" name="name" id="name" />
</div>
</div>

<div class='z5'>
<div class='wrapper'>
		<label  for="phone"><strong>Номер вашего телефона</strong>: </label><br />         
        <input required="required"  class="zkz_input" type="text" name="phone" value="" id="phone" />
</div>
</div>
<div class='clearfix'>
   
<div class='z5'>
<div class='wrapper'>
	 <!-- <p>
        <label for="adress">Адрес:</label><br />
		<input class="zkz_input" type="text" name="adress" id="adress" />
     </p> -->
</div>
</div>
<div class='z5'>
<div class='wrapper'>
  <?php /*
	  <p><label for="avto">Мебель: </label><br />
         
         <select name="avto" id="avto">
 <?
$res2 = mysql_query("SELECT name,id,url FROM catalog WHERE sh='0' AND rel='0'");
$r2 = mysql_fetch_assoc($res2);
if($r2==true) {
do {
	
	if($r2['url'] == $url) { $ss = "selected='selected'"; }
	else { $ss = ""; }
	echo "<option $ss value='$r2[name]'>$r2[name]</option>
	";
}
while($r2 = mysql_fetch_assoc($res2));
}
?>  
          </select>
        </p>
*/ ?>
</div>
</div>


</div>

<div class='z1'>
<div class='wrapper'>
        
<p><label for="comment">Комментарий к заказу (не обязательно):</label></p>
         <p>          
           <textarea class="zkz_input" name="comment" id="comment" rows="5"></textarea>
           <input name="url" type="hidden" id="url" value="<? echo "http://mebelprestig.com.ua".$_SERVER['REQUEST_URI']; ?>" />
           <input name="act" type="hidden" id="act" value="send" />
         </p>
</div>
</div>
<div class='z1'>
<div class='wrapper'>
<input type="submit" name="zkz" id="zkz" value="Отправить" />
</div>
</div>
  </form>
      </div>
	  <?
if(isset($_GET['status'])) {

if($_GET['status']=="ok") { $status = "Спасибо! Ваш заказ отправлен. С Вами свяжется наш менеджер."; }
if($_GET['status']=="fail") {$status = "Произошла ошибка. Попробуйте позже или повзоните нам по одному из номеров, указанных в контактах."; }
?>
<a style="display:none;" class="v3" href="#alert">&nbsp;</a>
<div id='alert' style="display:none">
<? echo $status; ?>
</div>
<?
}
?>
<div id="footer">
<div class='ftr clearfix'>
<div class='ff'>
<div class='f1'>
  <ul>
    <li><a href="/contacts">Контакты</a></li>
    <li><a href="/about">О нас </a></li>
    <li><a href="/articles">Статьи</a></li>
    <li><a href="/news">Новости</a></li>
    <li> <a class="various2 gbuy2" href="#inline" onClick="ga('send', 'event', 'button', 'buy2', 'click');">Заказ онлайн</a></li>
  </ul>
  </div>
<div class='f2'>
<ul><li><a  href='/kuhni-na-zakaz'>Кухни</a></li><li><a  href='/shkaf-kupe-na-zakaz'>Шкафы купе</a></li><li><a  href='/stenki-na-zakaz'>Стенки</a></li><li><a  href='/spalni-na-zakaz'>Спальни</a></li><li><a  href='/detskaya-na-zakaz'>Детские</a></li><li><a  href='/garderobnye-na-zakaz'>Гардеробные</a></li><li><a  href='/prihozhye-na-zakaz'>Прихожие</a></li><li><a  href='/office-mebel-na-zakaz'>Офисная мебель</a></li></ul>

</div>
<div class='f3'>
<? echo $hf['footer'];?>
<p class='cpr'>&copy; 2008-<? echo date('Y'); ?> Mebel Prestig</p>
<p class='site'>Создание сайта - <a href="http://maxmedvedev.com" target="_blank">mm</a></p>
</div>
</div>
  </div>
</div>