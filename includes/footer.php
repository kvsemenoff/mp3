<section class="dd-footer-top">
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<div class="dd-player">
					<div class="dd-center">
						<div class="dd-prevs">
							<a href="#"></a>
						</div>

						<div class="dd-play">
							<a href="#"></a>
						</div>

						<div class="dd-prevs dd-prevs2">
							<a href="#"></a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="dd-progress-wrap">
					<div class="progress-bar orange shine">
						<span style="width: 100%" >Егор Крид - Папина дочка</span>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="dd-range-wrap">
					<input type="range" value="100" min="0" max="100">
				</div>
				<div class="top-footer-right">
					<div class="dd-download">
						<a href="#">
							<img src="img/kv2.png">
						</a>
					</div>
					<div class="dd-download dd-download2">
						<a href="#">
							<img src="img/kv1.png">
						</a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>			
		</div>
	</div>
</section>
<section class="dd-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="footer-left">
					<span>&copy; 2015-2016 Мп3.su</span>
				</div>
				<div class="footer-right">
					<span>По всем вопросам писать: <span> support@mp3.su</span></span> 
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>	
		</div>
	</div>
</section>

<script type="text/javascript">
	$('input[type=range]').css('border-radius','7px');
</script>
<script>
	$('.dfimg').click(function(){		
		$('.dfimg2').each(function(){
			if ($(this).css('display') == 'inline-block' ){
				$(this).css("display","none");
				$(this).prev(".dfimg").show();
			}
		});
		$(this).css("display","none");
		$(this).next('.dfimg2').css("display","inline-block");		
	});

	$('.dfimg2').click(function(){		
		$(this).css("display","none");
		$(this).prev('.dfimg').css("display","inline-block");		
	});
</script>