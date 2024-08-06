<!doctype html>
<?php 
	$path = '../';
	$menuClass = 'career';
	$pageTitle = 'title';
	$pageDescription = 'fff';
	$pageKeywords = 'aaa,bbb,ccc';
	$pageUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$pageImages = '';
?>
<head>
<meta charset="UTF-8">
<?php include $path."inc/head.php"; ?>
<?php include $path.'functions.php'; ?>
</head>
<body style="background:#000;">
<?php include $path."inc/header.php"; ?>
		<?php
			$gnbColor = 'black';
			$pageImagePath = $path.'images/main';
		?>
		<div class="main-wrap">
				<!-- key visual -->
				<div class="main-kv full-visual key-visual swiper-container">
					<!-- <h2 class="sr-only">Key Visual Area</h2> -->
					<ul class="swiper-wrapper">
						<li class="swiper-slide video-slide">
							<a href="#" class="btn-floating" aria-hidden="true" tabindex="-1">&nbsp;</a>
							<div class="image-area">
								<div class="inner desktop">
									<video 
										class="video" 
										poster="<?=$pageImagePath?>/lg-display-oledspace-main-kv-mini-led-vs-oled-d.jpg"
										src="<?=$pageImagePath?>/lg-display-oledspace-main-kv-mini-led-vs-oled-d.mp4" aria-label="이 영상은 백라이트를 포함한 여러 부품으로 구성된 Mini LED와, 자발광 패널로 구성된 OLED 구조를 비교하고 있다." preload="none" autoplay loop muted playsinline></video>
									<span class="test"></span>
								</div>
								<div class="inner mobile">
									<video 
										class="video" 
										poster="<?=$pageImagePath?>/lg-display-oledspace-main-kv-mini-led-vs-oled-m.jpg"
										src="<?=$pageImagePath?>/lg-display-oledspace-main-kv-mini-led-vs-oled-m.mp4" aria-label="이 영상은 백라이트를 포함한 여러 부품으로 구성된 Mini LED와, 자발광 패널로 구성된 OLED 구조를 비교하고 있다." preload="none" autoplay loop muted playsinline></video>
									<span class="test"></span>
								</div>
								<span class="dimmed"></span>
							</div>							
							<div class="floating-area">
								<div class="text-box">
								<div class="eyebrow"><span><em class="icon-oled"><span class="sr-only">OLED 로고</span></em></span></div>
									<div class="title"><span>Mini LED vs OLED</span></div>
									<div class="desc"><span>어떤 디스플레이를 선택해야 할까요?<br>정답은 결국 OLED입니다.</span></div>
								</div>
							</div>
						</li>
						<li class="swiper-slide video-slide">
							<a href="#" class="btn-floating" aria-hidden="true" tabindex="-1">&nbsp;</a>
							<div class="image-area">
								<div class="inner desktop">
									<video 
										class="video" 
										poster="<?=$pageImagePath?>/lg-display-oledspace-main-kv-interview-transparent-oled-d.jpg"
										src="<?=$pageImagePath?>/lg-display-oledspace-main-kv-interview-transparent-oled-d.mp4" aria-label="투명 게이트가 열리면서 서브웨이가 보이고, 이어서 김빈 책임이 투명 OLED Shelf, 쇼윈도우, 쇼케이스를 바라보고 있는 영상이다." preload="none" autoplay loop muted playsinline></video>
									<span class="test"></span>
								</div>
								<div class="inner mobile">
									<video 
										class="video" 
										poster="<?=$pageImagePath?>/lg-display-oledspace-main-kv-interview-transparent-oled-m.jpg"
										src="<?=$pageImagePath?>/lg-display-oledspace-main-kv-interview-transparent-oled-m.mp4" aria-label="투명 게이트가 열리면서 서브웨이가 보이고, 이어서 김빈 책임이 투명 OLED Shelf, 쇼윈도우, 쇼케이스를 바라보고 있는 영상이다." preload="none" autoplay loop muted playsinline></video>
									<span class="test"></span>
								</div>
								<span class="dimmed"></span>
							</div>							
							<div class="floating-area">
								<div class="text-box">
								<div class="eyebrow"><span><em class="icon-oled-t"><span class="sr-only">OLED.T 로고</span></em></span></div>
									<div class="title"><span>디스플레이 너머의 새로운 세상</span></div>
									<div class="desc"><span>공간의 경계를 허무는 투명 OLED를 소개합니다.</span></div>
								</div>
							</div>
						</li>
						<li class="swiper-slide video-slide">
							<a href="#" class="btn-floating" aria-hidden="true" tabindex="-1">&nbsp;</a>
							<div class="image-area">
								<div class="inner desktop">
									<video 
										class="video" 
										poster="<?=$pageImagePath?>/lg-display-oledspace-main-kv-sid-2023-rollable-oled-18-d.jpg"
										src="<?=$pageVideoPath?>/lg-display-oledspace-main-kv-sid-2023-rollable-oled-18-d.mp4" aria-label="18인치 롤러블 OLED가 부스에 전시되어 있고, 음향 스피커에서 디스플레이가 롤링되어 올라오고 있다." preload="none" autoplay loop muted playsinline></video>
									<span class="test"></span>
								</div>
								<div class="inner mobile">
									<video 
										class="video" 
										poster="<?=$pageImagePath?>/lg-display-oledspace-main-kv-sid-2023-rollable-oled-18-m.jpg"
										src="<?=$pageVideoPath?>/lg-display-oledspace-main-kv-sid-2023-rollable-oled-18-m.mp4" aria-label="18인치 롤러블 OLED가 부스에 전시되어 있고, 음향 스피커에서 디스플레이가 롤링되어 올라오고 있다." preload="none" autoplay loop muted playsinline></video>
									<span class="test"></span>
								</div>
								<span class="dimmed"></span>
							</div>							
							<div class="floating-area">
								<div class="text-box">
								<div class="eyebrow"><span><em class="icon-oled"><span class="sr-only">OLED 로고</span></em></span></div>
									<div class="title"><span>SID 2023 : 더 나은 내일을 향한 혁신</span></div>
									<div class="desc"><span>한계를 뛰어넘는 차세대 OLED 기술을 확인해보세요.</span></div>
								</div>
							</div>
						</li>
						<li class="swiper-slide">
							<a href="#" class="btn-floating" aria-hidden="true" tabindex="-1">&nbsp;</a>
							<div class="image-area">
								<div class="img">
									<picture>
										<source media="(min-width: 751px)" srcset="<?=$pageImagePath?>/lg-display-oledspace-main-kv-meta-technology-d.jpg" />
										<source media="(max-width: 750px)" srcset="<?=$pageImagePath?>/lg-display-oledspace-main-kv-meta-technology-m.jpg" />
										<img src="<?=$aPath?>/assets/images/blank.svg" data-src="<?=$pageImagePath?>/lg-display-oledspace-main-kv-meta-technology-m.jpg, <?=$pageImagePath?>/lg-display-oledspace-main-kv-meta-technology-d.jpg" class="lazy" alt="어두운 나무 숲에 META Technology가 적용된 디스플레이가 빛을 비추며 숲의 배경이 환해지고 주변 자연의 색을 왜곡없이 보여주고 있다." aria-hidden="true" />
									</picture>
								</div>
								<span class="dimmed"></span>
							</div>
							<div class="floating-area">
								<div class="text-box">
								<div class="eyebrow"><span><em class="icon-oled-meta"><span class="sr-only">META Technology 로고</span></em></span></div>
									<div class="title"><span>프리미엄 OLED의 진화된 밝기와 디테일</span></div>
									<div class="desc"><span>3세대 OLED META Technology는 완전히 새로운 세상을 보여줍니다.</span></div>
								</div>
							</div>
						</li>
					</ul>
					<button type="button" class="swiper-button-prev"></button>
					<button type="button" class="swiper-button-next"></button>
					<div class="swiper-pagination-wrap">
						<div class="swiper-pagination"></div>
						<button type="button" class="btn btn-play size-regular"></button>
						<button type="button" class="btn btn-pause size-regular active"></button>
					</div>
				</div>
				<!-- // key visual -->
		</div>



<?php include $path."inc/footer.php"; ?>
<?php include $path."inc/body-btm.php"; ?>

</body>
</html>