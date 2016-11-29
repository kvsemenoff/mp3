<div class="df-tabs df-tabstoggle">
	<ul class="df-first">
		<li><a href="#">Главная</a></li>
		<li><a href="#">Евровидение 2016</a></li>
		<li><a href="#">Новые хиты 2016</a></li>
		<li><a href="#">Голос Дети</a></li>
	</ul>
	<ul class="df-second">
		<li><a href="#">Хиты 80-90х</a></li>
		<li><a href="#">Танцевальная</a></li>
		<li><a href="#">Дискотечная</a></li>
		<li><a href="#">Русская поп музыка</a></li>
	</ul>
	<ul class="df-third">
		<li><a href="#">Зарубежные новинки </a></li>
		<li><a href="#">Шансон 2016</a></li>
		<li><a href="#">Каспийский Груз</a></li>		
	</ul>
	<ul class="df-second">
		<li><a href="#">Хиты 80-90х</a></li>
		<li><a href="#">Танцевальная</a></li>
		<li><a href="#">Дискотечная</a></li>
		<li><a href="#">Русская поп музыка</a></li>
	</ul>

</div>
<div class="df-oc">
	<a href="#" class="df-open">Развернуть</a>
	<a href="#" class="df-close">Свернуть</a>
</div>

<script>
$('.df-close').hide();
	$('.df-open').on('click', function(e){
		e.preventDefault();				
		$(this).hide();
		$('.df-close').show();
		$('.df-tabs').toggleClass('df-tabs2');
		$('.df-tabs').toggleClass('df-tabstoggle');				
	});
	$('.df-close').click(function(e){
		e.preventDefault();				
		$(this).hide();
		$('.df-open').show();
		$('.df-tabs').toggleClass('df-tabs2');
		$('.df-tabs').toggleClass('df-tabstoggle');		
	});


</script>