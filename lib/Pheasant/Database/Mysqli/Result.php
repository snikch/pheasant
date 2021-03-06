<?php

namespace Pheasant\Database\Mysqli;

class Result implements \Countable
{
	protected $_link;

	public function __construct($connection)
	{
		$this->_link = $connection;
	}

	public function affectedRows()
	{
		return $this->_link->affected_rows;
	}

	public function count()
	{
		return $this->affectedRows();
	}

	public function lastInsertId()
	{
		return $this->_link->insert_id;
	}
}
