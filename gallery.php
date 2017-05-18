<?php
	require_once("master.php");
	$MasterPage = new MasterPage();
	$MasterPage->WriteHeader(basename(__FILE__), "images/gallery1-1.jpg");
?>

<section class="page">

	<div class="row">
		<div class="col-md-4 col-xs-12">
			<div class="text-content">
				<ul style="list-style: none;">
					<li><a href="javascript:;" onclick="ChangeCoverImage('images/gallery1-1.jpg');">2537 บ้านสวนริมคลองบางมด</a></li>
					<li><a href="javascript:;" onclick="ChangeCoverImage('images/gallery1-2.jpg');">2538 บ้านสวนริมคลองกรุงเทพกรีฑา</a></li>
					<li><a href="javascript:;" onclick="ChangeCoverImage('images/gallery1-3.jpg');">2538 บ้านสวนริมคลองเจ้าพระยา-บางปะอิน</a></li>
					<li><a href="javascript:;" onclick="ChangeCoverImage('images/gallery1-4.jpg');">2552 บ้านร่มไม้ชายคลอง พระราม 2 ซอย 33</a></li>
					<li><a href="javascript:;" onclick="ChangeCoverImage('images/gallery1-5.jpg');">2556 บ้านเดียวกัน 1 ซอยอนามัยงามเจริญ 25</a></li>
					<li><a href="javascript:;" onclick="ChangeCoverImage('images/gallery1-6.jpg');">2556 บ้านเดียวกัน 2 ซอยอนามัยงามเจริญ 25</a></li>
					<li><a href="javascript:;" onclick="ChangeCoverImage('images/gallery1-7.jpg');">2557 บ้านร่มไม้ชายคลอง 2 พระราม 2 ท่าข้าม</a></li>
				</ul>
			</div>
		</div>

		<div class="col-md-8 col-xs-12">
			<div class="text-content">
				บ้านร่มไม้ชายคลอง เป็นหนึ่งในผลงานและบริหารงานโดยบริษัท แปลน แอสเส็ท จำกัด ในกลุ่มบริษัท แปลน
				ที่มุ่งพัฒนาโครงการที่เน้นคุณภาพชีวิตที่ดีของผู้อยู่อาศัยที่สร้างความร่มรื่นในการอยู่อาศัย
				เป็นบ้านที่มีเอกลักษณ์ในการออกแบบและอยู่สบาย
				นอกเหนือจากนั้น ทางกลุ่มยังตระหนักถึงความสำคัญของ  ครอบครัว  
				ซึ่งเป็นหน่วยเล็กที่สุดที่จะทำให้สังคมเข้มแข็ง เป็นการอยู่อาศัยร่วมกันอย่างอยู่เย็นเป็นสุข เอื้เฟื้อ แบ่งปัน
				แม้กระทั่งกลุ่มเพื่อนรัก หรือกลุ่มคนทำงานที่เดียวกัน หรือกลุ่มคอคนเดียวกัน ต้องการอยู่ร่วมกันอย่างอบอุ่น
				ได้มีทางเลือกของการอยู่ร่วมกันอย่างตรงใจได้มากที่สุด
				โจทย์เหล่านี้ได้ถูกตอบสนองโดย  โครงการบ้านเดียวกัน  ที่เป็นการร่วมดำเนินการโดยบริษัท แปลน แอสเส็ท
				อาศรมสถาปนิกเพื่อชุมชนและสิ่งแวดล้อม และสถาบันศิลป์
			</div>
		</div>
	</div>

</section>

<br><br>

<?php
	$MasterPage->WriteFooter();
?>