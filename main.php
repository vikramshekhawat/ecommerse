<?php
include 'connection.php';
?>
<html>
<head>

<link rel ="stylesheet" href="style.css" media="all"/> 
</head>
<body>
<div class="main_wraper">
<div class="header_wraper">This is header </div>
<div class="slide_bar">This is Slidebar </div>
<div class="menubar">This is Menubar </div>
<div class="content_area">
	<div id="product_box">
		<?php  getpro(); ?>
</div>
<div>This is footer</div>


</div>
<?php
getcat();
getbrand();
?>
</body>
</html>
