<?php
	require_once(realpath(dirname(__FILE__))."/../Core/Core.Database.MySQL.php");
	require_once(realpath(dirname(__FILE__))."/master.php");
	require_once(realpath(dirname(__FILE__))."/master.php");
	
	$MasterPage = new MasterPage();
	$MasterPage->WriteHeader();
	$MasterPage->WriteMenu(basename(__FILE__));

	echo Get("content", true, "");
?>



<?php
	$MasterPage->WriteFooter();

	function Get($table_name, $status, $hidden_fields)
	{
		$MySQL = new MySQL();

		$sql = 'SHOW COLUMNS FROM '.$table_name;
		$struct = $MySQL->ExecQuery($sql);

		$html = '';
		$html .= '<table class="table table-striped table-hover table-responsive">';
		$html .= '<tr>';
		$show_fields = array();
		foreach ($struct as $key=> $value)
		{
			$field = $value["Field"];
			$extra = $value["Extra"];

			if (strpos(strtolower($hidden_fields), strtolower($field)) !== false)
				continue;

			array_push($show_fields, $field);
			$html .= '<th>'.$field.'</th>';
		}
		$html .= '<th>TOOLS [ <a href="data_edit.php?tbl='.$table_name.'">Add</a> ]</th>';
		$html .= '</tr>';
		

		$fields = implode(",", $show_fields);

		$sql = 'SELECT '.$fields.' FROM '. $table_name .' WHERE '. ($status ? " STATUS = 1 OR STATUS IS NULL" : " STATUS = 1");
		$result = $MySQL->ExecQuery($sql);

		foreach ($result as $key=> $value)
		{
			$html .= '<tr>';
			$id = $value[$show_fields[0]];
			foreach ($value as $sub_key=> $sub_value)
			{
				$html .= '<td>'.$sub_value.'</td>';
			}
			$html .= '<td>';
			$html .= ' <a href="data_edit.php?tbl='.$table_name.'&id='.$id.'">Edit</a>';
			$html .= ' <a href="data_edit.php?tbl='.$table_name.'&id='.$id.'&mode=del">Delete</a>';
			$html .= '</td>';
			$html .= '</tr>';
		}
		$html .= '</table>';

		return $html;
	}