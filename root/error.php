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
			<img src="" alt="" />
		</div>
		<div class="error-msg">
			<h1>404</h1>
		</div>
	</div>
</div>

<?php include "./inc/footer.php"; ?>


</body>
</html>