	<p class="page-header"></p>
	<div class="container">
<!-- 		<p class="page-header"></p> -->
		<div class="navbar" id="footer">
			<ul class="list-inline" style="margin-left: 270px; height: 30px;">
				<li class=""><a style="color: blue;" href="#" rel="nofollow">法律声明</a>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
				<li class=""><a style="color: blue;" href="#" rel="nofollow">隐私保护</a>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
				<li class=""><a style="color: blue;" href="#" >联系我们</a>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
				<li class=""><a href="#" style="color: blue;">网站地图</a></li>
			</ul>
			<p class="text-center">版权所有 © XXX公司 2014。	保留一切权利。</p>
		</div>
	</div>
	<div>
		<a class="fade_my" href="#top"><i class="icon-circle-arrow-up" style="display: block"></i></a>
	</div>
	<script type="text/javascript" src="<?php echo base_url().'js/jquery.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'js/bootstrap.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'js/modal.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'js/bootstrap.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'js/tab.js'?>"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(document).off('click.bs.dropdown.data-api');
			dropdownOpen();
		});
		function dropdownOpen() {
			$('li.dropdown').mouseenter(function(){
				  $(this).find('ul').slideDown("slow");//you can give it a speed
				  });
				  $('li.dropdown').mouseleave(function(){
				  $(this).find('ul').slideUp(0);
				 });

// 			var $dropdownLi = $('li.dropdown');
// 			$dropdownLi.mouseover(function() {
//  			$(this).addClass('open'); 
// 			}).mouseout(function() {
//  			$(this).removeClass('open'); 
// 			});
		}

// 		$(document).ready(function(){//直接使用次代码会导致a标签的超链接失效
			  
// 			  $('li.dropdown').mouseover(function(){
// 			  $(this).find('ul').slideDown("normal");//you can give it a speed
// 			  });
// 			  $('li.dropdown').mouseout(function(){
// 			  $(this).find('ul').slideUp("fast");
// 			  });
			  
// 			});
	</script>

</body>
</html>