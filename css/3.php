<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Contacts</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
	<meta name="keywords" content="" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.1.39" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1481900769" rel="stylesheet" type="text/css" />
	<link href="css/3.css?ts=1481900769" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance56" class="wb_element"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu"><li><a href="Home/" target="_self" title="Home">Home</a></li><li><a href="Shop/" target="_self" title="Shop">Shop</a></li><li><a href="About-us/" target="_self" title="About us">About us</a></li><li class="active"><a href="Contacts/" target="_self" title="Contacts">Contacts</a></li></ul><script type="text/javascript"> (function() { var isOpen = false, elem = $('#wb_element_instance56'), btn = elem.children('.btn-collapser').eq(0); btn.on('click', function() { if (elem.hasClass('collapse-expanded')) { isOpen = false; elem.removeClass('collapse-expanded'); } else { isOpen = true; elem.addClass('collapse-expanded'); } }); })(); </script></div><div id="wb_element_instance57" class="wb_element"><img alt="clothes" src="gallery_gen/6de4f680a85f7e55c2d0b8e7291dfc12_50x50.png"></div><div id="wb_element_instance58" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal"><span style="color:#ffffff;">Clothy</span></p></div><div id="wb_element_instance59" class="wb_element"><a href="Contacts/"><img alt="social" src="gallery_gen/6f7ad8f3182f1dcce4867a8568960f14_32x32.png"></a></div><div id="wb_element_instance60" class="wb_element"><a href="Contacts/"><img alt="social (2)" src="gallery_gen/a3ad55434510cde1e9e7ab24bce4dc57_32x32.png"></a></div><div id="wb_element_instance61" class="wb_element"><a href="Contacts/"><img alt="social (1)" src="gallery_gen/d8c5c06e217e5f96397e6e4624b4edee_32x32.png"></a></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance63" class="wb_element"><form class="wb_form wb_mob_form" method="post"><input type="hidden" name="wb_form_id" value="eb80a30b"><textarea name="message" rows="3" cols="20" class="hpc"></textarea><table><tr><th class="wb-stl-normal">Name&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_0" value="Name"><input class="form-control form-field" type="text" value="" name="wb_input_0"></td></tr><tr><th class="wb-stl-normal">E-mail&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_1" value="E-mail"><input class="form-control form-field" type="text" value="" name="wb_input_1"></td></tr><tr class="area-row"><th class="wb-stl-normal">Message&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_2" value="Message"><textarea class="form-control form-field form-area-field" rows="3" cols="20" name="wb_input_2"></textarea></td></tr><tr class="form-footer"><td colspan="2"><button type="submit" class="btn btn-default">Submit</button></td></tr></table></form><script type="text/javascript">
			<?php global $wb_form_id; if (isset($wb_form_id) & $wb_form_id == "eb80a30b") { ?>
				var formValues = <?php echo json_encode($_POST); ?>;
				var formErrors = <?php global $formErrors; echo json_encode($formErrors); ?>;
				wb_form_validateForm("eb80a30b", formValues, formErrors);
				<?php global $wb_form_send_state; if (isset($wb_form_send_state) && $wb_form_send_state) { ?>
					setTimeout(function() {
						alert("<?php echo addcslashes($wb_form_send_state, "\\'\"&\n\r\0\t<>"); ?>");
					}, 1);
					<?php $wb_form_send_state = null; ?>
				<?php } ?>
			<?php } ?>
			</script></div><div id="wb_element_instance64" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1"><strong>Give us a call</strong></h1>
<p> </p>
<p class="wb-stl-normal">+1 212 736 3100</p></div><div id="wb_element_instance65" class="wb_element"><script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=&amp;sensor=false&amp;libraries=places&amp;region=US&amp;language=en_US"></script><script type="text/javascript">
				function initialize() {
					if (window.google) {
						var div = document.getElementById("wb_element_instance65");
						var ll = new google.maps.LatLng(40.7484404,-73.98565539999998);
						var map = new google.maps.Map(div, {
							zoom: 16,
							center: ll,
							mapTypeId: "roadmap"
						});
						
						var marker = new google.maps.Marker({
							position: ll,
							clickable: false,
							map: map
						});
					}
				}
				google.maps.event.addDomListener(window, "load", initialize);
			</script></div><div id="wb_element_instance66" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1"><span style="color:#inherit;"><strong>Send us an email</strong></span></h1></div><div id="wb_element_instance67" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(3);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance67");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance67").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 124px;">
	
<div id="wb_element_instance62" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer">© 2016 <a href="http://mrinalini.esy.es">mrinalini.esy.es</a></p></div><div id="wb_element_instance68" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.height(60);
				}
			});
			</script></div></div><div class="wb_sbg"></div></div></body>
</html>
