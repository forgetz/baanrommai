<?php
	require_once("master.php");
	$MasterPage = new MasterPage();
	$MasterPage->WriteHeader(basename(__FILE__), "images/contact.jpg");
?>

<section class="page">

	<div class="row">
		<div class="col-md-5 col-xs-12">
			<div class="text-header">
				ที่อยู่
			</div>
			<div class="text-content" style="margin-top: 8px;">
				๑/๓๔ อนามัยงามเจริญ ๒๖ ถนนพระราม ๒ <br>
				แขวงท่าข้าม เขตบางขุนเทียน กรุงเทพฯ ๑๐๑๕๐ <br>
				๐๒ ๘๙๖ ๗๐๕๐-๑ <br>
				๐๘๓ ๔๔๙ ๘๐๓๕ <br>
				<a target="_blank" href="http://www.facebook.com/TShirtAdvance">http://www.facebook.com/TShirtAdvance</a> <br>
			</div>

			<div style="margin-top: 8px;">
				<a href="#"><img src="images/btn_findmap.png"></a>
			</div>
		</div>

		<div class="col-md-7 col-xs-12">
			<div class="text-header">
				กรอกข้อมูลเพื่อติดต่อขอรับข้อมูล
			</div>
			<div class="text-content" style="margin-top: 8px;">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						ชื่อ-นามสกุล
						<input type="text" id="txtName" name="txtName" style="width: 100%;">
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12">
						เบอร์ติดต่อกลับ
						<input type="text" id="txtMobile" name="txtMobile" style="width: 100%;">
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						เรื่อง
						<input type="text" id="txtSubject" name="txtSubject" style="width: 100%;">
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						อีเมลล์
						<input type="text" id="txtEmail" name="txtEmail" style="width: 100%;">
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						ข้อความ
						<textarea id="txtMessage" name="txtMessage" style="width: 100%; height: 80px; resize: none;"></textarea>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 col-xs-6"><input type="button" class="btn btn-default" id="btnSubmit" value="Send" onclick="SendMail(); "></div>
					<div class="col-md-6 col-xs-6 text-right">yellowsea.th@gmail.com</div>
				</div>

				<div class="row">
					<div class="col-md-12 col-xs-12 text-center">
						<div id="dvMessage" class="alert-message"></div>
					</div>
				</div>
				
			</div>
		</div>
	</div>

</section>

<br><br>

<?php
	$MasterPage->WriteFooter();
?>