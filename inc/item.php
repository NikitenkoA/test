<div class="content-holder">
<? include("header.php"); ?>
    <div id="content">
		<div class='data'>
          <div class='p10'>
		<? echo $navi.$navi2; ?>
        </div>
          <h1><? echo $name; ?></h1>   
           <div class="clearfix">
           		<div class="i-img">
               <? echo "<a class='fancybox' href='/images/items/$r[img]'><img src='/images/items/$r[img]' alt='$name'/></a>"; ?>
                </div>
                <div class="i-data">
                
                <div class='btxt'>
                <? echo "<p class='i-price'>$price ���</p>"; ?>
                <p class='pf f22'>���� � ����������</p>
                
				<? 		
				echo $brand2; ?>
                <? echo $data; ?>
                </div>
                
                </div>
           </div>
                <div class='txt'>
                  <h2>��� �������� ������ ������ �� ������� <? echo "<a href='/$r1[url]'>$r1[title]</a>"; ?>?</h2>
                  <p>�� ������ ��������� ��� �� ������ �� �������, ��������� � ���������, ��� �������� <a class="various2" href="#inline">������ ������</a> � �� ��� ����������.</p>
                </div>
           
            <div class='bb'></div>  
		</div><!-- data !-->
<? include("inc/nblock.php"); ?>
  </div>
</div>
<? include("footer.php"); die(); ?>

