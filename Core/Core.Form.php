<?php  //namespace Core\Database;
require_once(realpath(dirname(__FILE__))."/Core.Database.MySQL.php");

class Form
{
	public static function Instance()
	{
		return new Form();	
	}
	
	public function GenerateForm($id, $table_name, $hidden_fields, $except_fields)
	{
		$MySQL = new MySQL();
		
		$data = null;
		if ($id > 0)
		{
			$sql = 'SELECT * FROM '.$table_name.' WHERE id='. $id;
			$data = $MySQL->ExecQuery($sql);
		}

		$sql = 'SHOW COLUMNS FROM '.$table_name;
		$struct = $MySQL->ExecQuery($sql);

		$all_form = '';
		$all_form .= $this->GenerateStartForm($table_name, "frm_".$table_name, "", "POST");
		foreach ($struct as $key=> $value)
		{
			$field = $value["Field"];
			$type = $value["Type"];
			$null = $value["Null"];
			$extra = $value["Extra"];
			$default = ($data == null) ? $value["Default"] : $data[0][$field];

			$form = '';

			if (strpos(strtolower($hidden_fields), strtolower($field)) !== false)
			{
				$all_form .= $this->GenerateField($field, "hidden", $default, $null, 0);
				continue;
			}

			if (strpos(strtolower($except_fields), strtolower($field)) !== false)
			{
				continue;
			}

			if ($extra == "auto_increment")
			{
				$all_form .= $this->GenerateField($field, "label", $default, $null, 0);
				continue;
			}

			switch ($type)
			{
				case  (preg_match('/tinyint.*/', $type) ? true : false) :
					$form .= $this->GenerateField($field, "checkbox", $default, $null, 0);
					break;
				case  (preg_match('/bigint.*/', $type) ? true : false) :
					case  (preg_match('/int.*/', $type) ? true : false) :
					$form .= $this->GenerateField($field, "number", $default, $null, 0);
					break;
				case  (preg_match('/varchar.*/', $type) ? true : false) :
					$form .= $this->GenerateField($field, "text", $default, $null, 0);
					break;
				case  (preg_match('/text.*/', $type) ? true : false) :
					$form .= $this->GenerateField($field, "textarea", $default, $null, 0);
					break;
				case  (preg_match('/datetime.*/', $type) ? true : false) :
					$form .= $this->GenerateField($field, "text", $default, $null, 0);
					break;
			}

			$all_form .= $form;
		}
		
		$all_form .= $this->GenerateEndForm();
		echo $all_form;
	}

	public function GenerateStartForm($table_name, $form_name, $action, $method)
	{
		$method = ($method == "POST" ? "POST" : "GET");
		return '<form id="'.$form_name.'" name="'.$form_name.'" method="'.$method.'" action="'.$action.'?tbl='.$table_name.'" role="form" class="form-horizontal">';
	}

	public function GenerateEndForm()
	{
		$text = '';
		$text .= '<div class="form-group">';
		$text .= '<div class="col-sm-offset-2 col-sm-10">';
		$text .= '<input type="submit" class="btn btn-primary"> ';
		$text .= '<input type="button" class="btn btn-default" value="Cancel" onclick="history.back();">';
		$text .= '</div>';
		$text .= '</form>';
		return $text;
	}

	public function GenerateField($field_name, $type, $default_value, $null, $max_length)
	{
		$field_max_length = "";
		if (!empty($max_length))
			$field_max_length = 'maxlength="'.$max_length.'"';
		if ($default_value == "CURRENT_TIMESTAMP" || (preg_match('/DATE.*/', $field_name) ? true : false))
			$default_value = Date("Y-m-d H:i:s");
		$field_id = $field_name;
		$text = '';

		if ($type == "hidden")
		{
			$text .= '<input type="hidden" id="'.$field_id.'" name="'.$field_id.'" value="'.$default_value.'">';
			return $text;
		}
		
		$text .= '<div class="form-group">';
		$text .= '<div class="form-label"><label class="control-label col-sm-2" for="'.$field_id.'">'.$field_name.' '.($null == "NO" ? "*" : "").':</label></div>';
		$text .= '<div class="form-input col-sm-9">';
		switch ($type)
		{
			case "label":
				$text .= '<label>'. $default_value .'</label>';
				$text .= '<input type="hidden" id="'.$field_id.'" name="'.$field_id.'" value="'.$default_value.'">';
				break;
			case "readonly":
				$text .= '<input type="text" class="" id="'.$field_id.'" name="'.$field_id.'" value="'.$default_value.'" '.$field_max_length.' readonly>';
				break;
			case "textarea":
				$text .= '<textarea id="'.$field_id.'" name="'.$field_id.'" class="form-control">';
				$text .= $default_value;
				$text .= '</textarea>';
				break;
			case "checkbox":
				$text .= '<input type="checkbox" id="'.$field_id.'" name="'.$field_id.'" value="1" '.($default_value == 1 ? "checked" : "").'>';
				break;
			default:
				$text .= '<input type="text" class="form-control" id="'.$field_id.'" name="'.$field_id.'" value="'.$default_value.'" '.$field_max_length.'  placeholder="'.$default_value.'">';
				break;
		}
		$text .= '</div>';
		$text .= '</div>';
		return $text;
	}

}