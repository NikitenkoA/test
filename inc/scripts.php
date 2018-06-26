<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
<link rel="stylesheet" href="/ionicons.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript" src="/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NB36VF5');</script>
<!-- End Google Tag Manager -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-25523120-26', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript">
		$(document).ready(function() {
		$(".fancybox").fancybox({
		prevEffect	: 'elastic',
		nextEffect	: 'elastic',
		openEffect	: 'elastic',
				padding		: '0',
		helpers	: {
			title	: {
				type: 'float'
			},
			thumbs	: {
				width	: 100,
				height	: 100
			}
		}
	});		
			$(".various2").fancybox(
			{
				maxWidth	: 650,
				maxHeight	: 570,
				fitToView	: true,
				autoSize	: true,
				closeClick	: false,
				openEffect	: 'fade',
				padding		: '0',
				closeEffect	: 'fade'
			});

        $(".v3").fancybox({
            maxWidth: 650,
            maxHeight: 300,
            fitToView: false,
            autoSize: false,
            closeClick: false,
            openEffect: 'fade',
            closeEffect: 'fade'
        });
        $(".v3").eq(0).trigger('click');


});
</script>

