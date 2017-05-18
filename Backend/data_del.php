<?php
	require_once(realpath(dirname(__FILE__))."/../Core/Core.Form.php");
	require_once(realpath(dirname(__FILE__))."/../Core/Core.Database.MySQL.php");
	require_once(realpath(dirname(__FILE__))."/../Core/Core.Http.php");
	require_once(realpath(dirname(__FILE__))."/../Core/Core.SubmitForm.php");
	require_once(realpath(dirname(__FILE__))."/master.php");

	$SubmitForm = new SubmitForm(); 

	$table_name = Http::GetHttpGet("tbl");
	$get_id = Http::GetHttpGet("id");
	
	if ($get_id < 1)
	{
		echo '<script>window.location="data_list.php?tbl='.$table_name.'"</script>';
		Exit();
	}

	$MySQL = new MySQL();
	$sql = $SubmitForm->GenerateUpdateSQL($table_name, $fields_value=array("ID"=>$get_id, "STATUS"=>0), "ID");
	$MySQL->ExecNonQuery($sql);
	echo '<script>window.location="data_list.php?tbl='.$table_name.'"</script>';