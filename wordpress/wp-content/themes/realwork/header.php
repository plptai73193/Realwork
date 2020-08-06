<?php 
	$keyImages = get_field('key_visual','option');
	$logo = get_field('logo', 'option');
	$commonInfo = get_field('common_info', 'option');
	$email = $commonInfo[0]['email'];
	$phone = $commonInfo[0]['phone'];
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang='vi'>

<head>
	<title><?php bloginfo( 'name' ) ?></title>
	<meta charset='utf-8' />
	<meta content='width=device-width,minimum-scale=1,initial-scale=1' name='viewport' />
	<meta content='index,follow,all' name='robots' />
	<link rel="shortcut icon" href="#" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel="stylesheet" href="<?php echo CSS_PATH; ?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH; ?>css/owl.theme.default.min.css">
	<link async type="text/css" rel="stylesheet" href="<?php echo CSS_PATH; ?>css/style.css" />
	<link async type="text/css" rel="stylesheet" href="<?php echo CSS_PATH; ?>css/custom.css" />
	<!--[if lt IE 9]>
  	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  	<![endif]-->
</head>

<body>
	<header>
		<div class="header-top">
			<div class="container">
				<div class="flex-end reserve-header">
					<p class="hotline-mail hide767">HỖ TRỢ ĐẶT HÀNG: 
						<a href="tel:<?php echo $phone[0]['booking_phone'] ?>"><?php echo $phone ?></a> - 
						<a href="mailto:<?php echo $email[0]['booking_email'] ?>"><?php echo $email ?></a>
					</p>
				</div>
			</div>
		</div>
		<div class="header-bototm">
			<div class="container">
				<div class="flex-bw">
					<a href="<?php echo site_url() ?>" class="logo"><img src="<?php echo $logo ?>" alt="<?php bloginfo( 'name' ) ?>"></a>
					<ul class="ul-main-menu hide991">
						<li><a href="<?php echo site_url() ?>">Trang Chủ</a></li>
						<li><a href="<?php echo site_url('gioi-thieu') ?>">Giới Thiệu</a></li>
						<li class="has-sub">
							<a href="<?php echo site_url('dich-vu') ?>">Dịch Vụ <i class="fas fa-angle-down"></i></a>
							<ul class="ul-sub-menu">
								<li class="has-sub-2">
									<a href="san-pham.html"><span>Văn Phòng Ảo</span><i class="fas fa-angle-right"></i></a>
									<ul class="ul-sub-menu-2">
										<li><a href="san-pham.html">Cửa Chống Cháy</a></li>
										<li><a href="san-pham.html">Cửa Ngoài Trời</a></li>
										<li>
											<a href="san-pham.html"><span>Cửa Trong Nhà</span></a>
										</li>
									</ul>
								</li>
								<li><a href="san-pham.html">Cầu Thang Gỗ</a></li>
								<li><a href="san-pham.html">Ván Gỗ</a></li>
							</ul>
						</li>
						<li>
							<a href="<?php echo site_url('tin-tuc') ?>">Tin tức</a>
						</li>
						<li><a href="<?php echo site_url('hinh-anh') ?>">Hình ảnh</a></li>
						<li><a href="<?php echo site_url('lien-he') ?>">Liên Hệ</a></li>
					</ul>
					<div class="cart-search hide991">
						<div class="flex">
							<a href="javascript:void(0);" class="search-head" data-toggle="modal" data-target="#show-search"><i
									class="fas fa-search"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="show991 header-mobile">
			<div class="container">
				<div class="flex-bw">
					<div class="search-mb">
						<form class="f-search">
							<div class="input-group stylish-input-group">
								<input type="text" class="form-control" placeholder="Tìm kiếm ...">
								<span class="input-group-addon">
									<button type="submit">
										<span class="glyphicon glyphicon-search"></span>
									</button>
								</span>
							</div>
						</form>
					</div>
					<div class="bar-mb">
						<span style="cursor:pointer;display: inline-block;color: #fff;" class="sp-sn"><i
								class="fas fa-bars fa-2x" onclick="openNav()"></i></span>
						<span style="cursor:pointer;display: inline-block;color: #fff;" class="sp-cn"><i
								class="fas fa-times fa-2x" onclick="closeNav()"></i></span>
					</div>
				</div>
			</div>
			<div id="mySidenav" class="sidenav">
				<ul class="menu-mobile" id="accordion">
					<li><a href="index.html">Trang Chủ</a></li>
					<li><a href="gioi-thieu.html">Giới Thiệu</a></li>
					<li class="hassub-mb hassub-mb-1 panel">
						<p class="phelp"><a href="san-pham.html">Sản phẩm</a><a data-parent="#accordion"
								data-toggle="collapse" href="#dmmb-1" class="a-icon"><i class="fas fa-angle-down"></i></a></p>
						<ul class="sub-menu-mb collapse" id="dmmb-1">
							<li class="hassub-mb hassub-mb-2">
								<p class="phelp"><a href="san-pham.html">Cửa gỗ</a><a data-toggle="collapse" href="#dmmb-1-1"
										class="a-icon"><i class="fas fa-angle-down"></i></a></p>
								<ul class="sub-menu-mb collapse" id="dmmb-1-1">
									<li><a href="san-pham.html">Cửa Chống Cháy</a></li>
									<li><a href="san-pham.html">Cửa Ngoài Trời</a></li>
									<li class="hassub-mb hassub-mb-3">
										<p class="phelp"><a href="san-pham.html">Cửa Trong Nhà</a><a data-toggle="collapse"
												href="#dmmb-1-1-1" class="a-icon"><i class="fas fa-angle-down"></i></a></p>
										<ul class="sub-menu-mb collapse" id="dmmb-1-1-1">
											<li><a href="san-pham.html">Cửa Cổ Điển</a></li>
											<li><a href="san-pham.html">Cửa Xếp</a></li>
											<li><a href="san-pham.html">Cửa Trượt</a></li>
											<li><a href="san-pham.html">Cửa Pháp</a></li>
											<li class="hassub-mb hassub-mb-4">
												<p class="phelp"><a href="san-pham.html">Cửa Phẳng</a><a data-toggle="collapse"
														href="#dmmb-1-1-1-1" class="a-icon"><i class="fas fa-angle-down"></i></a></p>
												<ul class="sub-menu-mb collapse" id="dmmb-1-1-1-1">
													<li><a href="san-pham.html">Cửa Phẳng Ron</a></li>
													<li><a href="san-pham.html">Cửa Phẳng Lá Xách</a></li>
													<li><a href="san-pham.html">Cửa Phẳng Kính</a></li>
												</ul>
											</li>
											<li class="hassub-mb hassub-mb-4">
												<p class="phelp"><a href="san-pham.html">Cửa Panel</a><a data-toggle="collapse"
														href="#dmmb-1-1-1-2" class="a-icon"><i class="fas fa-angle-down"></i></a></p>
												<ul class="sub-menu-mb collapse" id="dmmb-1-1-1-2">
													<li><a href="san-pham.html">Cửa Panel</a></li>
													<li><a href="san-pham.html">Cửa Panel Phẳng</a></li>
													<li><a href="san-pham.html">Cửa Panel Kính</a></li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="san-pham.html">Cầu thang gỗ</a></li>
							<li><a href="san-pham.html">Ván gỗ</a></li>
						</ul>
					</li>
					<li class="hassub-mb panel">
						<p class="phelp"><a href="blog.html">Blog</a><a data-parent="#accordion" data-toggle="collapse"
								href="#dmmb-2" class="a-icon"><i class="fas fa-angle-down"></i></a></p>
						<ul class="sub-menu-mb panel-collapse collapse" id="dmmb-2">
							<li><a href="tin-tuc.html">Tin tức</a></li>
							<li><a href="video.html">Video</a></li>
						</ul>
					</li>
					<li><a href="cong-trinh.html">Công trình</a></li>
					<li><a href="tuyen-dung.html">Tuyển dụng</a></li>
					<li><a href="lien-he.html">Liên hệ</a></li>
				</ul>
			</div>
		</div>
	</header>
	<section>
		<div class="main-banner">
			<div class="slide-fade">
				<?php 
					if($keyImages){
						foreach ($keyImages as $keyImage){
				?>
				<div>
					<div class="inner" style="background-image: url('<?php echo $keyImage['kv_image'] ?>');"></div>
				</div>
				<?php }} ?>
			</div>
		</div>