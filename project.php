<?php
	require_once("master.php");
	$MasterPage = new MasterPage();
	$MasterPage->WriteHeader(basename(__FILE__), "images/project.png");
?>

<section class="page">

	<div class="row">
		<div class="col-md-12 col-xs-12">
			<div class="text-content text-center">
				บ้านร่มไม้ชายคลอง พระราม 2 ท่าข้าม ตั้งอยู่ริมคลองสนามไชย ย่านพระราม 2 ที่เป็นคลองใหญ่มีพื้นที่โล่งรับลม การวางผังและรูปแบบอาคาร ที่เน้นมุมมองของธรรมชาติรอบตัว จึงสอดคล้องกับลักษณะความเป็นบ้านริมคลอง ที่ดูเรียบง่าย ร่วมสมัย การวางผังบ้าน เน้นการใช้งานของผู้อยู่อาศัย และคำนึงถึงประโยชน์ใช้สอยจากภายในและภายนอก จึงให้ความสำคัญของการออกแบบภายใน และภูมิสถาปัตย์ที่ล้อมรอบบ้านและชุมชน
			<div>
		</div>
	</div>

	<br>

	<div class="popup-gallery">
		<div class="row">
			<div class="col-md-3 col-xs-3"><a href="images/p1.jpg" title="Dinning Room"><img class="img-responsive" src="images/p1.jpg"></a></div>
			<div class="col-md-3 col-xs-3"><a href="images/p2.jpg" title="Garden"><img class="img-responsive" src="images/p2.jpg"></a></div>
			<div class="col-md-3 col-xs-3"><a href="images/p3.jpg" title="Outdoor"><img class="img-responsive" src="images/p3.jpg"></a></div>
			<div class="col-md-3 col-xs-3"><a href="images/p4.jpg" title="Master Bedroom"><img class="img-responsive" src="images/p4.jpg"></a></div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3 col-xs-3"><a href="images/p5.jpg" title="Living Room"><img class="img-responsive" src="images/p5.jpg"></a></div>
			<div class="col-md-3 col-xs-3"><a href="images/p6.jpg" title="Living Room"><img class="img-responsive" src="images/p6.jpg"></a></div>
			<div class="col-md-3 col-xs-3"><a href="images/p7.jpg" title="Walk way"><img class="img-responsive" src="images/p6.jpg"></a></div>
			<div class="col-md-3 col-xs-3"><a href="images/p8.jpg" title="Parking"><img class="img-responsive" src="images/p6.jpg"></a></div>
		</div>
	</div>
	
	<br>

	<div class="row">
		<div class="col-md-3 col-xs-3">
			<a class="image-popup" href="images/blueprint1.jpg">
				<img class="img-responsive" src="images/blueprint1.jpg">
			</a>
		</div>
		<div class="col-md-3 col-xs-3">
			<a class="image-popup" href="images/blueprint2.jpg">
				<img class="img-responsive" src="images/blueprint2.jpg">
			</a>
		</div>

		<div class="col-md-1 col-xs-1">
			&nbsp;
		</div>

		<div class="col-md-5 col-xs-5">
			<div class="text-content">
				ไม่ว่าจะอยู่มุมใดของบ้าน ตั้งแต่ห้องนั่งเล่น มุมทานอาหาร ห้องนอน และแม้กระทั่งห้องน้ำ สามารถเกิดมุมมองที่เปิดโล่ง มองได้ไกล สัมผัสได้กับต้นไม้ใบหญ้าภายนอกอาคารได้ แม้นั่งอยู่ภายใยบ้านที่อบอุ่น แต่ก็สัมผัสถึงบรรยากาศริมรั้วนอกบ้านที่สดชื่นได้
			</div>
		</div>
	</div>

</section>

<br><br>

<?php
	$MasterPage->WriteFooter();
?>

<script type="text/javascript">
  $(document).ready(function() {
	$('.popup-gallery').magnificPopup({
	  delegate: 'a',
	  type: 'image',
	  tLoading: 'Loading image #%curr%...',
	  mainClass: 'mfp-img-mobile',
	  gallery: {
		enabled: true,
		navigateByImgClick: true,
		preload: [0,1] // Will preload 0 - before current, and 1 after the current image
	  },
	  image: {
		tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
		titleSrc: function(item) {
		  return item.el.attr('title') + '<small>by บ้านร่มไม้ชายคลอง</small>';
		}
	  }
	});
  });

  $(".image-popup").magnificPopup({
		type: "image",
	  closeOnContentClick: true,
	  closeBtnInside: false,
	  fixedContentPos: true,
	  mainClass: "mfp-img-mobile", // class to remove default margin from left and right side
	  image: {
		verticalFit: true
	  },
	  zoom: {
		enabled: true,
		duration: 300 // don"t foget to change the duration also in CSS
	  }
	});
</script>