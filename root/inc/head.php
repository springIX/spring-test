<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="chrome=1, IE=edge">
<meta name="format-detection" content="telephone=no" />

<title>SENSEE</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta property="og:title" content="" />
<meta property="og:type" content="website" />
<meta property="og:url" content="" />
<meta property="og:image" content="" />
<link rel="canonical" href="" />

<link rel="shortcut icon" href="/favicon.ico"><!-- Chrome, Safari, IE -->
<!-- Firefox, Opera (Chrome and Safari say thanks but no thanks) -->
<link rel="icon" href="" sizes="16x16">
<link rel="icon" href="" sizes="32x32">
<link rel="icon" href="" sizes="72x72">
<link rel="icon" href="" sizes="120x120">
<link rel="icon" href="" sizes="128x128">
<link rel="icon" href="" sizes="144x144">
<link rel="icon" href="" sizes="152x152">

<!-- for apple -->
<link rel="apple-touch-icon-precomposed" href="/favicon/">
<meta name="msapplication-TileColor" content="#FFFFFF">
<meta name="msapplication-TileImage" content="/favicon/"><!-- 투명 -->

<link rel="stylesheet" href="/assets/css/common.css">


<?php
require_once 'mobile-detect.php';
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'desktop');
$scriptVersion = $detect->getScriptVersion();
?>


<script type="text/javascript">var deviceType = "<?=$deviceType?>";</script>

<script>
window.onload = function() {
    document.querySelector(".loader").remove();
};
</script>

