<?php
	require_once(realpath(dirname(__FILE__))."/../Core/Core.Database.MySQL.php");
	require_once(realpath(dirname(__FILE__))."/../Core/Core.Http.php");
	require_once(realpath(dirname(__FILE__))."/../Core/Core.TableList.php");
	require_once(realpath(dirname(__FILE__))."/master.php");
	
	$TableList = new TableList();
	$MasterPage = new MasterPage();
	$table_name = Http::GetHttpGet("tbl");
	$MasterPage->WriteHeader($table_name);
	echo $TableList->GetList($table_name, true, "TEXT");
	$MasterPage->WriteFooter();