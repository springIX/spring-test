<!doctype html>
<head>
<meta charset="UTF-8">
<?php include "./inc/head.php"; ?>

<style>
#footer .top {display: none !important;}
.error-wrap {min-height: calc(100vh - 133px); box-sizing: border-box;}
@media screen and (max-width: 768px) {
	.error-wrap {min-height: calc(100vh - 189px);}
}
.marquee-area {
	display: none;
}
</style>
</head>
<?php include "./inc/bodytop.php"; ?>

<div class="error-wrap">
	<div class="error-box">
		<div class="error-img">
			<img src="/img/error.png" alt="" />
		</div>
		<div class="error-msg">
			<h1>404</h1>
			<span><?php if($mylang=='en') {echo 'Page Not Found';} else {echo '요청하신 페이지를 찾을 수가 없습니다.';} ?></span>
			<p><?php if($mylang=='en') {echo 'The page could not be found because you entered a URL that does not exist, <br class="d">changed, or deleted. Please check again.';} else {echo '존재하지 않는 URL을 입력하셨거나 변경, 삭제되어 페이지를 찾을 수가 없습니다. <br class="d">다시 한 번 확인해주세요.';} ?></p>
		</div>
		<div class="error-btn">
			<a href="/" class="btn"><span><?php if($mylang=='en') {echo 'Main';} else {echo '메인으로';} ?></span></a>
		</div>
		<div class="other-menu">
			<p><?php if($mylang=='en') {echo 'Are you looking for a menu like this?';} else {echo '혹시, 이런 메뉴를 찾으세요?';} ?></p>
			<div>
				<a href="/work" class="btn"><span>SENSEE Works</span></a>
				<a href="/career" class="btn"><span>SENSEE Careers</span></a>
			</div>
		</div>
	</div>
</div>

<?php include "./inc/footer.php"; ?>


</body>
</html>