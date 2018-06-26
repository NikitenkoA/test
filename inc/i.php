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
   <? echo $r['data'];  ?>
     </div>
    </div>
   <div class="grid clearfix">
<?
$rec = mysql_query("SELECT url,name,title,img,credo FROM catalog WHERE rel='0' AND sh='0'");
$rc = mysql_fetch_assoc($rec);
if($r==true) {
do {
	if($rc['credo'] !== "") { $credo = "<p>$rc[credo]</p>"; } 
	else { $credo = ""; }
	echo "
					<figure class='effect-lily'>
						<img src='/images/catalog/$rc[img]' alt='$rc[title]'/>
						<figcaption>
							<div>
								<h2><span>$rc[name]</span></h2>
								$credo
							</div>
							<a href='/$rc[url]'>$rc[title]</a>
						</figcaption>			
					</figure>";
}
while($rc = mysql_fetch_assoc($rec));
}
?>
                    
                    
    </div>            
 <div class="data">        
    <div class="txt">       
<? echo $r['seo']; ?>
    </div>
    

   
	</div><!-- data !-->
    <? include("inc/nblock.php"); ?>
</div>
    

	
    
   


</div>
</div>
<? include("footer.php"); ?>

</body>
</html>
<? die();  ?>