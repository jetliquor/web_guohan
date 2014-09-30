<!DOCTYPE HTML>
<!-- <html lang="zh_cn"> -->
<html class="html">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="<?php echo base_url().'css/bootstrap.min.css'?>" rel="stylesheet" media="screen">
<link href="<?php echo base_url().'css/bootstrap.min_new.css'?>" rel="stylesheet" media="screen">
<link href="<?php echo base_url().'css/home_page.css'?>" rel="stylesheet" media="screen">

</head>

<!-- <body> -->
<body class="" id="page-homepage">
	<!-- 导航栏  -->
	<div class="" id="top">
		<div class="pull-right"style="padding-top: 5px">
			<a class="" id="english" href="#">English</a>
		</div>
	</div>
	<div class="container" style="height: 60px;">
		<nav class="navbar navbar-default navbar-inverse1" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header1">
				<a class="navbar-brand" href="<?php echo base_url()?>"><img id="img_logo" alt="logo" src="<?php echo base_url().'img/gh_logo.png'?>"></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse1 navbar-collapse" id="caidan">
				<ul class="nav navbar-nav navbar-midlle1">
					<li class="dropdown" id="guangfu_li"><a href="/index.php/guangfu" class="dropdown-toggle1"
						data-toggle="dropdown1">光伏<span class="caret"></span></a>
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
					<li class="dropdown" id="guangfu_li"><a href="#" class="dropdown-toggle1"
						data-toggle="dropdown1">充电桩<span class="caret"></span></a>
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
					
					<li class="dropdown" id="guangfu_li"><a href="#" class="dropdown-toggle1"
						data-toggle="dropdown1">企业咨询<span class="caret"></span></a>
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

				<ul class="nav navbar-nav navbar-right1">
					<li><a href="#callback"	class="cb-trigger1" data-toggle="modal">联系我们</a></li>
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">加入我们</a></li>
				</ul>
							
			</div>
			<!-- /.navbar-collapse -->
		</nav>
	</div>
	<!-- /导航栏  -->	
	
	<!-- callback -->
	<div class="modal" id="callback" style="top: 8%;">
		<div class="modal-dialog">
			<div class="modal-content">
				<!-- header -->
				<div class="modal-header">
					<a class="close" data-dismiss="modal">x</a>
					<p class="form-title1" style="display:block">要求电话回拨</p>
				</div>
				<!-- /header -->
				<form action="#" accept-charset="UTF-8" method="post" id="">
					<!-- body -->
					<div class="modal-body">
						<div class="row-fluid">
							<div class="col-sm-5">
								
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
								
							</div>
							<div style="margin-width: 5px; height: 80px;border-right: 1px solid gray"></div>
							<div class="col-sm-3" style="margin-left1: 100px; margin-top1: -100px;">
								
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
		</div>
	</div>
	
	<!-- /callback -->