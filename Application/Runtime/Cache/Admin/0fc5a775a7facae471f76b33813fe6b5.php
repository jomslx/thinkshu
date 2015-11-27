<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>控制台 - Bootstrap后台管理系统模版Ace下载</title>
		<meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
		<meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->
		<link href="/Public/<?php echo C(DEFAULT_THEME);?>/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/Public/<?php echo C(DEFAULT_THEME);?>/assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="/Public/<?php echo C(DEFAULT_THEME);?>/assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!-- ace styles -->

		<link rel="stylesheet" href="/Public/<?php echo C(DEFAULT_THEME);?>/assets/css/ace.min.css" />
		<link rel="stylesheet" href="/Public/<?php echo C(DEFAULT_THEME);?>/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="/Public/<?php echo C(DEFAULT_THEME);?>/assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="/Public/<?php echo C(DEFAULT_THEME);?>/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="/Public/<?php echo C(DEFAULT_THEME);?>/assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="/Public/<?php echo C(DEFAULT_THEME);?>/assets/js/html5shiv.js"></script>
		<script src="/Public/<?php echo C(DEFAULT_THEME);?>/assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="icon-leaf"></i>
							NBcms会员中心
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-ok"></i>
									还有4个任务完成
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">软件更新</span>
											<span class="pull-right">65%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:65%" class="progress-bar "></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">硬件更新</span>
											<span class="pull-right">35%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:35%" class="progress-bar progress-bar-danger"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">单元测试</span>
											<span class="pull-right">15%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:15%" class="progress-bar progress-bar-warning"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">错误修复</span>
											<span class="pull-right">90%</span>
										</div>

										<div class="progress progress-mini progress-striped active">
											<div style="width:90%" class="progress-bar progress-bar-success"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										查看任务详情
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-bell-alt icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-warning-sign"></i>
									8条通知
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink icon-comment"></i>
												新闻评论
											</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="btn btn-xs btn-primary icon-user"></i>
										切换为编辑登录..
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
												新订单
											</span>
											<span class="pull-right badge badge-success">+8</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info icon-twitter"></i>
												粉丝
											</span>
											<span class="pull-right badge badge-info">+11</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										查看所有通知
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-envelope-alt"></i>
									5条消息
								</li>

								<li>
									<a href="#">
										<img src="/Public/<?php echo C(DEFAULT_THEME);?>/assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												不知道写啥 ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>1分钟以前</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="/Public/<?php echo C(DEFAULT_THEME);?>/assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												不知道翻译...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20分钟以前</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="/Public/<?php echo C(DEFAULT_THEME);?>/assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												到底是不是英文 ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>下午3:15</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="inbox.html">
										查看所有消息
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="/Public/<?php echo C(DEFAULT_THEME);?>/assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>欢迎光临,</small>
									Admin
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="icon-cog"></i>
										设置
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-user"></i>
										个人资料
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="icon-off"></i>
										退出
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success">
								<i class="icon-signal"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-danger">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

					<ul class="nav nav-list">
						<li <?php if(in_array((ACTION_NAME), explode(',',"index"))): ?>class="active"<?php endif; ?>>
							<a href="<?php echo U('Index/index') ?>">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> 管理中心 </span>
							</a>
						</li>

						<li <?php if(in_array((ACTION_NAME), explode(',',"artadd,catlist,hsz"))): ?>class="active open"<?php endif; ?> >
							<a href="#" class="dropdown-toggle">
								<i class="icon-desktop"></i>
								<span class="menu-text"> 文章管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li <?php if((ACTION_NAME) == "artadd"): ?>class="active"<?php endif; ?>>
									<a href="#">
										<i class="icon-double-angle-right"></i>
										我的文章
									</a>
								</li>

								<li <?php if((ACTION_NAME) == "artadd"): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Admin/Article/artadd') ?>">
										<i class="icon-double-angle-right"></i>
										我要投稿
									</a>
								</li>

								<li <?php if((ACTION_NAME) == "catlist"): ?>class="active"<?php endif; ?>>
								<a href="<?php echo U('Admin/Article/catlist') ?>">
									<i class="icon-double-angle-right"></i>
									文章分类
								</a>
								</li>

								<li <?php if(($menu) == "hsz"): ?>class="active"<?php endif; ?>>
									<a href="#">
										<i class="icon-double-angle-right"></i>
										回收站
									</a>
								</li>

						  </ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 信息管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="#">
										<i class="icon-double-angle-right"></i>
										我的空间
								  </a>
								</li>

								<li>
									<a href="#">
										<i class="icon-double-angle-right"></i>
										我的书架
								  </a>
								</li>
								<li>
									<a href="#">
										<i class="icon-double-angle-right"></i>
										我的好友
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-double-angle-right"></i>
										站内消息
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-double-angle-right"></i>
										留言板
									</a>
								</li>
							</ul>
						</li>
						
						<li <?php if(in_array((ACTION_NAME), explode(',',"useradd,wdxs,hsz"))): ?>class="active open"<?php endif; ?> >
							<a href="#" class="dropdown-toggle">
								<i class="icon-user"></i>
								<span class="menu-text"> 会员管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li <?php if(($menu) == "wdxs"): ?>class="active"<?php endif; ?>>
									<a href="#">
										<i class="icon-double-angle-right"></i>
										会员列表
									</a>
								</li>

								<li <?php if(($menu) == "wytg"): ?>class="active"<?php endif; ?>>
									<a href="<?php echo U('Admin/User/useradd') ?>">
										<i class="icon-double-angle-right"></i>
										新增会员
									</a>
								</li>


						  </ul>
						</li>
						
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-edit"></i>
								<span class="menu-text"> 个人设置 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="#">
										<i class="icon-double-angle-right"></i>
										基本信息
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-double-angle-right"></i>
										修改密码
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-double-angle-right"></i>头像设置</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-double-angle-right"></i>
										购买虚似币
									</a>
								</li>
								<li>
									<a href="<?php echo U('Admin/User/logout');?>">
										<i class="icon-double-angle-right"></i>
										退出登陆
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-tag"></i>
								<span class="menu-text"> 意见与帮助 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="#">
										<i class="icon-double-angle-right"></i>
										提交建议
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-double-angle-right"></i>
										网站帮助
									</a>
								</li>

							</ul>
						</li>
						<li>
							<a href="<?php echo U('Admin/User/logout');?>" class="dropdown-toggle" onClick="if(!confirm('你确定要退出吗?')){return false;}">
								<i class="icon-eject"></i>
								<span class="menu-text"> 退出 </span>
							</a>
						</li>
						
					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">首页</a>
							</li>
							<li class="active"><?php echo ($title); ?></li>
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1><span class="active"><?php echo ($title); ?></span>
								<small>
									<i class="icon-hand-right green"></i>
									<a href="#modal-form" role="button" class="blue" data-toggle="modal">新增一个分类</a>
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="table-responsive">
									<table id="sample-table-1" class="table table-striped table-hover">
										<thead>
										<tr>
											<th class="center">编号</th>
											<th>分类名</th>
											<th class="center">记录</th>
											<th class="hidden-480">发表</th>
											<th>
												<i class="icon-time bigger-110 hidden-480"></i>
												操作
											</th>

											<th width="12%" class="hidden-480">排序</th>
										</tr>
										</thead>
										<tbody>

										<tr>
											<td class="center">
												<a href="#">1</a>
											</td>
											<td>类名1</td>
											<td class="center">3,330条</td>
											<td>

												<button class="btn btn-minier btn-warning">
													<i class="icon-flag bigger-120"></i>
													发表
												</button>

											</td>

											<td>
												<div class="btn-group">
													<button class="btn btn-minier btn-danger">新增子分类 </button>
													<button class="btn btn-minier btn-pink">基本设置 </button>
													<button class="btn btn-minier btn-success">SEO设置 </button>
													<button class="btn btn-minier">权限设置 </button>

													<button class="btn btn-minier btn-danger">
														<i class="icon-trash bigger-120"></i>
														删除
													</button>

												</div>

											</td>

											<td class="hidden-480">
												<input class="input-sm" type="text" id="form-field-4" placeholder=".input-sm">
											</td>
										</tr>

										</tbody>
									</table>
								</div>

								<div class="hr hr32 hr-dotted"></div>
                                
                                <!-- /row -->
								<div id="modal-form" class="modal" tabindex="-1">
									<form name="FormPost" id="FormPost" method="post">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="blue bigger">新增一个分类</h4>
											</div>

											<div class="modal-body overflow-visible">
												<div class="row">

													<div class="col-xs-12">
														<div class="form-group row">

															<div class="col-lg-4 col-md-4">
															<label for="form-field-select-3">所属分类</label>

															<div>
																<select class="col-xs-12">
																	<option value="0">主分类</option>
																	<option value="AL">Alabama</option>
																	<option value="AK">Alaska</option>
																	<option value="AZ">Arizona</option>
																</select>
															</div>
															</div>

															<div class="col-lg-5 col-md-5">
																<label for="form-field-username">分类名</label>
																<div><input class="col-xs-12" type="text" id="form-field-username" placeholder="分类名" value="" /></div>
															</div>

															<div class="col-lg-3 col-md-3">
																<label for="form-field-username">分类排序</label>
																<div><input class="col-xs-12" type="text" id="form-field-username" placeholder="分类排序" value="" /></div>
															</div>
														</div>

														<div class="form-group row">

															<div class="col-lg-6 col-md-6">
																<label for="form-field-username">分类页模板</label>
																<input class="col-xs-12" type="text" id="form-field-username" placeholder="分类页模板" value="" />
															</div>


															<div class="col-lg-6 col-md-6">
																<label for="form-field-username">内容页模板</label>
																<input class="col-xs-12" type="text" id="form-field-username" placeholder="内容页模板" value="" />
															</div>
														</div>


													</div>
												</div>
											</div>

											<div class="modal-footer">
												<button class="btn btn-sm" data-dismiss="modal">
													<i class="icon-remove"></i>
													Cancel
												</button>

												<button class="btn btn-sm btn-primary" type="submit">
													<i class="icon-ok"></i>
													Save
												</button>
											</div>
										</div>
									</div>
									</form>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="default" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; 选择皮肤</span>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
							<label class="lbl" for="ace-settings-navbar"> 固定导航条</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> 固定滑动条</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs">固定面包屑</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl">切换到左边</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
							<label class="lbl" for="ace-settings-add-container">
								切换窄屏
								<b></b>
							</label>
						</div>
					</div>
				</div><!-- /#ace-settings-container -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<script src="http://libs.baidu.com/jquery/2.0.3/jquery.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='/Public/<?php echo C(DEFAULT_THEME);?>/assets/js/jquery-2.0.3.min.js'>"+"<"+"script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='/Public/<?php echo C(DEFAULT_THEME);?>/assets/js/jquery-1.10.2.min.js'>"+"<"+"script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/Public/<?php echo C(DEFAULT_THEME);?>/assets/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
		</script>
		<script src="/Public/<?php echo C(DEFAULT_THEME);?>/assets/js/bootstrap.min.js"></script>
		<script src="/Public/<?php echo C(DEFAULT_THEME);?>/assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="/Public/<?php echo C(DEFAULT_THEME);?>/assets/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="/Public/<?php echo C(DEFAULT_THEME);?>/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="/Public/<?php echo C(DEFAULT_THEME);?>/assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="/Public/<?php echo C(DEFAULT_THEME);?>/assets/js/bootbox.min.js"></script>

		<script src="/Public/<?php echo C(DEFAULT_THEME);?>/assets/js/jquery.slimscroll.min.js"></script>
		<script src="/Public/<?php echo C(DEFAULT_THEME);?>/assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="/Public/<?php echo C(DEFAULT_THEME);?>/assets/js/jquery.sparkline.min.js"></script>
		<script src="/Public/<?php echo C(DEFAULT_THEME);?>/assets/js/flot/jquery.flot.min.js"></script>
		<script src="/Public/<?php echo C(DEFAULT_THEME);?>/assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="/Public/<?php echo C(DEFAULT_THEME);?>/assets/js/flot/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->

		<script src="/Public/<?php echo C(DEFAULT_THEME);?>/assets/js/ace-elements.min.js"></script>
		<script src="/Public/<?php echo C(DEFAULT_THEME);?>/assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {

				$("#bootbox-regular").on(ace.click_event, function () {
					bootbox.prompt("What is your name?", function (result) {
						if (result === null) {
							//Example.show("Prompt dismissed");
						} else {
							//Example.show("Hi <b>"+result+"</b>");
						}
					});
				});
			});

		</script>
</body>
</html>