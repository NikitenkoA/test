<div class="content-holder">
<? include("header.php"); ?>
<div id="content">


<div class="pim">
	<div class='data'>
    <div class="block1">
		<h1 class='hmain'>Мебель на заказ</h1>
        <div class="credo"><p>У нас вы платите за качество, а не за бренд</p></div>
    </div>
    
     <div class="txt">       
    <h2>Мебель Престиж - качественная мебель на заказ</h2>
    <p>Не ограничивайте себя фабричными готовыми решениями. Мы поможем воплотить любую вашу задумку, с любым дизайном и функционалом, наш опыт и подход к работе не оставит Вас равнодушными.</p>
     </div>
    </div>
   <div class="grid clearfix">
<?
$res = mysql_query("SELECT url,name,title,img,credo FROM catalog WHERE rel='0' AND sh='0'");
$r = mysql_fetch_assoc($res);
if($r==true) {
do {
	if($r['credo'] !== "") { $credo = "<p>С разнообразными вариантами покрытий</p>"; } 
	else { $credo = ""; }
	echo "
					<figure class='effect-lily'>
						<img src='/images/catalog/$r[img]' alt='$r[title]'/>
						<figcaption>
							<div>
								<h2><span>$r[name]</span></h2>
								$credo
							</div>
							<a href='/$r[url]'>$r[title]</a>
						</figcaption>			
					</figure>";
}
while($r = mysql_fetch_assoc($res));
}
?>
                    
                    
    </div>            
 <div class="data">        
    <div class="txt">       
    <? echo $seo; ?>
    </div>
	</div><!-- data !-->
</div>
    

	
    
   


</div>
</div>
<? include("footer.php"); ?>

</body>
</html>
<? die();  ?>