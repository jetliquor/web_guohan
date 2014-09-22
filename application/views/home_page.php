<!DOCTYPE HTML>
<!-- <html lang="zh_cn"> -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="<?php echo base_url().'css/bootstrap.min.css'?>" rel="stylesheet" media="screen">
<link href="<?php echo base_url().'css/bootstrap.min_new.css'?>" rel="stylesheet" media="screen">


<style>
	#content1{
		width: 1000px;
		height: max;
	}
</style>
</head>

<!-- <body> -->
<body class="front not-logged-in page-home no-sidebars i18n-zh_CN show-grids smartling-zh" id="page-homepage">
	<!-- 导航栏  -->
	<div class="container">
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Brand</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-midlle">
					<li class="dropdown"><a href="/index.php/guangfu" class="dropdown-toggle"
						data-toggle="dropdown">光伏<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
							<li class="divider"></li>
							<li><a href="#">One more separated link</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown">充电桩<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
							<li class="divider"></li>
							<li><a href="#">One more separated link</a></li>
						</ul>
					</li>
					
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown">企业咨询<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
							<li class="divider"></li>
							<li><a href="#">One more separated link</a></li>
						</ul>
					</li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="#callback"	class="cb-trigger" data-toggle="modal">联系我们</a></li>
				</ul>
							
			</div>
			<!-- /.navbar-collapse -->
		</nav>
	</div>
	<!-- /导航栏  -->	
	
	
		<br/>
 		<div id="content" style="margin-top: 50px; margin-bottom: 0px"> 
			<div id="myCarousel" class="carousel slide" align="center">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
				<!-- Carousel items -->
				<div class="carousel-inner">
					<div class="item active" >
						<img class="img-polaroid"
							src="<?php echo base_url().'img/bootstrap-mdo-sfmoma-04.jpg'?>"
							 alt="">
						<div class="carousel-caption">
							<h4>First Thumbnail label</h4>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
								Donec id elit non mi porta gravida at eget metus. Nullam id
								dolor id nibh ultricies vehicula ut id elit.</p>
						</div>
					</div>
					<div class="item">
						<img alt="2" class="img-polaroid"
							src="<?php echo base_url().'img/bootstrap-mdo-sfmoma-05.jpg'?>" />
					</div>
					<div class="item">
						<img alt="3" class="img-polaroid"
							src="<?php echo base_url().'img/bootstrap-mdo-sfmoma-06.jpg'?>" />
					</div>
				</div>
				<!-- Carousel nav -->
				<a class="carousel-control left" href="#myCarousel"
					data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel"
					data-slide="next">&rsaquo;</a>
			</div>
		</div>
		
		<!-- 下部菜单  -->
	<div class="container">
		<div  sytle="background-color: gray">
			<nav class="navbar navbar-default container" role="navigation">
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-midlle">
						
						<li class="span2 text-right"><a href="/index.php/guangfu" class="dropdown-toggle">服务</a>
						</li>
						

						<li class="span2 text-right"><a href="#" class="dropdown-toggle" >技术</a>
						</li>
						

						
						<li class="span2 text-right"><a href="#" class="dropdown-toggle">行业研究</a>
						</li>
						

						<li class="span2 text-right"><a href="#" class="dropdown-toggle">企业案例</a>
						</li>
						
						<li class="span2 text-right"><a href="#" class="dropdown-toggle">其它</a>
						</li>
						
					</ul>					
				</div>
			</nav>
		</div>
		<!-- /下部菜单  -->
	</div>	
	
	
	
	<!-- callback -->
	<div class="modal" id="callback" style="height: 410px">
			<form action="#" accept-charset="UTF-8" method="post" id="">
					<!-- header -->
					<div class="modal-header">
						<a class="close" data-dismiss="modal">x</a>
						<p class="form-title1" style="display:block">要求电话回拨</p>
					</div>
					<!-- /header -->
					
					<!-- body -->
					
					<div class="modal-body">
						<div class="">
							<div class="span3">
								<fieldset class="">
									<div class="form-item">
										<h4>如何联系我们 </h4>
										<p>电话：</p>
										<p>023-636*****</p>
										<p>邮箱：</p>
										<p>
										<address>
										<a href="mailto:#">mailto@somedomain.com</a>
										</address>
										</p>
									</div>
								</fieldset>
							</div>
							<div class="span3">
								<fieldset class="">
									<div class="form-item" id="">
										<label for="edit-firstname">名字： <span class="form-required" title="必填字段。">*</span></label>
										<input type="text" maxlength="40" name="firstname" id="" size="50" value="" class="">
									</div>
									<div class="form-item" id="">
										<label for="edit-email">电子邮件地址：<span class="form-required" title="必填字段。">*</span></label>
										<input type="text" maxlength="64" name="email" id="edit-email" size="50" value="" class="form-text required">
									</div>
									<div class="form-item" id="">
										<label for="edit-phone">电话：<span class="form-required" title="必填字段。">*</span></label>
										<input type="text" maxlength="20" name="phone" id="edit-phone" size="50" value="+" class="form-text required">
									</div>
									<div class="form-item" id="">
										<label for="edit-sub-notes--c">您希望我们什么时间给您回拨电话？： </label>
										<input type="text" maxlength="255" name="sub-notes--c" id="edit-sub-notes--c" size="100" value="" class="form-text required" placeholder="立即、上午 9 点以后，等等...">
									</div>
<!-- 									<div class="form-checkboxes"> -->
<!-- 										<div class="form-item" id=""> -->
<!-- 											<label class="option" for=""> -->
<!-- 												<input type="checkbox" name="subscriptions-[subscribe]" id="" value="subscribe" class="form-checkbox"> 获取 Tesla (特斯拉) 最新资讯 -->
<!-- 												<a href="/cn/about/legal#tesla-updates" target="_blank" class=""> (这些是什么?)</a> -->
<!-- 											</label> -->
<!-- 										</div> -->
<!-- 									</div> -->
								</fieldset>
							</div>
						</div>
					</div>
					<!-- /body -->
					
					<!-- footer -->
					<div class="modal-footer">
					<input type="submit" name="op" id="" value="提交" class="btn btn-info">
					</div>
					<!-- /footer -->
			</form>
		</div>
	
	<!-- /callback -->

	
	
	<div class="container">
<!-- 		<div id="social">social</div> -->
		<div class="navbar" id="footer">
			<ul class="list-inline" style="margin-left: 270px; height: 30px;">
				<li class=""><a style="color: blue;" href="#" rel="nofollow">法律声明</a>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
				<li class=""><a style="color: blue;" href="#" rel="nofollow">隐私保护</a>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
				<li class=""><a style="color: blue;" href="#" >联系我们</a>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
				<li class=""><a href="#" style="color: blue;">网站地图</a></li>
			</ul>
			<p class="lead text-center">版权所有 © XXX公司 2014。	保留一切权利。渝0000000号</p>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo base_url().'js/jquery.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'js/bootstrap.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'js/modal.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'js/bootstrap.js'?>"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(document).off('click.bs.dropdown.data-api');
			dropdownOpen();
		});
		function dropdownOpen() {

			var $dropdownLi = $('li.dropdown');

			$dropdownLi.mouseover(function() {
				$(this).addClass('open');
			}).mouseout(function() {
				$(this).removeClass('open');
			});
		}
	</script>

</body>
</html>