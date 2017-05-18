<?php
	require_once ("master.php");
	$MasterPage = new MasterPage();
	$MasterPage->WriteHeader(null);

	echo 'index';

	$MasterPage->WriteFooter();