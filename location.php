<?php
	require_once("master.php");
	$MasterPage = new MasterPage();
	$MasterPage->WriteHeader(basename(__FILE__), "images/location.jpg");
?>

<section class="page">

	<div class="row">
		<div class="col-md-12 text-center">
			<div class="text-content">
				ห่างจากพระราม 2 เข้าซอยท่าข้าม 7 มา 1.7 กม. ใกล้จุดขึ้นลงทางด่วนเฉลิมนคร เข้าสู่ศูนย์กลางธุรกิจย่านสาธร สีลม (CBD) 
				เพียง 30 นาที และยังเดินทางเข้าสู่ใจกลางเมืองได้หลายเส้นทาง มีสะพานข้ามแม่น้ำเจ้าพระยา 5 สะพาน คือ สะพานสาธร สะพานกรุงเทพ 
				สะพานพระราม 3 (กรุงเทพ) สะพานพระราม 9 (สะพานแขวน) และสะพานวงแหวนอุตสาหกรรม (เชื่อมถนนพระราม 3 และถนนสุขสวัสดิ์)
			<div>
		</div>
	</div>

	<br><br>

	<div class="row">
		<div class="col-md-3 col-xs-12">
			<a class="image-popup" href="images/img_map.png">
				<img class="img-responsive" src="images/img_map.png">
			</a>
		</div>
		<div class="col-md-9 col-xs-12 text-left">
			<div class="text-content">
				<img src="images/img_easy.png">
				<ul class="content-list">
					<li>ทำเลที่ตั้งของโครงการอยู่ที่อนามัยงามเจริญ 26 ถนนพระราม 2 โดยเข้ามาทางซอยท่าข้าม 7 เพียง 1.5 กม. หลีกเลี่ยงการสัญจรของรถใหญ่บนถนนพระราม 2 ได้เป็นอย่างดี</li>
					<li>สามารถเข้าสู่ศูนย์กลางธุรกิจ ย่าน สีลม-สาทร พระราม 3 ในเวลาอันสั้น เพราะสามารถเชื่อมต่อกับทางด่วนพิเศษเพื่อมุ่งสู่ภาคเหนือและภาคตะวันออก ส่วนภาคใต้และภาคตะวันตกนั้นสามารถเชื่อมต่อเส้นเพชรเกษมได้อย่างง่ายดาย สะพานสาทรเชื่อมต่อรถไฟฟ้า BRT และสะพานวงแหวนอุตสาหกรรมได้หลายสถานที่ ฉะนั้นความสามารถในการเข้าถึงโครงการพร้อมระบบคมนาคมจึงไม่เป็นปัญหา</li>
				</ul>
			</div>
		</div>
	</div>

	<br>

	<div class="row">
		<div class="col-md-3 col-xs-12">
			<a class="image-popup" href="images/img_location2.png">
				<img class="img-responsive" src="images/img_location2.png">
			</a>
		</div>

		<div class="col-md-9 col-xs-12 text-left">
			<div class="text-content">
				<img src="images/img_comfort.png">
				<p>ทำเลที่ตั้งของโครงการ ประกอบไปด้วยความพร้อมในด้านสาธารณูปโภคและสาธารณูปการ ซึ่งอยู่ไม่ไกลจากที่ตั้งโครงการ ประกอบด้วย</p>
				<ul class="content-list">
					<li>สถานศึกษาทั้งเอกชนและรัฐบาล ตั้งแต่ระดับอนุบาลจนถึงมหาวิทยาลัย ฯลฯ</li>
					<li>สถานที่ราชการ สน.ท่าข้าม, สำนักงานขนส่ง, สำนักงานเขตบางขุนเทียน ฯลฯ</li>
					<li>สถาบันการเงิน มีครบทุกสถาบันการเงิน แต่ละสถาบันอยู่ห่างกันเพียงไม่กี่นาที</li>
					<li>ห้างสรรพสินค้า เซ็นทรัลพระราม 2, Home Pro, Big C ฯลฯ</li>
					<li>สถานพยาบาล รพ.บางประกอกอินเตอร์ 9, รพ.บางมด</li>
				</ul>
			</div>
		</div>
		
	</div>

</section>

<br><br>


<?php
	$MasterPage->WriteFooter();
?>


<script>
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
