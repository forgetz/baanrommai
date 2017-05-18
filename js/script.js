function ChangeCoverImage(imageurl)
{	
	$("#imgCover").attr("src", imageurl);
}

function SendMail()
{
	if ($("#txtName").val() == "")
	{
		$("#dvMessage").html("กรุณากรอกชื่อ");
		return;
	}
	if ($("#txtMobile").val() == "")
	{
		$("#dvMessage").html("กรุณากรอกเบอร์โทรศัพท์");
		return;
	}
	if ($("#txtSubject").val() == "")
	{
		$("#dvMessage").html("กรุณากรอกหัวข้อ");
		return;
	}
	if ($("#txtEmail").val() == "")
	{
		$("#dvMessage").html("กรุณากรอกอีเมล์");
		return;
	}
	if ($("#txtMessage").val() == "")
	{
		$("#dvMessage").val("กรุณากรอกข้อความ");
		return;
	}

	$("#btnSubmit").attr("disabled", "disabled");
	$.post("mail.php", { 
		name: $("#txtName").val()
		, mobile: $("#txtMobile").val() 
		, subject: $("#txtSubject").val()
		, email: $("#txtEmail").val()
		, message: $("#txtMessage").val()
	}, function (data) 
		{
			if (data == "1")
			{
				$("#dvMessage").html("ส่งข้อความเสร็จสิ้น");
				$("#txtName").val("");
				$("#txtMobile").val("");
				$("#txtSubject").val("");
				$("#txtEmail").val("");
				$("#txtMessage").val("");
			}
			else if (data == "0")
			{
				$("#dvMessage").html("ไม่สามารถส่งข้อความได้");
			}
			else
			{
				$("#dvMessage").html("ไม่สามารถส่งข้อความได้ กรุณากรอกข้อความให้ถูกต้อง");
			}
			$("#btnSubmit").removeAttr("disabled");
	});
}