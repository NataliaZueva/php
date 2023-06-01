<?php

namespace application\models;

use application\core\Model;

class Main extends Model
{
	public function getNews()
	{
		$result = $this->db->row('SELECT subject, type, location, datetime FROM task_list');
		return $result;
	}
}
